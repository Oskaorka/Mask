
<?php
    get_header();
?>

<div class="mainslider glide">
	<div class="glide__track" data-glide-el="track">
		<ul class="glide__slides">
			<?php 
				// параметры по умолчанию
				$posts = get_posts( array(
					'numberposts' => 3,
					'category_name'    => 'slider',
					'orderby'     => 'date',
					'order'       => 'ASC',
					'post_type'   => 'post',
					'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
				) );
				foreach( $posts as $post ){
					setup_postdata($post);
					// формат вывода the_title() ...
					?>
					<li style="background-image: url('<?php the_field('slider_img');?>')" class="glide__slide">
						<div class="container">
							<div class="row">
								<div class="col-lg-7 offset-1">
									<h2
									style="
									<?php
										$field = get_field('slider_color');
										if ($field == 'white') {
											?>
											color: #fff;
											<?php
										}
									?>
									"
									class="slider__title"><?php the_title(); ?></h2>
									<?php
										$field = get_field('slider_btn');
										if ($field == 'on') {
											?>
												<a  href="<?php the_field('slider_link'); ?>" class="button" >Узнать больше</a>
											<?php
										}
									?>
								</div>
							</div>
							<button class="glide__arrow glide__arrow--left" data-glide-dir="<">
								<svg width="15" height="25" viewBox="0 0 15 25" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M0.982942 13.3923L12.2253 24.631C12.7186 25.123 13.5179 25.123 14.0124 24.631C14.5057 24.1389 14.5057 23.3397 14.0124 22.8476L3.66178 12.5007L14.0112 2.15378C14.5045 1.66172 14.5045 0.862477 14.0112 0.369169C13.5179 -0.122894 12.7174 -0.122894 12.2241 0.369169L0.981696 11.6077C0.495966 12.0947 0.495966 12.9065 0.982942 13.3923Z" fill="white"/>
								</svg>
							</button>
							<button class="glide__arrow glide__arrow--right" data-glide-dir=">">
								<svg width="15" height="25" viewBox="0 0 15 25" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M14.0171 11.6077L2.77467 0.369029C2.28137 -0.123032 1.48213 -0.123032 0.987571 0.369029C0.494263 0.861093 0.494264 1.66033 0.987572 2.15239L11.3382 12.4993L0.98882 22.8462C0.495512 23.3383 0.495512 24.1375 0.98882 24.6308C1.48213 25.1229 2.28261 25.1229 2.77592 24.6308L14.0183 13.3923C14.504 12.9053 14.504 12.0935 14.0171 11.6077Z" fill="white"/>
								</svg>
							</button>
						</div>
					</li>
					<?php
				}
				wp_reset_postdata(); // сброс
			?>
		</ul>
	</div>
</div>
<!-- блок таймер -->
	<?php
				$field = get_field('timer_btn');
				if ($field == 'on') {
					?>
					<div class="specialists" id="specialists">
						<div class="container">
							<div class="specialists__cont">
								<div class="timers-img">
									<?php
									$image = get_field('feed_imgs-1');
									if(!empty($image)): ?>
										<img
										style="border-radius: 20px;"
										src="<?php echo $image['url']; ?>"
										alt="<?php echo $image['alt']; ?>"
										class="catalog-item__img catalog-item__img-timer ">
									<?php endif;
									?>
									<section class="timr_forme">
											<div class="consultation__descr">
											<div ul class="reply__bodyqqq">
												<div class="text-timer">
													<?php the_field('text-timer'); ?>
													<div class="reply__titl-timer">
													<?php the_field('titl-timer'); ?>
													</div>
												</div>
												<div class="reply__titl-mini">
												<?php the_field('titl-mini'); ?>
												</div>
											</div>
											</div>
									</section>
								</div>
							<div class="rows-time">
									<div style="background:
												<?php the_field('area_color');?>;
												" class="timer" id="deadline" data-place="<?php the_field('timer_constuction'); ?>">
											<div class="timer__titles" style="color:
												<?php the_field('timer_title_color');?>;">
												<?php the_field('timer_title'); ?>
											</div>
									<div class="block-time">
										<div id="countdown" class="countdown">
											<div class="countdown__block">
												<span class="countdown-text">До</span>
												<div class="countdown-number" >
												<span class="days countdown-time"></span>
												</div>
											</div>
											<div class="countdown__block">
												<span class="countdown-text"> конца </span>
												<div class="countdown-number">
												<span class="hours countdown-time"></span>
												</div>
											</div>        
											<div class="countdown__block">
												<span class="countdown-text">акции</span>
												<div class="countdown-number
												">
												<span class="minutes countdown-time"></span>
												</div>
											</div>
											<div class="countdown__block">
												<span class="countdown-text">осталось</span>
												<div class="countdown-number
												">
												<span class="seconds countdown-time"></span>
												</div>
											</div>
										</div>
										<div class="consultation__form">
											<?php echo do_shortcode ('[contact-form-7 id="1052" title="таймер"]'); ?>
										</div>
								</div>			
								</div>
							</div>
							</div>										
						</div>
					</div>
				<?php
				}
	?>
