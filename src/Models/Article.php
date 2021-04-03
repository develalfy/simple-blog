<?php

namespace Blog\Models;

class Article
{
    const LIMIT_PER_PAGE = 3;
    private $id;
    private $title;
    private $desc;
    private $image;
    private $author;
    private $createdAt;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDesc(): string
    {
        return $this->desc;
    }

    /**
     * @param string $desc
     */
    public function setDesc(string $desc): void
    {
        $this->desc = $desc;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param $array
     * @return $this
     */
    public function toObject($array): self
    {
        $article = new Article();

        $article->setId($array['id']);
        $article->setTitle($array['title']);
        $article->setDesc($array['desc']);
        $article->setImage($array['image']);
        $article->setAuthor($this->toUser([
            'id' => $array['users_id'],
            'username' => $array['author_username'],
            'email' => $array['author_email'],
        ]));
        $article->setCreatedAt($array['created_at']);

        return $article;
    }

    /**
     * @param array $array
     * @return User
     */
    public function toUser(array $array): User
    {
        return (new User())->toObject($array);
    }

    /**
     * @return int
     */
    public function getArticlesPerPageLimit(): int
    {
        return self::LIMIT_PER_PAGE;
    }
}