<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pizzahut | Deserts</title>
    <link rel="stylesheet" href="../css/pages/deals.css" />
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="icon" href="../assets/pizzahutLogo-en.png" type="image/x-icon">
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>

  </head>
  <body>
		<!-- START Nav -->
    <nav class="w-100 bg-white sticky-top">
      <span class="overlay w-100"></span>
      <div class="top pt-2 pb-2 fw-bold d-flex align-items-center">
        <a href="/"
          ><i class="prev-page d-lg-none fa-solid fa-arrow-left"></i
        ></a>
        <div class="logo">
          <a href="/"
            ><img class="img-fluid" src="../assets/pizzahutLogo-en.png" alt=""
          /></a>
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
            <a href="find_pizzhut_map.html">
              <i class="fs-5 fa-solid fa-location-dot"></i>
              <span>Find A Pizzahut</span></a
            >
          </li>
        </ul>
        <!-- <div id="lang-change" class="p-lg-2 rounded"><a href="../ar/deserts.html">العربية</a></div>
      </div> -->
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
            <a class="d-flex align-items-center p-2" href="/pizza">pizza</a>
          </li>
          <li class="d-flex align-items-center">
            <a class="d-flex align-items-center p-2" href="/starters">starters</a>
          </li>
          <li class="d-flex align-items-center">
            <a class="d-flex align-items-center p-2" href="/salads">saladas</a>
          </li>
          <li
            class="drop-down-more d-flex align-items-center position-relative"
          >
            <a class="d-flex align-items-center p-2" href="#"
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
      {{-- Login Account --}}
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

      {{-- Create New Account or Register --}}
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
        <div class="facebook-acc gap-2 p-2 rounded"><img src="../assets/facebook.png" alt=""> facebook</div>
        <div class="google-acc gap-2 p-2 rounded"><img src="../assets/google-mark.png" alt=""> Google</div>
      </div>
    </div>
    <!-- END Log In -->
		<!-- START Main Section -->
    <section class="pb-5">
      <div class="container ps-4 pe-4 d-flex align-items-start">
        <div class="row flex-fill pt-5 pb-3 products-scroll boxes gap-4 align-items-start">
          <div class="box col-lg-3 col-md-6 bg-white p-0 rounded">
            <div class="image text-center">
              <img
                class="img-fluid" 
                src="../assets/deserts/ChesseCake 175X175.jpg"
                alt=""
              />
            </div>
            <div class="content p-3 d-flex flex-column justify-content-between">
              <h3 class="fs-5">Cheesecake</h3>
              <p class="mb-4">
                Creamy cheesecake topped with strawberry sauc
              </p>
              <div
                class="cost-add d-flex justify-content-between align-items-center"
              >
                <div class="mon">pkr 249.00</div>
                <a href="#" class="add p-4 pt-1 pb-1 rounded">ADD</a>
              </div>
            </div>
          </div>
          <div class="box col-lg-3 col-md-6 bg-white p-0 rounded">
            <div class="image text-center">
              <img
                class="img-fluid"
                src="../assets/deserts/Chocolate Cake 175X175.jpg"
                alt=""
              />
            </div>
            <div class="content p-3 d-flex flex-column justify-content-between">
              <h3 class="fs-5">Chocolate Cake</h3>
              <p class="mb-4">
                A rich, soft, dark chocolate cake. A must for
              </p>
              <div
              class="cost-add d-flex justify-content-between align-items-center"
            >
              <div class="mon">pkr 230.00</div>
              <a href="#" class="add p-4 pt-1 pb-1 rounded">ADD</a>
            </div>
              <!-- <div
                class="cost-add d-flex justify-content-between align-items-center"
              >
                <a href="#" class="add p-4 pt-1 pb-1 rounded">ADD</a>
              </div> -->
            </div>
          </div>
          <div class="box col-lg-3 col-md-6 bg-white p-0 rounded">
            <div class="image text-center">
              <img
                class="img-fluid w-60" style="height: 150px;"
                src="../assets/deserts/Chocolate Pizza 1065x549.png"
                alt=""
              />
            </div>
            <div class="content p-4">
              <h3 class="fs-5">Chocolate Pizza </h3>
              <p class="mb-4">
                Chocolate hazelnut with small pieces marshmal
              </p>
              <div
                class="cost-add d-flex justify-content-between align-items-center"
              >
                <div class="mon">pkr 50.00</div>
                <a href="#" class="add p-4 pt-1 pb-1 rounded">ADD</a>
              </div>
            </div>
          </div>
        </div>
        <div class="cart-status d-none p-5 mt-5 rounded d-lg-flex flex-column gap-4 bg-white">
          <div class="image">
            <img src="../assets/yout-cart-is-empty.svg" alt="" />
          </div>
          <div class="text text-center">
            <h3 class="fs-5 text-black-50 fw-bold">YOUR CART IS EMPTY</h3>
            <!-- <p>Please add some item from the menu to place an order</p> -->
            <ul class="cart-items">
              <!-- Each item will be added dynamically here -->
            </ul>
            <a id="totalPrice" href="#" style="background-color: #71A400;" class=" p-4 pt-1 pb-1 rounded text-white font-normal fw-bold " >Total Price: 0.00 pkr </a>
          </div>
          <button id="printBill" class="p-4 pt-1 pb-1 rounded text-white font-normal fw-bold" style="background-color: #71A400;">
            Print Bill
          </button>
        </div>
      </div>
    </section>

    <script src="{{ asset("js/deserts.js")}}"></script>
  
    <!-- END Main Section -->
    <script src=""{{ asset("js/bootstrap.bundle.js")}}"></script>
    <script src="{{ asset('js/deal.js')}}"></script>
  </body>
</html>
