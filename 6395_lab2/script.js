
const name = document.getElementById('email')
const password = document.getElementById('password')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
  let messages = []
  if (email.value === '' || email.value == null) {
    messages.push('email is required')
  }

  if (password.value === '' || password.value == null) {
    messages.push('password is required')
  }

  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
})