# Projeto CadEcommerce
![img](imagem/cadecomerce%20.png).

## Descrição
Este repositório contém o código fonte de uma aplicação e-commerce desenvolvida em PHP. A aplicação permite o gerenciamento de produtos, categorias, marcas e pedidos. O objetivo é fornecer uma solução completa para lojas online, incluindo a funcionalidade de carrinho de compras.

## Funcionalidades

1. Gerenciamento de Produtos,Categorias e marcas:
* Adicionar, editar, remover e listar produtos.

2. Carrinho de Compras
* Adicionar, atualizar, remover produtos e visualizar itens no carrinho, além de calcular o total.

3. Gerenciamento de Pedidos
* Fazer pedidos, visualizar histórico, atualizar status e cancelar pedidos.

4. Busca e Filtros
Buscar produtos por nome ou descrição e filtrar por categoria, marca, preço, etc.

5. Gestão de Estoque
Monitoramento e alertas de níveis de estoque.

# Estrutura do Projeto

A seguir estão os arquivos PHP principais do projeto, juntamente com uma breve descrição de cada um:

carrinho.php: Gerencia o carrinho de compras dos usuários.
categoria.php: Gerencia as categorias de produtos.
index.php: Página inicial da aplicação.
insere-categoria.php: Script para inserção de novas categorias.
insere-marca.php: Script para inserção de novas marcas.
insere-produto.php: Script para inserção de novos produtos.
marca.php: Gerencia as marcas de produtos.
pedido.php: Gerencia os pedidos realizados pelos clientes.
produto.php: Gerencia os produtos disponíveis na loja.

# Exemplo de Uso dos Métodos

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


### Categoria.php
Este arquivo HTML representa a página de cadastro de categorias.

### insere-categoria.php

### insere-marca.php


### insere-produto.php