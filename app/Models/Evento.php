<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'capacidade',
        'palestrante',
        'tipo',
        'video_divulgacao',
        'datainicial',
        'horainicial',
        'datafinal',
        'horafinal',
    ];
}
