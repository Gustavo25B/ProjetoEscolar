/*
var loginform = document.querySelector('#loginform');

loginform.addEventListener('submit', function (e) {
  e.preventDefault();

  
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;

  if (username === 'usuario' && password === 'senha') {
    window.location.href = "index.html";
  } else {
    alert('Username ou Password incorretos');
  }
})
*/
function mascara(objeto, tipo) {
    if (tipo === 'cpf') {
        objeto.value = validaCPF(objeto.value);
    } 
}
function validaCPF(value) {
    value = value.replace(/\D/g,"");
    value = value.replace(/(\d{3})(\d)/,"$1.$2");
    value = value.replace(/(\d{3})(\d)/,"$1.$2");
    value = value.replace(/(\d{3})(\d{1,2})$/,"$1-$2");
    return value;
}

var loginCadUsuario = document.querySelector('#loginCadUsuario');

loginCadUsuario.addEventListener('submit',function (e){
    e.preventDefault();

    var usernamae = document.getElementById()
})

