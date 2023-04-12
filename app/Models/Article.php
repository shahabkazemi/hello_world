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

    protected static function boot(){
        parent::boot();
        //define global scope
        static::addGlobalScope('status', function($builder){
            $builder->where('status', 1);
        });
    }

    public function scopeStatus($builder){
        $builder->where('status', 0);
    }

    //Accessore
    //first_name => getFirstNameAttribute
    public function getTitleAttribute($value){
        return strtoupper($value);
    }

    //Mutator
    public function setTitleAttribute($value){
        $this->attributes['Title'] = strtolower($value);
    }

}
