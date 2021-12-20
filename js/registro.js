
  
 

  function validar() {
  //obtengo los valores de los campos del formulario
    
  var nomR = document.getElementById('nombreReg').value
  var apeR = document.getElementById('apellidoReg').value
  var dniR = document.getElementById('dniReg').value
  //var telR = document.getElementById('telReg').value
  var emaR = document.getElementById('emailReg').value
  var pasR = document.getElementById('passReg').value

    //Compruebo con condicional de que no haya campos vacíos excepto el de tel.
  if (nomR == "" || apeR == "" || dniR == "" || emaR == "" || pasR == "" ) {
      alert("¡Por favor, para su registro, complete todos los campos requeridos!")
        return false;
  }
    return true;
}
 

 
  
  
  