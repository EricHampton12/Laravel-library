<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model{
    protected $guarded = [];

    public function path(){
        return route('article.show', $this);
    }

    public function go (){

    }
}