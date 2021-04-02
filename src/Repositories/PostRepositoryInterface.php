<?php


namespace Blog\Repositories;


use Blog\Models\Post;

interface PostRepositoryInterface
{
    public function __construct(Post $post);

    public function getAllPosts(): array;

    public function getPost(int $id): Post;
}