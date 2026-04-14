<style>
    /* =========================================
   Water Fill Preloader Styles (Inlined)
   ========================================= */
    #preloader-fill {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #0b057d;
        /* Brand Dark Blue */
        z-index: 2147483647;
        /* Max Z-Index */
        display: flex !important;
        justify-content: center;
        align-items: center;
        color: #fff;
        flex-direction: column;
        transition: opacity 0.8s ease-in-out, visibility 0.8s ease-in-out;
    }

    #preloader-fill.loaded {
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
    }

    .fill-loader-content {
        text-align: center;
        position: relative;
        z-index: 2;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* Logo Setup for Fill Effect */
    .logo-fill-wrapper {
        position: relative;
        width: 250px;
        height: 80px;
        margin-bottom: 40px;
    }

    .logo-base {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        opacity: 0.3;
        filter: brightness(0) invert(1);
    }

    .logo-base img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    /* The Filling Layer */
    .logo-fill-mask {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 0%;
        overflow: hidden;
        z-index: 2;
        animation: liquidFill 2.5s cubic-bezier(0.45, 0.05, 0.55, 0.95) forwards;
    }

    .logo-fill-mask img {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 80px;
        object-fit: contain;
        filter: brightness(0) invert(1) drop-shadow(0 0 10px rgba(255, 255, 255, 0.8));
    }

    /* Text Styles */
    .hello-wrapper-fill {
        height: auto;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .hello-text-fill {
        font-size: 2.5rem;
        font-weight: 700;
        letter-spacing: 1px;
        color: #fff;
        font-family: 'Karla', sans-serif;
        transform: translateY(100%);
        animation: textPopup 0.5s ease forwards 0.5s;
    }

    .subtext-fill {
        color: rgba(255, 255, 255, 0.7);
        font-size: 1rem;
        letter-spacing: 1px;
        opacity: 0;
        animation: fadeIn 1s ease forwards 1s;
    }

    /* Animations */
    @keyframes liquidFill {
        0% {
            height: 0%;
        }

        50% {
            height: 50%;
        }

        100% {
            height: 100%;
        }
    }

    @keyframes textPopup {
        to {
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        to {
            opacity: 1;
        }
    }
</style>

<div id="preloader-fill">
    <div class="fill-loader-content">
        <!-- Liquid Fill Logo -->
        <div class="logo-fill-wrapper">
            <!-- Base Layer (Empty/Dim) -->
            <div class="logo-base">
                <img src="<?php echo $base_url; ?>/assets/images/logo/logo.png" alt="Sabari Marine">
            </div>

            <!-- Fill Layer (Fills up) -->
            <div class="logo-fill-mask">
                <img src="<?php echo $base_url; ?>/assets/images/logo/logo.png" alt="Sabari Marine">
            </div>
        </div>
        <!-- Greeting -->
        <div class="hello-wrapper-fill">
            <div class="hello-text-fill">Sabari Marine</div>
        </div>
        <!-- Tagline -->
        <div class="subtext-fill">Excellence in Every Supply</div>
    </div>
</div>

<!-- Inline Script to force debugging if needed -->
<script>
    // Critical: Inline script to hide loader immediately on non-first visits
    /* DISABLED FOR TESTING - LOADER WILL SHOW EVERY TIME
    if (sessionStorage.getItem('sabari_loaded')) {
        var loader = document.getElementById("preloader-fill");
        if (loader) loader.style.display = "none";
    }
    */
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const preloader = document.getElementById("preloader-fill");

        // Session Check
        // const isFirstVisit = !sessionStorage.getItem('sabari_loaded');

        // FORCE SHOW FOR TESTING
        // if (!isFirstVisit) {
        //    preloader.style.display = 'none';
        //    return;
        // }

        // Logic for First Visit
        function removeLoader() {
            preloader.classList.add('loaded');
            // sessionStorage.setItem('sabari_loaded', 'true'); // Don't save session state during test
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 800);
        }

        // Fill Animation Duration
        window.addEventListener('load', () => {
            setTimeout(removeLoader, 3500);
        });

        // Fallback
        setTimeout(removeLoader, 8000);
    });
</script>