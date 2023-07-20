document.addEventListener('DOMContentLoaded', function() {
    let modal = document.querySelector('section.modal')
    let buttonCloseModal = document.querySelector('.modal__close')
  
    showModalIfNoLooked()
  
    function showModalIfNoLooked() {
      localStorage.getItem("Looked") ? null : showModal()
    }
  
    function showModal() {
      modal.style.display = 'flex'
    }
  
    function closeModal() {
      modal.style.display = 'none'
    }
  
    buttonCloseModal.addEventListener('click', function () {
      closeModal()
    })
  
    function addLookedLocal() {
      localStorage.setItem('Looked', true)
    }
  
    window.onload = addLookedLocal()
  });
  