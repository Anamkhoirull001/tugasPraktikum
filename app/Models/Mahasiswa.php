<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    /**
     * The primary key associated with the table.
     *
     * @var string
     * @var bool
     * @var array
     */
    protected $primaryKey = 'nim';  //deklarasi pimarykey yaitu nim
    public $incrementing = false;    // mematikan auto increment
    protected $fillable = [
        'nim',
        'nama',
        'umur',
        'alamat',
        'kota',
        'kelas',
        'jurusan'
    ];
}
