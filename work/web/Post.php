<?php

class Post
{
  private $post;
  private $dttm;

  public function __construct($post)
  {
    $this->setPost($post);
  }
  public function setPost($post)
  {
    $date = new DateTime('now');
    $this->dttm = $date->format('Y年m月d日 H時i分s秒');
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
