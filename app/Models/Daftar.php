<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Nicolaslopezj\Searchable\SearchableTrait;

class Daftar extends Model
{
    use SearchableTrait;
    use HasFactory;
    protected $guarded = [];

    protected $searchable = [
        'columns' => [
            'pasiens.nama' => 1,
            'pasiens.no_pasien' => 10,
            'polis.nama' => 2,
        ],
        'joins' => [
            'pasiens' => ['pasiens.id', 'daftars.pasien_id'],
            'polis' => ['polis.id','daftars.poli_id'],
        ],
    ];
    /**
     * Get the user that owns the Daftar
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pasien(): BelongsTo
    {
        return $this->belongsTo(Pasien::class)->withDefault();
    }
    public function poli(): BelongsTo
    {
        return $this->belongsTo(Poli::class)->withDefault();
    }
}

