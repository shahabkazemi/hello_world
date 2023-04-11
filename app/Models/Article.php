<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;
    // protected $table = 'my_table_name';
    // public $timestamps = false;
    protected $fillable = ['Title', 'Description'];
    //protected $guarded = ['Title'];
}
