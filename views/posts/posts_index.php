<div class="span8">
	<?foreach($posts as $post):?>
		<h1><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post['post_subject']?></a></h1>
		<p><?=str_replace("\n",'<br/>',substr($post['post_text'],0,150));
			$post_length=strlen($post['post_text']);
			if ($post_length>150){
				echo "..";
			}?></p>
		<div>
			<span class="badge badge-success">Posted on <?=$post['post_created']?> by <?=$post['username']?>.</span>
			<?foreach ($tags[$post['post_id']] as $tag):?>
				<a href="<?=BASE_URL?>tags/view/<?=$tag['tag_id']?>"><span class="label" style="background-color:#5bc0de"><?=$tag['tag_name']?></span></a>
			<?endforeach?>
		</div>
	<?endforeach?>
</div>
