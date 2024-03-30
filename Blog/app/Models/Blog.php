<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'avatar',
    ];

    public function avatar_path(){
        if (str_contains($this->avatar,'https')){
            return  $this->avatar;
        }
        $fileUrl = Storage::disk('local')->url('blog/' .$this->avatar);
        if (file_exists('storage/blog/' .$this->avatar)) {
            return $fileUrl;
        }
        return url('img/default.png');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class,'blog_id','id');
    }

}
