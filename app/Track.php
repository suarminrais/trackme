<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Track extends Model
{
    protected $table = 'track';
    protected $fillable = [
        'user_id', 'lat', 'long'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}