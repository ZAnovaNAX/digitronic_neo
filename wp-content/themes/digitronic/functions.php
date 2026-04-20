<?php
function digitronic_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'menu-1' => esc_html__( 'Primary', 'digitronic' ),
    ) );
}
add_action( 'after_setup_theme', 'digitronic_setup' );

function digitronic_scripts() {
    wp_enqueue_style( 'digitronic-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'digitronic_scripts' );

function digitronic_create_post_type_products() {
    register_post_type( 'product',
        array(
            'labels' => array(
                'name'          => __( 'Товары', 'digitronic' ),
                'singular_name' => __( 'Товар', 'digitronic' ),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports'    => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
            'menu_icon'   => 'dashicons-cart',
            'show_in_rest'=> true, // Enable Gutenberg for CPT
        )
    );
}
add_action( 'init', 'digitronic_create_post_type_products' );

/**
 * Register shortcode to display products in Gutenberg blocks
 */
function digitronic_products_shortcode($atts) {
    ob_start();
    $query = new WP_Query(array(
        'post_type' => 'product',
        'posts_per_page' => 12,
    ));

    if ($query->have_posts()) {
        echo '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">';
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <a href="<?php the_permalink(); ?>" class="group block fade-in-up">
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100">
                    <div class="aspect-square bg-slate-50 relative overflow-hidden flex items-center justify-center p-6">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium', ['class' => 'object-contain max-h-full transition-transform duration-500 group-hover:scale-110']); ?>
                        <?php else : ?>
                            <span class="material-symbols-outlined text-6xl text-slate-300">inventory_2</span>
                        <?php endif; ?>
                    </div>
                    <div class="p-6">
                        <div class="text-xs font-bold text-blue-600 mb-2 tracking-wider uppercase">DIGITRONIC</div>
                        <h3 class="font-headline font-bold text-slate-800 text-lg mb-2 line-clamp-2"><?php the_title(); ?></h3>
                        <div class="text-slate-500 text-sm line-clamp-2 mb-4">
                            <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                        </div>
                        <div class="text-blue-600 font-medium flex items-center text-sm">
                            Подробнее <span class="material-symbols-outlined ml-1 text-sm">arrow_forward</span>
                        </div>
                    </div>
                </div>
            </a>
            <?php
        }
        echo '</div>';
        wp_reset_postdata();
    } else {
        echo '<p class="text-slate-500">Товары пока не добавлены.</p>';
    }

    return ob_get_clean();
}
add_shortcode('digitronic_products', 'digitronic_products_shortcode');
