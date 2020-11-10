$(document).ready(function(){
    getData();
    $(window).scroll(function(){
        $(window).scrollTop()
    })
})

function getData(){
    let action = 'views'
    let limit = 5
    $.ajax({
        url: './config/event.php',
        method: 'POST',
        datatype: 'json',
        data: {action, limit},
        success: function(data){
            $('#results').html(data)
        }
    })
}