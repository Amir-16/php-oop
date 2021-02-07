<?php

class Post{

	public $content;

	function __construct(){
		echo "Hlw from construct".PHP_EOL;
		return $this;
	}

	function __destruct(){
		echo "Hlw from destruct".PHP_EOL;
		return $this;
	}

	function content(){
		echo "content from Content";
		return $this;
	}
}

$post =new Post();
$post->content();