<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class userpaymentinfo extends Model
{
    use HasFactory;
    public function User()
    {
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
    public function PostNews()
    {
        return $this->belongsTo(PostNews::class, 'post_id ' , 'id');
    }
}
