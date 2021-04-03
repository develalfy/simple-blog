<?php

namespace Blog\Repositories;

use Blog\Models\Article;
use Blog\Classes\Database;
use UnexpectedValueException;

class ArticleRepository implements ArticleRepositoryInterface
{
    private $article;
    private $db;

    public function __construct(Article $article)
    {
        $this->article = $article;
        $this->db = Database::getInstance();
    }

    /**
     * @return Article[]
     */
    public function getAllArticles(): array
    {
        //todo: pagination here will be done by making offset in the query to get the first 3 items
        // and when user clicks second page will get second 3 elements ... etc
        $articles = $this->db->getConn()
            ->query("
                SELECT p.*, u.username as author_username, u.email as author_email 
                FROM articles p
                LEFT JOIN users u ON u.id = p.users_id
                ORDER BY created_at DESC 
                LIMIT {$this->article->getArticlesPerPageLimit()}
            ")
            ->fetchAll();

        $articlesArray = [];
        foreach ($articles as $key => $article) {
            $articlesArray[$key] = $this->article->toObject($article);
        }

        return $articlesArray;
    }

    /**
     * @param int $id
     * @return Article
     * @throws UnexpectedValueException
     */
    public function getArticle(int $id): Article
    {
        $singleArticle = $this->db->getConn()
            ->query(
                "SELECT * FROM articles WHERE ID = {$id}"
            )
            ->fetchAll();

        if (empty($singleArticle)) {
            throw new UnexpectedValueException();
        }

        return $this->article->toObject($singleArticle[0]);
    }
}