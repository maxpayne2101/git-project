<?$goods = $data;
// print_r($goods);
?>
<h1>Товары</h1>
<form action="goods.<?=$config['prefix']?>" enctype="multipart/form-data" method="POST">
<div class="col-9">
	<?foreach ($goods as $key => $good) {?>
		<div id="products">
			<div class="media">		
				<ul>
					<li>
						<!--Видеообзор-->
						<?if ($good["mediaLinkVideo"]) {?>
							<img class="img_media" src ="web/static/images/video.png" ></br>
							<a  href="<?=$good["mediaLinkVideo"]?>">Видеообзор</a>
						<?} 
						?>
					</li>
			
					<li>
						<!--Демо-->
						<?if ($good["mediaLinkDemo"]) {?>
							<img class="img_media" src ="web/static/images/video.png" ></br>
							<a href="<?=$good["mediaLinkDemo"]?>">Демонстрация</br> товара </a>						
						<?}
						?>
					</li>
				</ul>
			</div>
			<!--Стикеры-->		
			<div class="stikers">
				<?if($good["sticker"] ){?>
					<span><?=$good["sticker"];?></span>
				<?}
				?>
			</div>
			<!--Изображение-->
			<div class="images">
				<div class="img_good">
					<?foreach ($goods['images'] as $i => $image) {
						if ($image['id_good']==$good['id']) {
							if ($image["name_img"]) {?>
								<a href="good/<?=$good['url']?>.<?=$config["prefix"]?>">
								<img src="/../files/imgGood/<?=$image["name_img"]?>" alt="<?=$image["alt_img"]?>" title="<?=$image["title_img"]?> ">
								</a>
							<?}
						}
					}?>
				</div>
			</div>
					<div class="name_good">
						<!--Название товара-->
						<?if ($good["name"]) {?>
							<a href="good/<?=$good['url']?>.<?=$config["prefix"]?>"><?= $good["name"]?></a>
						<?}
						?>
					</div>
					<?if ($good["ending"]===false) {?>
						<div class="ending">
								<?echo "Нет в наличии"?>
						</div>
					<?}?>
					<div class="wrap_price">
						<?if ($good["ending"]) {?>
							<div class="oldPrice">
								<?if ($good["oldPrice"]) {
									echo $good["oldPrice"] . ' грн';
								}?>
							</div>
						<?}?>
						<div class="price">
							<? if ($good["price"]) {
								echo $good["price"] . ' грн';
							}?>
						</div>
					</div>
					<? if ($good["raiting"]) {?>
						<div class="raiting">
							<span>Рейтинг </span><?echo $good["raiting"]?>
						</div>
					<?}?>
					<!-- <div class="reviews">
						
					</div> -->
					<div class="clearfix"></div>
					<!--Кнопка-->
						<input type="button" name="buy" class="button" value="Купить">
					
					<div class="clearfix"></div>
					<div class="features">
						<div class="images_product">
							<!--Иконки функций-->

						</div>
					</div>
				</div>
			
	<?}

	?>
	
</div>
</form>