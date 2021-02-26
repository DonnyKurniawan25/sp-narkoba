<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
//    public $timestamps=false;

	public $incrementing = false;
	protected $table="soal";
	protected $fillable=['id', 'soal', 'id_gejala'];

	public function gejala(){
		return $this->belongsTo('App\Models\Gejala','id_gejala');
	}

}
