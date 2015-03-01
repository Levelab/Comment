<?php
namespace Levelab\Model\Comment\Repository;

use Levelab\Model\Comment\Entity\Comment;
use Levelab\Model\Comment\Values\CommentId;
use Levelab\Model\Core\Types\Author;
use Levelab\Model\Core\Types\Commentable;

interface CommentRepository {
    public function find(CommentId $commentId);

    public function findAll();

    public function add(Comment $comment);

    public function remove(Comment $comment);

    public function findByAuthor(Author $author);

    public function findByCommentable(Commentable $commentable);
} 