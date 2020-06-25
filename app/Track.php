<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Track extends Model
{
    protected $table = 'track';
    
    protected $fillable = [
        'lat', 'long'
    ];

    protected $hidden = [
        'user_id',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}