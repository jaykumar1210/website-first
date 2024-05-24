<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Home</title>
    <link rel="stylesheet" href="css/index.css">
    <!-- Include libraries for image slideshow -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="about/about.php">About</a></li>
                <li><a href="projects/projects.php">Projects</a></li>
                <li><a href="contact/contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <!-- Hero Section with Image or Image Slideshow -->
    <section class="hero">
        <div class="container">
            <!-- Check if images are available for slideshow -->
            <?php
                // Array of image URLs for slideshow
                $images = array("img/1.jpg", "img/2.jpg", "img/3.jpg", "img/4.jpg");

                if (!empty($images)) {
            ?>
            <!-- Use Slick Carousel for slideshow -->
            <div class="slideshow">
                <?php
                    foreach ($images as $image) {
                ?>
                <div><img src="<?php echo $image; ?>" alt="Slideshow Image"></div>
                <?php
                    }
                ?>
            </div>
            <?php
                } else {
            ?>
            <!-- If no images for slideshow, display background pattern -->
            <div class="pattern"></div>
            <?php
                }
            ?>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 My Portfolio</p>
        </div>
    </footer>

    <!-- Include libraries for image slideshow -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <!-- Initialize Slick Carousel -->
    <script>
        $(document).ready(function(){
            $('.slideshow').slick({
                autoplay: true,
                autoplaySpeed: 1000,
                dots: true,
                arrows: false,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear'
            });
        });
    </script>
</body>
</html>
