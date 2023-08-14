<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'] // -> yang boleh diisi
    protected $guarded = ['id',]; // -> yang tidak boleh di isi
    protected $with = ['author', 'category'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });
    }

    public function category() // laravel will find, is there any category_id in the table?
    {
        return $this->belongsTo(Category::class);
    }
    public function author() // laravel will find, is there any category_id in the table? can use alias to tell laravel author is user_id by adding user_id after User::class like below
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
