<ul>
	<li>1. Rename welcome controller enda põhikontrolleri nimeliseks (ära unusta classi nime muuta).</li>
	<li>3. Kohanda views/templates/master_template.php failis pealkiri ja projekti nimi.</li>
	<li>4. Loo enda põhikontrolleri jaoks vaatefail (näiteks views/products_index_view.php).</li>
</ul>
<?foreach($posts as $post) { ?>
<div class="span8">
	<h1><a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><?=$post['post_subject'];?></a></h1>
	<p><?=$post['post_text'];?></p>
	<div>
		<span class="badge badge-success">Posted<?=$post['post_created'];?></span>
		<div class="pull-right">
			<? if (isset($tags)) { ?>
			<?foreach ($tags[$post['post_id']] as $tag):?>
				<a href="<?=BASE_URL?>tags/view/<?=$tag[1]?>"><span class="label label-info" style="background-color: #5bc0de"><?=$tag[0]?></span></a>
			<? endforeach?>
		<? } ?>
		</div>
	</div>
</div>
<? } ?>