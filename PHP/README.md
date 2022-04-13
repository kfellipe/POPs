# POP's sobre PHP

## Índice

<a href="#printando-informacoes-na-tela">Printando múltiplas informações do Banco de Dados</a>

<hr>

## <strong id="printando-informacoes-na-tela">Printando múltiplas informações do Bando de Dados</strong>

<ul>
<li><a href="#connection">Conexão com o Banco de Dados</a>
<li><a href="#base-table">Tabela de exemplo</a>
<li><a href="#echo-info">Printando informações</a>
<li><a href="#echo-infos">Printando múltiplas informações</a>
</ul>

### 1 - <strong id="connection">Acessando o banco de dados.</strong>

Para acessar o banco de dados, segue a baixo imagens fazendo a conexão com cada API.

>Conexão com PDO:<br>
<img src="https://user-images.githubusercontent.com/82785675/163046815-04761baf-f439-469f-9c0e-2cb31f82e569.png"><br>

>Conexão com mysqli:<br>
<img src="https://user-images.githubusercontent.com/82785675/163047549-6d3a903e-a297-4520-a94c-977e4b088c8e.png">

<hr>

### 2 - <strong id="base-table">Tabela como base</strong>

Vamos usar a seguinte tabela como base:

<table>
<tr><th colspan="3" text-align="center">users</th></tr>
<tr><th>Nome</th><th>Idade</th><th>Email</th></tr>
<tr><td>Kauã</td><td>18</td><td>kaua@gmail.com</td></tr>
<tr><td>José</td><td>29</td><td>jose@gmail.com</td></tr>
<tr><td>Pedro</td><td>31</td><td>pedro@gmail.com</td></tr>
</table>

<hr>

### 3 - <strong id="echo-info">Printando informações na tela</strong>

Para printar informações na tela, podemos fazer da seguinte maneira:

>Usando PDO:<br>
<img src="https://user-images.githubusercontent.com/82785675/163175955-9258cf04-3523-44a4-b40a-13ec3c546dce.png"><br>

>Usando mysqli:<br>
<img src="https://user-images.githubusercontent.com/82785675/163176085-ea5f4c4a-26a1-4633-a5de-03719bd1622a.png"><br>

### 4 - <strong id="echo-infos">Printando múltiplas informações na tela</strong>

Para printarmos múltiplas informações na tela, fazemos das seguintes formas:

>Usando PDO:<br>
<img src="https://user-images.githubusercontent.com/82785675/163180778-6c8e1af1-d412-488f-9c2e-208ca494134a.png"><br>

>Usando mysqli:<br>
<img src="https://user-images.githubusercontent.com/82785675/163180312-60a28fa7-daf9-4f37-ba6c-8ea345284c9f.png"><br>