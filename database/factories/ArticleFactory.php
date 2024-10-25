<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    protected $model = Article::class;
    public function definition()
    {
        $title = $this->faker->sentence(6, true);
        $slug = Str::lower(preg_replace('/\s+/', '-', $title));

        return [
            'title' => $title,
            'body' => $this->faker->paragraph(100, true),
            'slug' => $slug,
            'img' => 'https://curata.com/blog/wp-content/uploads/2017/10/iStock-638584374.jpg',
            'created_at' => $this->faker->dateTimeBetween('-1 years'),
        ];
    }

}
