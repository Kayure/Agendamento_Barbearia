<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evento extends Model
{

    use SoftDeletes;
    protected $table = 'eventos';

    protected $fillable = ['title', 'start','end','color','description',];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
