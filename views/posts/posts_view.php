<div class="row">
  <div class="span8">
    <div class="row">
      <div class="span8">
        <h4><strong><a href="#"><?=$post['post_subject'];?></a></strong></h4>
      </div>
    </div>
    <div class="row">
      <div class="span6">
        <p><?=$post['post_text'];?>
        </p>
        <p><a class="btn" href="#">Read more</a></p>
      </div>
    </div>
    <div class="row">
      <div class="span8">
        <p></p>
        <p>
          <i class="icon-user"></i> by <a href="#"><?=$post['username'];?></a>
          | <i class="icon-calendar"></i><?=$post['post_created'];?>
| <i class="icon-comment"></i> <a href="#">3 Comments</a>
          | <i class="icon-share"></i> <a href="#">39 Shares</a>
			<? if (isset($tags)) { ?>
          | <i class="icon-tags"></i> Tags :
			<?foreach ($tags as $tag):?><a href="<?=BASE_URL?>tags/view/<?=$tag['tag_id']?>"><span class="label label-info"><?=$tag['tag_name']?></span></a> <?endforeach?>
			<? } ?>
        </p>
      </div>
    </div>
  </div>
</div>
<hr>

<h2>Comments</h2>
<div>
	<? sizeof($comments) == 0 ? print("No comments") : print("There are ".sizeof($comments). " comment"); sizeof($comments)>1?print("s"):"" ?>
	<hr>
	<?foreach ($comments as $comment):?>
		<p>
			<?=$comment['comment']?>
		</p>
		<hr>
	<?endforeach?>
</div>