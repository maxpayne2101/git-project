<?
$good = $data;
?>
<form action="good.<?=$config['prefix']?>" enctype="multipart/form-data" method="POST">
<div id="product">
	<div class="name_good">
		<!--Название товара-->
		<?if ($good[0]["name"]) {?>
			<h1><?= $good[0]["name"]?></h1>
		<?}
		?>
	</div>
	<!--Изображение-->
	<div class="images">
		<!--Стикеры-->		
		<div class="stikers">
			<?if($good[0]["sticker"] ){?>
				<span><?=$good[0]["sticker"];?></span>
			<?}?>
		</div>
		<div class="img_good">
			<?if($good['image'][0]["name_img"]) {?>
				<img src="/../files/imgGood/<?=$good['image'][0]["name_img"]?>" alt="<?=$good['image'][0]["alt_img"]?>" title="<?=$good['image'][0]["title_img"]?> ">
			<?}?>
		</div>
	</div>
	<div class="wrap_price">

		<?if ($good[0]["raiting"]) {?>
			<div class="raiting">
				<span>Рейтинг </span><?=$good[0]["raiting"]?>
			</div>
		<?}?>
		<?if ($good[0]["ending"]) {?>
			<div class="oldPrice">
				<?if ($good[0]["oldPrice"]) {
					echo $good[0]["oldPrice"] . ' грн';
				}?>
			</div>
			<div class="price">
				<? if ($good[0]["price"]) {
					echo $good[0]["price"] . ' грн';
				}?>
			</div>
		<?}else{?>
			<div class="ending">
				<?echo "Нет в наличии"?>
			</div>
		<?}?>
	</div>
	<input type="button" name="buy" class="button" value="Купить">	
	<div class="media">		
		<ul>
			<?if ($good[0]["mediaLinkVideo"]) {?>
			<li>
				<a  href="<?=$good["mediaLinkVideo"]?>"><img class="img_media" src ="/web/static/images/video.png" >Видеообзор</a>
			</li>
			<?}
			if ($good[0]["mediaLinkDemo"]) {?>
			<li>
				<a href="<?=$good["mediaLinkDemo"]?>"><img class="img_media" src ="/web/static/images/video.png" >Демонстрация товара </a>						
			</li>
			<?}?>
		</ul>
	</div>
	<?if($good[0]["description"]){?>
		<div class="description">
			<span>Описание</span>
			<div style="margin-top: 30px;"><?=$good[0]["description"]?></div>
		</div>
	<?}?>
</div>
</form>