<!--конец блока таймер -->
<!-- блок сделать заказ сегодня + тестирование сегодня-->
		<div class="about" id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-10 offset-md-1 col-lg-5 offset-lg-1">
						<div class="about__img">
							<?php
								$image = get_field('about_img');
							
								if(!empty($image)): ?>
									<img
									src="<?php echo $image['url']; ?>"
									alt="<?php echo $image['alt']; ?>">
								<?php endif;
							?>
						</div>
					</div>
					<div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 col-xl-5 offset-xl-1">
						<h1 stylez="												
							<?php
								$field = get_field('abouts_weight');
								if ($field == 'font-weight: 700') {
									?>
									font-weight: 700;
									<?php
								}
								if ($field == 'font-weight: 300') {
									?>
										font-weight: 500;
									<?php
								} 
								if ($field == 'font-weight: 300') {
									?>
									font-weight: 300;
									<?php
								}
								$field = get_field('abouts-size');
								if ($field == 'font-size: 44px;') {
									?>
									font-size: 32px;
									line-height: 40px;
									<?php
								}
								if ($field == 'font-size: 26px;') {
									?>
										font-size: 26px;
										line-height: 34px;
									<?php
								} 
								if ($field == 'font-size: 18px;') {
									?>
									font-size: 18px;
									<?php
								}
							?>" 
						
						
						class="title underlined"><?php the_field('about_title'); ?></h1>
						<div stylez="												
							<?php
								$field = get_field('about_descr_weight');
								if ($field == 'font-weight: 700') {
									?>
									font-weight: 700;
									<?php
								}
								if ($field == 'font-weight: 300') {
									?>
										font-weight: 500;
									<?php
								} 
								if ($field == 'font-weight: 300') {
									?>
									font-weight: 300;
									<?php
								}
								$field = get_field('about_descr-size');
								if ($field == 'font-size: 44px;') {
									?>
									font-size: 32px;
									line-height: 40px;
									<?php
								}
								if ($field == 'font-size: 26px;') {
									?>
										font-size: 26px;
										line-height: 34px;
									<?php
								} 
								
								if ($field == 'font-size: 18px;') {
									?>
									font-size: 18px;
									<?php
								}
								if ($field == 'font-size: 16px;') {
									?>
									font-size: 16px;
									<?php
								}
								if ($field == 'font-size: 14px;') {
									?>
									font-size: 14px;
									<?php
								}
								if ($field == 'font-size: 12px;') {
									?>
									font-size: 12px;
									<?php
								}
							?>"
						
						class="about__text">
							<?php the_field('about_descr'); ?>
						</div>
						<a id="reply" href="#" class="button" style="
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
							?>
						">Сделать заказ</a>
					</div>
				</div>
			</div>
		</div>
