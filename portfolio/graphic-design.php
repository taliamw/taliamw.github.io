<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio | Software Development Projects</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/responsive.css">
</head>

<body>
    <!-- Navbar header section -->
    <header class="header">
        <nav class="navbar">
            <div class="logo">
                <h2 class="logo-heading">Natalia Mwangi</h2>
            </div>
            <div class="hamburger" id="hamburger">
                <i class="fas fa-bars hamburger-icon"></i>
                <i class="fas fa-times cross-icon"></i>
            </div>
            <div class="menu">
                <ul class="menu-list">
                    <li class="menu-list-items">
                        <a class="links" href="../index.html#home">
                            Home
                        </a>
                    </li>
                    <li class="menu-list-items">
                        <a class="links" href="../index.html#portfolio">
                            Portfolio
                        </a>
                    </li>
                    <li class="menu-list-items">
                        <a class="links" href="../index.html#about">
                            About
                        </a>
                    </li>
                    <li class="menu-list-items">
                        <a class="links" href="../index.html#services">
                            Services
                        </a>
                    </li>
                    <li class="menu-list-items">
                        <a class="links" href="../index.html#contact">
                            Contact Me
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="gallery-section">
    <br>
    <h2 class="text-center blue-text">My Graphic Design Gallery</h2>

    <!-- Gallery Section -->
    <div class="gallery">
        <?php
        $folderPath = "../images/gallery/";
        $images = glob($folderPath . "*.{jpg,jpeg,png,gif}", GLOB_BRACE); // Fetch images with common extensions
        foreach ($images as $image) {
            echo '<div class="gallery-item">';
            echo '<img src="' . $image . '" class="gallery-image" alt="Graphic Design Work">';
            echo '</div>';
        }
        ?>
    </div>
    <!-- Add more gallery items as needed -->


    <!-- Lightbox -->
    <div id="lightbox" class="lightbox">
        <span class="close" onclick="closeLightbox()">&times;</span>
        <img class="lightbox-content" id="lightbox-img" alt="Enlarged Design">
    </div>

    <script>
        // Open Lightbox
        function openLightbox(src) {
            document.getElementById("lightbox").style.display = "flex";
            document.getElementById("lightbox-img").src = src;
        }

        // Close Lightbox
        function closeLightbox() {
            document.getElementById("lightbox").style.display = "none";
        }

        // Add Event Listeners to Gallery Images
        const images = document.querySelectorAll(".gallery-image");
        images.forEach(img => {
            img.addEventListener("click", () => openLightbox(img.src));
        });
    </script>
</div>
    </div>
    <!-- Footer section -->
    <footer class="footer">
        <div class="footer-content text-center">
            <h4>
                Copyright © 2025 All rights reserved
            </h4>
            <h4>Natalia Mwangi</h4>
            <div class="social-links">
                <div class="footer-menu">
                    <ul class="footer-menu-list">
                        <li class="footer-list-items">
                            <a class="footer-links" href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="footer-list-items">
                            <a class="footer-links" href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="footer-list-items">
                            <a class="footer-links" href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="footer-list-items">
                            <a class="footer-links" href="https://github.com/taliamw">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"
        integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
        </script>
    <script src="script.js"></script>
</body>

</html>