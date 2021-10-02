<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BentukKegiatan extends Model
{
    use HasFactory;

    protected $table = "bentuk_kegiatan";

    public function kerjasamas()
    {
        return $this->morphByMany(Kerjasama::class,'bentuk');
    }
}
