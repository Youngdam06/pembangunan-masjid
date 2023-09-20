<?php

namespace App\Models;

use App\Models\Pengeluaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemasukan extends Model
{
   use HasFactory;
   protected $table = "pemasukans";
   protected $primarykey = "id";
   protected $fillable = [
      'keterangan',
      'tanggal',
      'saldo',
   ];

   public function pengeluaran()
   {
      return $this->belongsToMany(Pemasukan::class, 'saldo', 'pengeluaran_id', 'pemasukan_id');
   }
}
