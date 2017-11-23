<?php

namespace App\Console\Commands;

use App\BillingAddress;
use App\CustomerItem;
use App\CustomerOrder;
use App\ShippingAddress;
use Illuminate\Console\Command;

class importInvoices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:invoices {url}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $url = $this->argument('url');
        $this->info('Initializing curl...');
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $this->info('Sending request to: ' . $url);
        $response = json_decode(curl_exec($curl), true);

        foreach ($response as $order) {
            $this->info("Updating customer order: ".$order['id']);

            if ($order['status'] != 'processing') continue;
            $customerOrder = CustomerOrder::findOrNew($order['id']);
            $customerOrder->fill($order);
            $customerOrder->save();

            if (isset($order['shipping_address']) && is_array($order['shipping_address'])){
                $shipping_address = ShippingAddress::findOrNew($order['shipping_address']['id']);
                $shipping_address->fill($order['shipping_address']);
                $shipping_address->save();
            }



            if (isset($order['billing_address']) && is_array($order['billing_address'])){
                $billing_address = BillingAddress::findOrNew($order['billing_address']['id']);
                $billing_address->fill($order['billing_address']);
                $billing_address->save();
            }

            foreach ($order['items'] as $item){
                $customerItem = CustomerItem::findOrNew($item['id']);
                $customerItem->fill($item);
                $customerItem->save();
            }
        }

        $this->info("CustomerOrders imported!");
    }
}
