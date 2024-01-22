<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pizzahut</title>
    <!-- Main Style -->
    <link rel="stylesheet" href="css/main.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" />
    <link rel="icon" href="./assets/pizzahutLogo-en.png" type="image/x-icon">
    <script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>

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
            <img src="assets/Hamburg-PizzaHutLogo.svg" alt="" />
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
            <li><a href="/pizza">
              <i class="fa-solid fa-pizza-slice"></i> pizza
            </a></li>
            <li><a href="/salads">
              <i class="fa-solid fa-leaf"></i> salade
            </a></li>
            <li><a href="/deserts">
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
          <img class="img-fluid" src="assets/pizzahutLogo-en.png" alt="" />
        </div>
        <ul class="m-0 d-lg-flex flex-fill">
          <li>
            <a class="account-show" href="#">
              <i class="fs-5 fa-solid fa-door-open"></i> <span>Sign in</span></a
            >
          </li>
          <li>
            <a class="account-show-2" href="#">
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
     
      </div>
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
      <img src="assets/pizzahutLogo-en.png" />
      <div class="tabs d-flex gap-3 fs-5 fw-bold">
        <div class="sign-in active">Sign In</div>
        <div class="create-acc">Create Account</div>
      </div>
      <form class="sign-in-form d-flex flex-column gap-4" data-acc="true">
        <input class="rounded fs-5 pt-2 pb-2 ps-4 pe-4" type="email" placeholder="Email"/>
        <input class="rounded fs-5 fs-5 pt-2 pb-2 ps-4 pe-4" type="Password" placeholder="password"/>
        <div class="checks d-flex justify-content-between">
          <p class="position-relative ps-4 pe-4"> 
            <i class="d-none check-mark position-absolute fa-solid fa-check"></i> Remember Me</p>
          <a href="#">Forget Password</a>
        </div>
        <input class="fw-bold text-white p-2 rounded" type="submit" value="Sign In">
      </form>
      <form class="d-none create-acc-form d-flex flex-column gap-4" data-acc="true">
        <input class="rounded pt-2 pb-2 ps-4 pe-4" type="text" placeholder="First Name*"/>
        <input class="rounded pt-2 pb-2 ps-4 pe-4" type="text" placeholder="Last Name*"/>
        <input class="rounded pt-2 pb-2 ps-4 pe-4" type="number" placeholder="Mobile Number*"/>
        <input class="rounded pt-2 pb-2 ps-4 pe-4" type="email" placeholder="Email*"/>
        <input class="rounded pt-2 pb-2 ps-4 pe-4" type="Password" placeholder="Password*"/>
        <input class="rounded pt-2 pb-2 ps-4 pe-4" type="Password" placeholder="Confirm Password*"/>
        <div class="checks  d-flex d-none justify-content-between">
          <p class="position-relative ps-4 pe-4"> 
            <i class="d-none check-mark position-absolute fa-solid fa-check"></i> Remember Me</p>
          <a href="#">Forget Password</a>
        </div>
        <input class="fw-bold text-white p-2 rounded" type="submit" value="Sign In">
      </form>
      <h5 class="sign-in-form text-black-50 text-center">Or Connect With</h5>
      <div class="sign-in-form alter-acc d-flex justify-content-center gap-4">
        <div class="facebook-acc gap-2 p-2 rounded"><img src="assets/facebook.png" alt=""> facebook</div>
        <div class="google-acc gap-2 p-2 rounded"><img src="assets/google-mark.png" alt=""> Google</div>
      </div>
    </div>
    <!-- END Log In -->
    <!-- START Slider -->
    <section class="home-slider">
      <div class="container position-relative p-4">
        <div
          id="sld-left"
          class="arrow d-none d-lg-flex justify-content-center align-items-center start-0 top-50 bg-white position-absolute"
        >
          <i class="fa-solid fa-chevron-left"></i>
        </div>
        <div class="holder w-100 overflow-hidden">
          <div id="imgs-slider" class="imgs trans d-flex gap-4 gap-lg-3">
            <img
              class="img-fluid rounded d-none d-lg-block"
              style="height: 280px !important"
              src="assets/slide-show-1-en.jpg"
              alt=""
            />
            <img
              class="img-fluid rounded"
              src="assets/slide-show-2-en.jfif"
              alt=""
            />
            <img
              class="img-fluid rounded"
              src="assets/slide-show-3-en.jpg"
              alt=""
            />
          </div>
        </div>
        <div
          id="sld-right"
          class="arrow d-none d-lg-flex justify-content-center align-items-center end-0 top-50 bg-white position-absolute"
        >
          <i class="fa-solid fa-chevron-right"></i>
        </div>
      </div>
    </section>
    <!-- END Slider -->
    <!-- START Explore Menu [Mobile] -->
    <div class="explore-menu mt-4">
      <div
        class="container d-flex d-lg-none align-items-center justify-content-between"
      >
        <h3 class="m-0 fw-bold">Explore Menu</h3>
        <a href="#"> View all <i class="fa-solid fa-chevron-right"></i> </a>
      </div>
    </div>
    <!-- END Explore Menu [Mobile] -->
    <!-- START Categories Menu [Mobile] -->
    <div class="cate-mobile d-lg-none mt-4">
      <div class="container">
        <div class="row">
          <div class="cat col-6 mb-2 rounded">
            <img class="img-fluid w-100" src="assets/mobile-cat-1.png" alt="" />
          </div>
          <div class="cat col-6 mb-2 rounded">
            <img class="img-fluid w-100" src="assets/mobile-cat-2.png" alt="" />
          </div>
          <div class="cat col-6 rounded">
            <img class="img-fluid w-100" src="assets/mobile-cat-3.png" alt="" />
          </div>
          <div class="cat col-6 rounded">
            <img class="img-fluid w-100" src="assets/mobile-cat-4.png" alt="" />
          </div>
        </div>
      </div>
    </div>
   
   
    <div class="cart-status d-none p-5 mt-5 rounded d-lg-flex flex-column gap-4 bg-white m-lg-5">
      <div class="image">
        <img src="./assets/yout-cart-is-empty.svg" alt="" />
      </div>
      <div class="text text-center">
        <h3 class="fs-5 text-black-50 fw-bold">YOUR CART IS EMPTY</h3>
        <ul class="cart-items">
          <!-- Each item will be added dynamically here -->
        </ul>
        <a id="totalPrice" href="#" style="background-color: #71A400;" class="p-4 pt-1 pb-1 rounded text-white font-normal fw-bold">Total Price: 0.00 pkr</a>
      </div>
      <button id="printBill" class="p-4 pt-1 pb-1 rounded text-white font-normal fw-bold" style="background-color: #71A400;">
        Print Bill
      </button>
    </div>
    <!-- END Categories Menu [Mobile] -->
    
    
    <!-- START deals  -->
    <section style="background-color: rgba(248, 248, 235, 0.992);" class="exclusive-deals mt-4 d-none d-lg-block">
      <div class="container">
        <div class="sec-header mb-5 d-flex justify-content-center align-items-center position-relative">
          <h2 class="m-0 fs-4 fw-bold p-1 position-relative">EXCLUSIVE DEALS</h2>
          <span class="view-all position-absolute end-0 fw-bold">
            <a class="text-uppercase d-flex justify-content-center align-items-center" href="#">
              view all
              <i class="d-flex rounded-circle ms-1 justify-content-center align-items-center fa-solid fa-chevron-right"></i>
            </a>
          </span>
        </div>
        <div class="row pb-5 gap-4">
          <!-- Deal Card 1 -->
          <div class="col-lg-4 bg-white p-0 rounded pb-1 product-container">
            <div class="img-holder">
              <img class="img-fluid" src="assets/exc-deals-en-1.jfif" alt="" />
            </div>
            <div class="text p-3">
              <h3 class="fw-bold">Buy 1 large Pizza & Get 1 Medium Pizza Free</h3>
              <p class="fw-bold text-black-50 mb-4">
                Buy 1 large Pizza & Get 1 Medium Pizza Free (Pick up only)
              </p>
              <div class="cost-add d-flex justify-content-between">
                <span class="price fw-bold">pkr 1450.00</span>
                <a class="ps-4 pe-4 rounded fw-bold add-to-cart" href="#">ADD</a>
              </div>
            </div>
          </div>
          <!-- Deal Card 2 -->
          <div class="col-lg-4 bg-white p-0 rounded pb-1 product-container">
            <div class="img-holder">
              <img class="img-fluid" src="assets/exc-deals-en-2.jfif" alt="" />
            </div>
            <div class="text p-3">
              <h3 class="fw-bold">My Box</h3>
              <p class="fw-bold text-black-50 mb-4">
                One Square Pizza + 2 Sides of the following items (Buffalo)
              </p>
              <div class="cost-add d-flex justify-content-between">
                <span class="price fw-bold">pkr 1250.00</span>
                <a class="ps-4 pe-4 rounded fw-bold add-to-cart" href="#">ADD</a>
              </div>
            </div>
          </div>
          <!-- Deal Card 3 -->
          <div class="col-lg-4 bg-white p-0 rounded pb-1 product-container">
            <div class="img-holder">
              <img class="img-fluid" src="assets/exc-deals-en-3.jfif" alt="" />
            </div>
            <div class="text p-3">
              <h3 class="fw-bold">Hut Savers Stuffed Crust Offer</h3>
              <p class="fw-bold text-black-50 mb-4">
                1 Medium Cheese Stuffed Crust pizza + 1 Medium Beef & Chedda
              </p>
              <div class="cost-add d-flex justify-content-between">
                <span class="price fw-bold">pkr 980.00</span>
                <a class="ps-4 pe-4 rounded fw-bold add-to-cart" href="#">ADD</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END deals  -->
    
    
    <!-- START Popular Products -->
    <section class="popular-prod mt-4 pb-3 ps-2 pe-2">
      <div class="container">
        <div
          class="sec-header mb-5 d-flex justify-content-center align-items-center position-relative"
        >
          <h2 class="m-0 fs-4 fw-bold p-1 position-relative">
            POPULAR PRODUCTS
            <span class="line position-absolute"></span>
          </h2>
          <span class="view-all position-absolute end-0 fw-bold">
            <a
              class="text-uppercase d-flex justify-content-center align-items-center"
              href="#"
            >
              view all
              <i
                class="d-flex rounded-circle ms-1 justify-content-center align-items-center fa-solid fa-chevron-right"
              ></i>
            </a>
          </span>
        </div>
        <div class="row">


          
          <div
            class="col-lg-3 col-md-6 bg-white p-2 rounded d-flex d-lg-block align-items-center product-container"
          >
            <div class="img-holder text-center w-100">
              <img class="img-fluid" src="assets/popular-prod-1.png" alt="" />
            </div>
            <div class="text p-3 position-relative">
              <h3 class="fw-bold">Classic Pepperoni</h3>
              <p class="fw-bold text-black-50 mb-3">
                One of our all time specialties. A meaty feast of Pepperoni,
                <a href="#" class="show-more">...more</a>
              </p>
              <span class="cust mb-3 fw-bold p-1 rounded text-capitalize">
                custimaizes <i class="ms-1 fa-solid fa-chevron-right"></i>
              </span>
              <div
                class="selects d-flex justify-content-between gap-2 mt-3 mt-lg-0 mb-3"
              >
                <div
                  id="size"
                  class="rounded in-range-sel position-relative fw-bold"
                >
                  <div
                    class="main in-range-sel p-1 ps-3 pe-3 d-flex gap-3 align-items-center rounded"
                  >
                    <span class="selected in-range-sel">Small</span>
                    <i class="fa-solid in-range-sel fa-chevron-down"></i>
                  </div>
                  <div class="opts in-range-sel p-2">
                    <div class="small in-range-sel active op">Small</div>
                    <div class="medium in-range-sel op">Medium</div>
                    <div class="large in-range-sel op">Large</div>
                  </div>
                </div>
                <div
                  id="feat"
                  class="rounded in-range-sel position-relative fw-bold"
                >
                  <div
                    class="main in-range-sel p-1 ps-3 pe-3 d-flex justify-content-between gap-3 align-items-center rounded"
                  >
                    <span class="selected in-range-sel">Pan</span>
                    <i class="in-range-sel fa-solid fa-chevron-down"></i>
                  </div>
                  <div class="opts in-range-sel p-2">
                    <div class="pan in-range-sel active op">Pan</div>
                    <div class="thin in-range-sel op">Thin</div>
                    <div class="stuff-crust in-range-sel op">Stuffed Crust</div>
                    <div class="chess-bit in-range-sel op">Chessy Bites</div>
                    <div class="chess-bit-tri in-range-sel op">
                      Chessy Bites Trio
                    </div>
                  </div>
                </div>
              </div>
              <div class="cost-add d-flex justify-content-between">
                <span class="price fw-bold">pkr 900.99</span>
                <a class="ps-4 pe-4 rounded fw-bold add-to-cart" href="#">ADD</a>
              </div>
            </div>
          </div>
          <div
            class="col-lg-3 col-md-6 bg-white p-2 rounded d-flex d-lg-block align-items-center product-container"
          >
            <div class="img-holder text-center w-100">
              <img class="img-fluid" src="assets/popular-prod-2.png" alt="" />
            </div>
            <div class="text p-3 position-relative">
              <h3 class="fw-bold">Classic Pepperoni</h3>
              <p class="fw-bold text-black-50 mb-3">
                One of our all time specialties. A meaty feast of Pepperoni,
                <a href="#" class="show-more">...more</a>
              </p>
              <span
                class="cust position-lg-absolute fw-bold p-1 rounded text-capitalize"
              >
                custimaizes <i class="ms-1 fa-solid fa-chevron-right"></i>
              </span>
              <div
                class="selects d-flex justify-content-between gap-2 mt-3 mt-lg-0 mb-3"
              >
                <div
                  id="size"
                  class="rounded in-range-sel position-relative fw-bold"
                >
                  <div
                    class="main in-range-sel p-1 ps-3 pe-3 d-flex gap-3 align-items-center rounded"
                  >
                    <span class="selected in-range-sel">Small</span>
                    <i class="fa-solid in-range-sel fa-chevron-down"></i>
                  </div>
                  <div class="opts in-range-sel p-2">
                    <div class="small in-range-sel active op">Small</div>
                    <div class="medium in-range-sel op">Medium</div>
                    <div class="large in-range-sel op">Large</div>
                  </div>
                </div>
                <div
                  id="feat"
                  class="rounded in-range-sel position-relative fw-bold"
                >
                  <div
                    class="main in-range-sel p-1 ps-3 pe-3 d-flex justify-content-between gap-3 align-items-center rounded"
                  >
                    <span class="selected in-range-sel">Pan</span>
                    <i class="in-range-sel fa-solid fa-chevron-down"></i>
                  </div>
                  <div class="opts in-range-sel p-2">
                    <div class="pan in-range-sel active op">Pan</div>
                    <div class="thin in-range-sel op">Thin</div>
                    <div class="stuff-crust in-range-sel op">Stuffed Crust</div>
                    <div class="chess-bit in-range-sel op">Chessy Bites</div>
                    <div class="chess-bit-tri in-range-sel op">
                      Chessy Bites Trio
                    </div>
                  </div>
                </div>
              </div>
              <div class="cost-add d-flex justify-content-between">
                <span class="price fw-bold">pkr 800.99</span>
                <a class="ps-4 pe-4 rounded fw-bold add-to-cart" href="#">ADD</a>
              </div>
            </div>
          </div>
          <div
            class="col-lg-3 col-md-6 bg-white p-2 rounded d-flex d-lg-block align-items-center product-container"
          >
            <div class="img-holder text-center w-100">
              <img class="img-fluid" src="assets/popular-prod-3.png" alt="" />
            </div>
            <div class="text p-3 position-relative">
              <h3 class="fw-bold">Classic Pepperoni</h3>
              <p class="fw-bold text-black-50 mb-3">
                One of our all time specialties. A meaty feast of Pepperoni,
                <a href="#" class="show-more">...more</a>
              </p>
              <span
                class="cust position-lg-absolute fw-bold p-1 rounded text-capitalize"
              >
                custimaizes <i class="ms-1 fa-solid fa-chevron-right"></i>
              </span>
              <div
                class="selects d-flex justify-content-between gap-2 mt-3 mt-lg-0 mb-3"
              >
                <div
                  id="size"
                  class="rounded in-range-sel position-relative fw-bold"
                >
                  <div
                    class="main in-range-sel p-1 ps-3 pe-3 d-flex gap-3 align-items-center rounded"
                  >
                    <span class="selected in-range-sel">Small</span>
                    <i class="fa-solid in-range-sel fa-chevron-down"></i>
                  </div>
                  <div class="opts in-range-sel p-2">
                    <div class="small in-range-sel active op">Small</div>
                    <div class="medium in-range-sel op">Medium</div>
                    <div class="large in-range-sel op">Large</div>
                  </div>
                </div>
                <div
                  id="feat"
                  class="rounded in-range-sel position-relative fw-bold"
                >
                  <div
                    class="main in-range-sel p-1 ps-3 pe-3 d-flex justify-content-between gap-3 align-items-center rounded"
                  >
                    <span class="selected in-range-sel">Pan</span>
                    <i class="in-range-sel fa-solid fa-chevron-down"></i>
                  </div>
                  <div class="opts in-range-sel p-2">
                    <div class="pan in-range-sel active op">Pan</div>
                    <div class="thin in-range-sel op">Thin</div>
                    <div class="stuff-crust in-range-sel op">Stuffed Crust</div>
                    <div class="chess-bit in-range-sel op">Chessy Bites</div>
                    <div class="chess-bit-tri in-range-sel op">
                      Chessy Bites Trio
                    </div>
                  </div>
                </div>
              </div>
              <div class="cost-add d-flex justify-content-between">
                <span class="price fw-bold">pkr 700.99</span>
                <a class="ps-4 pe-4 rounded fw-bold add-to-cart" href="#">ADD</a>
              </div>
            </div>
          </div>
        </div>
        <div
          class="view-full-menu mt-4 fs-3 fw-bold d-flex d-lg-none justify-content-center align-items-center p-3 ps-4 pe-4"
        >
          <a class="text-white" href="#">
            View Full Menu
            <i class="ms-4 fs-4 fa-solid fa-chevron-right"></i>
          </a>
        </div>
      </div>
    </section>
    <!-- END Popular Products -->


    <script src="./index_carting.js"></script>

    


    <!-- START Mobile App -->
    <section class="mobile-app bg-white mt-5 d-none d-lg-block">
      <div class="container h-100 d-flex align-items-center">
        <div class="content">
          <img class="img-fluid" src="assets/pizzahutLogo-en.png" alt="" />
          <h2>Try our new Pizza Huts</h2>
          <p>
            Introducing the all new “Pizza hut Pakistan” app for easy ordering and
            great exclusive deals.
          </p>
          <div class="links">
            <a
              target="_blank"
              href="https://play.google.com/store/apps/details?id=com.ph.egypt"
              ><img class="img-fluid" src="assets/google-play-link.png" alt=""
            /></a>
            <a
              target="_blank"
              href="https://apps.apple.com/eg/app/pizza-hut-egypt/id1511528286"
              ><img class="img-fluid" src="assets/app-store-link.png" alt=""
            /></a>
          </div>
        </div>
      </div>
    </section>
    <!-- END Mobile App -->
    <!-- START Footer -->
    <footer class="d-none d-lg-block">
      <div class="container pt-4 pb-4 d-flex flex-column gap-2">
        <div class="links d-flex gap-5 fw-bold">
          <a href="#">Deals</a>
          <a href="#">About Us</a>
          <a href="#">Customer Service</a>
          <a href="#">Policies</a>
          <a href="#">Nutrition</a>
        </div>
        <div
          class="footer-midd mt-3 mb-3 d-flex align-items-center justify-content-between"
        >
          <div class="soc d-flex gap-5 align-items-center">
            <h3 class="m-0 fw-bold">Connect With Pizzahut</h3>
            <div class="media d-flex gap-3 fs-5">
              <a href="#"><i class="fa-brands fa-facebook-square"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
              <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
          </div>
          <div class="lang d-flex gap-5 align-items-center">
            <h3 class="m-0 fw-bold">Select Country</h3>
            <div class="flag-img">
              <img class="img-fluid" src="assets/pakistan-flag.png" alt="" />
            </div>
            <a class="fw-bold" href="#" id="changeCountryBtn" data-toggle="modal" data-target="#chooseLangModal">Change</a>
          </div>
        </div>
      </div>
    </footer>
    <div class="copyright d-none d-lg-block fw-bold fs-4 ">
      <div class="container pt-3 pb-3 text-center">
        <p class="m-0">
          &copy; 2023 Pizza Hut Restaurants LLC. Featured products available at
          participating locations only. All rights reserved. Terms & Conditions
          apply. 
        </p>
        <span class="fs-4 fw-bold text-warning">Design by Ehsan & Moiz</span>
      </div>
    </div>
    <!-- END Footer -->


    <!-- START Language Choose -->
    <div class="choose-lang position-fixed bg-white rounded flex-column">
      <span
        class="close position-absolute bg-white d-flex justify-content-center align-items-center"
        ><i class="fa-solid fa-xmark"></i
      ></span>
      <div class="header">
        <img class="mb-3" src="assets/pizzahutLogo-en.png" alt="" />
        <h3>This Site In Other Countries / Regions</h3>
        <div class="selected-country">
          Selected Country: <span id="selectedCountry">Pakistan</span>
      </div>
      </div>
      <div class="countries mb-3">
        <div class="count active">
          <img src="assets/egypt-flag.png" alt="" />
          Egypt
        </div>
        <div class="count">
          <img src="assets/algeria-flag.png" alt="" />
          Algeria
        </div>
        <div class="count">
          <img src="assets/saudia-flag.png" alt="" />
          Saudi Arabia
        </div>
        <div class="count">
          <img src="assets/qatar-flag.png" alt="" />
          Qatar
        </div>
        <div class="count">
          <img src="assets/pakistan-flag.png" alt="" />
          Pakistan
        </div>
      </div>
      <a
        class="Select text-center mt-3 fw-bold align-self-center p-2 rounded"
        href="/"
        >Select</a
      >
    </div>
    <!-- END Language Choose -->

    <script>
  // Update your JavaScript code
