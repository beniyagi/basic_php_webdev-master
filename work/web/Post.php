<?php

class Post {
  public $post;
  public $dttm;
  
  public function __construct($post) {
    $this->setPost($post);
  }
  public function setPost($post) {
    $date = new DateTime('now');
    $this->dttm = $date->format('Y年m月d日 H時i分s秒');
    $this->post = $post;
  }
}