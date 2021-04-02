<?php

namespace Blog\Models;

use DateTime;

class Post
{
    private $id;
    private $title;
    private $desc;
    private $dateTime;

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
     * @return string
     */
    public function getDateTime(): string
    {
        return $this->dateTime;
    }

    /**
     * @param string $dateTime
     */
    public function setDateTime(string $dateTime): void
    {
        $this->dateTime = $dateTime;
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
        $post->setDateTime($array['datetime']);

        return $post;
    }
}