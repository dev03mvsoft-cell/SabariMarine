/**
 * Main JavaScript for Sabari Merine
 * Displacement Slider using Three.js and GSAP
 */

const displacementSlider = function (opts) {

    let vertex = `
        varying vec2 vUv;
        void main() {
          vUv = uv;
          gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
        }
    `;

    let fragment = `
        varying vec2 vUv;

        uniform sampler2D currentImage;
        uniform sampler2D nextImage;

        uniform float dispFactor;

        void main() {
            vec2 uv = vUv;
            vec4 _currentImage;
            vec4 _nextImage;
            float intensity = 0.3;

            vec4 orig1 = texture2D(currentImage, uv);
            vec4 orig2 = texture2D(nextImage, uv);
            
            _currentImage = texture2D(currentImage, vec2(uv.x, uv.y + dispFactor * (orig2.r * intensity)));
            _nextImage = texture2D(nextImage, vec2(uv.x, uv.y + (1.0 - dispFactor) * (orig1.r * intensity)));

            vec4 finalTexture = mix(_currentImage, _nextImage, dispFactor);

            gl_FragColor = finalTexture;
        }
    `;

    let images = opts.images,
        image, sliderImages = [];
    let canvasWidth = images[0].clientWidth;
    let canvasHeight = images[0].clientHeight;
    let parent = opts.parent;
    let renderWidth = parent.offsetWidth;
    let renderHeight = parent.offsetHeight;

    let renderer = new THREE.WebGLRenderer({
        antialias: false,
    });

    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setClearColor(0xffffff, 1.0);
    renderer.setSize(renderWidth, renderHeight);
    parent.appendChild(renderer.domElement);

    let loader = new THREE.TextureLoader();
    loader.crossOrigin = "anonymous";

    images.forEach((img) => {
        image = loader.load(img.getAttribute('src') + '?v=' + Date.now());
        image.magFilter = image.minFilter = THREE.LinearFilter;
        image.anisotropy = renderer.capabilities.getMaxAnisotropy();
        sliderImages.push(image);
    });

    let scene = new THREE.Scene();
    scene.background = new THREE.Color(0xffffff);
    let camera = new THREE.OrthographicCamera(
        renderWidth / -2,
        renderWidth / 2,
        renderHeight / 2,
        renderHeight / -2,
        1,
        1000
    );

    camera.position.z = 1;

    let mat = new THREE.ShaderMaterial({
        uniforms: {
            dispFactor: { type: "f", value: 0.0 },
            currentImage: { type: "t", value: sliderImages[0] },
            nextImage: { type: "t", value: sliderImages[1] },
        },
        vertexShader: vertex,
        fragmentShader: fragment,
        transparent: true,
        opacity: 1.0
    });

    let geometry = new THREE.PlaneGeometry(
        renderWidth,
        renderHeight,
        1
    );
    let object = new THREE.Mesh(geometry, mat);
    object.position.set(0, 0, 0);
    scene.add(object);

    let addEvents = function () {
        let pagButtons = Array.from(document.getElementById('pagination').querySelectorAll('button'));
        let isAnimating = false;
        let currentSlide = 0;
        let autoPlayInterval;

        const changeSlide = function (button, slideId) {
            if (isAnimating) return;
            isAnimating = true;

            document.querySelector('#pagination .active').classList.remove('active');
            button.classList.add('active');
            currentSlide = slideId;

            mat.uniforms.nextImage.value = sliderImages[slideId];
            mat.uniforms.nextImage.needsUpdate = true;

            gsap.to(mat.uniforms.dispFactor, {
                value: 1,
                duration: 1,
                ease: 'expo.inOut',
                onComplete: function () {
                    mat.uniforms.currentImage.value = sliderImages[slideId];
                    mat.uniforms.currentImage.needsUpdate = true;
                    mat.uniforms.dispFactor.value = 0.0;
                    isAnimating = false;
                }
            });

            let slideTitleEl = document.getElementById('slide-title');
            let slideStatusEl = document.getElementById('slide-status');
            let nextSlideTitle = document.querySelectorAll(`[data-slide-title="${slideId}"]`)[0].innerHTML;
            let nextSlideStatus = document.querySelectorAll(`[data-slide-status="${slideId}"]`)[0].innerHTML;

            gsap.fromTo(slideTitleEl, {
                autoAlpha: 1,
                y: 0
            }, {
                autoAlpha: 0,
                y: 20,
                duration: 0.5,
                ease: 'expo.in',
                onComplete: function () {
                    slideTitleEl.innerHTML = nextSlideTitle;
                    gsap.to(slideTitleEl, {
                        autoAlpha: 1,
                        y: 0,
                        duration: 0.5
                    });
                }
            });

            gsap.fromTo(slideStatusEl, {
                autoAlpha: 1,
                y: 0
            }, {
                autoAlpha: 0,
                y: 20,
                duration: 0.5,
                ease: 'expo.in',
                onComplete: function () {
                    slideStatusEl.innerHTML = nextSlideStatus;
                    gsap.to(slideStatusEl, {
                        autoAlpha: 1,
                        y: 0,
                        duration: 0.5,
                        delay: 0.1
                    });
                }
            });
        };

        const startAutoPlay = function () {
            autoPlayInterval = setInterval(() => {
                let nextSlide = (currentSlide + 1) % pagButtons.length;
                changeSlide(pagButtons[nextSlide], nextSlide);
            }, 3000); // 0.9 seconds
        };

        const resetAutoPlay = function () {
            clearInterval(autoPlayInterval);
            startAutoPlay();
        };

        pagButtons.forEach((el) => {
            el.addEventListener('click', function () {
                let slideId = parseInt(this.dataset.slide, 10);
                if (slideId !== currentSlide) {
                    changeSlide(this, slideId);
                    resetAutoPlay();
                }
            });
        });

        startAutoPlay();
    };

    addEvents();

    window.addEventListener('resize', function (e) {
        let w = parent.offsetWidth;
        let h = parent.offsetHeight;
        renderer.setSize(w, h);

        camera.left = w / -2;
        camera.right = w / 2;
        camera.top = h / 2;
        camera.bottom = h / -2;
        camera.updateProjectionMatrix();

        object.geometry = new THREE.PlaneGeometry(w, h, 1);
    });

    let animate = function () {
        requestAnimationFrame(animate);
        renderer.render(scene, camera);
    };
    animate();
};

