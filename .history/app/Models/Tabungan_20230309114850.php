<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    use HasFactory;
    protected $table = 'tabungan';
    protected $fillable = [
        'uang', 'tanggal'
    ];

    public function tabungan()
    {
        return $this->belongsTo(Pemasukan::class, 'tabungan_id');
    }
}
