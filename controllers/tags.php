<?php
/**
 * Created by JetBrains PhpStorm.
 * User: L512
 * Date: 5.10.13
 * Time: 12:51
 * To change this template use File | Settings | File Templates.
 */

class tags extends Controller {
	function index ()
	{
		$this->tags = get_all("SELECT tag_name, COUNT(post_id) AS count FROM post_tags NATURAL JOIN tag GROUP BY tag_id");
	}

	function view ()
	{
		$tag_id = $this->params[0];
		$this->posts = get_all("SELECT * FROM post_tags NATURAL JOIN post  WHERE tag_id = '$tag_id'");

		$this->tags = get_all("SELECT * FROM post_tags NATURAL JOIN tag WHERE tag_id = '$tag_id'");
	}
}