<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pizzahut</title>
    <!-- Main Style -->
    <link rel="stylesheet" href="../css/main.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="icon" href="../assets/pizzahutLogo-en.png" type="image/x-icon">
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css" />
  </head>
  <body>
    <!-- --------------- -->
    <!-- --------------- -->
    <!-- START Nav -->
    <nav class="w-100 bg-white sticky-top">
      <span class="overlay w-100"></span>
      <!-- ------- START Mobile Menu -------- -->
      <div class="mobile-menu d-lg-none position-fixed">
        <div class="sign-in p-4 text-center d-flex flex-column">
          <div class="header d-flex align-items-center mb-3 gap-3">
            <img src="../assets/pizzahutLogo-en.png" alt="" />
            <div class="text ms-3">
              <h2 class="m-0">Login to unlock exclusive</h2>
              <p class="m-0">Deals and Discounts</p>
            </div>
          </div>
          <a class="w-100 p-2 rounded" href="#">Sign in</a>
        </div>
        <ul class="body text-capitalize fw-bold m-0 p-0">
          <li>
            <i class="fa-solid fa-globe position-relative"></i> Language /
            English
          </li>
          <li class="show-menu position-relative">
            <i class="fa-solid fa-book-open-reader"></i> Menu list
            <i class="fa-solid fa-chevron-down"></i>
          </li>
          <ul id="m-mega-menu" class="menu-list m-0 p-0 d-none">
            <li>
              <a href="/deals"
                ><i class="fa-solid fa-percent"></i> deals</a
              >
            </li>
            <li><a href=/"pizza">
              <i class="fa-solid fa-pizza-slice"></i> pizza
            </a></li>
            <li><a href="/salads">
              <i class="fa-solid fa-leaf"></i> salade
            </a></li>
            <li><a href="d/eserts">
              <i class="fa-solid fa-ice-cream"></i> deserts
            </a></li>
            <li><a href="/drinks">
              <i class="fa-solid fa-martini-glass-empty"></i> drinks
            </a></li>
          </ul>
          <li class="text-uppercase">
            <i class="fa-solid fa-circle-question"></i> faq
          </li>
          <li><i class="fa-solid fa-list-ul"></i> terms & condition</li>
          <li>
            <a class="fs-5" href="tel:+201150702471">call us</a>
          </li>
        </ul>
      </div>
      <!-- ------- END Mobile Menu -------- -->
      <div class="top pt-2 pb-2 fw-bold d-flex align-items-center">
        <i id="mobile-bar" class="d-lg-none p-2 fs-5 menu fa-solid fa-bars"></i>
        <div class="logo">
          <a href="/"><img class="img-fluid" src="../assets/pizzahutLogo-en.png" alt="" /></a>
        </div>
        <ul class="m-0 d-lg-flex flex-fill">
          <li>
            <a class="account-show" href="{{route('login')}}">
              <i class="fs-5 fa-solid fa-door-open"></i> <span>Sign in</span></a
            >
          </li>
          <li>
            <a class="account-show-2" href="{{ route ('register')}}">
              <i class="fs-5 fa-solid fa-user"></i>
              <span>Create Account</span></a
            >
          </li>
          <li>
            <a href="/find_pizzhut_map">
              <i class="fs-5 fa-solid fa-location-dot"></i>
              <span>Find A Pizzahut</span></a
            >
          </li>
        </ul>
      
      <div
        class="bottom d-flex align-items-center justify-content-between text-uppercase"
      >
        <ul class="left fw-bold d-flex align-items-center m-0">
          <li class="d-flex align-items-center">
            <a class="d-flex align-items-center p-2" href="/deals"
              >deal</a
            >
          </li>
          <li class="d-flex align-items-center">
            <a class="d-flex align-items-center p-2" href="/pizza"
              >pizza</a
            >
          </li>
          <li class="d-flex align-items-center">
            <a class="d-flex align-items-center p-2" href="/starters"
              >starters</a
            >
          </li>
          <li class="d-flex align-items-center">
            <a class="d-flex align-items-center p-2" href="/salads">saladas</a>
          </li>
          <li class="d-flex align-items-center position-relative">
            <a class="d-flex align-items-center p-2"
              >more
              <span
                class="position-relative more m-2 bg-white p-2 rounded-circle"
                ><i class="fa-solid fa-angle-down"></i
              ></span>
            </a>
            <ul class="mega position-absolute p-0">
              <li><a href="/deserts">deserts</a></li>
              <li><a href="/drinks">drinks</a></li>
            </ul>
          </li>
        </ul>
        <ul class="right d-flex align-items-center gap-5">
          <li class="order d-flex">
            <button
              class="rounded text-uppercase text-white p-5 fs-5 fw-bold pt-1 pb-1"
            >
              start your order
            </button>
          </li>
          <li class="cart">
            <i class="fa-solid fa-cart-shopping me-2"></i> Cart
          </li>
          <li class="all-paid">
            <span class="curr text-uppercase">pkr</span>
            <span class="num">00.00</span>
          </li>
        </ul>
      </div>
    </nav>
    <div
      class="mobile-location d-flex justify-content-between d-lg-none ps-3 pe-3"
    >
      <div class="text">
        <h2 class="fw-bold mb-1">Select Location:</h2>
        <p class="m-0">Get accurate pricing & menu listing</p>
      </div>
      <div class="btn text-capitalize">
        <a class="p-1 ps-3 pe-3 rounded-pill" href="#">choose</a>
      </div>
    </div>
    <!-- END Nav -->
    <!-- START Log In -->
    <div class="account flex-column gap-3 bg-white position-fixed rounded mt-2">
      <i
        class="position-absolute close-acc bg-white d-flex justify-content-center align-items-center fa-solid fa-xmark"
      ></i>
      <img src="../assets/pizzahutLogo-en.png" />
      <div class="tabs d-flex gap-3 fs-5 fw-bold">
        <div class="sign-in active">Sign In</div>
        <div class="create-acc">Create Account</div>
      </div>
      <form class="sign-in-form d-flex flex-column gap-4" data-acc="true">
        <input
          class="rounded fs-5 pt-2 pb-2 ps-4 pe-4"
          type="email"
          placeholder="Email"
        />
        <input
          class="rounded fs-5 fs-5 pt-2 pb-2 ps-4 pe-4"
          type="Password"
          placeholder="password"
        />
        <div class="checks d-flex justify-content-between">
          <p class="position-relative ps-4 pe-4">
            <i
              class="d-none check-mark position-absolute fa-solid fa-check"
            ></i>
            Remember Me
          </p>
          <a href="#">Forget Password</a>
        </div>
        <input
          class="fw-bold text-white p-2 rounded"
          type="submit"
          value="Sign In"
        />
      </form>
      <form
        class="d-none create-acc-form d-flex flex-column gap-4"
        data-acc="true"
      >
        <input
          class="rounded pt-2 pb-2 ps-4 pe-4"
          type="text"
          placeholder="First Name*"
        />
        <input
          class="rounded pt-2 pb-2 ps-4 pe-4"
          type="text"
          placeholder="Last Name*"
        />
        <input
          class="rounded pt-2 pb-2 ps-4 pe-4"
          type="number"
          placeholder="Mobile Number*"
        />
        <input
          class="rounded pt-2 pb-2 ps-4 pe-4"
          type="email"
          placeholder="Email*"
        />
        <input
          class="rounded pt-2 pb-2 ps-4 pe-4"
          type="Password"
          placeholder="Password*"
        />
        <input
          class="rounded pt-2 pb-2 ps-4 pe-4"
          type="Password"
          placeholder="Confirm Password*"
        />
        <div class="checks d-flex d-none justify-content-between">
          <p class="position-relative ps-4 pe-4">
            <i
              class="d-none check-mark position-absolute fa-solid fa-check"
            ></i>
            Remember Me
          </p>
          <a href="#">Forget Password</a>
        </div>
        <input
          class="fw-bold text-white p-2 rounded"
          type="submit"
          value="Sign In"
        />
      </form>
      <h5 class="sign-in-form text-black-50 text-center">Or Connect With</h5>
      <div class="sign-in-form alter-acc d-flex justify-content-center gap-4">
        <div class="facebook-acc gap-2 p-2 rounded">
          <img src="../assets/facebook.png" alt="" /> facebook
        </div>
        <div class="google-acc gap-2 p-2 rounded">
          <img src="../assets/google-mark.png" alt="" /> Google
        </div>
      </div>
    </div>
    <!-- END Log In -->
    <section class="map d-flex justify-content-center align-items-center pt-4">
      <div class="mapouter d-none d-lg-block">
        <div class="gmap_canvas">
          <iframe
            width="600"
            height="500"
            id="gmap_canvas"
            src="https://maps.google.com/maps?q=Pizzahut&t=&z=13&ie=UTF8&iwloc=&output=embed"
            frameborder="0"
            scrolling="no"
            marginheight="0"
            marginwidth="0"
          ></iframe
          ><a href="https://123movies-to.org">123movies</a><br /><style>
            .mapouter {
              position: relative;
              text-align: right;
              height: 500px;
              width: 600px;
            }</style
          ><a href="https://www.embedgooglemap.net">embedded maps</a
          ><style>
            .gmap_canvas {
              overflow: hidden;
              background: none !important;
              height: 500px;
              width: 600px;
            }
          </style>
        </div>
      </div>
    </section>
    <!-- --------------- -->
    <!-- --------------- -->
    <!-- Main JS -->
    <script src="../js/deal.js"></script>
    <!-- Bootstrap JS -->
    <script src="../js/bootstrap.bundle.js"></script>
    <script>
       function showForm(formId) {
      // Hide all forms
      document.querySelectorAll('.account form').forEach(form => {
         form.classList.add('d-none');
      });

      // Show the selected form
      document.querySelector(`.${formId}`).classList.remove('d-none');
   }
    </script>
  </body>
</html>
