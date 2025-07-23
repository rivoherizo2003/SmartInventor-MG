<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MovementDetails extends Model
{
    /** @use HasFactory<\Database\Factories\MovementDetailsFactory> */
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'movement_id',
        'product_id',
        'quantity',
        'designation_product',
    ];
}
