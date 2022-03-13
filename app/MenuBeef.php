<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuBeef extends Model
{
    protected $table = 'menu_beef';
    
    protected $fillable = [
        'user_id',
       'beef_minced',
       'beef_shoulder',
       'beef_boston_butt',
       'beef_ribulose',
       'beef_sirloin',
       'beef_fillet',
       'beef_ribs',
       'beef_thigh',
       'beef_rump',
       'beef_shin',
       'beef_neck'
    ];
    
    public function menu(){
        return $this->belongsTo('App\Menu');
    }
}
