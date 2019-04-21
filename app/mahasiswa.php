<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{ 
    protected $fillable = [
    	'NIM', 'NamaMHS', 'Prodi'
    ];
    public $timestamps = false;
}