// Initialize everything
imagesLoaded(document.querySelectorAll('img'), () => {
    document.body.classList.remove('loading');

    const el = document.getElementById('slider');
    if (el) {
        const imgs = Array.from(el.querySelectorAll('img'));
        new displacementSlider({
            parent: el,
            images: imgs
        });
    }
});

// Mobile Menu Toggle
const burger = document.getElementById('burger-menu');
const nav = document.getElementById('nav-menu');

if (burger) {
    burger.addEventListener('click', () => {
        burger.classList.toggle('active');
        nav.classList.toggle('open');
        // Prevent body scroll when menu is open
        document.body.style.overflow = nav.classList.contains('open') ? 'hidden' : 'auto';
    });
}

// Mobile Dropdown Toggle
const dropdownTrigger = document.querySelector('.dropdown-trigger');
const dropdownParent = document.querySelector('.nav-item-dropdown');

if (dropdownTrigger && dropdownParent) {
    dropdownTrigger.addEventListener('click', function (e) {
        // Only activate toggle on mobile/tablet view
        if (window.innerWidth <= 800) { // Updated to match CSS break point
            e.preventDefault();
            dropdownParent.classList.toggle('mobile-open');

            /* JS no longer manages display directly, CSS handles max-height transition
            const megaMenu = dropdownParent.querySelector('.mega-menu');
            if (megaMenu) {
                if (dropdownParent.classList.contains('mobile-open')) {
                    megaMenu.style.display = 'block';
                } else {
                    megaMenu.style.display = 'none';
                }
            } */
        }
    });
}

// Close mobile menu on link click
const navLinks = document.querySelectorAll('#nav-menu a:not(.dropdown-trigger)');
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        if (nav.classList.contains('open')) {
            burger.classList.remove('active');
            nav.classList.remove('open');
            document.body.style.overflow = 'auto';
        }
    });
});

// Initialize AOS
AOS.init({
    duration: 1000,
    once: true,
    offset: 100
});

// Products Swiper
var productsSwiper = new Swiper(".products-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
    },
});

