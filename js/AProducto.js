let listElements = document.querySelectorAll('.list__button--click');

listElements.forEach(listElement => {
    listElement.addEventListener('click', ()=>{
        
        listElement.classList.toggle('arrow');

        let height = 0;
        let menu = listElement.nextElementSibling;
        if(menu.clientHeight == "0"){
            height=menu.scrollHeight;
        }

        menu.style.height = `${height}px`;

    })
});
function validateID() {
    var phoneInput = document.getElementById("id");
    var phoneError = document.getElementById("id-error");
    var tipoPInput = document.getElementById('proveedor');
    var marInput = document.getElementById('idMarca');
    // Eliminar caracteres no numéricos
    var phoneNumber = phoneInput.value.replace(/\D/g, "");

    if (phoneNumber.length > 13) {
      phoneNumber = phoneNumber.substr(0, 13);
    }
  
    // Mostrar o ocultar mensaje de error
    if (phoneNumber.length < 13) {
      phoneError.style.display = "block";   
      tipoPInput.disabled = true;
      marInput.disabled = true;
    } else {
      phoneError.style.display = "none";
      tipoPInput.disabled = false;
      marInput.disabled = false;
    }
    phoneInput.value = phoneNumber;
  }


  function validarProvedor() {
    var nombreInput = document.getElementById('proveedor');
    var apeInput = document.getElementById('idMarca');
    if(nombreInput.value===""){
      apeInput.disabled = true;
    }else{
      apeInput.disabled = false;
    }

    
  } 
  function validateIDMarca() {
    var phoneInput = document.getElementById("idMarca");
    var phoneError = document.getElementById("idM-error");
    var tipoPInput = document.getElementById('modelo');
  
    // Eliminar caracteres no numéricos
    var phoneNumber = phoneInput.value.replace(/\D/g, "");

    if (phoneNumber.length > 6) {
      phoneNumber = phoneNumber.substr(0, 6);
    }
  
    // Mostrar o ocultar mensaje de error
    if (phoneNumber.length < 6) {
      phoneError.style.display = "block";   
      tipoPInput.disabled = true;
    } else {
      phoneError.style.display = "none";
      tipoPInput.disabled = false;
    }
    phoneInput.value = phoneNumber;
  }
  function validarModelo() {
    var nombreInput = document.getElementById('modelo');
    var apeInput = document.getElementById('nombre');

    nombreInput.addEventListener('input', function() {
      var nombre = nombreInput.value;
      nombre = nombre.replace(/[^a-zA-ZáéíóúÁÉÍÓÚ\s]/g, '');

      if (nombre.length > 6) {
      //  phoneError.style.display = "block";   
        apeInput.disabled = false;
      } else {
  
        apeInput.disabled = true;
      }
      nombreInput.value = nombre;     
    }); 
  }
  function validarNombre() {
    var nombreInput = document.getElementById('nombre');
    var apeInput = document.getElementById('descripcion');

    nombreInput.addEventListener('input', function() {
      var nombre = nombreInput.value;
      nombre = nombre.replace(/[^a-zA-ZáéíóúÁÉÍÓÚ\s]/g, '');

      if (nombre.length > 5) {
      //  phoneError.style.display = "block";   
        apeInput.disabled = false;
      } else {
       // phoneError.style.display = "none";
        apeInput.disabled = true;
      }
      nombreInput.value = nombre;     
    }); 
  }
  function validarDescripcion() {
    var nombreInput = document.getElementById('descripcion');
    var apeInput = document.getElementById('precioU');
    var stockinput = document.getElementById("stock");
    var pCinput = document.getElementById("precioC");
    var cate = document.getElementById("categoria");

    nombreInput.addEventListener('input', function() {
      var nombre = nombreInput.value;
      nombre = nombre.replace(/[^a-zA-ZáéíóúÁÉÍÓÚ\s]/, '');

      if (nombre.length > 5) {
      //  phoneError.style.display = "block";   
        apeInput.disabled = false;
        stockinput.disabled = false;
        pCinput.disabled = false;
        cate.disabled = false;
      } else {
       // phoneError.style.display = "none";
        apeInput.disabled = true;
        stockinput.disabled = true;
        pCinput.disabled = true;
        cate.disabled = true;
      }
      nombreInput.value = nombre;     
    }); 
  }
  function validaPrecioU() {
    var input = document.getElementById("precioU").value;
    var stockinput = document.getElementById("stock").value;
    //var error = document.getElementById("errorPU");
  
    if (input.value<3 ) {
      error.textContent = "El valor no puede ser negativo";
      stockinput.disabled = false;
      
    } else {
      error.textContent = "";
      stockinput.disabled = true;
     return true;
      // Aquí puedes hacer algo con el valor válido, como enviarlo a través de una solicitud AJAX o realizar alguna acción adicional
    }
  }
  function validaStock() {

  }
  