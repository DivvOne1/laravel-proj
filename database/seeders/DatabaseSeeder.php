<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $tags = \App\Models\Tag::factory(10)->create();
        $articles = \App\Models\Article::factory(20)->create();
        $tags_id = $tags->pluck('id');
        $articles->each(function ($article) use ($tags_id) {
            $article->tags()->attach($tags_id->random(3));
            \App\Models\Comment::factory(3)->create([
               'article_id'=>$article->id
            ]);
            \App\Models\State::factory(1)->create([
                'article_id'=>$article->id
            ]);
        });

    }
}
