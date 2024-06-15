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
    $('#permissionForm').submit(function (e){
        e.preventDefault();
        var formdata=$(this).serialize();
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formdata,
            cache:false,
            success: function (data) {
                // var form = $('#permissionForm');
                // form[0].reset();
                if(data.status=='success'){
                    Swal.fire({
                        title: 'Success!',
                        text: data.msg,
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true
                    });
                    $('#permissionModalCenter').modal('hide');
                }
            },
            error: function(xhr, status, error) {
                if (xhr.responseJSON && xhr.responseJSON.message) {
                    //toastr.error(xhr.responseJSON.message);
                    Swal.fire({
                        title: 'Error!',
                        text: xhr.responseJSON.message,
                        icon: 'error',
                        timer: 2000,
                    });
                } else {
                    // toastr.error('An unexpected error occurred.');
                    Swal.fire({
                        title: 'Error!',
                        text: 'Something went Wrong',
                        icon: 'error',
                        timer: 2000,
                    });
                }
            }
        });
    });
    
});
