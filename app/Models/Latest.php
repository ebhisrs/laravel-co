<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Latest extends Model
{
    use HasFactory;
    protected $table= 'latests';
    public $primarykey='id';
    public $timestamps = true;
}
