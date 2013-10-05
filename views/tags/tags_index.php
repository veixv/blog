<div class="list-group">
	<?php
	$_tags = get_all("SELECT * FROM post_tags NATURAL JOIN tag");
	foreach ($_tags as $tag) { ?>
		<a href="<?=BASE_URL?>/tags/view/<?=$tag['tag_id']?>" class="list-group-item"><?=$tag['tag_name']?></a>
	<?php } ?>
</div>