<?php

namespace Mybooks\DAO;

use Mybooks\Domain\Book;

class BookDAO extends DAO
{
    /**
     * Returns a book matching the supplied id.
     *
     * @param integer $id
     *
     * @return \Mybooks\Domain\Book|throws an exception if no matching book is found
     */
    public function find($id) {
        $sql = "select * from book where book_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No book matching id " . $id);
    }

    /**
     * Creates a Book object based on a DB row.
     *
     * @param array $row The DB row containing Book data.
	 *
     * @return \Mybooks\Domain\Book
     */
    protected function buildDomainObject($row) {
        $book = new Book();
        $book->setId($row['book_id']);
        $book->setTitle($row['book_title']);
        $book->setIbsn($row['book_isbn']);
        $book->setSummary($row['book_summary']);
        $book->setAuth_id($row['auth_id']);
        
        return $book;
    }
    

	/**
     * Return a list of all books, sorted by id (most recent first).
     *
     * @return array A list of all books.
     */
    public function findAll() {
        $sql = "select * from book order by book_id desc";
        $result = $this->getDb()->fetchAll($sql);
        
        // Convert query result to an array of domain objects
        $books = array();
        foreach ($result as $row) {
            $bookId = $row['book_id'];
            $books[$bookId] = $this->buildDomainObject($row);
        }
        return $books;
    }
}