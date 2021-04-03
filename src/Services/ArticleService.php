<?php


namespace Blog\Services;


use Blog\Models\Article;
use Blog\Repositories\ArticleRepositoryInterface;

class ArticleService
{
    private $articleRepository;

    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * @return array
     */
    public function getAllArticles(): array
    {
        return $this->articleRepository->getAllArticles();
    }

    /**
     * @param int $id
     * @return Article
     */
    public function getArticle(int $id): Article
    {
        return $this->articleRepository->getArticle($id);
    }
}