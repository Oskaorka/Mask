<?php
/*
Template Name: корзина
*/

?>

<?php
    get_header();
?>

    <main role="main">

            <section class="jumbotron text-center py-4">
                    <div class="container">
                        <h1 class="jumbotron-heading">Корзина товаров<span class="oi oi-basket"></span></h1>  
                    </div> 
            </section>

            <div class="album py-4 mb-4 product-panel">
                <div class="container"> 
                    <div class="row">




                    <!-- каталог товаров блок -->
<?php
	$field = get_field('product_stels');

	if ($field == 'on') {
 ?>
		
	<div class="toys" id="catalog">
		<div class="container">
			<h2 class="subtitle">Каталог товаров</h2>
			<section class="catalog">
				<!-- <div class="container"> -->
					<ul class="catalog__tabs" >
						<!-- tab-1 start -->
					<?php
						$field = get_field('tabs_btn-1', 2);
						if ($field == 'on') {
							?>
							<li class="catalog__tab catalog__tab_active" style="
								<?php
									$field = get_field('header_color');
									if ($field == 'Wheat') {
										?>
										background: #F5DEB3;
										<?php
									}
									if ($field == 'Lavanda') {
										?>
										background: #e6e6fa;
										<?php
									} 
									if ($field == 'GreenYellow') {
										?>
										background: #c0f2c0;
										<?php
									}
								?> " >
								<div class="tab-1"><?php the_field('tabs-1'); ?></div>
							</li>
							<?php
						}
					?>
						<!-- tab-1 end -->
						<!-- tab-2 start -->
						<?php
							$field = get_field('tabs_btn-2');
							if ($field == 'on') {
								?>
								<li class="catalog__tab" style="
									<?php
										$field = get_field('header_color');
										if ($field == 'Wheat') {
											?>
											background: #F5DEB3;
											<?php
										}
										if ($field == 'Lavanda') {
											?>
											background: #e6e6fa;
											<?php
										} 
										if ($field == 'GreenYellow') {
											?>
											background: #c0f2c0;
											<?php
										}
									?> ">
									<div class="tab-2"><?php the_field('tabs-2'); ?></div>
								</li>

									
						<?php
							}
						?>

							<!-- tab-2 end -->
							<!-- tab-3 start -->
						<?php
							$field = get_field('tabs_btn-3');
							if ($field == 'on') {
								?>
							<li class="catalog__tab" style="
								<?php
									$field = get_field('header_color');
									if ($field == 'Wheat') {
										?>
										background: #F5DEB3;
										<?php
									}
									if ($field == 'Lavanda') {
										?>
										background: #e6e6fa;
										<?php
									} 
									if ($field == 'GreenYellow') {
										?>
										background: #c0f2c0;
										<?php
									}
								?> ">
							<div class="tab-3"><?php the_field('tabs-3'); ?></div>
						</li>
								<?php
							}
						?>
		
						<!-- tab-3 end -->
					</ul>





					<div class="catalog__content catalog__content_active">
					<?php
						$field = get_field('product_stels-1');
						if ($field == 'on') {
						?>
						<div id="101" class="catalog-item">
							<div class="product__element">
								<div class="catalog-item__wrapper">
									<div class="catalog-item__content catalog-item__content_active">
										<?php
											$image = get_field('product_imgs');
											if(!empty($image)): ?>
												<img
												src="<?php echo $image['url']; ?>"
												alt="<?php echo $image['alt']; ?>"
												class="catalog-item__img">
											<?php endif;
										?>	
										<div class="catalog-item__subtitle"><?php the_field('produkt_name'); ?></div> <!--Маска угольная-->
										<div class="catalog-item__descr"><?php the_field('produkt_about'); ?></div> <!--Максимальная защита-->
										<a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
									</div>
										<ul class="catalog-item__list ">
											<li><?php the_field('product_description'); ?></li>
											<a href="#" class="catalog-item__back">назад</a>
										</ul>
								</div>
		
								<hr>
								<div class="product__quantity"></div>
								<div class="catalog-item__footer">

								
									<div class="catalog-item__prices">
										<div class="catalog-item__old-price"><?php the_field('produkt_old-price'); ?></div>
										<div class="catalog-item__price"><span class="product__price-number"><?php the_field('produkt_price'); ?> руб.</span></div>
									</div>
                                    <button class="button js-add-item btn btn-info btn-sm"
                                        data-type="add-item"
										data-name="<?php the_field('produkt_name'); ?>"
										data-price="<?php the_field('produkt_price'); ?>"
										data-qty="1" 
										data-img="<?php the_field('product_imgs-basket'); ?>" 
										style="
										<?php
											$field = get_field('header_color');
											if ($field == 'Wheat') {
												?>
												background: #F5DEB3;
												<?php
											}
											if ($field == 'Lavanda') {
												?>
												background: #e6e6fa;
												<?php
											} 
											if ($field == 'GreenYellow') {
												?>
												background: #c0f2c0;
												<?php
											}
											?> ">ЗАКАЗАТЬ</button>
								</div>
							</div>
						</div> 
					<?php
					}
					?>	

					
					<?php
						$field = get_field('product_stels-2');
						if ($field == 'on') {
						?>




						<div class="catalog-item">
							<div class="product__element ">
								<div class="catalog-item__wrapper">
									<div class="catalog-item__content catalog-item__content_active">
										<?php
											$image = get_field('product_imgs-2');
											if(!empty($image)): ?>
												<img
												src="<?php echo $image['url']; ?>"
												alt="<?php echo $image['alt']; ?>"
												class="catalog-item__img">
											<?php endif;
											?>	
										<div class="catalog-item__subtitle"><?php the_field('produkt_name-2'); ?></div> <!--Маска угольная-->
										<div class="catalog-item__descr"><?php the_field('produkt_about-2'); ?></div>
										<a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
									</div>
									<ul class="catalog-item__list">
										<li><?php the_field('product_description-2'); ?></li>
										<a href="#" class="catalog-item__back">назад</a>
									</ul>
								</div>
								<hr>
								<div class="product__quantity"></div>				
								<div class="catalog-item__footer">
									<div class="catalog-item__prices">
										<div class="catalog-item__old-price"><?php the_field('produkt_old-price-2'); ?></div>
										<div class="catalog-item__price"><?php the_field('produkt_price-2'); ?> руб.</div>
									</div>
									<button class="button js-add-item btn btn-info btn-sm"
                                        data-type="add-item"
										data-name="<?php the_field('produkt_name-2'); ?>"
										data-price="<?php the_field('produkt_price-2'); ?>"
										data-qty="1" 
										data-img="<?php the_field('product_imgs-basket'); ?>" 
										style="
										<?php
											$field = get_field('header_color');
											if ($field == 'Wheat') {
												?>
												background: #F5DEB3;
												<?php
											}
											if ($field == 'Lavanda') {
												?>
												background: #e6e6fa;
												<?php
											} 
											if ($field == 'GreenYellow') {
												?>
												background: #c0f2c0;
												<?php
											}
											?> ">ЗАКАЗАТЬ</button>
								</div>
								</div> 
						</div>
					<?php
					}
					?>


					<?php
						$field = get_field('product_stels-3');
						if ($field == 'on') {
						?>

						<div class="catalog-item">
							<div class="product__element ">
							<div class="catalog-item__wrapper">
								<div class="catalog-item__content catalog-item__content_active">
									<?php
										$image = get_field('product_imgs-3');
										if(!empty($image)): ?>
											<img
											src="<?php echo $image['url']; ?>"
											alt="<?php echo $image['alt']; ?>"
											class="catalog-item__img">
										<?php endif;
									?>	
									<div class="catalog-item__subtitle"><?php the_field('produkt_name-3'); ?></div> <!--Маска угольная-->
									<div class="catalog-item__descr"><?php the_field('produkt_about-3'); ?></div> <!--Максимальная защита-->
									<a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
								</div>
								<ul class="catalog-item__list">
									<li><?php the_field('product_description-3'); ?></li>
									<a href="#" class="catalog-item__back">назад</a>
								</ul>
							</div>
							<hr>
							<div class="product__quantity"></div>
							<div class="catalog-item__footer">
								<div class="catalog-item__prices">
									<div class="catalog-item__old-price"><?php the_field('produkt_old-price-3'); ?></div>
									<div class="catalog-item__price"><?php the_field('produkt_price-3'); ?> руб.</div>
								</div>
								<button class="button js-add-item btn btn-info btn-sm"
                                        data-type="add-item"
										data-name="<?php the_field('produkt_name-3'); ?>"
										data-price="<?php the_field('produkt_price-3'); ?>"
										data-qty="1" 
										data-img="<?php the_field('product_imgs-basket'); ?>" 
										style="
										<?php
											$field = get_field('header_color');
											if ($field == 'Wheat') {
												?>
												background: #F5DEB3;
												<?php
											}
											if ($field == 'Lavanda') {
												?>
												background: #e6e6fa;
												<?php
											} 
											if ($field == 'GreenYellow') {
												?>
												background: #c0f2c0;
												<?php
											}
											?> ">ЗАКАЗАТЬ</button>
											</div>
							</div>

						</div>
					<?php
					}
					?>

					<?php
						$field = get_field('product_stels-4');
						if ($field == 'on') {
						?>
						<div class="catalog-item">
							<div class="product__element ">
							<div class="catalog-item__wrapper">
								<div class="catalog-item__content catalog-item__content_active">
									<?php
										$image = get_field('product_imgs-4');
										if(!empty($image)): ?>
											<img
											src="<?php echo $image['url']; ?>"
											alt="<?php echo $image['alt']; ?>"
											class="catalog-item__img">
										<?php endif;
									?>	
									<div class="catalog-item__subtitle"><?php the_field('produkt_name-4'); ?></div> <!--Маска угольная-->
									<div class="catalog-item__descr"><?php the_field('produkt_about-4'); ?></div> <!--Максимальная защита-->
									<a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
								</div>
								<ul class="catalog-item__list">
									<li><?php the_field('product_description-4'); ?></li>
									<a href="#" class="catalog-item__back">назад</a>
								</ul>
							</div>
							<hr>
							<div class="product__quantity"></div>
							<div class="catalog-item__footer">
								<div class="catalog-item__prices">
									<div class="catalog-item__old-price"><?php the_field('produkt_old-price-4'); ?></div>
									<div class="catalog-item__price"><?php the_field('produkt_price-4'); ?> руб.</div>
								</div>
								<button class="button js-add-item btn btn-info btn-sm"
                                        data-type="add-item"
										data-name="<?php the_field('produkt_name-4'); ?>"
										data-price="<?php the_field('produkt_price-4'); ?>"
										data-qty="1" 
										data-img="<?php the_field('product_imgs-basket'); ?>" 
										style="
										<?php
											$field = get_field('header_color');
											if ($field == 'Wheat') {
												?>
												background: #F5DEB3;
												<?php
											}
											if ($field == 'Lavanda') {
												?>
												background: #e6e6fa;
												<?php
											} 
											if ($field == 'GreenYellow') {
												?>
												background: #c0f2c0;
												<?php
											}
											?> ">ЗАКАЗАТЬ</button>
												</div>
							</div>

						</div>	
					<?php
					}
					?>			

					<?php
						$field = get_field('product_stels-5');
						if ($field == 'on') {
						?>
					
						<diva class="catalog-item">
							<div class="product__element ">
							<div class="catalog-item__wrapper">
								<div class="catalog-item__content catalog-item__content_active">
									<?php
										$image = get_field('product_imgs-5');
										if(!empty($image)): ?>
											<img
											src="<?php echo $image['url']; ?>"
											alt="<?php echo $image['alt']; ?>"
											class="catalog-item__img">
										<?php endif;
									?>	
									<div class="catalog-item__subtitle"><?php the_field('produkt_name-5'); ?></div> <!--Маска угольная-->
									<div class="catalog-item__descr"><?php the_field('produkt_about-5'); ?></div> <!--Максимальная защита-->
									<a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
								</div>
								<ul class="catalog-item__list">
									<li><?php the_field('product_description-5'); ?></li>
									<a href="#" class="catalog-item__back">назад</a>
								</ul>
							</div>
							<hr>
							<div class="product__quantity"></div>
							<div class="catalog-item__footer">
								<div class="catalog-item__prices">
									<div class="catalog-item__old-price"><?php the_field('produkt_old-price-5'); ?></div>
									<div class="catalog-item__price"><?php the_field('produkt_price-5'); ?> руб.</div>
								</div>
								<button class="button js-add-item btn btn-info btn-sm"
                                        data-type="add-item"
										data-name="<?php the_field('produkt_name-5'); ?>"
										data-price="<?php the_field('produkt_price-5'); ?>"
										data-qty="1" 
										data-img="<?php the_field('product_imgs-basket'); ?>" 
										style="
										<?php
											$field = get_field('header_color');
											if ($field == 'Wheat') {
												?>
												background: #F5DEB3;
												<?php
											}
											if ($field == 'Lavanda') {
												?>
												background: #e6e6fa;
												<?php
											} 
											if ($field == 'GreenYellow') {
												?>
												background: #c0f2c0;
												<?php
											}
											?> ">ЗАКАЗАТЬ</button>
											</div>
							</div>

						</diva>
					<?php
					}
					?>		

					<?php
						$field = get_field('product_stels-6');
						if ($field == 'on') {
						?>
						<div class="catalog-item">
							<div class="product__element ">
							<div class="catalog-item__wrapper">
								<div class="catalog-item__content catalog-item__content_active">
									<?php
										$image = get_field('product_imgs-6');
										if(!empty($image)): ?>
											<img
											src="<?php echo $image['url']; ?>"
											alt="<?php echo $image['alt']; ?>"
											class="catalog-item__img">
										<?php endif;
									?>	
									<div class="catalog-item__subtitle"><?php the_field('produkt_name-6'); ?></div> <!--Маска угольная-->
									<div class="catalog-item__descr"><?php the_field('produkt_about-6'); ?></div> <!--Максимальная защита-->
									<a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
								</div>
								<ul class="catalog-item__list">
									<li><?php the_field('product_description-6'); ?></li>
									<a href="#" class="catalog-item__back">назад</a>
								</ul>
							</div>
							<hr>
							<div class="product__quantity"></div>
							<div class="catalog-item__footer">
								<div class="catalog-item__prices">
									<div class="catalog-item__old-price"><?php the_field('produkt_old-price-6'); ?></div>
									<div class="catalog-item__price"><?php the_field('produkt_price-6'); ?> руб.</div>
								</div>
								<button class="button js-add-item btn btn-info btn-sm"
                                        data-type="add-item"
										data-name="<?php the_field('produkt_name-6'); ?>"
										data-price="<?php the_field('produkt_price-6'); ?>"
										data-qty="1" 
										data-img="<?php the_field('product_imgs-basket'); ?>" 
										style="
										<?php
											$field = get_field('header_color');
											if ($field == 'Wheat') {
												?>
												background: #F5DEB3;
												<?php
											}
											if ($field == 'Lavanda') {
												?>
												background: #e6e6fa;
												<?php
											} 
											if ($field == 'GreenYellow') {
												?>
												background: #c0f2c0;
												<?php
											}
											?> ">ЗАКАЗАТЬ</button>
											</div>
							</div>

						</div>
					</div>
				<?php
				}
				?>				
					<!-- раздел антисептик -->
					<?php
						$field = get_field('product_stels-block-2-1');
						if ($field == 'on') {
						?>
						<div class="catalog__content">
							<div class="catalog-item">
								<div class="product__element ">
								<div class="catalog-item__wrapper">
									<div class="catalog-item__content catalog-item__content_active">
										<?php
											$image = get_field('product_imgs-block-2-1');
											if(!empty($image)): ?>
												<img
												src="<?php echo $image['url']; ?>"
												alt="<?php echo $image['alt']; ?>"
												class="catalog-item__img">
											<?php endif;
										?>	
										<div class="catalog-item__subtitle"><?php the_field('produkt_name-block-2-1'); ?></div> <!--Маска угольная-->
										<div class="catalog-item__descr"><?php the_field('produkt_about-block-2-1'); ?></div> <!--Максимальная защита-->
										<a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
									</div>
									<ul class="catalog-item__list ">
										<li><?php the_field('product_description-block-2-1'); ?></li>
										<a href="#" class="catalog-item__back">назад</a>
									</ul>
								</div>
								<hr>
								<div class="product__quantity"></div>				
								<div class="catalog-item__footer">
									<div class="catalog-item__prices">
									<div class="catalog-item__old-price"><?php the_field('produkt_old-price-block-2-1'); ?></div>
											<div class="catalog-item__price"><?php the_field('produkt_price-block-2-1'); ?> руб.</div>
									</div>
									<button class="button js-add-item btn btn-info btn-sm"
                                        data-type="add-item"
										data-name="<?php the_field('produkt_name-block-2-1'); ?>"
										data-price="<?php the_field('produkt_price-block-2-1'); ?>"
										data-qty="1" 
										data-img="<?php the_field('product_imgs-basket'); ?>" 
										style="
										<?php
											$field = get_field('header_color');
											if ($field == 'Wheat') {
												?>
												background: #F5DEB3;
												<?php
											}
											if ($field == 'Lavanda') {
												?>
												background: #e6e6fa;
												<?php
											} 
											if ($field == 'GreenYellow') {
												?>
												background: #c0f2c0;
												<?php
											}
											?> ">ЗАКАЗАТЬ</button>
								</div>
								</div>
							</div>

						<?php
						$field = get_field('product_stels-block-2-2');
						if ($field == 'on') {
						?>

						<div class="catalog-item">
							<div class="product__element ">
							<div class="catalog-item__wrapper">
									<div class="catalog-item__content catalog-item__content_active">
										<?php
											$image = get_field('product_imgs-block-2-2');
											if(!empty($image)): ?>
												<img
												src="<?php echo $image['url']; ?>"
												alt="<?php echo $image['alt']; ?>"
												class="catalog-item__img">
											<?php endif;
										?>	
										<div class="catalog-item__subtitle"><?php the_field('produkt_name-block-2-2'); ?></div> <!--Маска угольная--> 
										<div class="catalog-item__descr"><?php the_field('produkt_about-block-2-2'); ?></div> <!--Максимальная защита--> 
										<a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
									</div>
									<ul class="catalog-item__list">
										<li><?php the_field('product_description-block-2-2'); ?></li>
										<a href="#" class="catalog-item__back">назад</a>
									</ul>
								</div>
								<hr>
								<div class="product__quantity"></div>
								<div class="catalog-item__footer">
									<div class="catalog-item__prices">
										<div class="catalog-item__old-price"><?php the_field('produkt_old-price-block-2-2'); ?></div>
										<div class="catalog-item__price"><?php the_field('produkt_price-block-2-2'); ?> руб.</div>
									</div>
									<button class="button js-add-item btn btn-info btn-sm"
                                        data-type="add-item"
										data-name="<?php the_field('produkt_name-block-2-2'); ?>"
										data-price="<?php the_field('produkt_price-block-2-2'); ?>"
										data-qty="1" 
										data-img="<?php the_field('product_imgs-basket'); ?>" 
										style="
										<?php
											$field = get_field('header_color');
											if ($field == 'Wheat') {
												?>
												background: #F5DEB3;
												<?php
											}
											if ($field == 'Lavanda') {
												?>
												background: #e6e6fa;
												<?php
											} 
											if ($field == 'GreenYellow') {
												?>
												background: #c0f2c0;
												<?php
											}
											?> ">ЗАКАЗАТЬ</button>
													</div>
							</div>

						</div>
						<?php
						}
						?>

						<?php
						$field = get_field('product_stels-block-2-3');
						if ($field == 'on') {
						?>
						<div class="catalog-item">
							<div class="product__element ">
							<div class="catalog-item__wrapper">
									<div class="catalog-item__content catalog-item__content_active">
										<?php
											$image = get_field('product_imgs-block-2-3');
											if(!empty($image)): ?>
												<img
												src="<?php echo $image['url']; ?>"
												alt="<?php echo $image['alt']; ?>"
												class="catalog-item__img">
											<?php endif;
										?>	
										<div class="catalog-item__subtitle"><?php the_field('produkt_name-block-2-3'); ?></div> <!--Маска угольная--> 
										<div class="catalog-item__descr"><?php the_field('produkt_about-block-2-3'); ?></div> <!--Максимальная защита--> 
										<a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
									</div>
									<ul class="catalog-item__list">
										<li><?php the_field('product_description-block-2-3'); ?></li>
										<a href="#" class="catalog-item__back">назад</a>
									</ul>
								</div>
								<hr>
								<div class="product__quantity"></div>
								<div class="catalog-item__footer">
									<div class="catalog-item__prices">
										<div class="catalog-item__old-price"><?php the_field('produkt_old-price-block-2-3'); ?></div>
										<div class="catalog-item__price"><?php the_field('produkt_price-block-2-3'); ?> руб.</div>
									</div>
									<button class="button js-add-item btn btn-info btn-sm"
                                        data-type="add-item"
										data-name="<?php the_field('produkt_name-block-2-3'); ?>"
										data-price="<?php the_field('produkt_price-block-2-3'); ?>"
										data-qty="1" 
										data-img="<?php the_field('product_imgs-basket'); ?>" 
										style="
										<?php
											$field = get_field('header_color');
											if ($field == 'Wheat') {
												?>
												background: #F5DEB3;
												<?php
											}
											if ($field == 'Lavanda') {
												?>
												background: #e6e6fa;
												<?php
											} 
											if ($field == 'GreenYellow') {
												?>
												background: #c0f2c0;
												<?php
											}
											?> ">ЗАКАЗАТЬ</button>
													</div>
							</div>

						</div>
						<?php
						}
						?>

						<?php
						$field = get_field('product_stels-block-2-4');
						if ($field == 'on') {
						?>
						<div class="catalog-item">
							<div class="product__element ">
							<div class="catalog-item__wrapper">
									<div class="catalog-item__content catalog-item__content_active">
										<?php
											$image = get_field('product_imgs-block-2-4');
											if(!empty($image)): ?>
												<img
												src="<?php echo $image['url']; ?>"
												alt="<?php echo $image['alt']; ?>"
												class="catalog-item__img">
											<?php endif;
										?>	
										<div class="catalog-item__subtitle"><?php the_field('produkt_name-block-2-4'); ?></div> <!--Маска угольная--> 
										<div class="catalog-item__descr"><?php the_field('produkt_about-block-2-4'); ?></div> <!--Максимальная защита--> 
										<a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
									</div>
									<ul class="catalog-item__list">
										<li><?php the_field('product_description-block-2-4'); ?></li>
										<a href="#" class="catalog-item__back">назад</a>
									</ul>
								</div>
								<hr>
								<div class="product__quantity"></div>
								<div class="catalog-item__footer">
									<div class="catalog-item__prices">
										<div class="catalog-item__old-price"><?php the_field('produkt_old-price-block-2-4'); ?></div>
										<div class="catalog-item__price"><?php the_field('produkt_price-block-2-4'); ?> руб.</div>
									</div>
									<button class="button js-add-item btn btn-info btn-sm"
                                        data-type="add-item"
										data-name="<?php the_field('produkt_name-block-2-4'); ?>"
										data-price="<?php the_field('produkt_price-block-2-4'); ?>"
										data-qty="1" 
										data-img="<?php the_field('product_imgs-basket'); ?>" 
										style="
										<?php
											$field = get_field('header_color');
											if ($field == 'Wheat') {
												?>
												background: #F5DEB3;
												<?php
											}
											if ($field == 'Lavanda') {
												?>
												background: #e6e6fa;
												<?php
											} 
											if ($field == 'GreenYellow') {
												?>
												background: #c0f2c0;
												<?php
											}
											?> ">ЗАКАЗАТЬ</button>
													</div>
							</div>

						</div>
						<?php
						}
						?>
			</div>
				<?php
				}
				?>
					<?php
						$field = get_field('product_stels-block-3-1');
						if ($field == 'on') {
						?>
						<div class="catalog__content">
							<div class="catalog-item">
								<div class="product__element ">
								<div class="catalog-item__wrapper">
									<div class="catalog-item__content catalog-item__content_active">
										<?php
											$image = get_field('product_imgs-block-3-1');
											if(!empty($image)): ?>
												<img
												src="<?php echo $image['url']; ?>"
												alt="<?php echo $image['alt']; ?>"
												class="catalog-item__img">
											<?php endif;
										?>	
										<div class="catalog-item__subtitle"><?php the_field('produkt_name-block-3-1'); ?></div> <!--Маска угольная -->
											<div class="catalog-item__descr"><?php the_field('produkt_about-block-3-1'); ?></div> <!--Максимальная защита-->
										<a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
									</div>
									<ul class="catalog-item__list">
										<li><?php the_field('product_description-block-3-1'); ?></li>
										
										<a href="#" class="catalog-item__back">назад</a>
									</ul>
								</div>
								<hr>
								<div class="product__quantity"></div>						
								<div class="catalog-item__footer">
									<div class="catalog-item__prices">
										<div class="catalog-item__old-price"><?php the_field('produkt_old-price-block-3-1'); ?></div>
										<div class="catalog-item__price"><?php the_field('produkt_price-block-3-1'); ?> руб.</div>
									</div>
									<button class="button js-add-item btn btn-info btn-sm"
                                        data-type="add-item"
										data-name="<?php the_field('produkt_name-block-3-1'); ?>"
										data-price="<?php the_field('produkt_price-block-3-1'); ?>"
										data-qty="1" 
										data-img="<?php the_field('product_imgs-basket'); ?>" 
										style="
										<?php
											$field = get_field('header_color');
											if ($field == 'Wheat') {
												?>
												background: #F5DEB3;
												<?php
											}
											if ($field == 'Lavanda') {
												?>
												background: #e6e6fa;
												<?php
											} 
											if ($field == 'GreenYellow') {
												?>
												background: #c0f2c0;
												<?php
											}
											?> ">ЗАКАЗАТЬ</button>
													</div>
								</div>

							</div>	
					<?php
					}
					?>	
					<!-- раздела защита рук 2 элемента -->
					<?php
						$field = get_field('product_stels-block-3-2');
						if ($field == 'on') {
						?>
						<div class="catalog-item">
							<div class="product__element ">
							<div class="catalog-item__wrapper">
									<div class="catalog-item__content catalog-item__content_active">
										<?php
											$image = get_field('product_imgs-block-3-2');
											if(!empty($image)): ?>
												<img
												src="<?php echo $image['url']; ?>"
												alt="<?php echo $image['alt']; ?>"
												class="catalog-item__img">
											<?php endif;
										?>	
										<div class="catalog-item__subtitle"><?php the_field('produkt_name-block-3-2'); ?></div> <!--Маска угольная--> 
										<div class="catalog-item__descr"><?php the_field('produkt_about-block-3-2'); ?></div> <!--Максимальная защита--> 
										<a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
									</div>
									<ul class="catalog-item__list">
										<li><?php the_field('product_description-block-3-2'); ?></li>
										<a href="#" class="catalog-item__back">назад</a>
									</ul>
								</div>
								<hr>
								<div class="product__quantity"></div>
								<div class="catalog-item__footer">
									<div class="catalog-item__prices">
										<div class="catalog-item__old-price"><?php the_field('produkt_old-price-block-3-2'); ?></div>
										<div class="catalog-item__price"><?php the_field('produkt_price-block-3-2'); ?> руб.</div>
									</div>
									<button class="button js-add-item btn btn-info btn-sm"
                                        data-type="add-item"
										data-name="<?php the_field('produkt_name-block-3-2'); ?>"
										data-price="<?php the_field('produkt_price-block-3-2'); ?>"
										data-qty="1" 
										data-img="<?php the_field('product_imgs-basket'); ?>" 
										style="
										<?php
											$field = get_field('header_color');
											if ($field == 'Wheat') {
												?>
												background: #F5DEB3;
												<?php
											}
											if ($field == 'Lavanda') {
												?>
												background: #e6e6fa;
												<?php
											} 
											if ($field == 'GreenYellow') {
												?>
												background: #c0f2c0;
												<?php
											}
											?> ">ЗАКАЗАТЬ</button>
													</div>
							</div>

						</div>
					<?php
					}
					?>
					<?php
						$field = get_field('product_stels-block-3-3');
						if ($field == 'on') {
						?>
						<div class="catalog-item">
							<div class="product__element ">
							<div class="catalog-item__wrapper">
									<div class="catalog-item__content catalog-item__content_active">
										<?php
											$image = get_field('product_imgs-block-3-3');
											if(!empty($image)): ?>
												<img
												src="<?php echo $image['url']; ?>"
												alt="<?php echo $image['alt']; ?>"
												class="catalog-item__img">
											<?php endif;
										?>	
										<div class="catalog-item__subtitle"><?php the_field('produkt_name-block-3-3'); ?></div> <!--Маска угольная--> 
										<div class="catalog-item__descr"><?php the_field('produkt_about-block-3-3'); ?></div> <!--Максимальная защита--> 
										<a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
									</div>
									<ul class="catalog-item__list">
										<li><?php the_field('product_description-block-3-3'); ?></li>
										<a href="#" class="catalog-item__back">назад</a>
									</ul>
								</div>
								<hr>
								<div class="product__quantity"></div>
								<div class="catalog-item__footer">
									<div class="catalog-item__prices">
										<div class="catalog-item__old-price"><?php the_field('produkt_old-price-block-3-3'); ?></div>
										<div class="catalog-item__price"><?php the_field('produkt_price-block-3-3'); ?> руб.</div>
									</div>
									<button class="button js-add-item btn btn-info btn-sm"
                                        data-type="add-item"
										data-name="<?php the_field('produkt_name-block-3-3'); ?>"
										data-price="<?php the_field('produkt_price-block-3-3'); ?>"
										data-qty="1" 
										data-img="<?php the_field('product_imgs-basket'); ?>" 
										style="
										<?php
											$field = get_field('header_color');
											if ($field == 'Wheat') {
												?>
												background: #F5DEB3;
												<?php
											}
											if ($field == 'Lavanda') {
												?>
												background: #e6e6fa;
												<?php
											} 
											if ($field == 'GreenYellow') {
												?>
												background: #c0f2c0;
												<?php
											}
											?> ">ЗАКАЗАТЬ</button>
													</div>
							</div>

						</div>
					<?php
					}
					?>

						<?php
						$field = get_field('product_stels-block-3-4');
						if ($field == 'on') {
						?>
						<div class="catalog-item">
							<div class="product__element ">
							<div class="catalog-item__wrapper">
									<div class="catalog-item__content catalog-item__content_active">
										<?php
											$image = get_field('product_imgs-block-3-4');
											if(!empty($image)): ?>
												<img
												src="<?php echo $image['url']; ?>"
												alt="<?php echo $image['alt']; ?>"
												class="catalog-item__img">
											<?php endif;
										?>	
										<div class="catalog-item__subtitle"><?php the_field('produkt_name-block-3-4'); ?></div> <!--Маска угольная--> 
										<div class="catalog-item__descr"><?php the_field('produkt_about-block-3-4'); ?></div> <!--Максимальная защита--> 
										<a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
									</div>
									<ul class="catalog-item__list">
										<li><?php the_field('product_description-block-3-4'); ?></li>
										<a href="#" class="catalog-item__back">назад</a>
									</ul>
								</div>
								<hr>
								<div class="product__quantity"></div>
								<div class="catalog-item__footer">
									<div class="catalog-item__prices">
										<div class="catalog-item__old-price"><?php the_field('produkt_old-price-block-3-4'); ?></div>
										<div class="catalog-item__price"><?php the_field('produkt_price-block-3-4'); ?> руб.</div>
									</div>
									<button class="button js-add-item btn btn-info btn-sm"
                                        data-type="add-item"
										data-name="<?php the_field('produkt_name-block-3-4'); ?>"
										data-price="<?php the_field('produkt_price-block-3-4'); ?>"
										data-qty="1" 
										data-img="<?php the_field('product_imgs-basket'); ?>" 
										style="
										<?php
											$field = get_field('header_color');
											if ($field == 'Wheat') {
												?>
												background: #F5DEB3;
												<?php
											}
											if ($field == 'Lavanda') {
												?>
												background: #e6e6fa;
												<?php
											} 
											if ($field == 'GreenYellow') {
												?>
												background: #c0f2c0;
												<?php
											}
											?> ">ЗАКАЗАТЬ</button>
													</div>
							</div>

						</div>
						<?php
						}
						?>

						<?php
						$field = get_field('product_stels-block-3-5');
						if ($field == 'on') {
						?>
						<diva class="catalog-item">
							<div class="product__element ">
							<div class="catalog-item__wrapper">
									<div class="catalog-item__content catalog-item__content_active">
										<?php
											$image = get_field('product_imgs-block-3-5');
											if(!empty($image)): ?>
												<img
												src="<?php echo $image['url']; ?>"
												alt="<?php echo $image['alt']; ?>"
												class="catalog-item__img">
											<?php endif;
										?>	
										<div class="catalog-item__subtitle"><?php the_field('produkt_name-block-3-5'); ?></div> <!--Маска угольная--> 
										<div class="catalog-item__descr"><?php the_field('produkt_about-block-3-5'); ?></div> <!--Максимальная защита--> 
										<a href="#" class="catalog-item__link">ПОДРОБНЕЕ</a>
									</div>
									<ul class="catalog-item__list">
										<li><?php the_field('product_description-block-3-5'); ?></li>
										<a href="#" class="catalog-item__back">назад</a>
									</ul>
								</div>
								<hr>
								<div class="product__quantity"></div>
								<div class="catalog-item__footer">
									<div class="catalog-item__prices">
										<div class="catalog-item__old-price"><?php the_field('produkt_old-price-block-3-5'); ?></div>
										<div class="catalog-item__price"><?php the_field('produkt_price-block-3-5'); ?> руб.</div>
									</div>
									<button class="button js-add-item btn btn-info btn-sm"
                                        data-type="add-item"
										data-name="<?php the_field('produkt_name-block-3-5'); ?>"
										data-price="<?php the_field('produkt_price-block-3-5'); ?>"
										data-qty="1" 
										data-img="<?php the_field('product_imgs-basket'); ?>" 
										style="
										<?php
											$field = get_field('header_color');
											if ($field == 'Wheat') {
												?>
												background: #F5DEB3;
												<?php
											}
											if ($field == 'Lavanda') {
												?>
												background: #e6e6fa;
												<?php
											} 
											if ($field == 'GreenYellow') {
												?>
												background: #c0f2c0;
												<?php
											}
											?> ">ЗАКАЗАТЬ</button>
													</div>
							</div>

						</diva>
						<?php
						}
						?>
								</div>
			</section>
			</div>
					
		</div>
	</div>
<?php
}
?>
<!-- конец коталога товаров -->
                    </div> 
                </div> 
            </div> 




            



            <div class="container">
                <div class="rowsx">
                    <div class="your-basket">
                        <h5 class="mb-2">В корзине</h5> 
                        <p><span class="js-totalItems"></span></p>
                        <ul class="list-group mb-3 js-basket-items basket-items"></ul>
                        <div class="your-basket_buttons js-reveal-step1">
                            <button class="button js-checkout btn btn-success btn-sm">Посчитать</button> 
                            <button class="button js-clear btn btn-outline-info btn-sm">Сброс корзины</button>
                        </div>
                    </div> 

                    <div class="col-sm-7 pb-5 reveal-step js-reveal-step2">
                        <div class="row">
                            <div class="col-sm-6 pb-5">
                                    <div class="checkout">
                                        <h5 class="mb-2">Change currency?</h5>
                                        <div class="dropdown mb-3 mt-2"> 
                                            <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Currencies
                                            </button>
                                            <ul class="js-currencies dropdown-menu currency-list" aria-labelledby="dropdownMenuButton">
                                                <li class="dropdown-item" href="#">No currencies yet!</li> 
                                            </ul>
                                        </div> 
                                    </div>
                            </div> 
                            <div class="finish__price-about">
                                <h5 class="mb-2">Итоговая цена: </h5>
                                <p class="basket-total"><span class="js-totalCost"></span> <span class="js-currency">Руб</span></p>
                                <a id="reply" href="#" class="button button-basket">заказать</a> 
                            </div>
                        </div> 
                    </div> 
                </div> 
            </div>
 
    </main>
    
    <?php
    get_footer();
?>  
