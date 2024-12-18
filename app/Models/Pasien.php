<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pasien extends Model
{
    use HasFactory;
    protected $guarded = []; //properti, guarded digunakan agar kita bisa menyimpan data 
    //pada banyak kolom secara bersamaan dengan array atau objek
     /**
     * Get the user that owns the Daftar
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function daftar(): HasMany
    {
        return $this->hasMany(Daftar::class);
    }


}