// Dynamic Collage Image Swapper
document.addEventListener("DOMContentLoaded", function () {
    const collageImages = document.querySelectorAll('.collage-item img');

    // Pool of available images (excluding the ones initially set if you want strictly unique)
    // or just all available images to pick from.
    const basePath = window.SITE_BASE_PATH || '';
    const imagePool = [
        basePath + 'assets/images/gallery/sabari011.jpg',
        basePath + 'assets/images/gallery/sabari0110.jpg',
        basePath + 'assets/images/gallery/sabari0111.jpg',
        basePath + 'assets/images/about/sabari0112.jpg',
        basePath + 'assets/images/gallery/sabari0113.jpg',
        basePath + 'assets/images/gallery/sabari0114.jpg',
        basePath + 'assets/images/gallery/sabari0115.jpg',
        basePath + 'assets/images/gallery/sabari0116.jpg',
        basePath + 'assets/images/sabari0117.jpg',
        basePath + 'assets/images/sabari0118.jpg',
        basePath + 'assets/images/sabari0119.jpg',
        basePath + 'assets/images/gallery/sabari0120.jpg',
        basePath + 'assets/images/sabari013.jpg',
        basePath + 'assets/images/gallery/sabari014.jpg',
        basePath + 'assets/images/gallery/sabari015.jpg',
        basePath + 'assets/images/gallery/sabari016.jpg',
        basePath + 'assets/images/gallery/sabari017.jpg',
        basePath + 'assets/images/gallery/sabari018.jpg',
        basePath + 'assets/images/gallery/sabari019.jpg'
    ];

    if (collageImages.length > 0) {
        function getRandomImage(excludeSrc) {
            // Filter out the currently displayed image
            let available = imagePool.filter(src => src !== excludeSrc);

            // Also strictly filter out images currently visible in ANY slot to avoid duplicates?
            const currentVisible = Array.from(collageImages).map(img => img.getAttribute('src'));
            available = imagePool.filter(src => !currentVisible.includes(src));

            if (available.length === 0) return imagePool[Math.floor(Math.random() * imagePool.length)];

            const randomIndex = Math.floor(Math.random() * available.length);
            return available[randomIndex];
        }

        function swapRandomImage() {
            // Pick a random grid slot
            const slotIndex = Math.floor(Math.random() * collageImages.length);
            const imgElement = collageImages[slotIndex];

            if (!imgElement || typeof imgElement.getAttribute !== 'function') return;

            // Get new unique image
            const currentSrc = imgElement.getAttribute('src');
            const newSrc = getRandomImage(currentSrc);

            // Preload image to ensure smooth transition
            const tempImg = new Image();
            tempImg.src = newSrc;
            tempImg.onload = () => {
                // Animate Swap: Pop Out
                gsap.to(imgElement, {
                    scale: 0.5,
                    opacity: 0,
                    duration: 0.4,
                    ease: "back.in(1.7)",
                    onComplete: () => {
                        imgElement.src = newSrc;
                        // Animate Swap: Pop In
                        gsap.fromTo(imgElement,
                            { scale: 0.5, opacity: 0 },
                            {
                                scale: 1,
                                opacity: 1,
                                duration: 1,
                                ease: "elastic.out(1, 0.6)"
                            }
                        );
                    }
                });
            }
        }

        // Start swapping every 0.9 seconds
        setInterval(swapRandomImage, 900);
    }

    // FAQ Background Slider
    const faqBg = document.querySelector('.faq-bg');
    if (faqBg) {
        const faqImages = [
            basePath + 'assets/images/sabari013.jpg',
            basePath + 'assets/images/sabari0118.jpg',
            basePath + 'assets/images/sabari0119.jpg',
            basePath + 'assets/images/sabari0117.jpg',
            basePath + 'assets/images/about/sabari0112.jpg'
        ];
        let currentFaqIndex = 0;

        function nextFaqBg() {
            currentFaqIndex = (currentFaqIndex + 1) % faqImages.length;

            // Preload next image
            const img = new Image();
            img.src = faqImages[currentFaqIndex];
            img.onload = () => {
                faqBg.style.backgroundImage = `url(${faqImages[currentFaqIndex]})`;
            };
        }

        // Change background every 3 seconds
        setInterval(nextFaqBg, 3000);
    }
});

