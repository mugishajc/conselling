<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    /**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = [
    'client_id','client_name','client_profile','title','description','expert','status','photo' ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }

}
