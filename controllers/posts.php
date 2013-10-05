<?php

class posts extends Controller{

	function index(){
		$this->posts = get_all("SELECT * FROM post");
		$_tags = get_all("SELECT * FROM post_tags NATURAL JOIN tag");

		foreach($_tags as $tag){
			$this->tags[$tag['post_id']][] = array($tag['tag_name'],$tag['tag_id']);
		}
	}

	function view(){
		$post_id = $this->params[0];
		$this->post = get_one("SELECT * FROM post NATURAL JOIN user WHERE post_id='$post_id'");
		$this->tags = get_all("SELECT * FROM post_tags NATURAL JOIN tag WHERE post_id = '$post_id'");
	}
}
