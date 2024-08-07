# Índice 🔗

[Projeto - CadEcommerce](https://github.com/paulaboaroo0103/CadEcommerce?tab=readme-ov-file#projeto-cadecommerce) 🛒

[Gerenciamento de Dados](https://github.com/paulaboaroo0103/CadEcommerce/edit/main/README.md#gerenciamento-de-dados-) 🎲

[Descrição](https://github.com/paulaboaroo0103/CadEcommerce?tab=readme-ov-file#descri%C3%A7%C3%A3o) 📝

[Funcionalidades](https://github.com/paulaboaroo0103/CadEcommerce?tab=readme-ov-file#funcionalidades) ⚙️

[Estrutura do Projeto](https://github.com/paulaboaroo0103/CadEcommerce?tab=readme-ov-file#estrutura-do-projeto) ✏️

[Exemplos de Uso dos Métodos](https://github.com/paulaboaroo0103/CadEcommerce?tab=readme-ov-file#exemplo-de-uso-dos-m%C3%A9todos) 🤖

[Fontes](https://github.com/paulaboaroo0103/CadEcommerce/edit/main/README.md#fontes-) 🔗

[Autora](https://github.com/paulaboaroo0103/CadEcommerce/edit/main/README.md#autora-) 👩🏽


# Projeto CadEcommerce 🛒
![image](https://github.com/user-attachments/assets/dfd44af7-ef67-453e-a6bf-be76c49a42db)


# Gerenciamento de Dados 🎲
![image](https://github.com/user-attachments/assets/49dd4566-791f-492c-b90e-c7b1370d0f7f)


## Descrição 📝
Este repositório contém o código fonte de uma aplicação e-commerce desenvolvida em PHP. A aplicação permite o gerenciamento de produtos, categorias, marcas e pedidos. O objetivo é fornecer uma solução completa para lojas online, incluindo a funcionalidade de carrinho de compras.

## Funcionalidades ⚙️

1. **Gerenciamento de Produtos,Categorias e marcas**

![image](https://github.com/user-attachments/assets/c4870090-03c4-4140-aa42-9c9d39e1f076)

* Adicionar, editar, remover e listar produtos.

2. **Carrinho de Compras**
* Adicionar, atualizar, remover produtos e visualizar itens no carrinho, além de calcular o total.

3. **Gerenciamento de Pedidos**
* Fazer pedidos, visualizar histórico, atualizar status e cancelar pedidos.

4. **Busca e Filtros**
Buscar produtos por nome ou descrição e filtrar por categoria, marca, preço, etc.

5. **Gestão de Estoque**
Monitoramento e alertas de níveis de estoque.

# Estrutura do Projeto ✏️

A seguir estão os arquivos PHP principais do projeto, juntamente com uma breve descrição de cada um:

**carrinho.php:** Gerencia o carrinho de compras dos usuários.

**categoria.php:** Gerencia as categorias de produtos.

**index.php:** Página inicial da aplicação.

**insere-categoria.php:** Script para inserção de novas categorias.

**insere-marca.php:** Script para inserção de novas marcas.

**insere-produto.php:** cript para inserção de novos produtos.

**marca.ph:** Gerencia as marcas de produtos.

**pedido.php:** Gerencia os pedidos realizados pelos clientes.

**produto.php:** Gerencia os produtos disponíveis na loja.

# Exemplo de Uso dos Métodos 🤖

### Carrinho.php
Este arquivo HTML representa a página de carrinho de compras e inclui um arquivo PHP responsável por buscar e exibir os produtos no carrinho.

```ruby
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Carrinho</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <header>
      <div class="center">
        <h1>Programação Web II - Carrinho</h1>
        <a href="index.php">Inicial</a>
      </div>
    </header>
    <section id="produtos">
      <div class="center">
        <?php require_once('controller/carrinho-busca.php'); ?>
      </div>
    </section>
  </body>
</html>
```
### Carrinho-busca.php

```ruby
<?php
session_start();
require_once('model/Produto.php');
require_once('model/Carrinho.php');

// Inicializa o carrinho
$carrinho = new Carrinho();
$produtos = $carrinho->obterProdutosNoCarrinho();

// Exibe os produtos
if (count($produtos) > 0) {
    foreach ($produtos as $produto) {
        echo "<div class='produto'>";
        echo "<h2>{$produto['nome']}</h2>";
        echo "<p>Preço: R$ {$produto['preco']}</p>";
        echo "<p>Quantidade: {$produto['quantidade']}</p>";
        echo "<a href='remove-produto.php?id={$produto['id']}'>Remover</a>";
        echo "</div>";
    }
} else {
    echo "<p>Seu carrinho está vazio.</p>";
}
?>
```

### Categoria.php
Este arquivo HTML representa a página de cadastro de categorias.

```ruby
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Cadastrar Categorias</title>
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <header>
        <div class="center">
            <h1>Cadastro de Categorias</h1>
            <a href="index.php" target="_self">Voltar</a>
        </div>
    </header>
    <section id="produtos">
        <form action="insere-categoria.php" method="post">
            <label for="">Descrição:</label>
            <input type="text" name="descricao">
            <input type="submit" value="Cadastrar">
        </form>
    </section>
</body>
</html>
```

### insere-categoria.php

```ruby
<?php
include('controller/conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $descricao = $_POST['descricao'];

    if (empty($descricao)) {
        echo "<h3>Erro: Descrição é obrigatória!</h3><br><br>";
    } else {
        $cad_categoria = "INSERT INTO categoria (DESCRICAO) VALUES ('$descricao')";
        if (mysqli_query($mysqli, $cad_categoria)) {
            echo "<h1>Categoria Cadastrada com Sucesso!</h1><br>";
        } else {
            echo "Erro: ". mysqli_error($mysqli). "<br>";
        }
    }
}

mysqli_close($mysqli);
?>
```

### insere-marca.php

```ruby
<?php
include('controller/conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $descricao = $_POST['descricao'];

    if (empty($descricao)) {
        echo "<h3>Erro: Descrição é obrigatória!</h3><br><br>";
    } else {
        $cad_marca = "INSERT INTO marca (DESCRICAO) VALUES ('$descricao')";
        if (mysqli_query($mysqli, $cad_marca)) {
            echo "<h1>Marca Cadastrada com Sucesso!</h1><br>";
        } else {
            echo "Erro: ". mysqli_error($mysqli). "<br>";
        }
    }
}

mysqli_close($mysqli);
?>
```

### insere-produto.php

```ruby
<?php
include_once('controller/conexao.php');

$categoria = $_POST['seleciona_categoria'];
$marca = $_POST['seleciona_marca'];
$nome_produto = $_POST['nome'];
$descricao = $_POST['descricao'];
$estoque = $_POST['estoque'];
$preco = $_POST['preco'];

$grava_produto = "INSERT INTO produtos (IDCATEGORIA, IDMARCA, NOME, DESCRICAO, ESTOQUE, PRECO) VALUES ('$categoria','$marca','$nome_produto','$descricao','$estoque','$preco')";

$result_gravacao = mysqli_query($mysqli, $grava_produto);

if(mysqli_affected_rows($mysqli) != 0){
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=produtos.php'>
    <script type=\"text/javascript\">
    alert('Produto cadastrado com sucesso!');
    </script>
    ";
}else{
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=produtos.php'>
    <script type=\"text/javascript\">
    alert('Problema no cadastro do produto!');
    </script>
    ";
}

mysqli_close($mysqli);
?>
```
## Resumo
**Carrinho.php:** Exibe produtos no carrinho usando controller/carrinho-busca.php.

**Categoria.php:** Formulário HTML para cadastrar categorias.

**insere-categoria.php:** Insere uma nova categoria no banco de dados.

**insere-marca.php:** Insere uma nova marca no banco de dados.

**insere-produto.php:** Insere um novo produto no banco de dados.

# Fontes 🔗
https://www.ruby-lang.org/pt/documentation/quickstart/3/

https://github.com/paulaboaroo0103/CadastroE-Commerce

https://www.google.com/search?gs_ssp=eJzj4tTP1TcwMU02T1JgNGB0YPBiS8_PT89JBQBASQXT&q=google&rlz=1C1GCEU_pt-BRBR1096BR1096&oq=goo&gs_lcrp=EgZjaHJvbWUqEwgCEC4YgwEYxwEYsQMY0QMYgAQyBggAEEUYOTIMCAEQIxgnGIAEGIoFMhMIAhAuGIMBGMcBGLEDGNEDGIAEMg0IAxAAGIMBGLEDGIAEMg0IBBAAGIMBGLEDGIAEMg0IBRAAGIMBGLEDGIAEMgYIBhBFGDwyBggHEEUYPNIBCDQ5MTRqMGo3qAIAsAIA&sourceid=chrome&ie=UTF-8

## Autora 👩🏽
| [<img loading="lazy" src="https://user-images.githubusercontent.com/127847275/272244520-740a7042-aefd-42c6-ad38-536121527e4b.png" width=95><br><sub>Paula Boaro</sub>](https://github.com/paulaboaroo0103) 
| :---: |

### Colaborador:
|  [<img loading="lazy" src="https://user-images.githubusercontent.com/86802310/268408790-48baaee3-ce37-4ad6-9348-ecb738990343.png" width=95><br><sub>Leonardo Rocha </sub>](https://github.com/leonardorochamarista)
| :---: |




