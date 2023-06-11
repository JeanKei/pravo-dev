
let modalSend = document.querySelector('.send__data');
let modalData = document.querySelectorAll('.data-madal');



modalData.forEach(e => {
  e.addEventListener("click", function (el) {
    t = e.dataset.nametitle;
    modalSend.value = t;

  })
});
