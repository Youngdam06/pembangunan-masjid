<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;
    protected $fillable = [
        'keterangan',
        'tanggal', 
        'pemasukan', 
        'pengeluaran', 
        'total',
    ];
    public function pemasukan()
    {
    
        return $this->hasOne('App\Room');
    }
}
