<?php
require_once ("classes/DAO/usuarioDAO.php");
require_once("classes/Entidade/usuario.php");

require_once ("classes/DAO/senhaDAO.php");
require_once("classes/Entidade/senha.php");


$usuarioDAO = new usuarioDAO();
$senhaDAO = new senhaDAO();

$usuario = new usuario();
$senha = new senha();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>.::Cadastro - LogSystem.::</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
        <link rel="shortcut icon" href="img/favicon.ico" />
        <script type="text/javascript" src="js/script.js"></script>
    </head>
    <body>
        <div class="dvCadastro">
            <div class="logoLogin">
                <img src="img/logo.png" alt="LogSystem" title="logSystem"/>
            </div>

            <br />
            <form method="post" name="frmCadastro">
                <table>
                    <tr>
                        <td>Nome:</td>
                        <td><input type="text" name="txtNome" placeholder="Miguel Dias" autocomplete="off" /></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><input type="text" name="txtEmail" placeholder="email@dominio.com" autocomplete="off" /></td>
                    </tr>
                    <tr>
                        <td>Senha:</td>
                        <td><input onKeyUp="validarSenha('txtPass', 'txtPassAccept', 'resultadoCadastro');" type="password" id="txtPass" name="txtPass" placeholder="*********" autocomplete="off" /></td>
                    </tr>
                    <tr>
                        <td>Confirmar senha:</td>
                        <td><input type="password" onKeyUp="validarSenha('txtPass', 'txtPassAccept', 'resultadoCadastro');" id="txtPassAccept" name="txtPassAccept" placeholder="*********" autocomplete="off" /></td>
                    </tr>
                    <tr>
                        <td>Sexo:</td>
                        <td>
                            <select name="slSexo">
                                <option value="m">Masculino</option>
                                <option value="f">Feminino</option>
                            </select> 
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><p id="resultadoCadastro" style="font-weight: bold;">&nbsp;</p></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="btnSubmit" value="Cadastrar" class="btnSubmit" /> <a href="index.php">Voltar</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>

<?php
if (isset($_POST['btnSubmit'])) {
    $usuario->setUs_nome($_POST['txtNome']);
    $usuario->setUs_email($_POST['txtEmail']);
    $usuario->setUs_sexo($_POST['slSexo']);

    if (!$usuarioDAO->consultarEmail($_POST['txtEmail'])) {

        if ($usuarioDAO->cadastrar($usuario)) {

            $codigoUsuario = $usuarioDAO->consultarCodUsuario($_POST['txtEmail']);

            $senha->setSe_senha($_POST['txtPassAccept']);
            $senha->setUs_cod($codigoUsuario);

            if ($senhaDAO->cadastrar($senha)) {
                ?>
                <script type = "text/javascript">
                    document.getElementById("resultadoCadastro").innerHTML = "Cadastrado com sucesso.";
                    document.getElementById("resultadoCadastro").style.color = "green";</script>
                <?php
            } else {
                ?>
                <script type="text/javascript">
                    document.getElementById("resultadoCadastro").innerHTML = "Erro ao cadastrar.";
                    document.getElementById("resultadoCadastro").style.color = "red";</script>
                <?php
            }
        }
    } else {
        ?>
        <script type="text/javascript">
            document.getElementById("resultadoCadastro").innerHTML = "O E-mail informado já esta cadastrado.";
            document.getElementById("resultadoCadastro").style.color = "red";</script>
        <?php
    }
}
?>
