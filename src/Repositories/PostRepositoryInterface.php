<?php


namespace Blog\Repositories;


use Blog\Models\Article;

interface PostRepositoryInterface
{
    public function __construct(Article $post);

    public function getAllPosts(): array;

    public function getArticle(int $id): Article;
}