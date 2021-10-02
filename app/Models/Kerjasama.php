<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerjasama extends Model
{
    use HasFactory;
    protected $table = 'kerjasama';

    public function penggiat_kerjasamas()
    {
        return $this->hasMany(PenggiatKerjasama::class);
    }

    public function bentukKegiatans()
    {
        return $this->morphToMany(BentukKegiatan::class,'bentuk');
    }
}
