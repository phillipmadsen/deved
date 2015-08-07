<?php namespace Grace\Models;


use Grace\Interfaces\ModelInterface as ModelInterface;
 
use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'first_name', 'last_name'];
    
    public function user()
    {
        return $this->belongsTo('Grace\Models\User');
    }

 

    public function getCreatedAtAttribute($date)    {

        return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }

    public function getUpdatedAtAttribute($date) {

        return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }
}
