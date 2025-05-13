const products = [
    {
      name: "Imbuto za Pome",
      price: 1500,
      image: "download.jpg"
    },
    {
      name: "Inyanya",
      price: 800,
      image: "inyany.jpg"
    },
    {
      name: "Igitoki",
      price: 600,
      image: "igitoki.jpg"
    },
    {
      name: "Umuceri",
      price: 1200,
      image: "umuceri.jpg"
    }
  ];
  
  let cart = [];
  
  const container = document.getElementById("product-list");
  const cartCount = document.getElementById("cart-count");
  const cartTotal = document.getElementById("cart-total");
  
  function updateCart() {
    cartCount.textContent = cart.length;
    const total = cart.reduce((sum, product) => sum + product.price, 0);
    cartTotal.textContent = `${total.toLocaleString()} Frw`;
  }
  
  products.forEach((product, index) => {
    const div = document.createElement("div");
    div.className = "product";
    div.innerHTML = `
      <img src="${product.image}" alt="${product.name}">
      <div class="product-info">
        <div class="product-name">${product.name}</div>
        <div class="product-price">${product.price.toLocaleString()} Frw</div>
        <button class="add-to-cart" data-index="${index}">Ongeramo mu gakapu</button>
      </div>
    `;
    container.appendChild(div);
  });
  
  // Event listener kuri butoni zose
  document.addEventListener("click", (e) => {
    if (e.target.classList.contains("add-to-cart")) {
      const index = e.target.dataset.index;
      cart.push(products[index]);
      updateCart();
    }
    

    const checkoutButton = document.getElementById("checkout-button");
const checkoutMessage = document.getElementById("checkout-message");

checkoutButton.addEventListener("click", () => {
  if (cart.length === 0) {
    checkoutMessage.style.display = "block";
    checkoutMessage.style.color = "red";
    checkoutMessage.textContent = "🛑 Nta bicuruzwa biri mu gakapu!";
    return;
  }

  // Emeza ko bishyuye
  checkoutMessage.style.display = "block";
  checkoutMessage.style.color = "green";
  checkoutMessage.textContent = "🎉 Murakoze! Mwishyuye neza.";

  // Gusiba gakapu
  cart = [];
  updateCart();
});

  });
  