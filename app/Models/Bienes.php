<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bienes extends Model
{
    use HasFactory;

    //protected $primaryKey = 'biene_id';

    public $incrementing = false;

    protected $fillable = ['id', 'item','descripcion','clasi_bien','marca','modelo','serial','color','costo_bs','estado','responsable','piso','area'];



}
