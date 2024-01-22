<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pizzahut Deals</title>
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
        <a href="{{ url('/') }}"><i class="prev-page d-lg-none fa-solid fa-arrow-left"></i></a>
        <div class="logo">
          <a href="{{ url('/') }}"
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
            <a class="active d-flex align-items-center p-2" href="/deals"
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
      {{-- login anchor tag  --}}
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
      
      <form class="d-none create-acc-form d-flex flex-column gap-4" data-acc="true" method="post" >
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
        <input class="fw-bold text-white p-2 rounded" type="submit" value="Sign Up">
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
        <div class="row pt-5 pb-3 products-scroll boxes gap-4 align-items-start">
          <div class="box col-lg-3 col-md-6 bg-white p-0 rounded">
            <div class="image">
              <img
                class="img-fluid w-100"
                src="../assets/deals/deal-01.jpg"
                alt=""
              />
            </div>
            <div class="content p-3 d-flex flex-column justify-content-between">
              <h3 class="fs-5">Super Triple Treat Box</h3>
              <p class="mb-4">
                2 Rectangular Pizzas + 2 Sides + Chocolate Pizza
              </p>
              <div
                class="cost-add d-flex justify-content-between align-items-center"
              >
                <div class="mon">pkr 1150.00</div>
                <a href="#" class="add p-4 pt-1 pb-1 rounded">ADD</a>
              </div>
            </div>
          </div>
          <div class="box col-lg-3 col-md-6 bg-white p-0 rounded">
            <div class="image">
              <img
                class="img-fluid w-100"
                src="../assets/deals/deal-02.jpg"
                alt=""
              />
            </div>
            <div class="content p-3 d-flex flex-column justify-content-between">
              <h3 class="fs-5">Buy 1 large Pizza & Get 1 Medium Pizza Free</h3>
              <p class="mb-4">
                Buy 1 large Pizza & Get 1 Medium Pizza Free (Pick up only)
              </p>
              <div
                class="cost-add d-flex justify-content-between align-items-center"
              >
              <div class="mon">pkr 1200.00</div>
                <a href="#" class="add p-4 pt-1 pb-1 rounded">ADD</a>
              </div>
            </div>
          </div>
          <div class="box col-lg-3 col-md-6 bg-white p-0 rounded">
            <div class="image">
              <img
                class="img-fluid w-100"
                src="../assets/deals/deal-03.jpg"
                alt=""
              />
            </div>
            <div class="content p-4">
              <h3 class="fs-5">Supreme meal</h3>
              <p class="mb-4">
                1 Medium Pizza + Potato wedges + Duetto Salad + Pepsi 1L
              </p>
              <div
                class="cost-add d-flex justify-content-between align-items-center"
              >
                <div class="mon">pkr 850.00</div>
                <a href="#" class="add p-4 pt-1 pb-1 rounded">ADD</a>
              </div>
            </div>
          </div>
          <div class="box col-lg-3 col-md-6 bg-white p-0 rounded">
            <div class="image">
              <img
                class="img-fluid w-100"
                src="../assets/deals/deal-04.jpg"
                alt=""
              />
            </div>
            <div class="content p-4">
              <h3 class="fs-5">Solo meal</h3>
              <p class="mb-4">1 Small Pizza+ potato wedges + Pepsi 330 ML</p>
              <div
                class="cost-add d-flex justify-content-between align-items-center"
              >
                <div class="mon">pkr 950.00</div>
                <a href="#" class="add p-4 pt-1 pb-1 rounded">ADD</a>
              </div>
            </div>
          </div>
          <div class="box col-lg-3 col-md-6 bg-white p-0 rounded">
            <div class="image">
              <img
                class="img-fluid w-100"
                src="../assets/deals/deal-05.jpg"
                alt=""
              />
            </div>
            <div class="content p-4">
              <h3 class="fs-5">Party meal</h3>
              <p class="mb-4">
                3 Medium Pizza + Potato wedges + Supreme Salad + Pepsi 1L
              </p>
              <div
                class="cost-add d-flex justify-content-between align-items-center"
              >
                <div class="mon">pkr 289.00</div>
                <a href="#" class="add p-4 pt-1 pb-1 rounded">ADD</a>
              </div>
            </div>
          </div>
          <div class="box col-lg-3 col-md-6 bg-white p-0 rounded">
            <div class="image">
              <img
                class="img-fluid w-100"
                src="../assets/deals/deal-06.jpg"
                alt=""
              />
            </div>
            <div class="content p-4">
              <h3 class="fs-5">Familt meal</h3>
              <p class="mb-4">
                2 Medium Pizza + Potato wedges + Supreme Salad + Pepsi 1L
              </p>
              <div
                class="cost-add d-flex justify-content-between align-items-center"
              >
                <div class="mon">pkr 1300.00</div>
                <a href="#" class="add p-4 pt-1 pb-1 rounded">ADD</a>
              </div>
            </div>
          </div>
          <div class="box col-lg-3 col-md-6 bg-white p-0 rounded">
            <div class="image">
              <img
                class="img-fluid w-100"
                src="../assets/deals/deal-07.jpg"
                alt=""
              />
            </div>
            <div class="content p-4">
              <h3 class="fs-5">Boss meal</h3>
              <p class="mb-4">1 Sqaure Pizza + Pepsi</p>
              <div
                class="cost-add d-flex justify-content-between align-items-center"
              >
                <div class="mon">pkr 1400.00</div>
                <a href="#" class="add p-4 pt-1 pb-1 rounded">ADD</a>
              </div>
            </div>
          </div>
          <div class="box col-lg-3 col-md-6 bg-white p-0 rounded">
            <div class="image">
              <img
                class="img-fluid w-100"
                src="../assets/deals/deal-07.jpg"
                alt=""
              />
            </div>
            <div class="content p-4">
              <h3 class="fs-5">Ranch meal</h3>
              <p class="mb-4">
                Get it all in the New Ranch Box : Medium Ranch + Medium Pan+ Wed
              </p>
              <div
                class="cost-add d-flex justify-content-between align-items-center"
              >
                <div class="mon">pkr 1500.00</div>
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
    <!-- END Main Section -->

