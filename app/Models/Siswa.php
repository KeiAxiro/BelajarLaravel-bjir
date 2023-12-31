<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model{

    protected $table = 'siswa';

    protected $fillable = [
            'nama',
            'umur',
            'alamat',
            'email',
        ];

    protected $primaryKey = 'id';

    protected $keyType = 'integer';

    protected $autoIncrement = true;
}
