<?php
get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

        <?php
        while ( have_post() ) :
            the_post();

            get_template_part( 'template-parts/content', get_posts_type() );

        endwhile; // end of the loop
        ?>
        
        </main>

    </div>
    
<?php
get_footer();