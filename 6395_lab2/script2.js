



const name = document.getElementById('name')
const email = document.getElementById('email')
const password = document.getElementById('password')
const conpass = document.getElementById('conpass')
const form = document.getElementById('form2')
const errorElement = document.getElementById('errors')
var flag;
email.onkeydown = function(){
    const regex = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+.([a-z]+)(.[a-z]+)?$/;
    if (regex.test(email.value)){
        flag = 1;
    }else{
        flag = 0;
    }
}

form.addEventListener('submit', (e) => {
  let messages = []
  if (email.value === '' || email.value == null) {
    messages.push('email is required')
  }

  if (name.value === '' || name.value == null) {
    messages.push('Name is required')
  }


  if (password.value === '' || password.value == null) {
    messages.push('password is required')
  }

  if (conpass.value === '' || conpass.value == null) {
    messages.push('conpass is required')
  }

  if(password.value != conpass.value ){
    messages.push('Password and ConfirmPassword must be equal')
  }

  if(flag === 0){
    messages.push('Invalid email')
  }

  

  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(' \n ')
  }
})

