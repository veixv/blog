<div class="span8">
	<?foreach($posts as $post):?>

		<h1><a href="<?=BASE_URL?>posts/view/<?=$post["post_id"]?>"><?=$post['post_subject']?></a></h1>
		<p><?=$post['post_text']?></p>
		<div>
			<span class="badge badge-success"><?=$post['post_created']?></span>
		</div>


		<?foreach ($tags as $tag):?>
			<a href="<?=BASE_URL?>tags/view/<?=$tag["tag_id"]?>"><span class="label label-info"><?=$tag['tag_name']?></span></a>
		<?endforeach?>

		<hr>


	<?endforeach?>


</div>
