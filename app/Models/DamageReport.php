<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DamageReport extends Model
{
    protected $fillable = [
        'alat_id',
        'user_id',
        'deskripsi_kerusakan',
        'tanggal_kerusakan',
        'lokasi',
        'prioritas',
        'status',
        'catatan'
    ];

    public function equipment()
    {
        return $this->belongsTo(\App\Models\Equipment::class, 'alat_id');
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
