<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostNews extends Model
{
    use HasFactory;
    protected $fillable=['title','slug','description','deadline','biddocument' ,'user_id' , 'category_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function userpaymentinfo()
    {
        return $this->hasMany(userpaymentinfo::class);
    }
}
