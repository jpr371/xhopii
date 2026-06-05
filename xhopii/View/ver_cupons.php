<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

require_once("../controller/Controlador.php");

$controlador = new Controlador();
$cupons = $controlador->visualizarCupons();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Xhopii - Cupons</title>

<link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header class="main-header">
    <section class="header-top">
        <section class="logo-area">
            <img src="../img/logo.png" alt="Xhopii Logo">
            <span>Xhopii</span>
        </section>

      <a href="../Processamento/Processamento.php?tipo=logout"
   class="exit-link">
   Sair
</a>
    </section>

    <nav class="nav-bar">
        <a href="home.php">Home</a>
        <a href="cad_cliente.php">Cadastro Cliente</a>
        <a href="cad_funcionario.php">Cadastro Funcionário</a>
        <a href="cad_produto.php">Cadastro Produto</a>
        <a href="cad_loja.php">Cadastro Loja</a>
        <a href="cad_cupom.php">Cadastro Cupom</a>
        <a href="ver_clientes.php">Ver Clientes</a>
        <a href="ver_funcionarios.php">Ver Funcionários</a>
        <a href="ver_produtos.php">Ver Produtos</a>
        <a href="ver_lojas.php">Ver Lojas</a>
        <a href="ver_cupons.php" class="active">Ver Cupons</a>
    </nav>
</header>

<main class="cupons-container">

    <h2 class="titulo-listagem">Cupons Cadastrados</h2>

    <table class="cupons-tabela">

        <tr>
            <th>Código</th>
            <th>Desconto</th>
            <th>Tipo</th>
            <th>Validade</th>
            <th>Usos</th>
            <th>Valor Mínimo</th>
            <th>Descrição</th>
        </tr>

        <?php while($cupom = mysqli_fetch_assoc($cupons)){ ?>

        <tr>

            <td>
                <span class="codigo-cupom">
                    <?php echo $cupom["codigo"]; ?>
                </span>
            </td>

            <td>
                <?php echo $cupom["desconto"]; ?>
            </td>

            <td>
                <?php echo $cupom["tipo_desconto"]; ?>
            </td>

            <td>
                <?php echo date("d/m/Y", strtotime($cupom["validade"])); ?>
            </td>

            <td>
                <?php echo $cupom["quantidade_usos"]; ?>
            </td>

            <td>
                R$ <?php echo number_format($cupom["valor_minimo_pedido"], 2, ",", "."); ?>
            </td>

            <td class="cupom-descricao">
                <?php echo $cupom["descricao"]; ?>
            </td>

        </tr>

        <?php } ?>

    </table>

</main>

<footer class="main-footer">
    <section class="footer-grid">

        <section>
            <h3>ATENDIMENTO AO CLIENTE</h3>
            <ul>
                <li>Central de Ajuda</li>
                <li>Como Comprar</li>
                <li>Métodos de Pagamento</li>
                <li>Garantia Xhopii</li>
                <li>Devolução e Reembolso</li>
                <li>Fale Conosco</li>
                <li>Ouvidoria</li>
            </ul>
        </section>

        <section>
            <h3>SOBRE A XHOPII</h3>
            <ul>
                <li>Sobre Nós</li>
                <li>Políticas Xhopii</li>
                <li>Política de Privacidade</li>
                <li>Programa de Afiliados da Xhopii</li>
                <li>Seja um Entregador Xhopii</li>
                <li>Ofertas Relâmpago</li>
                <li>Xhopii Blog</li>
                <li>Imprensa</li>
            </ul>
        </section>

        <section>
            <h3>PAGAMENTO</h3>
            <section class="pagamento-imgs">
                <img src="../img/visa.png" alt="Visa">
                <img src="../img/mastercard.png" alt="Mastercard">
                <img src="../img/pix.png" alt="Pix">
                <img src="../img/boleto.png" alt="Boleto">
                <img src="../img/elo.png" alt="Elo">
                 <img src="../img/hipercard.png" alt="Hipercard">
            </section>
        </section>
 <section class="redes-sociais">

    <a href="#">
        <img src="../img/instagram.jpg" alt="Instagram">
    </a>

    <a href="#">
        <img src="../img/twitter.png" alt="Twitter">
    </a>

    <a href="#">
        <img src="../img/facebook.jpg" alt="Facebook">
    </a>

    <a href="#">
        <img src="../img/Youtube.png" alt="YouTube">
    </a>

    <a href="#">
        <img src="../img/linkedin.jpg" alt="LinkedIn">
    </a>

</section>

        <section>
            <h3>ATENDIMENTO AO CLIENTE</h3>
            <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=Xhopii" width="80">
            <p class="app-text">Disponível na Google Play e App Store</p>
        </section>

    </section>

    <p class="copyright">
        © 2026 Xhopii. Todos os direitos acadêmicos reservados
    </p>
</footer>

</body>
</html>