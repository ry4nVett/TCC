password = document.getElementsByName('password');
email = document.getElementsByName('email');
dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);


password_int = password.length;

function validarSenha(){
    if(password_int <= 7 && password_int>= 15){
        alert("A senha necessita ter mais de 8 Caracteres e menos de 16");
    }else{
    return true;
    
    }
}

function validarEmail(){
        if ((usuario.length >=1) &&
            (dominio.length >=3) &&
            (usuario.search("@")==-1) &&
            (dominio.search("@")==-1) &&
            (usuario.search(" ")==-1) &&
            (dominio.search(" ")==-1) &&
            (dominio.search(".")!=-1) &&
            (dominio.indexOf(".") >=1)&&
            (dominio.lastIndexOf(".") < dominio.length - 1)) {
                return true
            }else{
                alert("E-mail invalido");
        }
}