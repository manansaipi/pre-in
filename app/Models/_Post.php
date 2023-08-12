<?php

namespace App\Models;

class Post
{
    private static $posts = [
        [
            "title" => "title1",
            "slug" => "title1",
            "author" => "author1",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique sunt pariatur voluptates? Necessitatibus animi repellendus eum, eaque, quisquam tenetur nulla tempora blanditiis ratione repellat id. Voluptatum facere expedita rem ut nulla ipsum odio saepe non veniam incidunt consectetur, quasi libero iste molestias obcaecati eum dolorum ea blanditiis quo numquam maxime consequuntur tempore! Est sequi recusandae nobis totam, asperiores veniam, dolorem numquam beatae vel corrupti architecto voluptas ducimus, animi magni eligendi facilis esse voluptatem aspernatur? Ipsa culpa nesciunt, corporis dicta repellat quaerat nulla recusandae nam dolor. Assumenda ipsam, quas praesentium dolore aspernatur doloribus aperiam quia rem ipsum saepe dolorum adipisci fuga!",
        ],
        [
            "title" => "title2",
            "slug" => "title2",
            "author" => "author2",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique sunt pariatur voluptates? Necessitatibus animi repellendus eum, eaque, quisquam tenetur nulla tempora blanditiis ratione repellat id. Voluptatum facere expedita rem ut nulla ipsum odio saepe non veniam incidunt consectetur, quasi libero iste molestias obcaecati eum dolorum ea blanditiis quo numquam maxime "
        ]
    ];

    public static function all()
    {
        return collect(self::$posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
