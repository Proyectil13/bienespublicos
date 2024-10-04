<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bienes extends Model
{
    use HasFactory;

    //protected $primaryKey = 'biene_id';

    public $incrementing = false;

    protected $fillable = ['id', 'item'];



}
