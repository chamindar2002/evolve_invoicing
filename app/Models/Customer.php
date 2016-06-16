<?php

namespace EvolveInvoicing\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    protected $table = 'customers';

    protected $fillable = [
                            'name',
                            'email',
                            'phone',
                            'country_id',
                            'web',
                            'address_1',
                            'address_2',
                            'city',
                            'post_code',
                            'mobile',
                            'fax',
                            'comments'
                            ];

    public static function rules(){

        return array(

        );

    }




}
