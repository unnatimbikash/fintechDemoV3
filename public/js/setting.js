//  opening of setting forms and activation of dropdown

    function showForm(formId, element) {
        console.log(formId, element);
        var forms = document.querySelectorAll('.form-container');
        forms.forEach(function (form) {
            form.style.display = 'none';
        });
        document.getElementById(formId).style.display = 'block';

        var items = document.querySelectorAll('.list-group-item a');
        items.forEach(function (item) {
            item.classList.remove('active-item');
        });
        element.classList.add('active-item');
    }


//  toggler switch js

    function toggleReferralSystem() {
        var checkBox = document.getElementById("referralToggle");
        var statusText = document.getElementById("referralStatus");
        var detailsForm = document.getElementById("referralDetailsForm");

        if (checkBox.checked == true) {
            statusText.innerHTML = "Enabled";
            detailsForm.style.display = "block";
        } else {
            statusText.innerHTML = "Disabled";
            detailsForm.style.display = "none";
        }
    }

//  js for view option in api


    $(document).ready(function () {
        $('.view-icon').on('click', function () {
            var $row = $(this).closest('tr');
            var profile = $row.find('td:nth-child(1)').text();
            var vatNo = $row.find('td:nth-child(2)').text();
            var created = $row.find('td:nth-child(3)').text();
            var status = $row.find('td:nth-child(4)').text();

            $('#viewModal #profile').val(profile);
            $('#viewModal #vatNo').val(vatNo);
            $('#viewModal #created').val(created);
            $('#viewModal #status').val(status);
        });
    });


//  js for view  option in api

    document.addEventListener('DOMContentLoaded', function () {
        var activeStatus = document.getElementById('activeStatus');
        var inactiveStatus = document.getElementById('inactiveStatus');
        var testRechargeSection = document.getElementById('testRechargeSection');

        activeStatus.addEventListener('change', function () {
            if (this.checked) {
                testRechargeSection.style.display = 'block';
            }
        });

        inactiveStatus.addEventListener('change', function () {
            if (this.checked) {
                testRechargeSection.style.display = 'none';
            }
        });

        // Set default state
        if (activeStatus.checked) {
            testRechargeSection.style.display = 'block';
        } else if (inactiveStatus.checked) {
            testRechargeSection.style.display = 'none';
        }
    });