<!-- блок сделать заказ сегодня + тестирование сегодня-->
<!-- блок о нашей компании + не заражать и не заражаться -->
		<?php
			$field = get_field('teams_btn');

			if ($field == 'on') {
		?>
				<div class="specialist" id="specialist">
					<div class="container">
						<div class="titles"><?php the_field('about_company'); ?></div>
						<div class="row">
							<div class="col-lg-10 offset-lg-1">
								<?php
									$image = get_field('teams');
									if(!empty($image)): ?>
										<img
										src="<?php echo $image['url']; ?>"
										alt="<?php echo $image['alt']; ?>"
										class="specialists__img">
									<?php endif;
								?>
								<div class="about__alert">
									<!-- <h3 stylez="
												<?php
													$field = get_field('about_alert-companyweight');
													if ($field == 'font-weight: 700') {
														?>
														font-weight: 700;
														<?php
													}
													if ($field == 'font-weight: 300') {
														?>
															font-weight: 500;
														<?php
													} 
													if ($field == 'font-weight: 300') {
														?>
														font-weight: 300;
														<?php
													}
													$field = get_field('about_alert-companysize');
													if ($field == 'font-size: 44px;') {
														?>
														font-size: 32px;
														line-height: 40px;
														<?php
													}
													if ($field == 'font-size: 26px;') {
														?>
															font-size: 26px;
															line-height: 34px;
														<?php
													} 
													if ($field == 'font-size: 18px;') {
														?>
														font-size: 18px;
														<?php
													}
													?>" ><?php the_field('about_alert-company');?> -->
									</h3><!-- <span>здесь под каталогом может быть написано что угодно</span>  -->
								</div>
							</div>
						</div>
					</div>
				</div>		
			<?php
		}
	?>	
<!-- блок о нашей компании + не заражать и не заражаться конец -->	
<!-- начало плашки2 -->
	<?php
				$field = get_field('area_btn-2');
				if ($field == 'on') {
					?>
					<div class="specialist" id="specialist">
						<div class="container">
							
							<div class="row">
								<div class="col-lg-10 offset-lg-1">
									<div style="background:
												<?php the_field('area_color-2');?>;" class="timers">
										<div class="title"><?php the_field('area_title-2'); ?></div>
										<button id="reply" class="button button_mini">ЗАКАЗАТЬ СЕЙЧАС</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
				}
	?>
