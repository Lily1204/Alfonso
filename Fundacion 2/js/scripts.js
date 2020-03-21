(function() {
     'use strict';
     window.addEventListener('load', function() {
       // Seleccionar el formulario para validar
       var forms = document.getElementsByClassName('needs-validation');
       // Validar cada campo y prevenir que se envie
       var validation = Array.prototype.filter.call(forms, function(form) {
         form.addEventListener('submit', function(event) {
          event.preventDefault();
          if (form.checkValidity() === false) {
             event.stopPropagation();
             console.log(mensage);
            }else{
              var nombre = document.getElementById('nombre').value,
                  email = document.getElementById('email').value,
                  celular = document.getElementById('celular').value,
                  mensaje = document.getElementById('mensaje').value;

                  console.log(nombre);
                  console.log(email);
                  console.log(celular);
                  console.log(mensaje);

           }
           form.classList.add('was-validated');
         }, false);
       });
     }, false);
   })();