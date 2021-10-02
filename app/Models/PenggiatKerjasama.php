<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenggiatKerjasama extends Model
{
    use HasFactory;

    protected $table = "penggiat_kerjasama";

    public function kerjasama()
    {
        return $this->belongsTo(Kerjasama::class);
    }
}
