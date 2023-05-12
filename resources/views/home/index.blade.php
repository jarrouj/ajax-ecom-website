<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="admin/assets/css/styles.min.css" />


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

    <style>
        .circle-wrapper {
    position: relative;
    width: 50px;
    height: 50px;
}

.circle {
    position: absolute;
    top: 7px;
    left: 13px;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    background-color: #fff;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.circle:hover {
    background-color: #f2f2f2;
}

.circle-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    overflow: hidden;
}

.circle-image img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.dropdown-wrapper {
    position: absolute;
    top: 40px;
    left: -50px;
    width: 120px;
    background-color: #fff;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
    z-index: 1;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease, visibility 0.3s ease;
}

.circle:hover .dropdown-wrapper {
    opacity: 1;
    visibility: visible;
}

.dropdown {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100%;
    font-size: 12px;
    line-height: 1.5;
}

.dropdown a {
    display: block;
    padding: 5px 10px;
    color: #333;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.dropdown a:hover {
    background-color: #f2f2f2;
}

    </style>
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
