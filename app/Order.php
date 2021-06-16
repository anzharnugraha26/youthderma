<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['invoice','user_id','no_resi','status_order_id','metode_pembayaran',
    'ongkir','biaya_cod','subtotal','biaya_cod','notes','phone', 'bukti_bayar'];
}
