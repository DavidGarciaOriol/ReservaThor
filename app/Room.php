<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Room extends Model
{
    protected $fillable = ['user_id', 'owner_id','title', 'slug', 'description', 'type', 'address'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function Owner()
    {
        return $this->belongsTo(Owner::class);
    }
    public function Type()
    {
        return $this->belongsToMany(Type::class);
    }
}
