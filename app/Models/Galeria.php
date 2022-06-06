<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Galeria extends Pivot
{
    protected $table = 'galeria';

    public $timestamps = false;

    protected $guarded = [];
}