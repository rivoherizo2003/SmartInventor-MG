<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected string $uuid;

    protected $fillable = [
        'code',
        'bnf_code',
        'bnf_name',
        'items',
        'nic',
        'price',
        'quantity',
        'discr',
        'notice',
    ];
}
