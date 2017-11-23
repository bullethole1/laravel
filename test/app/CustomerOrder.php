<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'increment_id',
        'customer_id',
        'customer_email',
        'status',
        'marking',
        'grand_total',
        'subtotal',
        'tax_amount',
        'billing_address_id',
        'shipping_address_id',
        'shipping_method',
        'shipping_amount',
        'shipping_tax_amount',
        'shipping_description',
        'created_at',
        'updated_at'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function billingAddress()
    {
        return $this->hasOne(BillingAddress::class);
    }

    public function shippingAddress()
    {
        return $this->hasOne(ShippingAddress::class);
    }

    public function items()
    {
        return $this->hasMany(CustomerItem::class);
    }
}
