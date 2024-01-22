// JavaScript (index_carting.js)
document.addEventListener("DOMContentLoaded", function () {
  const cartButton = document.querySelector(".cart");
  const totalElement = document.querySelector("#totalPrice");
  const cartItemsList = document.querySelector(".cart-items");
  const printBillButton = document.getElementById("printBill");
  const cart = [];

  // Select all "ADD" buttons
  const addButtons = document.querySelectorAll(".add-to-cart");

  addButtons.forEach(function (button) {
      button.addEventListener("click", function (event) {
          event.preventDefault();

          const productContainer = button.closest(".product-container");
          const productName = productContainer.querySelector("h3").textContent;
          const productPriceElement = productContainer.querySelector(".price");
          const productPrice = parseFloat(productPriceElement.textContent.replace("pkr ", ""));

          const product = {
              name: productName,
              price: productPrice,
          };
          cart.push(product);

          updateCartStatus();
          updateTotalPrice();
      });
  });

  function updateCartStatus() {
      cartItemsList.innerHTML = "";

      if (cart.length > 0) {
          cart.forEach(function (product, index) {
              const listItem = document.createElement("li");
              listItem.innerHTML = `
                  ${product.name} - ${product.price.toFixed(2)}
                  <span class="delete-item" data-index="${index}" style="cursor: pointer; color: red; margin-left: 8px;">&nbsp;&nbsp;&#10006;</span>
              `;
              cartItemsList.appendChild(listItem);
          });

          cartButton.textContent = `Cart (${cart.length})`;
          printBillButton.disabled = false; // Enable the "Print Bill" button when the cart is not empty
      } else {
          cartButton.textContent = "Cart";
          printBillButton.disabled = true; // Disable the "Print Bill" button when the cart is empty
      }
  }

  function updateTotalPrice() {
      let totalPrice = 0;

      cart.forEach(function (product) {
          totalPrice += product.price;
      });

      totalElement.innerText = `Total Price: PKR ${totalPrice.toFixed(2)}`;
  }

  function generatePDF() {
      const cartDetailsHTML = `
          <h3>Your Cart Details</h3>
          <ul>
              ${cart.map(product => `<li>${product.name} - ${product.price.toFixed(2)}</li>`).join('')}
          </ul>
          <p>${totalElement.innerText}</p>
      `;

      const element = document.createElement("div");
      element.innerHTML = cartDetailsHTML;

      html2pdf(element, {
          margin: 10,
          filename: 'cart_bill.pdf',
          image: { type: 'jpeg', quality: 0.98 },
          html2canvas: { scale: 2 },
          jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' },
          output: 'blob'
      }).then(function (pdfBlob) {
          const link = document.createElement('a');
          link.href = URL.createObjectURL(pdfBlob);
          link.download = 'cart_bill.pdf';
          link.click();
      });
  }

  printBillButton.addEventListener("click", function () {
      generatePDF();
  });

  document.addEventListener("click", function (event) {
      if (event.target.classList.contains("delete-item")) {
          const index = event.target.getAttribute("data-index");
          if (index !== null) {
              cart.splice(index, 1);
              updateCartStatus();
              updateTotalPrice();
          }
      }
  });
});
