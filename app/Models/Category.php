<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'tcategories';

    public function children() {
        return $this->hasMany('App\Models\Category','fparent_id', 'id');
    }
}