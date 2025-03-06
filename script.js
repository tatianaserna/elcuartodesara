const carousel = document.querySelector(".carousel-container");
const products = document.querySelectorAll(".product-item");
let index = 0;

function showNextProduct() {
    index = (index + 1) % products.length;
    updateCarousel();
}

function showPrevProduct() {
    index = (index - 1 + products.length) % products.length;
    updateCarousel();
}

function updateCarousel() {
    const offset = -index * 270; // Ajusta según el tamaño de los productos
    carousel.style.transform = `translateX(${offset}px)`;
}

document.querySelector(".next-btn").addEventListener("click", showNextProduct);
document.querySelector(".prev-btn").addEventListener("click", showPrevProduct);
