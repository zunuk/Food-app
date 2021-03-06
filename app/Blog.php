<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'menu_id'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
