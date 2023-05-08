<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FAVICON ===============-->
    <link
      rel="shortcut icon"
      href="assets/img/favicon.png"
      type="image/x-icon"
    />

    <!--=============== BOXICONS ===============-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css" />

    <title>Responsive watches website - Bedimcode</title>
  </head>
  <body>
    <!--==================== HEADER ====================-->

     @include('home.header')
    <!--==================== CART ====================-->
    @include('home.cart')
    <!--==================== MAIN ====================-->
    <main class="main">
      <!--==================== HOME ====================-->
      @include('home.home')

      <!--==================== FEATURED ====================-->
      @include('home.featured')

      <!--==================== PRODUCTS ====================-->
      @include('home.products')

       <!--==================== STORY ====================-->
     {{-- @include('home.story') --}}

      <!--==================== NEW ====================-->
     @include('home.new')







    <!--==================== FOOTER ====================-->
   @include('home.footer')
    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="bx bx-up-arrow-alt scrollup__icon"></i>
    </a>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
