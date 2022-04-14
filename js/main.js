/* document.addEventListener("DOMContentLoaded", function (event) {
  console.log("DOM fully loaded and parsed");
}); */

document.addEventListener("DOMContentLoaded", function (event) {
  const modal = document.querySelector('.modal');
  const modalBtn = document.querySelectorAll('[data-toggle=modal]');
  const closeBtn = document.querySelector('.modal__close');
  const area = document.querySelector('.area');

  const switchModal = () => {
    modal.classList.toggle('modal--visible');
  }
  modalBtn.forEach(element => {
    element.addEventListener('click', switchModal);
  });

  closeBtn.addEventListener('click', switchModal);


  document.addEventListener('keyup', function (e) {
    let key = e.keyCode;
    if (key == 27 && modal.classList.contains('modal--visible')) {
      switchModal();
    }
  });

  document.addEventListener('click', function (e) {
    if (e.target.classList.contains('modal--visible')) {
      switchModal();
    }
  });


  //                         Button arrow top        
  function scrollArrowTop() {
    var scrolled = window.pageYOffset;
    var coords = document.documentElement.clientHeight;

    if (scrolled > coords) {
      btnToTop.classList.add('arrow__top--on');
    }
    if (scrolled < coords) {
      btnToTop.classList.remove('arrow__top--on');
    }
  }

  function arrowTop() {
    if (window.pageYOffset > 0) {
      window.scrollBy(0, -80);
      setTimeout(arrowTop, 0);
    }
  }
  var btnToTop = document.querySelector('.arrow__top');

  window.addEventListener('scroll', scrollArrowTop);
  btnToTop.addEventListener('click', arrowTop);
});


















/*
$(document).ready(function () {
  var modal = $('.modal'),
    modalBtn = $('[data-toggle=modal]'),
    closeBtn = $('.modal__close');
  modalBtn.on('click', function () {
    modal.toggleClass('modal--visible');
  });
  closeBtn.on('click', function () {
    modal.toggleClass('modal--visible');
  });
}); */