document.querySelector('.img-btn').addEventListener('click', function()
	{
		document.querySelector('.cont').classList.toggle('s-signup')
	}
);
const domain = window.location.origin;
$(document).ready(function () {
    $('#loginForm').on('submit', function (e) {
        e.preventDefault();
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
                console.log(latitude,longitude);
                var formData = $(this).serialize() + '&latitude=' + latitude + '&longitude=' + longitude;
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: formData,
                    success: function (response) {
                        Swal.fire({
                            title: 'Success!',
                            text: 'Login Successfull !',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 2000,
                            timerProgressBar: true
                        }).then(() => {
                            console.log("hii");
                            window.location.href = domain+'/dashboard';
                        });
                    },
                    error: function (response) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Invalid Login Credential',
                            icon: 'error',
                            timer: 200,
                        });
                    }
                });

            }.bind(this), function (error) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Turn On Location in browser',
                    icon: 'error',
                    timer: 2000,
                });
            });
        } else {
            Swal.fire({
                title: 'Error!',
                text: 'location Doesnot support in your browser',
                icon: 'error',
                timer: 2000,
            });
        }
    });
});
