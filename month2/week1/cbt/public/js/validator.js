(function () {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation')
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
})()