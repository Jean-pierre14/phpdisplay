fetch('http://localhost:7000/').then(res => {
            res.json().then(data=>{
                // console.log(data)
                let output = ''
                data.forEach((users)=>{
                    
                    output += `
                        <div class="border-bottom p-3 my-2">
                            <div class="close btn-group">
                                <button id="edit" data-id="${users.id}" class="btn btn-sm btn-info">Edit</button>
                                <a href="#" id="del" data-id="${users.id}" class="btn btn-sm btn-danger">delete</a>
                            </div>
                            <h3>${users.name}</h3>
                            <p class="d-flex justify-content-between align-items-center flex-wrap">
                                <span>Email</span>
                                <span>${users.email}</span>
                            </p>
                            <p class="d-flex justify-content-between align-items-center flex-wrap">
                                <span>Phone</span>
                                <span>${users.phone_no}</span>
                            </p>
                        </div>
                    `
                })
                document.getElementById('results').innerHTML = output
            })
})

const submit = document.getElementById('post');
const error = document.getElementById('error');

submit.addEventListener('click', posts)

function posts(e) {
    e.preventDefault();
    const name = document.getElementById('name').value
    const email = document.getElementById('email').value
    const phone = document.getElementById('phone').value
    if (!name || !email || !phone) {
        error.innerHTML = '<p class="alert alert-warning>Empty fields</p>'
    } else {
        fetch('http://localhost:7000/', {
            method: 'POST',
            headers: {
                'Accept': 'application/json, text/plan, */*',
                'Content-type': 'application/json'
            },body:JSON.stringify({name,email,phone})
        }).then((res) => res.json())
            .then((data) => {
                console.log(data)
            })
        name = ''
        email = ''
        phone = ''
    }
}


