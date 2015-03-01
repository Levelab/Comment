<?php
namespace Levelab\Model\Comment\Entity;

use Levelab\Model\Comment\Values\CommentId;
use Levelab\Model\Core\Types\Author;

class Comment {
    /**
     * @var CommentId
     */
    private $id;
    /**
     * @var Author
     */
    private $author;
    private $comment;
    /**
     * @var \DateTime
     */
    private $dateTime;

    /**
     * @param CommentId $id
     * @param Author $author
     * @param $comment
     * @param \DateTime $dateTime
     */
    public function __construct(CommentId $id, Author $author, $comment, \DateTime $dateTime) {
        $this->id = $id;
        $this->author = $author;
        $this->comment = $comment;
        $this->dateTime = $dateTime;
    }

    /**
     * @return Author
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getComment() {
        return $this->comment;
    }

    /**
     * @return \DateTime
     */
    public function getDateTime() {
        return $this->dateTime;
    }

    /**
     * @return CommentId
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment) {
        $this->comment = $comment;
    }
} 