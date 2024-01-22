document.addEventListener("DOMContentLoaded", function () {
  const cartButton = document.querySelector(".cart");
  const cartItemsText = document.querySelector('.text.text-center');
  const isEmptyText = document.querySelector('.fs-5.text-black-50.fw-bold');
  const totalElement = document.querySelector("#totalPrice");
  const cartItemsList = document.querySelector(".cart-items");
  const cart = [];

  const addButtons = document.querySelectorAll(".add");

  addButtons.forEach(function (button, index) {
    button.addEventListener("click", function (event) {
      event.preventDefault();

      const drinkBox = document.querySelectorAll(".box")[index];
      const drinkName = drinkBox.querySelector("h3").textContent;
      const drinkPrice = parseFloat(drinkBox.querySelector(".mon").textContent.replace("pkr ", ""));

      const drink = {
        name: drinkName,
        price: drinkPrice,
      };
      cart.push(drink);

      updateCartStatus();
      updateTotalPrice();
    });
  });

  function updateCartStatus() {
    if (cart.length > 0) {
      cartItemsText.style.display = 'block';
      isEmptyText.style.display = 'none';

      cartItemsList.innerHTML = "";

      cart.forEach(function (drink, index) {
        const listItem = document.createElement("li");
        listItem.innerHTML = `
          ${drink.name} - ${drink.price.toFixed(2)}
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

    cart.forEach(function (drink) {
      totalPrice += drink.price;
    });

    totalElement.innerText = `Total Price: PKR ${totalPrice.toFixed(2)}`;
  }

  function generatePDF() {
    const cartDetailsHTML = `
      <h3>Your Cart Details</h3>
      <ul>
        ${cart.map(drink => `<li>${drink.name} - ${drink.price.toFixed(2)}</li>`).join('')}
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
