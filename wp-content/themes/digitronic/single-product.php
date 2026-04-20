<?php get_header(); ?>
<div class="fade-in-up container mx-auto px-6 md:px-12 py-24">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            ?>
<section class="py-24 bg-surface relative overflow-hidden">
    <div class="container mx-auto px-6 md:px-12 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="relative group">
                <div class="absolute -inset-4 bg-gradient-to-br from-[#d0e4ff] to-[#e8e8e8] rounded-[2rem] blur-xl opacity-50 group-hover:opacity-70 transition-opacity duration-500"></div>
                <div class="relative bg-white rounded-3xl p-8 border border-gray-200 shadow-[0_40px_80px_rgba(26,28,28,0.06)] h-[500px] flex items-center justify-center overflow-hidden">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large', ['class' => 'object-contain max-h-full transition-transform duration-700 group-hover:scale-105']); ?>
                    <?php else : ?>
                        <span class="material-symbols-outlined text-9xl text-slate-200">precision_manufacturing</span>
                    <?php endif; ?>
                </div>
            </div>
            <div>
                <h1 class="font-headline text-5xl md:text-6xl font-extrabold tracking-tight text-on-surface mb-6 leading-tight">
                    <?php the_title(); ?>
                </h1>
                <div class="w-20 h-1 bg-gradient-to-r from-[#0062a0] to-[#3099ec] mb-8 rounded-full"></div>
                <div class="prose prose-lg text-[#595f65] max-w-none font-body leading-relaxed mb-8">
                    <?php the_content(); ?>
                </div>
                <div class="flex flex-wrap gap-4 mt-8">
                    <button class="bg-gradient-to-br from-[#0062a0] to-[#3099ec] text-white px-8 py-4 rounded-full font-headline font-bold text-lg hover:shadow-[0_10px_30px_rgba(0,98,160,0.3)] transition-all duration-300 hover:-translate-y-1">
                        Заказать звонок
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
            <?php
        endwhile;
    endif;
    ?>
</div>
<?php get_footer(); ?>
