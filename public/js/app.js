document.querySelector('.img-btn').addEventListener('click', function()
	{
		document.querySelector('.cont').classList.toggle('s-signup')
	}
);
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
                    success: function (response) {
                        Swal.fire({
                            title: 'Success!',
                            text: 'Your action was successful!',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1000,
                            timerProgressBar: true
                        }).then(() => {
                            console.log("hii");
                            window.location.href = domain+'/dashboard';
                        });
                    },
                    error: function (response) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Check your username and password',
                            icon: 'error',
                            timer: 1000,
                        });
                    }
                });

            }.bind(this), function (error) {
                console.error('Error getting geolocation:', error);
                // Proceed with AJAX request without geolocation data if there's an error
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    success: function (response) {
                        Swal.fire({
                            title: 'Success!',
                            text: 'Your action was successful!',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1000,
                            timerProgressBar: true
                        }).then(() => {
                            console.log("hii");
                            window.location.href = domain+'/dashboard';
                        });
                    },
                    error: function (response) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Check your username and password',
                            icon: 'error',
                            timer: 1000,
                        });
                    }
                });
            });
        } else {
            console.log('Geolocation is not supported by this browser.');
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (response) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Your action was successful!',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1000,
                        timerProgressBar: true
                    }).then(() => {
                        // console.log("hii");
                        window.location.href = domain+'/dashboard';
                    });
                },
                error: function (response) {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Check your username and password',
                        icon: 'error',
                        timer: 1000,
                    });
                }
            });
        }
    });
});
