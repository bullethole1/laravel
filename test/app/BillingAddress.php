<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\BillingAddress
 *
 * @property-read \App\Customer $customer
 * @property-read \App\CustomerOrder $customerOrder
 * @mixin \Eloquent
 * @property int $id
 * @property int|null $customer_id
 * @property int|null $customer_address_id
 * @property string|null $email
 * @property string|null $firstname
 * @property string|null $lastname
 * @property string|null $postcode
 * @property string|null $street
 * @property string|null $city
 * @property string|null $telephone
 * @property string|null $country_id
 * @property string|null $address_type
 * @property string|null $company
 * @property string|null $country
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillingAddress whereAddressType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillingAddress whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillingAddress whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillingAddress whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillingAddress whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillingAddress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillingAddress whereCustomerAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillingAddress whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillingAddress whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillingAddress whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillingAddress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillingAddress whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillingAddress wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillingAddress whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillingAddress whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BillingAddress whereUpdatedAt($value)
 */
class BillingAddress extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'customer_id',
        'customer_address_id',
        'email',
        'firstname',
        'lastname',
        'postcode',
        'street',
        'city',
        'telephone',
        'country_id',
        'address_type',
        'company',
        'country',
        'created_at',
        'updated_at'
    ];

    public function customerOrder()
    {
        return $this->belongsTo(CustomerOrder::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
