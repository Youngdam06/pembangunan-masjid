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

    public function previous()
    {
        return static::where('id', '<', $this->id)->orderBy('id', 'desc')->first();
    }
}
