<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KonsultasiClient extends Model
{
    protected $table = "pertanyaan";

    protected $fillable = ['id_gejala','jawaban'];
}
