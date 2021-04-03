<?php

namespace Blog\Repositories;

use Blog\Models\Article;
use Blog\Classes\Database;
use UnexpectedValueException;

class PostRepository implements PostRepositoryInterface
{
    private $article;
    private $db;

    public function __construct(Article $post)
    {
        $this->article = $post;
        $this->db = Database::getInstance();
    }

    /**
     * @return array
     */
    public function getAllPosts(): array
    {
        $posts = $this->db->getConn()
            ->query("
                SELECT p.*, u.username as author_username, u.email as author_email 
                FROM articles p
                LEFT JOIN users u ON u.id = p.users_id
                ORDER BY created_at DESC 
                LIMIT {$this->article->getArticlesPerPageLimit()}
            ")
            ->fetchAll();

        $postsArray = [];
        foreach ($posts as $key => $post) {
            $postsArray[$key] = $this->article->toObject($post);
        }

        return $postsArray;
    }

    /**
     * @param int $id
     * @return Article
     * @throws UnexpectedValueException
     */
    public function getArticle(int $id): Article
    {
        $singlePost = $this->db->getConn()
            ->query(
                "SELECT * FROM posts WHERE ID = {$id}"
            )
            ->fetchAll();

        if (empty($singlePost)) {
            throw new UnexpectedValueException();
        }

        return $this->article->toObject($singlePost[0]);
    }
}