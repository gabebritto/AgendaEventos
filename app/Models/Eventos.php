<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;

    static $rules=[
        'title'=>'required',
        'start'=>'required',
        'end'=>'required',
        'local'=>'required',
        'status'=>'required'
    ];

    protected $fillable=['title', 'observacao','local','start','end', 'status'];
}
