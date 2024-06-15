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
                }
            },
            error: function (data){
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
function formregister(e) {
    e.preventDefault(); // Prevent default form submission

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            function (position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;

                let data = {
                    'slug': $('#slug').val(),
                    'name': $('#name').val(),
                    'email': $('#email').val(),
                    'mobile': $('#mobile').val(),
                    'state': $('#state').val(),
                    'city': $('#city').val(),
                    'pincode': $('#pincode').val(),
                    'address': $('#address').val(),
                    'shopname': $('#shopname').val(),
                    'pancard': $('#pancard').val(),
                    'aadharcard': $('#aadharcard').val(),
                    'latitude': latitude,
                    'longitude': longitude
                };

                $.ajax({
                    url: domain + '/registersubmit',
                    type: 'get', // Use POST for submitting form data
                    data: data,
                    success: function (response) {
                        if(response.msg=="Wrong Input Format"){
                            Swal.fire({
                                title: 'Error!',
                                text: response.msg,
                                icon: 'error',
                                showConfirmButton: false,
                                timer: 2000,
                                timerProgressBar: true
                            }).then(() => {
                                // Optionally, you can redirect or reset the form here
                            });
                        }else{
                             Swal.fire({
                            title: 'Success!',
                            text: response.msg,
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 2000,
                            timerProgressBar: true
                        }).then(() => {
                            // Optionally, you can redirect or reset the form here
                        });
                        }

                    },
                    error: function (xhr, status, error) {
                        console.log(error);
                        Swal.fire({
                            title: 'Error!',
                            text: error,
                            icon: 'error',
                            timer: 2000,
                        });
                        // console.log(xhr.responseText); // Log the error response for debugging
                    }
                });

                // console.log(data); // Log the data for debugging
            },
            function (error) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Unable to retrieve your location.',
                    icon: 'error',
                    timer: 2000,
                });
                console.log(error); // Log the error for debugging
            }
        );
    } else {
        Swal.fire({
            title: 'Error!',
            text: 'Geolocation is not supported by your browser.',
            icon: 'error',
            timer: 2000,
        });
    }
}