<!-- конец плашки2 -->	
<!-- самый главный товар - наш товар блок -->
<div class="aboutus" id="aboutus">
	<div class="container">
		<h1 stylez="												
							<?php
								$field = get_field('product_title_weight');
								if ($field == 'font-weight: 700') {
									?>
									font-weight: 700;
									<?php
								}
								if ($field == 'font-weight: 300') {
									?>
										font-weight: 500;
									<?php
								} 
								if ($field == 'font-weight: 300') {
									?>
									font-weight: 300;
									<?php
								}
								$field = get_field('product_title-size');
								if ($field == 'font-size: 44px;') {
									?>
									font-size: 32px;
									line-height: 40px;
									<?php
								}
								if ($field == 'font-size: 26px;') {
									?>
										font-size: 26px;
										line-height: 34px;
									<?php
								} 
								
								if ($field == 'font-size: 18px;') {
									?>
									font-size: 18px;
									<?php
								}
								if ($field == 'font-size: 16px;') {
									?>
									font-size: 16px;
									<?php
								}
								if ($field == 'font-size: 14px;') {
									?>
									font-size: 14px;
									<?php
								}
								if ($field == 'font-size: 12px;') {
									?>
									font-size: 12px;
									<?php
								}
							?>"
		
			class="title"><?php the_field('product_title'); ?></h1>
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div stylez="												
							<?php
								$field = get_field('product_subtitle_weight');
								if ($field == 'font-weight: 700') {
									?>
									font-weight: 700;
									<?php
								}
								if ($field == 'font-weight: 300') {
									?>
										font-weight: 500;
									<?php
								} 
								if ($field == 'font-weight: 300') {
									?>
									font-weight: 300;
									<?php
								}
								$field = get_field('product_subtitle-size');
								if ($field == 'font-size: 44px;') {
									?>
									font-size: 32px;
									line-height: 40px;
									<?php
								}
								if ($field == 'font-size: 26px;') {
									?>
										font-size: 26px;
										line-height: 34px;
									<?php
								} 
								
								if ($field == 'font-size: 18px;') {
									?>
									font-size: 18px;
									<?php
								}
								if ($field == 'font-size: 16px;') {
									?>
									font-size: 16px;
									<?php
								}
								if ($field == 'font-size: 14px;') {
									?>
									font-size: 14px;
									<?php
								}
								if ($field == 'font-size: 12px;') {
									?>
									font-size: 12px;
									<?php
								}
							?>"
				
				
					class="subtitle">
					<?php the_field('product_subtitle1'); ?>
				</div>
				<div stylez="												
							<?php
								$field = get_field('product_text_weight');
								if ($field == 'font-weight: 700') {
									?>
									font-weight: 700;
									<?php
								}
								if ($field == 'font-weight: 300') {
									?>
										font-weight: 500;
									<?php
								} 
								if ($field == 'font-weight: 300') {
									?>
									font-weight: 300;
									<?php
								}
								$field = get_field('product_text-size');
								if ($field == 'font-size: 44px;') {
									?>
									font-size: 32px;
									line-height: 40px;
									<?php
								}
								if ($field == 'font-size: 26px;') {
									?>
										font-size: 26px;
										line-height: 34px;
									<?php
								} 
								
								if ($field == 'font-size: 18px;') {
									?>
									font-size: 18px;
									<?php
								}
								if ($field == 'font-size: 16px;') {
									?>
									font-size: 16px;
									<?php
								}
								if ($field == 'font-size: 14px;') {
									?>
									font-size: 14px;
									<?php
								}
								if ($field == 'font-size: 12px;') {
									?>
									font-size: 12px;
									<?php
								}
							?>"
				
				
				
				
				class="aboutus__text">
				<?php
					$image = get_field('product_img1');
					if(!empty($image)): ?>
						<img
						src="<?php echo $image['url']; ?>"
						alt="<?php echo $image['alt']; ?>"
						class="aboutus__img">
					<?php endif;
				?>
				<?php the_field('product_text1'); ?>
				</div>
			</div>
		</div>

		<div class="row">
		<div class="col-lg-10 offset-lg-1">
				<div stylez="												
							<?php
								$field = get_field('product_subtitle2_weight');
								if ($field == 'font-weight: 700') {
									?>
									font-weight: 700;
									<?php
								}
								if ($field == 'font-weight: 300') {
									?>
										font-weight: 500;
									<?php
								} 
								if ($field == 'font-weight: 300') {
									?>
									font-weight: 300;
									<?php
								}
								$field = get_field('product_subtitle2-size');
								if ($field == 'font-size: 44px;') {
									?>
									font-size: 32px;
									line-height: 40px;
									<?php
								}
								if ($field == 'font-size: 26px;') {
									?>
										font-size: 26px;
										line-height: 34px;
									<?php
								} 
								
								if ($field == 'font-size: 18px;') {
									?>
									font-size: 18px;
									<?php
								}
								if ($field == 'font-size: 16px;') {
									?>
									font-size: 16px;
									<?php
								}
								if ($field == 'font-size: 14px;') {
									?>
									font-size: 14px;
									<?php
								}
								if ($field == 'font-size: 12px;') {
									?>
									font-size: 12px;
									<?php
								}
							?>"
				
				class="subtitle">
					<?php the_field('product_subtitle2'); ?>
				</div>
				<div stylez="												
							<?php
								$field = get_field('product_text2_weight');
								if ($field == 'font-weight: 700') {
									?>
									font-weight: 700;
									<?php
								}
								if ($field == 'font-weight: 300') {
									?>
										font-weight: 500;
									<?php
								} 
								if ($field == 'font-weight: 300') {
									?>
									font-weight: 300;
									<?php
								}
								$field = get_field('product_text2-size');
								if ($field == 'font-size: 44px;') {
									?>
									font-size: 32px;
									line-height: 40px;
									<?php
								}
								if ($field == 'font-size: 26px;') {
									?>
										font-size: 26px;
										line-height: 34px;
									<?php
								} 
								
								if ($field == 'font-size: 18px;') {
									?>
									font-size: 18px;
									<?php
								}
								if ($field == 'font-size: 16px;') {
									?>
									font-size: 16px;
									<?php
								}
								if ($field == 'font-size: 14px;') {
									?>
									font-size: 14px;
									<?php
								}
								if ($field == 'font-size: 12px;') {
									?>
									font-size: 12px;
									<?php
								}
							?>"
				
				
				
				class="aboutus__text">
				<?php
					$image = get_field('product_img2');
					if(!empty($image)): ?>
						<img
						src="<?php echo $image['url']; ?>"
						alt="<?php echo $image['alt']; ?>"
						class="aboutus__img-2">
					<?php endif;
				?>
				<?php the_field('product_text2'); ?>
				</div>
			</div>
			
		</div>
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div stylez="												
							<?php
								$field = get_field('product_subtitle3_weight');
								if ($field == 'font-weight: 700') {
									?>
									font-weight: 700;
									<?php
								}
								if ($field == 'font-weight: 300') {
									?>
										font-weight: 500;
									<?php
								} 
								if ($field == 'font-weight: 300') {
									?>
									font-weight: 300;
									<?php
								}
								$field = get_field('product_subtitle3-size');
								if ($field == 'font-size: 44px;') {
									?>
									font-size: 32px;
									line-height: 40px;
									<?php
								}
								if ($field == 'font-size: 26px;') {
									?>
										font-size: 26px;
										line-height: 34px;
									<?php
								} 
								
								if ($field == 'font-size: 18px;') {
									?>
									font-size: 18px;
									<?php
								}
								if ($field == 'font-size: 16px;') {
									?>
									font-size: 16px;
									<?php
								}
								if ($field == 'font-size: 14px;') {
									?>
									font-size: 14px;
									<?php
								}
								if ($field == 'font-size: 12px;') {
									?>
									font-size: 12px;
									<?php
								}
							?>"
				
				
					class="subtitle" id="subtitle3">
					<?php the_field('product_subtitle3'); ?>
				</div>
				<div	 stylez="												
							<?php
								$field = get_field('product_text3_weight');
								if ($field == 'font-weight: 700') {
									?>
									font-weight: 700;
									<?php
								}
								if ($field == 'font-weight: 300') {
									?>
										font-weight: 500;
									<?php
								} 
								if ($field == 'font-weight: 300') {
									?>
									font-weight: 300;
									<?php
								}
								$field = get_field('product_text3-size');
								if ($field == 'font-size: 44px;') {
									?>
									font-size: 32px;
									line-height: 40px;
									<?php
								}
								if ($field == 'font-size: 26px;') {
									?>
										font-size: 26px;
										line-height: 34px;
									<?php
								} 
								
								if ($field == 'font-size: 18px;') {
									?>
									font-size: 18px;
									<?php
								}
								if ($field == 'font-size: 16px;') {
									?>
									font-size: 16px;
									<?php
								}
								if ($field == 'font-size: 14px;') {
									?>
									font-size: 14px;
									<?php
								}
								if ($field == 'font-size: 12px;') {
									?>
									font-size: 12px;
									<?php
								}
							?>"
				
					class="aboutus__text" id="treep">
				<?php
					$image = get_field('product_img3');
					if(!empty($image)): ?>
						<img
						src="<?php echo $image['url']; ?>"
						alt="<?php echo $image['alt']; ?>"
						class="aboutus__img">
					<?php endif;
				?>
				<?php the_field('product_text3'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--конец раздела трех товаров -->
<!-- ЗДЕСЬ ВИДЕО -->
<div class="container" id="video">
	<div class="page">
		<div class="video">
			<a class="video__link" href="<?php the_field('videos'); ?>">
				<picture>
					<img class="video__media" src="<?php the_field('img-videos'); ?>" alt="1">
				</picture>
			</a>
			<button class="video__button" type="button" aria-label="Запустить видео">
				<svg width="68" height="48" viewBox="0 0 68 48"><path class="video__button-shape" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"></path><path class="video__button-icon" d="M 45,24 27,14 27,34"></path></svg>
			</button>
		</div>
	</div>
</div>
<!-- конец видео	-->
<!-- каталог товаров блок -->
<?php
	$field = get_field('product_stels');

	if ($field == 'on') {
 ?>
		
	<div class="toys" id="catalog">
		<div class="container">
			<h2 class="subtitle">Каталог товаров</h2>
			<section class="catalog">
					<ul class="catalog__tabs" >
						<!-- tab-1 start -->
					<?php
						$field = get_field('tabs_btn-1');
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
								<button class="button product__add-to-cart-button" ><a class="catalog__link" href="<?php echo bloginfo('template_url');?>/sample-page/korzina/">ЗАКАЗАТЬ</a></button>
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
									<button class="button product__add-to-cart-button" ><a class="catalog__link" href="<?php echo bloginfo('template_url');?>/sample-page/korzina/">ЗАКАЗАТЬ</a></button>
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
								<button class="button product__add-to-cart-button" ><a class="catalog__link" href="<?php echo bloginfo('template_url');?>/sample-page/korzina/">ЗАКАЗАТЬ</a></button>
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
								<button class="button product__add-to-cart-button" ><a class="catalog__link" href="<?php echo bloginfo('template_url');?>/sample-page/korzina/">ЗАКАЗАТЬ</a></button>
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
								<button class="button product__add-to-cart-button" ><a class="catalog__link" href="<?php echo bloginfo('template_url');?>/sample-page/korzina/">ЗАКАЗАТЬ</a></button>
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
								<button class="button product__add-to-cart-button" ><a class="catalog__link" href="<?php echo bloginfo('template_url');?>/sample-page/korzina/">ЗАКАЗАТЬ</a></button>
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
									<button class="button product__add-to-cart-button" ><a class="catalog__link" href="<?php echo bloginfo('template_url');?>/sample-page/korzina/">ЗАКАЗАТЬ</a></button>
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
									<button class="button product__add-to-cart-button" ><a class="catalog__link" href="<?php echo bloginfo('template_url');?>/sample-page/korzina/">ЗАКАЗАТЬ</a></button>
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
									<button class="button product__add-to-cart-button" ><a class="catalog__link" href="<?php echo bloginfo('template_url');?>/sample-page/korzina/">ЗАКАЗАТЬ</a></button>
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
									<button class="button product__add-to-cart-button" ><a class="catalog__link" href="<?php echo bloginfo('template_url');?>/sample-page/korzina/">ЗАКАЗАТЬ</a></button>
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
									<button class="button product__add-to-cart-button" ><a class="catalog__link" href="<?php echo bloginfo('template_url');?>/sample-page/korzina/">ЗАКАЗАТЬ</a></button>
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
									<button class="button product__add-to-cart-button" ><a class="catalog__link" href="<?php echo bloginfo('template_url');?>/sample-page/korzina/">ЗАКАЗАТЬ</a></button>
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
									<button class="button product__add-to-cart-button" ><a class="catalog__link" href="<?php echo bloginfo('template_url');?>/sample-page/korzina/">ЗАКАЗАТЬ</a></button>
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
									<button class="button product__add-to-cart-button" ><a class="catalog__link" href="<?php echo bloginfo('template_url');?>/sample-page/korzina/">ЗАКАЗАТЬ</a></button>
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
									<button class="button product__add-to-cart-button" ><a class="catalog__link" href="<?php echo bloginfo('template_url');?>/sample-page/korzina/">ЗАКАЗАТЬ</a></button>
													</div>
							</div>

						</diva>
						<?php
						}
						?>
								</div>
							<!-- </div> -->
			</section>
			</div>
					<div class="col-lg-10 offset-lg-1">
						<div class="about__alert"style="<?php
													$field = get_field('about_alert-weight');
													if ($field == 'font-weight: 700') {
														?>
														font-weight: 700;
														<?php
													}
													if ($field == 'font-weight: 300') {
														?>
															font-weight: 500;
														<?php
													} 
													if ($field == 'font-weight: 300') {
														?>
														font-weight: 300;
														<?php
													}
													$field = get_field('about_alert-size');
													if ($field == 'font-size: 44px;') {
														?>
														font-size: 44px;
														line-height: 48px;
														<?php
													}
													if ($field == 'font-size: 26px;') {
														?>
															font-size: 26px;
															line-height: 34px;
														<?php
													} 
													if ($field == 'font-size: 18px;') {
														?>
														font-size: 18px;
														<?php
													}
													if ($field == 'font-size: 16px;') {
														?>
														font-size: 16px;
														<?php
													}
													if ($field == 'font-size: 14px;') {
														?>
														font-size: 14px;
														<?php
													}
													if ($field == 'font-size: 12px;') {
														?>
														font-size: 12px;
														<?php
													}
													?>" >
							<?php the_field('about_alert'); ?><!-- <span>здесь под каталогом может быть написано что угодно</span>  -->
						</div>
			</div>
		</div>
	</div>
<?php
}
?>
<!-- конец коталога товаров -->
<!-- начало плашки -->
<?php
			$field = get_field('area_btn-1');
			if ($field == 'on') {
				?>
				<div class="specialist" id="specialist">
					<div class="container">
						
						<div class="row">
							<div class="col-lg-10 offset-lg-1">
								<div style="background:
												<?php the_field('area_color-1');?>;" class="timers">
									<div class="title"><?php the_field('area_title-1'); ?></div>
									<button id="reply" class="button button_mini">ЗАКАЗАТЬ СЕЙЧАС</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php
			}
