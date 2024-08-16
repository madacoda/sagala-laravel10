<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ArticleController extends Controller
{
    private $articleRepository;

    function __construct() {
        $this->articleRepository = new ArticleRepository();
    }

    function index() {
        $data = Cache::tags([app_key(), 'articles'])->rememberForever(cache_key('articles', request()->all()), function() { 
            return $this->articleRepository->all();
        });

        return response()->json([
            'status'  => 'success',
            'data'    => $data,
            'message' => 'Data retrieved successfully'
        ]);
    }

    function store(Request $request) {
        $request->validate([
            'author' => 'required',
            'title'  => 'required',
            'body'   => 'required'
        ]);

        $input = $request->all();
        $data  = $this->articleRepository->store($input);

        return response()->json([
            'status'  => 'success',
            'data'    => $data,
            'message' => 'Data stored successfully'
        ]);
    }
}
