var _token = $('meta[name="csrf-token"]').attr('content');
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(function(){
    $('#saveProduct').on('submit',function(e){
        $.ajaxSetup({
            header:$('meta[name="_token"]').attr('content')
        })
        e.preventDefault(e);

            $.ajax({

            type:"POST",
            url:'/',
            data:$(this).serialize(),
            contentType: "application/javascript; charset=utf-8",
            dataType: 'json',
            success: function(data){
                // if(data){
                //     $("#products").append('<tr>\
                //         <td>'+ data.name +'</td>\
                //         <td>'+ data.quantity +'</td>\
                //         <td>'+ data.price +'</td>\
                //     </tr>');
                // }
            },
            error: function(data){

            }
        })
    });
});