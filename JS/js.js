(function () {
    'use strict' 
    
    var forms = document.querySelectorAll('.needs-validation')
  
    
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('reset', function (event) {
          
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            
          }else{
            var ime = $('#ime').val();
            var prezime = $('#prezime').val();
            var godRodjenja = $('#godina_rodjenja').val();
            var adresa =$('#adresa').val();
            var grad = $('#select-grad').val();
            var pol = $('#select-pol').val();
            
            $.ajax(
                {
                  url: 'dodaj.php',
                  method: 'post',
                  data: { keyIme: ime, keyPrezime: prezime, keyGodRodjenja: godRodjenja, keyAdresa: adresa, keyGrad: grad, keyPol: pol},
                  success: function (data) {                    
                    alert(data);
                    window.location.href = 'index.php';
                             }
                }
                  );                         
                             
          }
          
          form.classList.add('was-validated')
          
        }, false)
        
      })
      
  })
  ()

  