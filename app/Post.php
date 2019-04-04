<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
 
// in this model you can adjust the tables, for example the names:
    // Table Name
    protected $table = 'posts';
    // Primary key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

 }
