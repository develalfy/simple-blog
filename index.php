<?php
require_once('./vendor/autoload.php');

use Blog\Controllers\PostController;
use Blog\Models\Article;
use Blog\Repositories\PostRepository;
use Blog\Services\PostService;
use Klein\Klein;

$templates = new League\Plates\Engine('views');

$postService = new PostService(new PostRepository(new Article()));

// routes
$klein = new Klein();

$klein->respond('GET', '/', function () use ($templates, $postService) {
    $posts = (new PostController($postService))->index();

    echo $templates->render('articles', ['posts' => $posts]);
});

$klein->respond('GET', '/posts/[i:id]', function ($request) use ($templates, $postService) {
    $post = (new PostController($postService))->show($request->id);

    echo $templates->render('single-post', ['post' => $post]);
});

$klein->dispatch();