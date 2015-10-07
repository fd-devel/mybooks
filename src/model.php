<?php

// Return all books
function getBooks() {
    $bdd = new PDO('mysql:host=localhost;dbname=mybooks;charset=utf8', 'mybooks_user', 'secret');
    $books = $bdd->query('select * from book order by book_title desc');
    return $books;
}