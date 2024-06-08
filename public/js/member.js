
    document.addEventListener('DOMContentLoaded', function () {
      const statusOptions = document.querySelectorAll('.status-option');
      const tableContainers = document.querySelectorAll('.table-container');

      statusOptions.forEach(option => {
        option.addEventListener('click', function () {
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
      forms.forEach(function (form) {
        form.style.display = 'none';
      });
      document.getElementById(formId).style.display = 'block';
    }



//   <!-- js for filteration -->

    $(document).ready(function () {
      $('.status-option').click(function () {
        var status = $(this).data('status');
        $('.status-option').removeClass('active');
        $(this).addClass('active');
        $('.table-container').removeClass('active');
        $('#' + status + 'Table').addClass('active');
      });

      $('#filter-icon').click(function () {
        $('.filter-section').toggle();
      });
    });


//   <!-- Script to handle the selections  of setting -->

    $(document).ready(function () {
      // Handle selection changes
      $('.form-check-input').change(function () {
        const showOption = $('input[name="showOptions"]:checked').val();
        const orderByOption = $('input[name="orderByOptions"]:checked').val();
        const orderOption = $('input[name="orderOptions"]:checked').val();

        console.log('Show:', showOption);
        console.log('Order By:', orderByOption);
        console.log('Order:', orderOption);

        // You can add logic here to update the table or perform actions based on the selections
      });
    });