?>
<!-- ниже идет блок о доставке товара -->
<div class="contacts" id="delevery"> 
	<div class="container">
		<?php
		$field = get_field('delivery_btn');
		if ($field == 'on') {
			?>
			<h1 style="<?php
							$field = get_field('delivery_title-weight');
							if ($field == 'font-weight: 700') {
								?>
								font-weight: 700;
								<?php
							}
							if ($field == 'font-weight: 300') {
								?>
									font-weight: 500;
								<?php
							} 
							if ($field == 'font-weight: 300') {
								?>
								font-weight: 300;
								<?php
							}
							$field = get_field('delivery_title-size');
							if ($field == 'font-size: 44px;') {
								?>
								font-size: 44px;
								line-height: 48px;
								<?php
							}
							if ($field == 'font-size: 26px;') {
								?>
									font-size: 26px;
									line-height: 34px;
								<?php
							} 
							if ($field == 'font-size: 18px;') {
								?>
								font-size: 18px;
								<?php
							}
							if ($field == 'font-size: 16px;') {
								?>
								font-size: 16px;
								<?php
							}
							if ($field == 'font-size: 14px;') {
								?>
								font-size: 14px;
								<?php
							}
							if ($field == 'font-size: 12px;') {
								?>
								font-size: 12px;
								<?php
							}
							?>"
				
				class="title"><?php the_field('delivery_title'); ?></h1>
			<div class="">
					<div class="col-lg-10 offset-lg-1">
					<div class="delevery-wrap">
						<div style="<?php
							$field = get_field('delivery_descr-weight');
							if ($field == 'font-weight: 700') {
								?>
								font-weight: 700;
								<?php
							}
							if ($field == 'font-weight: 300') {
								?>
									font-weight: 500;
								<?php
							} 
							if ($field == 'font-weight: 300') {
								?>
								font-weight: 300;
								<?php
							}
							$field = get_field('delivery_descr-size');
							if ($field == 'font-size: 44px;') {
								?>
								font-size: 44px;
								line-height: 48px;
								<?php
							}
							if ($field == 'font-size: 26px;') {
								?>
									font-size: 26px;
									line-height: 34px;
								<?php
							} 
							if ($field == 'font-size: 18px;') {
								?>
								font-size: 18px;
								<?php
							}
							if ($field == 'font-size: 16px;') {
								?>
								font-size: 16px;
								<?php
							}
							if ($field == 'font-size: 14px;') {
								?>
								font-size: 14px;
								<?php
							}
							if ($field == 'font-size: 12px;') {
								?>
								font-size: 12px;
								<?php
							}
							?>"
						
							class="contacts__descr underlined">
							<?php the_field('delivery_descr'); ?>
							
						</div>
						<?php
							$image = get_field('delivery_img');
							if(!empty($image)): ?>
								<img
								src="<?php echo $image['url']; ?>"
								alt="<?php echo $image['alt']; ?>"
								class="aboutus__img">
							<?php endif;
						?>
					</div>
			<?php
		}
		?> 
		

	</div>
	</div>
	</div>
	</div>
