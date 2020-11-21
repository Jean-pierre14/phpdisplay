$(document).ready(function () {
    load()
});

function load() {
    var url = 'http://localhost:7000/'
    $.get(url, function (results) {
        if (results.items) {
            results.items.forEach(item => {
                $('#results').append(renderUser(item))
            })
        }
    })
}

function renderUser(item) {
    return `
        <div class="shadow">
            <h3>${item.name}</h3>
        </div>
    `
}