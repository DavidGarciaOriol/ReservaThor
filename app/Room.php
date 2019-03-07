<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Room extends Model
{
    protected $fillable = ['user_id','title', 'slug', 'description', 'type_id', 'address', 'prize', 'portrait'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function Type()
    {
        return $this->belongsTo(Type::class);
    }
    public function Reservation(){
        return $this->hasMany(Reservation::class);
    }
}
