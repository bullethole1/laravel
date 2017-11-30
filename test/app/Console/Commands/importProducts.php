<?php

namespace App\Console\Commands;

use App\Group;
use App\GroupPrice;
use App\IsInStock;
use App\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class importProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'save:products {url} {file_name}';

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
        $file = $this->argument('file_name');

        if($file == null){
            $this->info('Initializing curl...');
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

            $this->info('Sending request to: ' .$url);
            $response = curl_exec($curl);

            Storage::put($file, $response);
            $this->info('File stored at: ' .$file);
        }

        $storage = Storage::get('products.json');
        $response = json_decode($storage,true);
        foreach ($response['groups'] as $groupItem){
            $group = Group::findOrNew($groupItem['customer_group_id']);
            $group->fill($groupItem)->save();
        }

        foreach ($response['products'] as $productItem){
            $this->info("Importing/Updating products: ".$productItem['entity_id']);

            $product = Product::findOrNew($productItem['entity_id']);
            $product->fill($productItem);
            $product->fill($productItem['stock_item']);
            $product->save();

            GroupPrice::where('product_id', '=', $productItem['entity_id'])->delete();
            foreach ($productItem['group_prices'] as $group_prices){
                $group_prices['product_id'] = $productItem['entity_id'];
                $group_price = GroupPrice::create($group_prices);
            }
        }

    }
}
