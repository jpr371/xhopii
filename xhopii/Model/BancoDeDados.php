<?php
mysqli_report(MYSQLI_REPORT_OFF);

class BancoDeDados{

    private $host;
    private $login;
    private $senha;
    private $dataBase;

    public function __construct($host, $login, $senha, $dataBase){
        $this->host = $host;
        $this->login = $login;
        $this->senha = $senha;
        $this->dataBase = $dataBase;
    }

    public function conectar(){
        return mysqli_connect(
            $this->host,
            $this->login,
            $this->senha,
            $this->dataBase
        );
    }

    public function inserirProduto($produto){

        $conexao = $this->conectar();

        $nome = $produto->getNome();
        $fabricante = $produto->getFabricante();
        $descricao = $produto->getDescricao();
        $valor = $produto->getValor();
        $quantidade = $produto->getQuantidade();
        $foto_produto = $produto->getFotoProduto();

        $sql = "INSERT INTO produtos
        (nome, fabricante, descricao, valor, quantidade, foto_produto)
        VALUES
        ('$nome', '$fabricante', '$descricao', '$valor', '$quantidade', '$foto_produto')";

        mysqli_query($conexao, $sql);
        mysqli_close($conexao);
    }

    public function retornarProdutos(){
        $conexao = $this->conectar();
        $sql = "SELECT * FROM produtos";
        return mysqli_query($conexao, $sql);
    }

    public function inserirCliente($cliente){

        $conexao = $this->conectar();

        $nome = $cliente->getNome();
        $cpf = $cliente->getCpf();
        $email = $cliente->getEmail();
        $telefone = $cliente->getTelefone();
        $data_nascimento = $cliente->getDataNascimento();
        $senha = $cliente->getSenha();

        // Verificar CPF duplicado
        $verificaCpf = mysqli_query($conexao, "SELECT id FROM clientes WHERE cpf='$cpf'");
        if(mysqli_num_rows($verificaCpf) > 0){
            mysqli_close($conexao);
            echo "
            <script>
                alert('Este CPF já está cadastrado!');
                window.history.back();
            </script>
            ";
            exit();
        }

        // Verificar email duplicado
        $verificaEmail = mysqli_query($conexao, "SELECT id FROM clientes WHERE email='$email'");
        if(mysqli_num_rows($verificaEmail) > 0){
            mysqli_close($conexao);
            echo "
            <script>
                alert('Este email já está cadastrado!');
                window.history.back();
            </script>
            ";
            exit();
        }

        $sql = "INSERT INTO clientes
        (nome, cpf, email, telefone, data_nascimento, senha)
        VALUES
        ('$nome', '$cpf', '$email', '$telefone', '$data_nascimento', '$senha')";

        mysqli_query($conexao, $sql);
        mysqli_close($conexao);
    }

    public function retornarClientes(){
        $conexao = $this->conectar();
        $sql = "SELECT * FROM clientes";
        return mysqli_query($conexao, $sql);
    }

    public function inserirFuncionario($funcionario){

        $conexao = $this->conectar();

        $nome = $funcionario->getNome();
        $cpf = $funcionario->getCpf();
        $cargo = $funcionario->getCargo();
        $salario = $funcionario->getSalario();
        $telefone = $funcionario->getTelefone();
        $email = $funcionario->getEmail();
        $senha = $funcionario->getSenha();

        // Verificar CPF duplicado
        $verificaCpf = mysqli_query($conexao, "SELECT id FROM funcionarios WHERE cpf='$cpf'");
        if(mysqli_num_rows($verificaCpf) > 0){
            mysqli_close($conexao);
            echo "
            <script>
                alert('Este CPF já está cadastrado!');
                window.history.back();
            </script>
            ";
            exit();
        }

        // Verificar email duplicado
        $verificaEmail = mysqli_query($conexao, "SELECT id FROM funcionarios WHERE email='$email'");
        if(mysqli_num_rows($verificaEmail) > 0){
            mysqli_close($conexao);
            echo "
            <script>
                alert('Este email já está cadastrado!');
                window.history.back();
            </script>
            ";
            exit();
        }

        $sql = "INSERT INTO funcionarios
        (nome, cpf, cargo, salario, telefone, email, senha)
        VALUES
        ('$nome', '$cpf', '$cargo', '$salario', '$telefone', '$email', '$senha')";

        mysqli_query($conexao, $sql);
        mysqli_close($conexao);
    }

