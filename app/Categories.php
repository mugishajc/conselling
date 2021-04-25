<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    /**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = [
    'user_id','doneby','category_name','description' ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }

}
