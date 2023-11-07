<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'title','description','image'];
    protected static $blog, $imageFile, $imageName, $imageDirectory, $imageUrl;

    public static function createBlog($request)
    {
        self::$imageFile =$request->file('image');
        if (self::$imageFile)
        {
            self::$imageName         = self::$imageFile->getClientOriginalName();
            self::$imageDirectory    ='backend/uploaded-files/blogs/';
            self::$imageFile-> move(self::$imageDirectory, self::$imageName);
            self::$imageUrl          = self::$imageDirectory.self::$imageName;
        }
        self::$blog                   = new Blog();
        self::$blog->user_id          = auth()->id();
        self::$blog->title            = $request->title;
        self::$blog->description      = $request->description;
        Self::$blog->image            = self::$imageUrl;
        self::$blog->save();
    }

    public static function updateBlog($request, $id)
    {
        self::$blog = Blog::find($id);
        self::$imageFile = $request->file('image');
        if (self::$imageFile) {
            if (file_exists(self::$blog->image)) {
                unlink(self::$blog->image);
            }
            self::$imageName = self::$imageFile->getClientOriginalName();
            self::$imageDirectory = 'backend/uploaded-files/blogs/';
            self::$imageFile->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory . self::$imageName;
        } else {
            self::$imageUrl = self::$blog->image;
        }
        self::$blog->user_id          = auth()->id();
        self::$blog->title            = $request->title;
        self::$blog->description      = $request->description;
        self::$blog->image            = self::$imageUrl;
        self::$blog->save();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
