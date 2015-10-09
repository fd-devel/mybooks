<?php

namespace Mybooks\Domain;

class Book 
{
    /**
     * Book id.
     *
     * @var integer
     */
    private $id;

    /**
     * Book title.
     *
     * @var string
     */
    private $title;

    /**
     * Book ibsn.
     *
     * @var string
     */
    private $ibsn;

    /**
     * Book content.
     *
     * @var string
     */
    private $summary;

    /**
     * Book author id.
     *
     * @var integer
     */
    private $auth_id;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getIbsn() {
        return $this->ibsn;
    }

    public function setIbsn($ibsn) {
        $this->ibsn = $ibsn;
    }

    public function getSummary() {
        return $this->summary;
    }

    public function setSummary($summary) {
        $this->summary = $summary;
    }

    public function getAuth_id() {
        return $this->auth_id;
    }

    public function setAuth_id($auth_id) {
        $this->auth_id = $auth_id;
    }
}