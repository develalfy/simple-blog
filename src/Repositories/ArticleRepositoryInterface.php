<?php


namespace Blog\Repositories;


use Blog\Models\Article;

interface ArticleRepositoryInterface
{
    public function __construct(Article $article);

    public function getAllArticles(): array;

    public function getArticle(int $id): Article;
}