<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once("../controller/Controlador.php");

$controlador = new Controlador();

$tipo = "";

if(isset($_POST["tipo"])){
    $tipo = $_POST["tipo"];
}

if(isset($_GET["tipo"])){
    $tipo = $_GET["tipo"];
}

if($tipo != ""){

    switch($tipo){

        case "login":

            session_start();

            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $tipo_usuario = $_POST["tipo_usuario"];

            if($tipo_usuario == "cliente"){
                $resultado = $controlador->loginCliente($email, $senha);
            }else{
                $resultado = $controlador->loginFuncionario($email, $senha);
            }

            if(mysqli_num_rows($resultado) > 0){

                $usuario = mysqli_fetch_assoc($resultado);

                $_SESSION["usuario"] = $usuario["nome"];
                $_SESSION["tipo_usuario"] = $tipo_usuario;

                header("Location: ../View/home.php");
                exit();

            }else{
                echo "
                <script>
                    alert('Email ou senha inválidos!');
                    window.location='../View/login.php';
                </script>
                ";
            }

        break;

        case "logout":

            session_start();
            session_destroy();

            header("Location: ../View/login.php");
            exit();

        break;

        case "produto":

            $foto_produto = "";

            if(isset($_FILES["foto_produto"]) && $_FILES["foto_produto"]["error"] == 0){

                $pastaDestino = "../img/produtos/";

                if(!is_dir($pastaDestino)){
                    mkdir($pastaDestino, 0777, true);
                }

                $nomeArquivo = time() . "_" . basename($_FILES["foto_produto"]["name"]);
                $caminhoSalvar = $pastaDestino . $nomeArquivo;

                if(move_uploaded_file($_FILES["foto_produto"]["tmp_name"], $caminhoSalvar)){
                    $foto_produto = "../img/produtos/" . $nomeArquivo;
                }
            }

            $controlador->cadastrarProduto(
                $_POST["nome"],
                $_POST["fabricante"],
                $_POST["descricao"],
                $_POST["valor"],
                $_POST["quantidade"],
                $foto_produto
            );

            header("Location: ../View/ver_produtos.php");
            exit();

        break;

        case "cliente":

            $controlador->cadastrarCliente(
                $_POST["nome"],
                $_POST["cpf"],
                $_POST["email"],
                $_POST["telefone"],
                $_POST["data_nascimento"],
                $_POST["senha"]
            );

            header("Location: ../View/ver_clientes.php");
            exit();

        break;

        case "funcionario":

            $controlador->cadastrarFuncionario(
                $_POST["nome"],
                $_POST["cpf"],
                $_POST["cargo"],
                $_POST["salario"],
                $_POST["telefone"],
                $_POST["email"],
                $_POST["senha"]
            );

            header("Location: ../View/ver_funcionarios.php");
            exit();

        break;

        case "loja":

            $logo_loja = "";

            if(isset($_FILES["logo_loja"]) && $_FILES["logo_loja"]["error"] == 0){

                $pastaDestino = "../img/lojas/";

                if(!is_dir($pastaDestino)){
                    mkdir($pastaDestino, 0777, true);
                }

                $nomeArquivo = time() . "_" . basename($_FILES["logo_loja"]["name"]);
                $caminhoSalvar = $pastaDestino . $nomeArquivo;

                if(move_uploaded_file($_FILES["logo_loja"]["tmp_name"], $caminhoSalvar)){
                    $logo_loja = "../img/lojas/" . $nomeArquivo;
                }
            }

            $controlador->cadastrarLoja(
                $_POST["nome"],
                $_POST["cnpj"],
                $_POST["categoria"],
                $_POST["endereco"],
                $_POST["telefone"],
                $_POST["email"],
                $_POST["descricao"],
                $logo_loja
            );

            header("Location: ../View/ver_lojas.php");
            exit();

        break;

        case "cupom":

            $controlador->cadastrarCupom(
                $_POST["codigo"],
                $_POST["desconto"],
                $_POST["tipo_desconto"],
                $_POST["validade"],
                $_POST["quantidade_usos"],
                $_POST["valor_minimo_pedido"],
                $_POST["descricao"]
            );

            header("Location: ../View/ver_cupons.php");
            exit();

        break;

        default:
            echo "Tipo inválido";
        break;
    }

}else{
    echo "Nenhum dado recebido";
}

?>