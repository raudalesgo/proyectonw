var txtNombreD , txtEmailD, btnEnviarD, txtMensaje;
window.onload = function(e){
  txtNombreD = document.getElementById('txtNombre');
  txtEmailD = document.getElementById('txtEmail');
  txtMensajeD = document.getElementById('txtMensaje')
  btnEnviarD = document.getElementById('btnEnviar');
  btnEnviarD.addEventListener('click', function(e){
    e.preventDefault();
    e.stopPropagation();
    var txtNombreValue = txtNombreD.value;
    var txtEmailValue = txtEmailD.value;
    var txtMensajeValue = txtMensajeD.value;

    var validado = true;
    if((/^\s*$/).test(txtNombreValue)){
      validado = false;
      alert("El nombre es requerido");
    }

    if((/^[A-Za-z\s]*$/).test(txtNombreValue)){

    }else{
      validado = false;
      alert("Nombre tiene valores incorrectos");
    }

    if((/^\s*$/).test(txtMensajeValue)){
      validado = false;
      alert("El Mensaje es requerido");
    }

    if((/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/).test(txtEmailValue)){

    }else{
      validado = false;
      alert("Correo tiene valores incorrectos");
    }

    if(validado){
      alert('Valores:' + txtNombreValue + ' , ' + txtEmailValue + ' , ' + txtMensajeValue + ' ');
      document.forms[0].submit();
    }else{
      alert("Errores en el ingreso de datos");
    }
    return false;
  });
}
