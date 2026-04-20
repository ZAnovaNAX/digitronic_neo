<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title><?php wp_title('|', true, 'right'); ?></title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script>
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "primary-container": "#3099ec",
                      "on-surface": "#1a1c1c",
                      "surface-container-high": "#e8e8e8",
                      "on-primary": "#ffffff",
                      "surface-bright": "#f9f9f9",
                      "surface-container-highest": "#e2e2e2",
                      "primary-fixed": "#d0e4ff",
                      "secondary": "#595f65",
                      "on-secondary": "#ffffff",
                      "primary": "#0062a0",
                      "surface-container-lowest": "#ffffff",
                      "surface-variant": "#e2e2e2",
                      "surface-container-low": "#f3f3f3",
                      "surface": "#f9f9f9"
              },
              fontFamily: {
                  body: ["Inter", "sans-serif"],
                  display: ["Manrope", "sans-serif"],
              }
            }
          }
        };
</script>
<style>
    .fade-in-up {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }
    .fade-in-up.visible {
        opacity: 1;
        transform: translateY(0);
    }
    .wp-block-group { margin-bottom: 2rem; }
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class("bg-[#f9f9f9] text-[#1a1c1c] font-body antialiased flex flex-col min-h-screen"); ?>>
<!-- TopNavBar -->
<nav class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-6 md:px-12 py-5 max-w-none bg-white/70 backdrop-blur-xl transition-all duration-300 ease-in-out font-['Manrope'] font-semibold tracking-tight">
    <div class="text-2xl font-extrabold tracking-tighter text-[#0062a0]">
        <a href="<?php echo home_url(); ?>">DIGITRONIC</a>
    </div>
    <div class="hidden md:flex gap-8 items-center">
        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'container' => false, 'menu_class' => 'flex gap-8 items-center text-[#595f65] font-semibold' ) ); ?>
    </div>
    <div class="flex gap-4">
        <a href="<?php echo home_url('/contact'); ?>" class="hidden md:block bg-gradient-to-br from-[#0062a0] to-[#3099ec] text-white px-6 py-2.5 rounded-full hover:shadow-lg hover:shadow-[#0062a0]/20 transition-all font-semibold">
            Стать партнером
        </a>
    </div>
</nav>
<div class="flex-grow pt-[88px]">
