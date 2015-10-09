<?php

namespace Mybooks\DAO;

use Mybooks\Domain\Author;

class AuthorDAO extends DAO 
{
    /**
     * @var \Mybooks\DAO\BookDAO
     */
    private $bookDAO;

    public function setBookDAO(BookDAO $bookDAO) {
        $this->bookDAO = $bookDAO;
    }

    /**
     * Return an Author matching the supplied id.
     *
     * @param integer $id The Author id.
     *
     * @return \Mybooks\Domain\Author | throws an exception if no matching Author is found with the Author id
     */
    public function find($id) {
        $sql = "select * from author where auth_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No author matching id " . $id);
    }

    /**
     * Creates an Author object based on a DB row.
     *
     * @param array $row The DB row containing Author data.
	 *
     * @return \Mybooks\Domain\Author
     */
    protected function buildDomainObject($row) {
        $author = new Author();
        $author->setId($row['auth_id']);
        $author->setFirst_name($row['auth_first_name']);
        $author->setLast_name($row['auth_last_name']);
        
        return $author;
    }
}