<?php get_header(); ?>

<main>
    <div class="container-fluid colunistas"></div>
    <div class="container content-single">
        <?php 
            if(have_posts()) :
            while (have_posts()) : the_post(); 
            ?>
        <p><?php the_content(); ?></p>
        <?php 
            endwhile;
              endif;          
                 ?>
    </div>
</main>

<?php get_template_part('content','pagecolunistas') ?>

<?php get_footer(); ?>