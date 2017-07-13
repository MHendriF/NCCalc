<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $table = 'kritik_saran';

    protected $fillable = [
        'isi_pesan',
    ];
}