<!-- Add this script at the end of your HTML body -->
<!-- this is the DEAL Cart Functionality -->
<!-- <script src="https://rawgit.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script> -->
<  <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('js/deal.js') }}"></script>
{{-- <script>let scroll_row = document.querySelector(".row"); --}}
  let scroll_value = 0;
  
  function scroll_status() {
    let scroll_docu = function (event) {
      scroll_row.scroll({
        top: event.deltaY * 5,
      });
    };
  
    if (scroll_row !== null) {
      scroll_row.addEventListener("mouseleave", () => {
        document.addEventListener("wheel", scroll_docu);
      });
    
      scroll_row.addEventListener("mouseenter", (e) => {
        document.removeEventListener("wheel", scroll_docu);
      });
    }
  }
  
  scroll_status();
  
  // Accounts Manager
  let sign_click = document.querySelector(".account-show");
  let create_click = document.querySelector(".account-show-2");
  let acc_tabs = document.querySelectorAll(".tabs div");
  let forms = document.querySelectorAll(".account form");
  let account_comp = document.querySelector(".account");
  let remeber_me = document.querySelector(".checks p");
  let close_acc = document.querySelector(".close-acc");
  let email_input = document.querySelector(".account form input[type='email']");
  let spn_overlay = document.querySelector(".overlay");
  
  
  manage_account ();
  
  function manage_account () {
    acc_tabs.forEach((tab) => {
      tab.addEventListener("click", function (e) {
        if (!e.target.classList.contains("active")) {
          acc_tabs.forEach((tab) => tab.classList.remove("active"));
          e.target.classList.add("active");
          if (e.target.classList.contains("sign-in")) {
            document.querySelectorAll(".sign-in-form").forEach((ele) => {
              ele.classList.remove("d-none");
            });
            forms[1].classList.add("d-none");
          }
          if (e.target.classList.contains("create-acc")) {
            document.querySelectorAll(".sign-in-form").forEach((ele) => {
              ele.classList.add("d-none");
            });
            forms[1].classList.remove("d-none");
          }
        }
      });
    });
    
    sign_click.addEventListener("click", function () {
      spn_overlay.classList.add("active");
      spn_overlay.addEventListener("click", function () {
        spn_overlay.classList.remove("active");
        account_comp.classList.remove("active");
      });
      account_comp.classList.add("active");
      //
      //
      if (acc_tabs[1].classList.contains("active")) {
        acc_tabs[1].classList.remove("active");
        acc_tabs[0].classList.add("active");
        document.querySelectorAll(".sign-in-form").forEach((ele) => {
          ele.classList.remove("d-none");
        });
        forms[1].classList.add("d-none");
      }
    });
    
    create_click.addEventListener("click", function () {
      spn_overlay.classList.add("active");
      spn_overlay.addEventListener("click", function () {
        spn_overlay.classList.remove("active");
        account_comp.classList.remove("active");
      });
      account_comp.classList.add("active");
      //
      if (acc_tabs[0].classList.contains("active")) {
        acc_tabs[0].classList.remove("active");
        acc_tabs[1].classList.add("active");
        document.querySelectorAll(".sign-in-form").forEach((ele) => {
          ele.classList.add("d-none");
        });
        forms[1].classList.remove("d-none");
      }
    });
    
    close_acc.addEventListener("click", function () {
      account_comp.classList.remove("active");
      spn_overlay.classList.remove("active");
    });
    
    remeber_me.addEventListener("click", function () {
      document.querySelector(".checks p i").classList.toggle("d-none");
    });
  }
  
  
  </script>
