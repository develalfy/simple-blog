<?php

namespace Blog\Models;

class Post
{
    const LIMIT_PER_PAGE = 3;
    private $id;
    private $title;
    private $desc;
    private $image;
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
        $post = new Post();

        $post->setId($array['id']);
        $post->setTitle($array['title']);
        $post->setDesc($array['desc']);
        $post->setImage($array['image']);
        $post->setCreatedAt($array['created_at']);

        return $post;
    }

    /**
     * @return int
     */
    public function getPostsPerPageLimit(): int
    {
        return self::LIMIT_PER_PAGE;
    }
}