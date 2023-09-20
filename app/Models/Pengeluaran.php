<?php

namespace App\Models;

use App\Models\Pemasukan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengeluaran extends Model
{
  use HasFactory;
  protected $table = "pengeluarans";
  protected $primarykey = "id";
  protected $fillable = [
    'keterangan',
    'tanggal',
    'nominal',
  ];
  public function pemasukan()
  {
    return $this->belongsToMany(Pemasukan::class, 'pemasukan_pengeluaran', 'pemasukan_id', 'pengeluaran_id');
  }
}
