<?php
require_once('./vendor/autoload.php');

use Blog\Controllers\PostController;
use Blog\Models\Post;
use Blog\Repositories\PostRepository;
use Blog\Services\PostService;
use Klein\Klein;

$templates = new League\Plates\Engine('views');

// routes
$klein = new Klein();

$klein->respond('GET', '/', function () use ($templates) {
    $posts = (new PostController(new PostService(new PostRepository(new Post()))))->index();

    echo $templates->render('posts', ['posts' => $posts]);
});

$klein->respond('GET', '/posts/[i:id]', function ($request) use ($templates) {
    $post = (new PostController(new PostService(new PostRepository(new Post()))))->show($request->id);

    echo $templates->render('single-post', ['post' => $post]);
});

$klein->dispatch();