<?php if($list){ 
		foreach($list as $k=>$v){ ?>
			<h3><a href="/news/index/<?=$v['id']?>"><?=$v['title']?></a></h3>
			<?=$v['anons']?>
			<hr>
<?php }
} ?>