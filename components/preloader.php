<div id="preloader">
    <div class="loader-content">
        <!-- Logo -->
        <div class="logo-reflector">
            <img src="<?php echo $base_url; ?>/assets/images/logo/logo.png" class="loader-logo" alt="Sabari Marine">
        </div>

        <!-- Multilingual Hello -->
        <div class="hello-wrapper">
            <div id="helloText" class="hello-text">Hello</div>
        </div>

        <!-- Tagline -->
        <div class="loader-subtext">We provide solutions that make your journey easy and reliable.</div>
    </div>
</div>
<script>
    // Critical: Inline script to hide loader immediately on non-first visits
    if (sessionStorage.getItem('sabari_loaded')) {
        var loader = document.getElementById("preloader");
        if (loader) loader.style.display = "none";
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const preloader = document.getElementById("preloader");

        // 1. Check if user has already visited in this session
        const isFirstVisit = !sessionStorage.getItem('sabari_loaded');

        if (!isFirstVisit) {
            // Not first visit: Hide loader immediately and stop everything
            preloader.style.display = 'none';
            return;
        }

        // --- Logic below only runs for the FIRST visit ---

        const hellos = [
            "Hello", // English
            "नमस्ते", // Hindi
            "வணக்கம்", // Tamil
            "Hola", // Spanish
            "Bonjour", // French
            "Guten Tag", // German
            "Ciao", // Italian
            "سلام", // Arabic
            "こんにちは", // Japanese
            "你好" // Chinese
        ];

        const helloEl = document.getElementById("helloText");
        let index = 0;

        // Function to cycle text
        function cycleText() {
            helloEl.classList.remove("visible");
            void helloEl.offsetWidth; // Trigger reflow

            helloEl.textContent = hellos[index];
            helloEl.classList.add("visible");

            index = (index + 1) % hellos.length;
        }

        // Start cycle immediately
        cycleText();
        const interval = setInterval(cycleText, 1200);

        // Fade out logic
        function removeLoader() {
            clearInterval(interval);
            preloader.classList.add('loaded');
            // Mark as visited so it doesn't show again in this session
            sessionStorage.setItem('sabari_loaded', 'true');

            // Remove from DOM after transition
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 800);
        }

        // First visit delay: 4 seconds (standard)
        // You can increase this if you want longer intial branding
        const minTime = 4000;

        window.addEventListener('load', () => {
            setTimeout(removeLoader, minTime);
        });

        // Fallback in case window.load doesn't fire fast enough
        setTimeout(removeLoader, 9000);
    });
</script>