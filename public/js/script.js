const form = document.getElementById('form')
const username = document.getElementById('username')
const email = document.getElementById('email')
const pass = document.getElementById('pass')

form.addEventListener('submit', function (e) {
    e.preventDefault()
    
    checkInputs()
})

function checkInputs() {
    const userValue = username.value.trim()
    const emValue = email.value.trim()
    const psValue = pass.value.trim()

    // Check the username
    if (userValue === '') {
        // Display error
        // Add our error class
        setErrorFor(username, 'Username is blank')
    } else {
        setSuccessFor(username)
    }
}

function setErrorFor(input, msg) {
    const group = input.parentElement
    const small = group.querySelector('small')

    small.innerText = msg

    // add the class error
    group.className = 'group error'
}