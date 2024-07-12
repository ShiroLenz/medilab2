<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrasi extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    /**
     * Get the Pasien that owns the Administrasi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Pasien()
    {
        return $this->belongsTo('\App\Models\Pasien')->withDefault();
    }

    /**
     * Get the Dokter that owns the Administrasi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Dokter()
    {
        return $this->belongsTo('App\Models\Dokter')->withDefault();
    }

    // public function pasien()
    // {
    //     return $this->belongsTo('\App\Models\Pasien')->withDefault();
    // }

    // public function dokter()
    // {
    //     return $this->belongsTo('\App\Models\Dokter')->withDefault();
    // }

    protected $dates = ['tanggal'];
}
