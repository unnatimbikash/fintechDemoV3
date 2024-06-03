const domain = window.location.origin;
$(document).ready(function () {
    $('#loginForm').on('submit', function (e) {
        e.preventDefault();

        // Get geolocation data
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;

                // Include latitude and longitude in the AJAX data
                var formData = $(this).serialize() + '&latitude=' + latitude + '&longitude=' + longitude;
                // AJAX request with geolocation data
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: formData,
                    success: function (data) {
                        if(data.success==true){
                            Swal.fire({
                                title: 'Success!',
                                text: data.msg,
                                icon: 'success',
                                showConfirmButton: false,
                                timer: 2000,
                                timerProgressBar: true
                            }).then(() => {
                                window.location.href = domain+'/dashboard';
                            });       
                        }else{
                            Swal.fire({
                                title: 'Error!',
                                text: data.msg,
                                icon: 'error',
                                timer: 2000,
                            });
                        }   
                    },
                    error: function (data) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Something Went wrong',
                            icon: 'error',
                            timer: 2000,
                        });
                    }
                });

            }.bind(this), function (error) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Allow Location',
                    icon: 'error',
                    timer: 2000,
                });
            });
        } else {
            Swal.fire({
                title: 'Error!',
                text: 'location does not support in your browser',
                icon: 'error',
                timer: 2000,
            });
        }
    });

    // add role in
    $('#addrole_form').submit(function (e){
        $('#role_submit').attr("disabled", 'disabled');
        e.preventDefault();
        var formdata=$(this).serialize();
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formdata,
            success: function (data) {
                $('#role_submit').removeAttr("disabled");
                if(data.success==true){
                    $('#addrole').modal('hide');
                    $('#addrole_form').trigger('reset');
                    Swal.fire({
                        title: 'Success!',
                        text: data.msg,
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true
                    });  
                    $("#rolecard").load(location.href + " #role_card_body");   
                }else{
                    Swal.fire({
                        title: 'Error!',
                        text: data.msg,
                        icon: 'error',
                        timer: 2000,
                    });
                }   
            },
            error: function (data){
                $('#role_submit').removeAttr("disabled");
                Swal.fire({
                    title: 'Error!',
                    text: 'Something Went Wrong',
                    icon: 'error',
                    timer: 2000,
                });
            }
        });
    });

});