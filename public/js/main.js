$(document).ready(function(){
    view();    
})

function view(){
    let action = 'view'
    $.ajax({
        url: './config/event.php',
        method: "post",
        data: {action},
        success: function(data){
            $('#views').html(data)
        }
    })
}