// Unique 3D Contact Section Animations
document.addEventListener("DOMContentLoaded", function () {
    const contactSection = document.querySelector('.contact-unique-section');
    const mainImg = document.querySelector('.supplies-main-img');
    const orbs = document.querySelectorAll('.glow-orb');

    // Gallery Premium Slider (Removed - Reverted to Grid)

    if (contactSection && mainImg) {
        // Mouse Move Parallax for 3D Main Image
        contactSection.addEventListener('mousemove', (e) => {
            const { clientX, clientY } = e;

            const x = (clientX / window.innerWidth - 0.5) * 2; // -1 to 1
            const y = (clientY / window.innerHeight - 0.5) * 2;

            // Move Main Image
            gsap.to(mainImg, {
                x: x * 20,
                y: y * 20,
                rotationY: x * 10,
                rotationX: -y * 10,
                ease: 'power2.out',
                duration: 1
            });

            // Move Orbs in opposite direction
            if (orbs.length > 0) {
                orbs.forEach((orb, index) => {
                    const depth = (index + 1) * 15;
                    gsap.to(orb, {
                        x: -x * depth,
                        y: -y * depth,
                        ease: 'power2.out',
                        duration: 1.2
                    });
                });
            }
        });

        // Drift Orbs Randomly
        if (orbs.length > 0) {
            orbs.forEach((orb) => {
                function drift() {
                    gsap.to(orb, {
                        x: "random(-50, 50)",
                        y: "random(-50, 50)",
                        duration: "random(3, 6)",
                        ease: "sine.inOut",
                        onComplete: drift
                    });
                }
                drift();
            });
        }
    }

    // Input Focus Animations
    const inputs = document.querySelectorAll('.input-group-modern input, .input-group-modern textarea');
    inputs.forEach(input => {
        input.addEventListener('focus', () => {
            gsap.to(input.nextElementSibling, {
                width: '100%',
                duration: 0.4
            });
        });
        input.addEventListener('blur', () => {
            if (input.value === '') {
                gsap.to(input.nextElementSibling, {
                    width: '0%',
                    duration: 0.4
                });
            }
        });
    });
});

// Premium CTA Scroll Animation
document.addEventListener("DOMContentLoaded", function () {
    const ctaTarget = document.getElementById('cta-animate-target');
    if (ctaTarget) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Start GSAP Animation
                    const tl = gsap.timeline();
                    tl.to(ctaTarget.querySelectorAll('.reveal-text'), {
                        opacity: 1,
                        y: 0,
                        duration: 0.8,
                        stagger: 0.2,
                        ease: "power3.out"
                    })
                        .to(ctaTarget.querySelector('.reveal-btn'), {
                            opacity: 1,
                            scale: 1,
                            duration: 0.6,
                            ease: "back.out(1.7)"
                        }, "-=0.4");

                    observer.unobserve(ctaTarget);
                }
            });
        }, { threshold: 0.3 });

        observer.observe(ctaTarget);
    }
});

