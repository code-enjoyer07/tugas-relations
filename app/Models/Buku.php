<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $primaryKey = 'buku_id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'buku_penulis_id', 'penulis_id');
    }

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class, 'buku_penerbit_id', 'penerbit_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'buku_kategori_id', 'kategori_id');
    }

    public function rak()
    {
        return $this->belongsTo(Rak::class, 'buku_rak_id', 'rak_id');
    }
}
