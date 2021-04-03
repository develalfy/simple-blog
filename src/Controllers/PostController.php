<?php

namespace Blog\Controllers;

use Blog\Models\Post;
use Blog\Services\PostService;

class PostController extends BaseController
{
    /**
     * @var PostService
     */
    private $postService;

    /**
     * PostController constructor.
     * @param PostService $postService
     */
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * @return array
     */
    public function index(): array
    {
        return $this->postService->getAllPosts();
    }

    /**
     * @param $id
     * @return Post
     */
    public function show($id): Post
    {
        try {
            $post = $this->postService->getPost($id);
        } catch (\UnexpectedValueException $e) {
            // to be redirected to another page to be displayed
            var_dump("No posts found !");die();
        }

        return $post;
    }
}