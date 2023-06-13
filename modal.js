const modal = document.getElementById('modal')
const btn = document.getElementById('btn')

function showModal() {
  if (modal.style.display === 'none') {
    modal.style.display = 'block'
  } else {
    modal.style.display = 'none'
  }
}

function hideModal() {
  modal.style.display = 'none'
}

function handleOutsideClick(event) {
  if (event.target === modal) {
    hideModal()
  }
}

btn.addEventListener('click', showModal)
modal.querySelector('.close').addEventListener('click', hideModal)
window.addEventListener('click', handleOutsideClick)

