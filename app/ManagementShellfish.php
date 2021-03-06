<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ManagementShellfish extends Model
{
    protected $table = 'management_shellfish';
    
    protected $fillable = [
        'asari',
        'oyster',
        'shijimi',
        'hamaguri',
        'scallop',
        'hard_clam'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
