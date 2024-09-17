$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function loadMore() {
    
    const page  = $('#page').val();

    $.ajax({
        type : 'POST',
        dataType : 'JSON',
        data : { page  },
        url : '/services/load-room',
        success : function (result) {
           if(result.html !== '') {
                $('#loadRoom').append(result.html);
                $('#page').val(page + 1);
           }else{
                // alert('Đã load xong sản phẩm');
                Swal.fire({
                    icon: 'success',
                    text: 'Loading room completed',
                    showConfirmButton: false,
                    timer: 2000
                });
                $('#button-loadMore').css('display','none');
           }
        }
    })
}


