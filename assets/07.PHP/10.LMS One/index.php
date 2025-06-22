<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson</title>
    <!----- link css file ----->
    <link rel="stylesheet" href="assets/css/style.css">

    <!----- responsive css file link ----->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!----- jQuery google cdn ----->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!--Slick carousel js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!--Slick carousel css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Boxicons CDN -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">


</head>
<body>
    <?php

use function Avifinfo\read;

 include_once "header.php"; ?>


    <main>

        <?php require_once 'sections/hero.php'; ?>
        
        <!----- Courses section ----->
        <?php require_once 'sections/courses.php'; ?>


        <!----- testimonial section ----->
        <?php require_once 'sections/testimonial.php'; ?>


        <!----- features section ----->
        <?php require_once 'sections/features.php'; ?>


        <!----- CTA section ----->
        <?php require_once 'sections/cta.php'; ?>


        <!----- our blog section ----->
        <?php require_once 'sections/blog.php'; ?>
    </main>

    <?php require_once 'footer.php'; ?>

    <!----- JS file link ----->
    <script src="assets/js/script.js"></script>
</body>
</html>