<?php include 'includes/header.php'; ?>

        <!-- Trending Section -->
        <section class="py-16 px-4" data-aos="fade-up">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold mb-8">Trending Now</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                    <?php while ($novel = $trendingNovels->fetch(PDO::FETCH_ASSOC)): ?>
                        <div class="novel-card bg-[#3a3a3a] rounded-lg overflow-hidden shadow-lg">
                            <img src="<?php echo $novel['cover_image']; ?>" alt="<?php echo $novel['title']; ?>" class="w-full h-[300px] object-cover">
                            <div class="p-4">
                                <h3 class="novel-title text-lg font-semibold mb-2"><?php echo $novel['title']; ?></h3>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <?php echo number_format($novel['rating'], 1); ?>/5
                                    </span>
                                    <span><?php echo number_format($novel['views'] / 1000, 1); ?>K views</span>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>

        <!-- New Projects Section -->
        <section class="py-16 px-4 bg-[#3a3a3a]" data-aos="fade-up">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold mb-8">New Projects</h2>
                <div class="swiper new-projects-swiper">
                    <div class="swiper-wrapper">
                        <?php while ($novel = $newProjects->fetch(PDO::FETCH_ASSOC)): ?>
                            <div class="swiper-slide">
                                <div class="novel-card bg-[#2e2e2e] rounded-lg overflow-hidden shadow-lg">
                                    <img src="<?php echo $novel['cover_image']; ?>" alt="<?php echo $novel['title']; ?>" class="w-full h-[300px] object-cover">
                                    <div class="p-4">
                                        <h3 class="novel-title text-lg font-semibold mb-2"><?php echo $novel['title']; ?></h3>
                                        <div class="flex justify-between items-center text-sm">
                                            <span class="flex items-center">
                                                <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                                <?php echo number_format($novel['rating'], 1); ?>/5
                                            </span>
                                            <span><?php echo number_format($novel['views'] / 1000, 1); ?>K views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev text-[#2e2e2e]"></div>
                    <div class="swiper-button-next text-[#2e2e2e]"></div>
                </div>
            </div>
        </section>

        <!-- Latest Releases Section -->
        <section class="py-16 px-4" data-aos="fade-up">
            <div class="container mx-auto">
                <h2 class="text-3xl font-bold mb-8">Latest Releases</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <?php while ($novel = $latestReleases->fetch(PDO::FETCH_ASSOC)): ?>
                        <div class="novel-card bg-[#3a3a3a] rounded-lg overflow-hidden shadow-lg">
                            <img src="<?php echo $novel['cover_image']; ?>" alt="<?php echo $novel['title']; ?>" class="w-full h-[300px] object-cover">
                            <div class="p-4">
                                <h3 class="novel-title text-lg font-semibold mb-2"><?php echo $novel['title']; ?></h3>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 text-yellow-400 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <?php echo number_format($novel['rating'], 1); ?>/5
                                    </span>
                                    <span><?php echo number_format($novel['views'] / 1000, 1); ?>K views</span>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>

<?php include 'includes/footer.php'; ?>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true
        });

        // Initialize Swiper
        new Swiper('.new-projects-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });

        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html> 