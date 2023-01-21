<?php

class Post {
  private $post;
  private $dttm;
  
  public function __construct($dttm, $post) {
    $this->setDatetime($dttm);
    $this->setPost($post);
  }

  public function createNewPost($post) {
    $this->dttm = new DateTime('now');
    $this->post = $post;
  }
  
  public function setPost($post)
  {
  $this->post = $post;
}

public function setDatetime($dttm)
{
  $this->dttm = $dttm;
}

public function getDatetime()
{
  return $this->dttm;
}

public function getPost()
{
  return $this->post;
}

}