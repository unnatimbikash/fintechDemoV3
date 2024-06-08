document.addEventListener('DOMContentLoaded', function() {
    const statusOptions = document.querySelectorAll('.status-option');
    const tableContainers = document.querySelectorAll('.table-container');

    statusOptions.forEach(option => {
        option.addEventListener('click', function() {
            statusOptions.forEach(opt => opt.classList.remove('active'));
            option.classList.add('active');

            const status = option.getAttribute('data-status');
            tableContainers.forEach(container => {
                if (container.id.includes(status)) {
                    container.classList.add('active');
                } else {
                    container.classList.remove('active');
                }
            });
        });
    });
});

function showForm(formId) {
    var forms = document.querySelectorAll('.form-container');
    forms.forEach(function(form) {
        form.style.display = 'none';
    });
    document.getElementById(formId).style.display = 'block';
}
function viewdetails(data){
    console.log(data);
    $('#viewname').text(data.name);
    $('#newphonenumber').text(data.mobile);
    $('#viewEmail').text(data.email);
    $('#viewdob').text(data.dob);
    $('#joiningdate').text(data.created_at);
    $('#viewlogin').text(data.lastlogin);
    $('#viewmainwallet').text(data.mainwallet);
    $('#viewstatus').text(data.status);
    if(data.kyc=="pending"){
        $('#viewkycstatus').addClass('fa-circle-question');
    }else if(data.kyc=="submitted"){
        $('#viewkycstatus').addClass('fa-hourglass-start');
    }else if(data.kyc=="verified"){
        $('#viewkycstatus').addClass('fa-circle-check');
    }else{
        $('#viewkycstatus').addClass('fa-circle-xmark');
    }
}
function resetpassword (params) {
   $('#passwordid').val(params)
}
function resetformsubmit(e){
    e.preventDefault();
        let passwordResetForm = document.getElementById('passwordresetform');
        const formData = new FormData(passwordResetForm);

        // Get form data including CSRF token
        const data = {
            '_token': formData.get('_token'),
            'id': formData.get('id'),
            'previouspassword': formData.get('verifypassword'),
            'password': formData.get('password'),
            'confirmpassword': formData.get('confirmpassword'),
        };

        Swal.fire({
            title: 'Do you really want to change your password?',
            icon: 'info',
            showCancelButton: true,
            confirmButtonText: 'Yes, change it!',
            cancelButtonText: 'No, keep it'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: $('#passwordresetform').attr('action'),
                    data: data,
                    success: (response) => {
                        Swal.fire({
                            title: 'Success',
                            text: response.message,
                            icon: 'success',
                            timer: 2000,
                            timerProgressBar: true
                        });
                    },
                    error: (error) => {
                        Swal.fire({
                            title: 'Error!',
                            text: error.responseJSON.error,
                            icon: 'error',
                            timer: 2000,
                            timerProgressBar: true
                        });
                    }
                });
            }
        });
    }
