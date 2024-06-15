// document.addEventListener('DOMContentLoaded', function() {
//     const statusOptions = document.querySelectorAll('.status-option');
//     const tableContainers = document.querySelectorAll('.table-container');

//     statusOptions.forEach(option => {
//         option.addEventListener('click', function() {
//             statusOptions.forEach(opt => opt.classList.remove('active'));
//             option.classList.add('active');

//             const status = option.getAttribute('data-status');
//             tableContainers.forEach(container => {
//                 if (container.id.includes(status)) {
//                     container.classList.add('active');
//                 } else {
//                     container.classList.remove('active');
//                 }
//             });
//         });
//     });
// });

// function showForm(formId) {
//     var forms = document.querySelectorAll('.form-container');
//     forms.forEach(function(form) {
//         form.style.display = 'none';
//     });
//     document.getElementById(formId).style.display = 'block';
// }
// function viewdetails(data){
//     console.log(data);
//     $('#viewname').text(data.name);
//     $('#newphonenumber').text(data.mobile);
//     $('#viewEmail').text(data.email);
//     $('#viewdob').text(data.dob);
//     $('#joiningdate').text(data.created_at);
//     $('#viewlogin').text(data.lastlogin);
//     $('#viewmainwallet').text(data.mainwallet);
//     $('#viewstatus').text(data.status);
//     if(data.kyc=="pending"){
//         $('#viewkycstatus').addClass('fa-circle-question');
//     }else if(data.kyc=="submitted"){
//         $('#viewkycstatus').addClass('fa-hourglass-start');
//     }else if(data.kyc=="verified"){
//         $('#viewkycstatus').addClass('fa-circle-check');
//     }else{
//         $('#viewkycstatus').addClass('fa-circle-xmark');
//     }
// }
// function resetpassword (params) {
//    $('#passwordid').val(params)
// }
// function resetformsubmit(e){
//     e.preventDefault();
//         let passwordResetForm = document.getElementById('passwordresetform');
//         const formData = new FormData(passwordResetForm);

//         // Get form data including CSRF token
//         const data = {
//             '_token': formData.get('_token'),
//             'id': formData.get('id'),
//             'previouspassword': formData.get('verifypassword'),
//             'password': formData.get('password'),
//             'confirmpassword': formData.get('confirmpassword'),
//         };

//         Swal.fire({
//             title: 'Do you really want to change your password?',
//             icon: 'info',
//             showCancelButton: true,
//             confirmButtonText: 'Yes, change it!',
//             cancelButtonText: 'No, keep it'
//         }).then((result) => {
//             if (result.isConfirmed) {
//                 $.ajax({
//                     type: 'POST',
//                     url: $('#passwordresetform').attr('action'),
//                     data: data,
//                     success: (response) => {
//                         Swal.fire({
//                             title: 'Success',
//                             text: response.message,
//                             icon: 'success',
//                             timer: 2000,
//                             timerProgressBar: true
//                         });
//                     },
//                     error: (error) => {
//                         Swal.fire({
//                             title: 'Error!',
//                             text: error.responseJSON.error,
//                             icon: 'error',
//                             timer: 2000,
//                             timerProgressBar: true
//                         });
//                     }
//                 });
//             }
//         });
//     }
// abhis-code-14-june-24
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
    $('#currentlogin').text(data.login);
    $('#lastlat_long').text(data.lastlatitude+ "-" + data.lastlongitude);
    $('#currebtlat_long').text(data.latitude + "-" + data.longitude);
    $('#kycstatus').text(data.kyc);
    $('#currentip').text(data.ip);
    $('#lastip').text(data.lastip);
    $('#viewmainwallet').text(data.mainwallet);
    $('#viewstatus').text(data.status);
    $('#pannumber').text(data.pancard);
    $('#aadharnumber').text(data.aadharmobile);
    $('#aadharcard').text(data.aadharcard);
    $('#shopname').text(data.shopname);
    $('#otpstatus').text(data.otpverify);
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
function resetthispassword(params) {

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
                        console.log(error);
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

function viewstatuses(param){
    console.log(param);
$('#idstatus').val(param);
}
function changestatus(e){
    e.preventDefault();
        let passwordResetForm = document.getElementById('statuschange');
        const formData = new FormData(passwordResetForm);
        // Get form data including CSRF token
        const data = {
            '_token': formData.get('_token'),
            'id': formData.get('id'),
            'status': formData.get('status'),
            'rejected_remarks': formData.get('rejected_remarks'),
        };

        Swal.fire({
            title: 'Do you really want to change the status?',
            icon: 'info',
            showCancelButton: true,
            confirmButtonText: 'Yes, change it!',
            cancelButtonText: 'No, keep it'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: $('#statuschange').attr('action'),
                    data: data,
                    success: (response) => {
                        $('#statusview').text(formData.get('status'));
                        if(formData.get('status')=="active"){
                            $('#statusview').removeClass('badge-danger');
                            $('#statusview').addClass('badge-success');
                        }else{
                        $('#statusview').removeClass('badge-success');
                        $('#statusview').addClass('badge-danger');
                        }
                        Swal.fire({
                            title: 'Success',
                            text: response.message,
                            icon: 'success',
                            timer: 2000,
                            timerProgressBar: true
                        });

                    },
                    error: (error) => {
                        console.log(error);
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
    $('#user-role-select').on('change',()=>{
        console.log('hii');
        window.location.href=window.location.origin+'/member?data='+$('#user-role-select').val()
    })