<script src="{{ asset('js/html2pdf.bundle.js') }}"></script>
<script src="{{ asset('js/deals.js') }}"></script>
{{-- <script>
  document.addEventListener("DOMContentLoaded", function () {
  const cartButton = document.querySelector(".cart");
  const cartItemsText = document.querySelector('.text.text-center');
  const isEmptyText = document.querySelector('.fs-5.text-black-50.fw-bold');
  const totalElement = document.querySelector("#totalPrice");
  const cartItemsList = document.querySelector(".cart-items");
  const printBillButton = document.getElementById("printBill");
  const cart = [];

  const addButtons = document.querySelectorAll(".add");

  addButtons.forEach(function (button, index) {
    button.addEventListener("click", function (event) {
      event.preventDefault();

      const dealBox = document.querySelectorAll(".box")[index];
      const dealName = dealBox.querySelector("h3").textContent;
      const dealPrice = parseFloat(dealBox.querySelector(".mon").textContent.replace("pkr ", ""));

      const deal = {
        name: dealName,
        price: dealPrice,
      };
      cart.push(deal);

      updateCartStatus();
      updateTotalPrice();
    });
  });

  function updateCartStatus() {
    if (cart.length > 0) {
      cartItemsText.style.display = 'block';
      isEmptyText.style.display = 'none';

      cartItemsList.innerHTML = "";

      cart.forEach(function (deal, index) {
        const listItem = document.createElement("li");
        listItem.innerHTML = `
          ${deal.name} - ${deal.price.toFixed(2)}
          <span class="delete-item" data-index="${index}" style="cursor: pointer; color: red; margin-left: 8px;">&nbsp;&nbsp;&#10006;</span>
        `;
        cartItemsList.appendChild(listItem);
      });

      cartButton.textContent = `Cart (${cart.length})`;
    } else {
      cartItemsText.style.display = 'none';
      isEmptyText.style.display = 'block';
      cartButton.textContent = "Cart";
    }
  }

  function updateTotalPrice() {
    let totalPrice = 0;

    cart.forEach(function (deal) {
      totalPrice += deal.price;
    });

    totalElement.innerText = `Total Price: PKR ${totalPrice.toFixed(2)}`;
  }

  function generatePDF() {
    const cartDetailsHTML = `
      <h3>Your Cart Details</h3>
      <ul>
        ${cart.map(deal => `<li>${deal.name} - ${deal.price.toFixed(2)}</li>`).join('')}
      </ul>
      <p>Total Price: PKR ${totalElement.innerText.split(' ')[3]}</p>
    `;

    const element = document.createElement("div");
    element.innerHTML = cartDetailsHTML;

    html2pdf(element, {
      margin: 10,
      filename: 'cart_bill.pdf',
      image: { type: 'jpeg', quality: 0.98 },
      html2canvas: { scale: 2 },
      jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
    });
  }

  document.addEventListener("click", function (event) {
    if (event.target.classList.contains("delete-item")) {
      const index = event.target.getAttribute("data-index");
      if (index !== null) {
        cart.splice(index, 1);
        updateCartStatus();
        updateTotalPrice();
      }
    } else if (event.target.id === "printBill") {
      generatePDF();
    }
  });
});
</script> --}}

  </body>
</html>