</div>

		<!-- test -->
		<section class="carousel">
		<div class="container">
			<div class="carousel__inners">
			<div class="carousel__inner">
						<?php 
							// параметры по умолчанию
							$posts = get_posts( array(
								'numberposts' => 3,
								'category_name'    => 'reviews',
								'orderby'     => 'date',
								'order'       => 'ASC',
								'post_type'   => 'post',
								'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
							) );
							foreach( $posts as $post ){
								setup_postdata($post);
								?>
								

							
								<div class="container">
									<div class="carousel__innera">
									<?php
											$image = get_field('reviews_img');
											if(!empty($image)): ?>
												<img
												src="<?php echo $image['url']; ?>"
												alt="<?php echo $image['alt']; ?>"
												class="reviews_img">
											<?php endif;
										?>
									</div>
									<div class="reviews__title">
										<?php the_title(); ?>
									</div>
									<div class="rating-mini">
										<span class="active"></span>	
										<span class="active"></span>    
										<span class="active"></span>  
										<span></span>    
										<span></span>
									</div>
									<div class="reviews__text">
										<?php the_field('reviews_text'); ?>
									</div>
								</div>

						
							<?php
							}
							wp_reset_postdata(); // сброс
						?>
						
					</div>
					<button class="prev" data-glide-dir="">
						<svg width="15" height="25" viewBox="0 0 15 25" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0.982942 13.3923L12.2253 24.631C12.7186 25.123 13.5179 25.123 14.0124 24.631C14.5057 24.1389 14.5057 23.3397 14.0124 22.8476L3.66178 12.5007L14.0112 2.15378C14.5045 1.66172 14.5045 0.862477 14.0112 0.369169C13.5179 -0.122894 12.7174 -0.122894 12.2241 0.369169L0.981696 11.6077C0.495966 12.0947 0.495966 12.9065 0.982942 13.3923Z" fill="white"/>
						</svg>
					</button>
					<button class="next" data-glide-dir="">
						<svg width="15" height="25" viewBox="0 0 15 25" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.0171 11.6077L2.77467 0.369029C2.28137 -0.123032 1.48213 -0.123032 0.987571 0.369029C0.494263 0.861093 0.494264 1.66033 0.987572 2.15239L11.3382 12.4993L0.98882 22.8462C0.495512 23.3383 0.495512 24.1375 0.98882 24.6308C1.48213 25.1229 2.28261 25.1229 2.77592 24.6308L14.0183 13.3923C14.504 12.9053 14.504 12.0935 14.0171 11.6077Z" fill="white"/>
						</svg>
					</button>

			</div>
		</div>
    </section>
		<!-- test end -->

<?php
    get_footer();
?>

