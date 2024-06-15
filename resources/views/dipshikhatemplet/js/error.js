document.addEventListener("DOMContentLoaded", function() {
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
        };
        if (typeof successMessage !== 'undefined') {
            toastr.success(successMessage);
        } else if (typeof errorMessage !== 'undefined') {
            toastr.error(errorMessage);
        } else if (typeof warningMessage !== 'undefined') {
            toastr.warning(warningMessage);
        } else if (typeof infoMessage !== 'undefined') {
            toastr.info(infoMessage);
        };

        if (typeof allerrormessage !== 'undefined' && allerrormessage.length > 0) {
            allerrormessage.forEach(function(error) {
                toastr.error(error);
            });
        }     
});