// Premium Gallery Lightbox Logic
document.addEventListener("DOMContentLoaded", function () {
    const lightbox = document.getElementById('gallery-lightbox');
    if (!lightbox) return;

    const galleryItems = document.querySelectorAll('.gallery-item, .gallery-card');
    const lightboxImage = lightbox.querySelector('.lightbox-image');
    const lightboxTitle = lightbox.querySelector('.lightbox-title');
    const lightboxDesc = lightbox.querySelector('.lightbox-desc');
    const closeBtn = lightbox.querySelector('.lightbox-close');
    const nextBtn = lightbox.querySelector('.lightbox-nav.next');
    const prevBtn = lightbox.querySelector('.lightbox-nav.prev');
    const backdrop = lightbox.querySelector('.lightbox-backdrop');
    const imgWrapper = lightbox.querySelector('.lightbox-image-container');

    let currentIndex = 0;
    const imagesData = [];

    // Collect Data from all gallery items
    galleryItems.forEach((item, index) => {
        const img = item.querySelector('img');
        if (!img) return; // Skip if no image found

        const title = item.querySelector('h3, h4, h5');
        const desc = item.querySelector('p');

        imagesData.push({
            src: img.getAttribute('src'),
            title: title ? title.innerText : 'Sabari Marine Enterprise',
            desc: desc ? desc.innerText : 'Quality Supply Operations'
        });

        // Open Lightbox on Click
        item.addEventListener('click', () => {
            currentIndex = index;
            openLightbox();
        });
    });

    function openLightbox() {
        updateLightbox();
        lightbox.classList.add('active');
        document.body.style.overflow = 'hidden'; // Prevent scroll

        // GSAP Intro
        gsap.fromTo(backdrop, { opacity: 0 }, { opacity: 1, duration: 0.5 });
        gsap.fromTo(imgWrapper, { scale: 0.8, opacity: 0 }, { scale: 1, opacity: 1, duration: 0.6, ease: "back.out(1.7)" });
    }

    function closeLightbox() {
        gsap.to(lightbox, {
            opacity: 0,
            duration: 0.4,
            onComplete: () => {
                lightbox.classList.remove('active');
                lightbox.style.opacity = 1;
                document.body.style.overflow = '';
            }
        });
    }

    function updateLightbox() {
        const item = imagesData[currentIndex];

        // Add "flipping" animation class
        imgWrapper.classList.remove('flipping');
        void imgWrapper.offsetWidth; // Trigger reflow
        imgWrapper.classList.add('flipping');

        lightboxImage.src = item.src;
        lightboxTitle.innerText = item.title;
        lightboxDesc.innerText = item.desc;
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % imagesData.length;
        gsap.set(imgWrapper, { x: 0 }); // Reset drag position
        updateLightbox();
    }

    function prevImage() {
        currentIndex = (currentIndex - 1 + imagesData.length) % imagesData.length;
        gsap.set(imgWrapper, { x: 0 }); // Reset drag position
        updateLightbox();
    }

    // --- Mouse Swipe / Drag Logic ---
    let isDragging = false;
    let startPos = 0;
    let currentTranslate = 0;
    let prevTranslate = 0;
    let animationID;

    // Prevent default drag ghost image
    lightboxImage.addEventListener('dragstart', (e) => e.preventDefault());
    imgWrapper.style.cursor = 'grab';

    function touchStart(event) {
        isDragging = true;
        startPos = getPositionX(event);
        animationID = requestAnimationFrame(animation);
        imgWrapper.style.cursor = 'grabbing';
        imgWrapper.style.transition = 'none'; // Disable CSS transition for direct 1:1 movement
    }

    function touchEnd() {
        isDragging = false;
        cancelAnimationFrame(animationID);
        imgWrapper.style.cursor = 'grab';

        const movedBy = currentTranslate - prevTranslate;

        // Threshold for swipe action
        if (movedBy < -100) {
            nextImage();
        } else if (movedBy > 100) {
            prevImage();
        } else {
            // Snap back if not enough movement
            gsap.to(imgWrapper, { x: 0, duration: 0.3, ease: 'power2.out' });
        }

        // Reset tracking
        currentTranslate = 0;
        prevTranslate = 0;
    }

    function touchMove(event) {
        if (isDragging) {
            const currentPosition = getPositionX(event);
            currentTranslate = prevTranslate + currentPosition - startPos;
        }
    }

    function getPositionX(event) {
        return event.type.includes('mouse') ? event.pageX : event.touches[0].clientX;
    }

    function animation() {
        if (isDragging) {
            gsap.set(imgWrapper, { x: currentTranslate });
            requestAnimationFrame(animation);
        }
    }

    // Mouse Events
    imgWrapper.addEventListener('mousedown', touchStart);
    imgWrapper.addEventListener('mousemove', touchMove);
    imgWrapper.addEventListener('mouseup', touchEnd);
    imgWrapper.addEventListener('mouseleave', () => { if (isDragging) touchEnd() });

    // Touch Events
    imgWrapper.addEventListener('touchstart', touchStart, { passive: true });
    imgWrapper.addEventListener('touchmove', touchMove, { passive: true });
    imgWrapper.addEventListener('touchend', touchEnd);

    // Event Listeners
    closeBtn.addEventListener('click', closeLightbox);
    backdrop.addEventListener('click', closeLightbox);

    const handleNext = (e) => {
        e.preventDefault();
        e.stopPropagation();
        nextImage();
    };

    const handlePrev = (e) => {
        e.preventDefault();
        e.stopPropagation();
        prevImage();
    };

    nextBtn.addEventListener('click', handleNext);
    prevBtn.addEventListener('click', handlePrev);

    // Keyboard Support
    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('active')) return;

        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowRight') nextImage();
        if (e.key === 'ArrowLeft') prevImage();
    });
});
