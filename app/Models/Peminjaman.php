<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $primaryKey = 'peminjaman_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'peminjaman_id',
        'user_id',
        'peminjaman_pinjam',
        'peminjaman_vent',
        'peminjaman_status',
        'pemajaman_nite',
        'peminjaman_denda',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function peminjamanDetails()
    {
        return $this->hasMany(PeminjamanDetail::class, 'peminjaman_id', 'peminjaman_id');
    }
}
