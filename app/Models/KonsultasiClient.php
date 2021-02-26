<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KonsultasiClient extends Model
{
    protected $table = "pertanyaan";

    public $incrementing = false;

    protected $fillable = ['id','jawaban','id_gejala'];
}
