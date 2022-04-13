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


  modal.addEventListener('keypress', (event) => {
    if (event.code == 'Space') {   // Не получилось через клавишу Esc, сделал со Space
      switchModal;
    }
  });

});