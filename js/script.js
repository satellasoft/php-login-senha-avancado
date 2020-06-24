function validarSenha(senha1, senha2, campo) {
    var resultado = document.getElementById(campo);

    senhaPrimaria = document.getElementById(senha1).value;
    senhaSecundaria = document.getElementById(senha2).value;

    if (senhaPrimaria == senhaSecundaria && senhaPrimaria.length > 3 && senhaSecundaria.length > 3) {
        resultado.innerHTML = "Senhas iguais";
    } else {
        resultado.innerHTML = "Senhas Incorretas";
    }
}