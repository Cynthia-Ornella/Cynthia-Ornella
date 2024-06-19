<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $keyType = 'string';

    public $incrementing = false;

    public static function boot() {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    protected $fillable = [
        "num_tel",
        "amount",
        "date",
        "status",
        "status_payment",
        "payment_reference",
        "identifier"
    ];

    protected $status = [
        "consumed",
        "initialized",
        "in_progress",
    ];

    protected $payment_status = [
        "paid",
        "unpaid"
    ];
}
