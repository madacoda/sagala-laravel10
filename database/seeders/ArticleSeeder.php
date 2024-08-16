<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
      /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dummy_articles = [
            [
                'author' => 'John Doe',
                'title'  => 'Lorem Ipsum',
                'body'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ],
            [
                'author' => 'Jane Doe',
                'title'  => 'Dolor Sit Amet',
                'body'   => 'Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ],
            [
                'author' => 'John Smith',
                'title'  => 'Consectetur Adipiscing Elit',
                'body'   => 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ],
            [
                'author' => 'Jane Smith',
                'title'  => 'Sed Do Eiusmod',
                'body'   => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ],
            [
                'author' => 'John Doe',
                'title'  => 'Tempor Incididunt',
                'body'   => 'Tempor incididunt ut labore et dolore magna aliqua.'
            ],
            [
                'author' => 'Jane Doe',
                'title'  => 'Ut Labore Et Dolore',
                'body'   => 'Ut labore et dolore magna aliqua.'
            ],
            [
                'author' => 'John Smith',
                'title'  => 'Magna Aliqua',
                'body'   => 'Magna aliqua.'
            ],
            [
                'author' => 'Jane Smith',
                'title'  => 'Ut Enim Ad Minim',
                'body'   => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'
            ],
            [
                'author' => 'John Doe',
                'title'  => 'Duis Aute Irure',
                'body'   => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'
            ],
            [
                'author' => 'Jane Doe',
                'title'  => 'Excepteur Sint',
                'body'   => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
            ],
            [
                'author' => 'John Smith',
                'title'  => 'Lorem Ipsum Dolor Sit Amet Consectetur Adipiscing Elit Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua Ut Enim Ad Minim Veniam, Quis Nostrud Exercitation Ullamco Laboris Nisi Ut Aliquip Ex Ea Commodo Consequat Duis Aute Irure Dolor In Reprehenderit In Voluptate Velit Esse Cillum Dolore Eu Fugiat Nulla Pariatur Excepteur Sint Occaecat Cupidatat Non Proident, Sunt In Culpa Qui Officia Deserunt Mollit Anim Id Est Laborum',
                'body'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
            ],
        ];

        foreach ($dummy_articles as $article) {
            Article::updateOrCreate([
                'title'  => $article['title'],
            ], $article);
        }
    }
}
