window.fbAsyncInit = function() {
    FB.init({
      appId      : '442847286518472',
      cookie     : true,
      xfbml      : true,
      version    : 'v3.3'
    });

    FB.AppEvents.logPageView();

  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/es_LA/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

   FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
   });

   function checkLoginState() {
     FB.getLoginStatus(function(response) {
    validarUsuario();
     statusChangeCallback(response);
   });
   }

    function validarUsuario() {
        FB.getLoginStatus(function(response) {
           if(response.status == 'connected') {
              FB.api('/me', function(response) {
                  alert('Hola ' + response.name);
              });
        }
        else if(response.status == 'not_authorized') {
            alert('Debes autorizar la app!');
        }
        else {
            alert('Debes ingresar a tu cuenta de Facebook!');
        }
        });
}