<?php
/*
Template Name: О короновирусе
*/

?>

<?php
    get_header();
?>



	
<div class="container">
<div class="newstime">
<h1 class="newstimes-1_title"><?php the_field('newstimes-1'); ?></h1> 
<div class="container toys">
        <h2 class="subtitle"><?php the_field('newstimes-1'); ?></h2>
        <div class="toys__wrapper">

            <?php 
                $posts = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'news',
                    'orderby'     => 'date',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                foreach( $posts as $post ){
                    setup_postdata($post);
                    ?>
                    <div class="toys__item" style="background-image: url(<?php 
                        if(has_post_thumbnail()) {
                            the_post_thumbnail_url();
                        } else {
                            echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                        }
                        ?>)">
                        <div class="toys__item-info">
                            <div class="toys__item-title"><?php the_field('newstimes-1'); ?></div>
                            <div class="toys__item-descr">
                                <?php the_field('toys_descr'); ?>                            
                            </div>
                            <a href="<?php echo get_permalink(); ?>" class="minibutton toys__trigger">Подробнее</a>
                        </div>
                    </div>
                <?php
                }

                wp_reset_postdata(); // сброс
            ?>
        </div>
		<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mask' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mask' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
</div>
</div>
</div>
<?php
    get_footer();
?>    