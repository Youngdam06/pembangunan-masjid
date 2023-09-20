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

    public function pemasukan()
    {
        return $this->hasMany(Pemasukan::class, 'tabungan_id', 'id');
    }
}
