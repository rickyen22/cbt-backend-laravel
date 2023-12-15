<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class soal extends Model
{
    use HasFactory;

    protected $fillable = [
        'pertanyaan',
        'kategori',
        'jawaban_a',
        'jawaban_b',
        'jawaban_c',
        'jawaban_d',
        'kunci'
    ];
}
