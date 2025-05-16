</main>

<!-- Footer -->
<footer class="bg-[#2e2e2e] py-12 mt-auto">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <!-- Onsen Hub + Social -->
            <div>
                <h3 class="text-2xl font-bold mb-6">Onsen Hub</h3>
                <div class="flex justify-center space-x-4 mb-6">
                    <a href="#" class="bg-gray-400 bg-opacity-30 rounded-full p-2 hover:bg-opacity-50 transition-colors" aria-label="Instagram">
                        <svg class="w-5 h-5 text-gray-200" fill="currentColor" viewBox="0 0 24 24"><path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2zm0 1.5A4.25 4.25 0 0 0 3.5 7.75v8.5A4.25 4.25 0 0 0 7.75 20.5h8.5a4.25 4.25 0 0 0 4.25-4.25v-8.5A4.25 4.25 0 0 0 16.25 3.5zm4.25 2.25a6.25 6.25 0 1 1 0 12.5 6.25 6.25 0 0 1 0-12.5zm0 1.5a4.75 4.75 0 1 0 0 9.5 4.75 4.75 0 0 0 0-9.5zm5.25 1.25a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/></svg>
                    </a>
                    <a href="#" class="bg-gray-400 bg-opacity-30 rounded-full p-2 hover:bg-opacity-50 transition-colors" aria-label="Facebook">
                        <svg class="w-5 h-5 text-gray-200" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
                    </a>
                    <a href="#"-unit class="bg-gray-400 bg-opacity-30 rounded-full p-2 hover:bg-opacity-50 transition-colors" aria-label="YouTube">
                        <svg class="w-5 h-5 text-gray-200" fill="currentColor" viewBox="0 0 24 24"><path d="M21.8 8.001a2.752 2.752 0 0 0-1.936-1.946C18.012 6 12 6 12 6s-6.012 0-7.864.055A2.752 2.752 0 0 0 2.2 8.001C2 9.854 2 12 2 12s0 2.146.2 3.999a2.752 2.752 0 0 0 1.936 1.946C5.988 18 12 18 12 18s6.012 0 7.864-.055a2.752 2.752 0 0 0 1.936-1.946C22 14.146 22 12 22 12s0-2.146-.2-3.999zM10 15.5v-7l6 3.5-6 3.5z"/></svg>
                    </a>
                </div>
                <p class="text-gray-400 text-sm">© <?php echo date('Y'); ?> Onsen Hub</p>
            </div>
            <!-- Contacts -->
            <div>
                <h3 class="text-2xl font-bold mb-6">Contacts</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-400 hover:text-gray-200 transition-colors">Help & Service</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-gray-200 transition-colors">Vulnerability Report</a></li>
                </ul>
            </div>
            <!-- Resources -->
            <div>
                <h3 class="text-2xl font-bold mb-6">Resources</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-400 hover:text-gray-200 transition-colors">Be an Author</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-gray-200 transition-colors">Privacy Policy</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-gray-200 transition-colors">Terms of Service</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

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

    // Mobile menu toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('active');
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
        if (!mobileMenu.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
            mobileMenu.classList.remove('active');
        }
    });
</script>
</body>
</html>