    public function retornarFuncionarios(){
        $conexao = $this->conectar();
        $sql = "SELECT * FROM funcionarios";
        return mysqli_query($conexao, $sql);
    }

    public function inserirLoja($loja){

        $conexao = $this->conectar();

        $nome = $loja->getNome();
        $cnpj = $loja->getCnpj();
        $categoria = $loja->getCategoria();
        $endereco = $loja->getEndereco();
        $telefone = $loja->getTelefone();
        $email = $loja->getEmail();
        $descricao = $loja->getDescricao();
        $logo = $loja->getLogoLoja();

        // Verificar CNPJ duplicado
        $verificaCnpj = mysqli_query($conexao, "SELECT id FROM lojas WHERE cnpj='$cnpj'");
        if(mysqli_num_rows($verificaCnpj) > 0){
            mysqli_close($conexao);
            echo "
            <script>
                alert('Este CNPJ já está cadastrado!');
                window.history.back();
            </script>
            ";
            exit();
        }

        // Verificar email duplicado
        $verificaEmail = mysqli_query($conexao, "SELECT id FROM lojas WHERE email='$email'");
        if(mysqli_num_rows($verificaEmail) > 0){
            mysqli_close($conexao);
            echo "
            <script>
                alert('Este email já está cadastrado!');
                window.history.back();
            </script>
            ";
            exit();
        }

        $sql = "INSERT INTO lojas
        (nome, cnpj, categoria, endereco, telefone, email, descricao, logo_loja)
        VALUES
        ('$nome', '$cnpj', '$categoria', '$endereco', '$telefone', '$email', '$descricao', '$logo')";

        mysqli_query($conexao, $sql);
        mysqli_close($conexao);
    }

    public function retornarLojas(){
        $conexao = $this->conectar();
        $sql = "SELECT * FROM lojas";
        return mysqli_query($conexao, $sql);
    }

    public function inserirCupom($cupom){

        $conexao = $this->conectar();

        $codigo = $cupom->getCodigo();
        $desconto = $cupom->getDesconto();
        $tipo_desconto = $cupom->getTipoDesconto();
        $validade = $cupom->getValidade();
        $quantidade_usos = $cupom->getQuantidadeUsos();
        $valor_minimo_pedido = $cupom->getValorMinimoPedido();
        $descricao = $cupom->getDescricao();

        $sql = "INSERT INTO cupons
        (codigo, desconto, tipo_desconto, validade, quantidade_usos, valor_minimo_pedido, descricao)
        VALUES
        ('$codigo', '$desconto', '$tipo_desconto', '$validade', '$quantidade_usos', '$valor_minimo_pedido', '$descricao')";

        mysqli_query($conexao, $sql);
        mysqli_close($conexao);
    }

    public function retornarCupons(){
        $conexao = $this->conectar();
        $sql = "SELECT * FROM cupons";
        return mysqli_query($conexao, $sql);
    }

    public function loginCliente($email, $senha){
        $conexao = $this->conectar();

        $sql = "SELECT * FROM clientes
        WHERE email='$email'
        AND senha='$senha'";

        return mysqli_query($conexao, $sql);
    }

    public function loginFuncionario($email, $senha){
        $conexao = $this->conectar();

        $sql = "SELECT * FROM funcionarios
        WHERE email='$email'
        AND senha='$senha'";

        return mysqli_query($conexao, $sql);
    }

}

?>