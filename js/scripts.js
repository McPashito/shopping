function addToCart(productId) {
  fetch("cart_controller.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: new URLSearchParams({ action: "add", product_id: productId }),
  })
    .then((response) => response.json())
    .then((data) => {
      alert("Product added to the cart");
      sessionStorage.setItem("cart", JSON.stringify(data.cart));
    });
}

document.addEventListener("DOMContentLoaded", () => {
  const theme = localStorage.getItem("theme") || "light";
  const language = localStorage.getItem("language") || "en";
  document.body.classList.add(`theme-${theme}`);
  document.documentElement.lang = language;
});
