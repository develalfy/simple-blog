<?php
require_once('./vendor/autoload.php');

use Blog\Controllers\ArticleController;
use Blog\Models\Article;
use Blog\Repositories\ArticleRepository;
use Blog\Services\ArticleService;
use Klein\Klein;

$templates = new League\Plates\Engine('views');

$articleService = new ArticleService(new ArticleRepository(new Article()));

// routes
$klein = new Klein();

$klein->respond('GET', '/', function () use ($templates, $articleService) {
    $articles = (new ArticleController($articleService))->index();

    echo $templates->render('articles', ['articles' => $articles]);
});

$klein->respond('GET', '/articles/[i:id]', function ($request) use ($templates, $articleService) {
    $article = (new ArticleController($articleService))->show($request->id);

    echo $templates->render('single-article', ['article' => $article]);
});

$klein->dispatch();