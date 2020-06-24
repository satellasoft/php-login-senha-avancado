<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>.::Login - LogSystem - Recuperar senha::.</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
        <link rel="shortcut icon" href="img/favicon.ico" />
    </head>
    <body>
        <div class="dvRecuperarSenha">
            <p>Para redefinir sua senha, por favor insira seu e-mail de cadastro no formulário abaixo.</p>
            <form method="post" name="frmRecuperarSenha">
                <p><span style="font-weight:bold;">E-mail: </span> <input type="email" name="txtEmail" placeholder="email@dominio.com" required="required" class="inputForm" /></p>
                <p><input type="submit" name="btnSubmit" value="Recuperar" class="btnSubmit" /></p>
            </form>
        </div>
    </body>
</html>
<?php
if (isset($_POST['btnSubmit'])) {
    $mail = $_POST['txtEmail'];
    $mailCript = base64_encode($_POST['txtEmail']);
    $mensagem = "Você esta recebendo este e-mail, por que foi solicitado a alteração de senha para o site NOME_SITE, clique no link abaixo para redefinir sua senha. <br /><a href='http://localhost/logSystem/redefinirSenha.php?conta={$mailCript}'>Recuperar Senha</a>";
    
    require_once("enviarEmail.php");

    enviarEmail($_POST['txtEmail'], "Prezado", "Recuperação de senha", $mensagem);
}
?>