function scrollTop() {
  window.scrollTo({ top: 0, behavior: "smooth" });
}

var body = document.querySelector("body");

function openMenu() {
  var element = document.querySelectorAll(".header--container");
  element.forEach(function (el) {
    el.classList.add("openned");
  });
  scrollTop();
  body.classList.add("overflow-hidden");
}

function closeMenu() {
  var close = document.querySelectorAll(".header--container");
  close.forEach(function (item) {
    item.classList.remove("openned");
  });
  body.classList.remove("overflow-hidden");
}

document.addEventListener("DOMContentLoaded", function () {
  var scrollToTopBtn = document.querySelector("#scrollToTopBtn");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 20) {
      scrollToTopBtn.style.display = "block";
    } else {
      scrollToTopBtn.style.display = "none";
    }
  });

  scrollToTopBtn.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
});

// document.addEventListener('DOMContentLoaded', () => {
//   const blocks = document.querySelectorAll('.scroll-effect');

//   const handleScroll = () => {
//       const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
//       const windowHeight = window.innerHeight;

//       blocks.forEach(block => {
//           const blockTop = block.getBoundingClientRect().top + scrollTop;
//           if (scrollTop + windowHeight > blockTop + 50) {
//               block.classList.add('visible');
//           } else {
//               block.classList.remove('visible');
//           }
//       });
//   };

//   window.addEventListener('scroll', handleScroll);
//   handleScroll();
// });

var swiper = new Swiper(".mySwiper", {
  loop: true,
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
  autoplay: {
    delay: 8000,
  },
});
var swiper2 = new Swiper(".mySwiper2", {
  loop: true,
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: swiper,
  },
  autoplay: {
    delay: 8000,
  },
});

document.addEventListener("DOMContentLoaded", function () {
  // Cria o modal dinamicamente
  const modal = document.createElement("div");
  modal.id = "imageModal";
  modal.style.display = "none";

  // Conteúdo do modal
  const modalContent = document.createElement("img");
  modalContent.id = "modalImage";
  modalContent.style.maxWidth = "90%";
  modalContent.style.maxHeight = "90%";
  modal.appendChild(modalContent);

  // Botão para fechar o modal
  const closeButton = document.createElement("button");
  closeButton.textContent = "×";
  closeButton.style.position = "absolute";
  closeButton.style.top = "20px";
  closeButton.style.right = "20px";
  closeButton.style.backgroundColor = "transparent";
  closeButton.style.color = "#003858";
  closeButton.style.border = "none";
  closeButton.style.fontSize = "40px";
  closeButton.style.cursor = "pointer";
  closeButton.style.zIndex = "10000";
  closeButton.title = "Fechar";
  modal.appendChild(closeButton);

  // Evento para fechar o modal ao clicar no botão
  closeButton.addEventListener("click", () => {
    modal.style.display = "none";
  });

  // Adiciona o modal ao body
  document.body.appendChild(modal);

  // Seleciona todas as imagens do slider
  const sliderImages = document.querySelectorAll(".swiper-slide img");

  // Adiciona evento de clique para exibir o modal
  sliderImages.forEach((img) => {
    img.style.cursor = "pointer"; // Adiciona um indicador visual
    img.addEventListener("click", () => {
      modalContent.src = img.src; // Define a imagem no modal
      modal.style.display = "flex"; // Mostra o modal
    });
  });
});
