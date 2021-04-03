<?php

namespace Blog\Controllers;

use Blog\Models\Article;
use Blog\Services\ArticleService;

class ArticleController extends BaseController
{
    /**
     * @var ArticleService
     */
    private $articleService;

    /**
     * ArticleController constructor.
     * @param ArticleService $articleService
     */
    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    /**
     * @return array
     */
    public function index(): array
    {
        return $this->articleService->getAllArticles();
    }

    /**
     * @param $id
     * @return Article
     */
    public function show($id): Article
    {
        try {
            $article = $this->articleService->getArticle($id);
        } catch (\UnexpectedValueException $e) {
            //todo: to be redirected to another page to be displayed
            var_dump("No articles found !");die();
        }

        return $article;
    }
}