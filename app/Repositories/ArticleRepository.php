<?php

namespace App\Repositories;

use App\Models\Article;
use App\Models\Employee;

class ArticleRepository extends Repository
{
    public function __construct()
    {
        $this->model = new Article();
    }

    function all()
    {
        return $this->model
        ->when(request('search'), function($q) {
            $q->where('author', 'like', '%' . request('search') . '%')
            ->orWhere('title', 'like', '%' . request('search') . '%')
            ->orWhere('body', 'like', '%' . request('search') . '%');
        })
        ->latest()->get();
    }
}
