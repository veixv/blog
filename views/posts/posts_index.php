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
		<span class="badge badge-success">Posted<?=$post['post_created'];?></span><div class="pull-right"><span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
	</div>
</div>
<? } ?>