<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movement extends Model
{
    /** @use HasFactory<\Database\Factories\MovementFactory> */
    use HasFactory;

    use SoftDeletes;

    use HasUuids;

    protected $fillable = [
        'uuid',
        'movement_type',
        'movement_date',
        'description',
    ];

    protected $casts = [
        'movement_date' => 'datetime',
    ];

    /**
    * @return array<string>
    */
    public function uniqueIds(): array
    {
        return ['uuid'];
    }
}
