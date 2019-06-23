////// Funcion para conectar Facebook a nuestra aplicacion ///////
window.fbAsyncInit = function() {
  FB.init({
    appId      : '442847286518472',
    cookie     : true,
    xfbml      : true,
    version    : 'v3.3'
  });
  FB.AppEvents.logPageView();
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
};

(function(d, s, id){
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
   
function checkLoginState() {
  FB.getLoginStatus(function(response) {
  validarUsuario();
  statusChangeCallback(response);
});
}
///// funcion para el validar datos de facebook /////
function validarUsuario() {
  FB.getLoginStatus(function(response) {
    if(response.status == 'connected') {
      Carga();
  }
  else if(response.status == 'not_authorized') {
    alert('Debe Autorizar a la App para Ingresar');
  }
  else {
    alert('Inicia Sesion con tu Cuenta de Facebook para Continuar a tu Perfil');
  }
  });
}
/////// Funcion para aplicar los datos cargados ////////
function Carga() {
  FB.api('/me?fields=name,email', function(response) {
    document.getElementById("status").innerHTML = '<p>Bienvenido '+response.name+'! Para Continuar <a href=./validaface.php?name='+ response.name.replace(" ", "_") +'&email='+ response.email +'>Click Aqui</a></p>'
  });
}