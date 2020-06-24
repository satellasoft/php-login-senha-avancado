<?php
session_start();
require_once ("classes/DAO/usuarioDAO.php");

$usuarioDAO = new usuarioDAO();

if ($_SESSION['logado'] == 1) {
    ?>
    <script type="text/javascript">
        document.location.href = "painel.php";
    </script>
    <?php
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>.::Login - LogSystem::.</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
        <link rel="shortcut icon" href="img/favicon.ico" />
    </head>
    <body>
        <div class="centerLogin">
            <form method="post" name="frmLogin">
                <div class="logoLogin">
                    <img src="img/logo.png" alt="LogSystem" title="logSystem"/>
                </div>

                <div class="emailLogin formularioLogin">
                    <img src="img/user.png" alt="E-mail" />
                    <input type="text" name="txtEmail" placeholder="email@dominio.com" autocomplete="off" />
                </div>

                <div class="senhaLogin formularioLogin">
                    <img src="img/pass.png" alt="Senha" />
                    <input type="password" name="txtPassword" placeholder="************" autocomplete="off" />
                </div>

                <input type="submit" name="btnSubmit" value="Login" class="btnSubmitLogin" />

                <a href="cadastro.php">Cadastrar-se</a> |  <a href="recuperarSenha.php">Recuperar Senha</a>
            </form>
        </div>
    </body>
</html>

<?php
if (isset($_POST['btnSubmit'])) {

    if ($usuarioDAO->login($_POST['txtEmail'], $_POST['txtPassword'])) {

        $_SESSION['logado'] = '1';
        ?>

        <script type="text/javascript">
            document.location.href = "painel.php";
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
            alert("Usuário ou senha inválido.");
        </script>
        <?php
    }
}

if (isset($_GET['erro'])) {
    switch ($_GET['erro']) {
        case "1":
            ?>
            <script type="text/javascript">
                alert("Você não tem permissão para acessar o painel.");
            </script>
            <?php
            break;
        case "2":
            ?>
            <script type="text/javascript">
                alert("Você saiu do painel.");
            </script>
            <?php
            break;
    }
}
?>
