<?php
require_once('./vendor/autoload.php');

use Blog\Controllers\PostController;
use Blog\Repositories\PostRepository;
use Blog\Services\PostService;
use Klein\Klein;

$templates = new League\Plates\Engine('views');

// routes
$klein = new Klein();

$klein->respond('GET', '/', function () use ($templates) {
    $posts = (new PostController(new PostService(new PostRepository())))->index();

    echo $templates->render('posts', ['posts' => $posts]);
});

$klein->respond('GET', '/posts/[i:id]', function ($request) use ($templates) {
    $posts = (new PostController(new PostService(new PostRepository())))->show($request->id);

    echo $templates->render('posts', ['posts' => $posts]);
});

$klein->dispatch();