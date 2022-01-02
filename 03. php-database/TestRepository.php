<?php

require_once __DIR__ . '/GetConnection.php';
require_once __DIR__ . '/Model/Comment.php';
require_once __DIR__ . '/Repository/CommentRepository.php';

use Model\Comment;

$connection = getConnection();
$repository = new  CommentRepositoryImpl($connection);

//$comment = new Comment(email: "badriysha@mail.test", comment: "hi");
//$newComment = $repository->insert($comment);
//var_dump($newComment->getId());

//$comment = $repository->findById(14);
//var_dump($comment);

$comments = $repository->findAll();
var_dump($comments);

$connection = null;