document.addEventListener('DOMContentLoaded', function() {
    const countries = document.querySelectorAll('.count');
    const selectedFlag = document.querySelector('.selected-flag');
    const selectedCountryText = document.getElementById('selectedCountry');

    countries.forEach(country => {
        country.addEventListener('click', function() {
            countries.forEach(c => c.classList.remove('active'));
            this.classList.add('active');
        });
    });

    const selectButton = document.querySelector('.Select');
    selectButton.addEventListener('click', function() {
        const selectedCountry = document.querySelector('.count.active');
        if (selectedCountry) {
            const flagPath = selectedCountry.dataset.flag;
            const countryName = selectedCountry.innerText;
            selectedFlag.src = flagPath;

            // Set the selected country text in the welcome page
            selectedCountryText.innerText = countryName;

            // Store the selected country in session or cookie (e.g., using AJAX and Laravel)
            // Example using Laravel session (needs appropriate Laravel route):
            // axios.post('/set-selected-country', { country: countryName });
        }
    });

    const changeCountryBtn = document.querySelector('#changeCountryBtn');
    const chooseLang = document.querySelector('.choose-lang');

    changeCountryBtn.addEventListener('click', function(event) {
        event.preventDefault();
        chooseLang.classList.add('active');
    });

    const closeBtn = document.querySelector('.close');
    closeBtn.addEventListener('click', function() {
        chooseLang.classList.remove('active');
    });
});



    </script>


    <!-- Add this script at the end of your HTML body -->
<!-- Add this script at the end of your HTML body -->
     <script src="{{ asset('js/index_carting.js')}}"></script>
    <!-- --------------- -->
    <!-- --------------- -->
    <!-- Main JS -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Bootstrap JS -->
    <script  src="{{ asset('js/bootstrap.bundle.js') }}"></script>
  </body>
</html>
