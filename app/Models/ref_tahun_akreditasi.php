<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ref_tahun_akreditasi extends Model
{
    use HasFactory;

    protected $table = 'ref_tahun_akreditasis';

   public function ref_provinsi(){
        return $this->hasMany(ref_provinsi::class);
}
