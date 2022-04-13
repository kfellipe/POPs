# Instalar MySql-Server no Ubuntu e fazer conexões remotas

## <strong><i>Índice</i></strong>

<ul>
<li><a href="#instalandoMysqlServer">Instalando MySql-Server</a>
<li><a href="#allowRemoteConnections">Acessando o MySql remotamente</a>
<li><a href="#meanings">Meanings</a>

</ul>

<hr>

## <i> <ins>Documentações recomendadas</ins> </i>

<ol>
    <li><a href="https://github.com/kfellipe/POPs/tree/master/Criando-VM/README.md">Como criar uma <strong>Máquina Virtual</strong>.</a></li>
    <li><a href="https://github.com/kfellipe/POPs/tree/master/Preparando-VM/README.md">Como preparar uma <strong>Máquina Virtual</strong> para a instalação de um <strong>sistema operacional</strong>.</a></li>
</ol>

<hr>

## <strong id="instalandoMysqlServer"><i>Instalando MySql-Server</i></strong>

<hr>

Primeiro, execute o comando <code>sudo apt <a href="#meanUpdate">update</a></code>

<img src="https://user-images.githubusercontent.com/82785675/162273066-1ab533fc-a37e-4378-9042-13b406a93c85.PNG">

<hr>

Depois, execute o comando <code>sudo apt <a href="#meanInstall">install</a> mysql-server -y</code>

<img src="https://user-images.githubusercontent.com/82785675/162273069-854829da-f9f0-468a-b90b-d947fcf5ee46.PNG">

<hr>

Espere a instalação finalizar.


<img src="https://user-images.githubusercontent.com/82785675/162273072-36e08995-f981-407c-a677-d997f6eb9a4a.PNG">

<hr>

Depois que finalizar o processo de instalação do <code><a href="#meanMysql">mysql</a>-server</code>, para testar e ver se o servidor está operando normalmente, execute o comando <code>service <a href="#meanMysql">mysql</a> status</code>

<img src="https://user-images.githubusercontent.com/82785675/162273074-50c72eaa-8bc8-4d7c-bf27-34f51050ad61.PNG">

Algo parecido com essa tela deve ser vista.

<hr>

Para acessar o console do MySql, execute o seguinte comando <code>sudo <a href="#meanMysql">mysql</a> -u root</code>

<img src="https://user-images.githubusercontent.com/82785675/162273075-1b5caa8f-a009-44ab-9609-ab535317e1fd.PNG">

## <strong id="allowRemoteConnections"><i>Liberando conexões remotas com o servidor</i></strong>

### <ins>Criando um Banco de dados</ins>

Vamos usar a seguinte estrutura de banco para exemplo.

<table>
    <tr><th colspan="3">db</th></tr>
    <tr><th>Name</th><th>Age</th><th>Id_Person</th></tr>
    <tr><td>Kauã</td><td>18</td><td>1</td></tr>
    <tr><td>Pedro</td><td>27</td><td>2</td></tr>
    <tr><td>Asafe</td><td>17</td><td>3</td></tr>
</table>

<hr>

Primeiro precisamos saber o IP do nosso cliente, digamos que seja '192.168.17.35'.
Feito isso, precisamos criar um usuário no mysql cujo terá um Nome e um Ip, digamos que queiramos o nome do usuario de 'kaua', sendo assim, nosso comando no console fica da seguinte maneira <code>CREATE USER kaua@192.168.17.35;</code>

<img src="https://user-images.githubusercontent.com/82785675/162273076-48ac68d3-5f60-4e49-9933-d56f99bdcf41.PNG">

<hr>

Para saber quais usuários estão no sistema, executamos o comando <code>SELECT User, Host FROM mysql.user;</code>

<img src="https://user-images.githubusercontent.com/82785675/162273077-606eb668-867d-4c52-b5b4-4d226a753501.PNG">

<hr>

Depois, basta dar alguns privilégios para o usuário criado, execute <code>GRANT ALL ON db.* TO kaua@192.168.17.35;</code>, com esse comando, damos total privilégio ao usuário 'kaua@192.168.17.35' no Bando de Dados com nome 'db' e todas as tabelas nele 'db.*'.

<img src="https://user-images.githubusercontent.com/82785675/162273090-e07c9782-5dad-4bf1-9adb-238c76568fe7.PNG">

<hr>

Agora precisamos mudar alguns arquivos fora do console do MySql-Server, para sair do console, execute <code>exit</code>, o arquivo que vamos editar é o mysqld.conf, execute <code>sudo nano /etc/mysql/mysql.conf.d/mysqld.cnf</code>

<img src="https://user-images.githubusercontent.com/82785675/162273083-123c6e7f-9d67-4b45-bc88-001b974c70ad.PNG">

Mudamos a linha bind-address = <i>127.0.0.1</i> para bind-address = <i>0.0.0.0</i>

Dessa forma ficando assim:

<img src="https://user-images.githubusercontent.com/82785675/162273087-d20664c6-5f72-4e46-9a62-4005615af736.PNG">

Salvamos e fechamos.

<hr>

Agora precisamos abrir a porta <i>3306</i>, na qual é a porta que o MySql usa para transferir dados de um sistema a outro. Execute o comando <code>sudo ufw allow 3306</code>

<hr>

Depois, precisamos restartar os serviços do MySql e ufw, execute o seguinte comando <code>sudo service mysql restart</code> e depois <code>sudo service ufw restart</code>.

<hr>

Agora precisamos saber o Ip do sistema que está executando o MySql-Server, execute o comando <code>ip addr</code>.

<img src="https://user-images.githubusercontent.com/82785675/162273088-fb37e417-39c5-480f-ace8-8e2fb23d7324.png">

<hr>

E finalmente testar a conexão com nosso banco remoto, para esse exemplo, irei usar a linguagem PHP, com o módulo mysqli.

<img src="https://user-images.githubusercontent.com/82785675/162273093-411d10a7-64fb-499e-803d-054ddd7466b7.PNG">

<hr>

O resultado deve ficar parecido com:

<img src="https://user-images.githubusercontent.com/82785675/162273094-822315bc-5dbe-4ed6-8213-124952e1ea36.PNG">

<hr>

## <strong id="meanings"><i>Meanings</i></strong>
<table>
    <tr>
        <th id="meanUpdate"><code>update</code></th>
        <td>Atualiza a lista de programas e pacotes que podem ser instalados no sistema.</td>
    </tr>
    <tr>
        <th id="meanUpgrade"><code>upgrade</code></th>
        <td>Atualiza o sistema e instala atualizações pendentes de pacotes.</td>
    </tr>
    <tr>
        <th id="meanInstall"><code>install</code></th>
        <td>Instala pacotes, programas ou módulos no sistema, pode ser passado a opção <code>-y</code> para não precisar de confirmação do usuário durante a instalação.</td>
    </tr>
    <tr>
        <th id="meanMysql"><code>mysql</code></th>
        <td>Entra no console do MySql-Server, pode ser passado <code>-u</code> como opção e logo em seguida, algum usuário para logar.</td>
    </tr>
</table>