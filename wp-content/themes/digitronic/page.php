<?php
get_header();
?>
<div class="fade-in-up container mx-auto px-6 md:px-12 py-24">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="mb-12">
                    <h1 class="text-4xl md:text-5xl font-display font-extrabold text-[#1a1c1c] tracking-tight mb-4"><?php the_title(); ?></h1>
                    <div class="w-20 h-1 bg-gradient-to-r from-primary to-primary-container rounded-full"></div>
                </header>
                <div class="prose max-w-none text-lg text-on-surface-variant leading-relaxed">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
    endif;
    ?>
</div>
<?php
get_footer();
