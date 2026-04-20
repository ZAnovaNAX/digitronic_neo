</div>
<!-- Footer -->
<footer class="bg-[#1a1c1c] text-white py-24 px-6 md:px-12 rounded-t-[48px] mt-24">
    <div class="max-w-[1400px] mx-auto grid grid-cols-1 md:grid-cols-12 gap-12">
        <div class="md:col-span-5">
            <h3 class="text-3xl font-display font-extrabold tracking-tight mb-6">DIGITRONIC</h3>
            <p class="text-[#c3c7cc] max-w-sm mb-8 leading-relaxed">
                Самый крупный магазин ГБО в России. Высокие технологии и надежность, проверенная временем.
            </p>
            <div class="flex gap-4">
                <a href="tel:88007752523" class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition-colors">
                    <span class="material-symbols-outlined">call</span>
                </a>
            </div>
        </div>
        <div class="md:col-span-4 md:col-start-9">
            <h4 class="font-bold mb-6 text-[#9bcbff]">Контакты</h4>
            <ul class="space-y-4 text-[#c3c7cc]">
                <li>8 800 775 25 23</li>
                <li>8 495 255 27 23</li>
                <li class="text-sm">Москва, ул. Дегунинская, д.1 корп. 2</li>
            </ul>
        </div>
    </div>
    <div class="max-w-[1400px] mx-auto mt-24 pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center text-sm text-[#919499]">
        <p>© <?php echo date('Y'); ?> «DIGITRONIC». Все права защищены.</p>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-in-up, .wp-block-group').forEach((el) => {
        el.classList.add('fade-in-up');
        observer.observe(el);
    });
});
</script>
<?php wp_footer(); ?>
</body>
</html>
