# Instalar MySql-Server no Ubuntu e fazer conexões remotas

## <ins><i><strong>Índice</strong></i></ins>

>[Criando Máquina Virtual](#criandoVM)<br>
[Configurando Máquina Virtual](#configurandoVM)

<hr>

## <i> Softwares usados nessa documentação </i>

<table>
<tr>
    <th>Softwares</th>
    <th>Documentações</th>
</tr>
<tr>
    <td><strong><i>Virtual Box</i></strong></td>
    <td><ins><a href="#">Instalação do Virtual Box</a></ins></td>
</tr>
</table>

<hr>

<div id="criandoVM" style="background: rgba(255, 255, 255, .2); padding: 20px; border-radius: 10px; color: rgba(0, 0, 0); margin-top: 25px">

# <strong><i>Criando Máquina Virtual</i></strong>




Abra o <strong>Virtual Box</strong> e localize o <i>lado direito</i> da janela clique em <ins><strong>Novo</strong></ins> ou pressione <ins><strong>Ctrl+N</strong></ins>.

![Lado direito da janela do Virtual Box](https://user-images.githubusercontent.com/82785675/162192104-afd79248-5c8f-4d7b-b075-cd7e8904b43d.PNG)

<hr>

Configure o <i>Nome</i>, <i>Tipo</i> e <i>Versão</i> da <strong>Máquina Virtual</strong>, como exemplo de nome coloquei <strong>MySql-Server</strong>, mas pode colocar o nome que quiser, como vamos usar o <strong>Ubuntu</strong> para instalar o <strong>MySql</strong>, Configure a <i>Tipo</i> como <strong>Linux</strong> e a <i>Versão</i> como <strong>Ubuntu (64-bit)</strong>.

<img src="images/configurandoVM/Step-2.png" alt="Imagem com nome">

<hr>

Na próxima janela, configuraremos o quanto de <strong>Memória RAM (MegaBytes)</strong> irá ser alocada pra nossa <strong>Máquina Virtual</strong>, eu costumo alocar 2 GigaBytes. Abaixo segue uma tabela mostrando a quantidade de <strong><i>GigaBytes</i></strong> convertido em <strong><i>MegaBytes</i></strong> <i><ins>(1 GigaByte = 1.024 MegaBytes)</ins>.</i>

<table>

<tr>
    <th><i>GigaBytes</i></th>
    <th><i>MegaBytes</i></th>
</tr>
<tr>
    <td>2</td>
    <td>2.048</td>
</tr>
<tr>
    <td>4</td>
    <td>4.096</td>
</tr>
<tr>
    <td>6</td>
    <td>6.144</td>
</tr>
<tr>
    <td>8</td>
    <td>8.192</td>
</tr>
</table>

<img src="images/configurandoVM/Step-3.png" alt="Memória RAM alocada">

<hr>

Na próxima tela, configuramos o <strong>Disco Rígido</strong>, Deixamos a opção <strong><i>Criar um novo disco rígido virtual agora</i></strong> marcada e clicamos no botão <strong>Criar</strong>.

<img src="images/configurandoVM/Step-4.png" alt="Criação do Disco Rígido">

<hr>

Abrira um <i><strong>popup</strong></i> para configurarmos algumas Características do <strong><i>Disco Virtual</i></strong>.

<img src="images/configurandoVM/Step-5.png">

Aqui deixamos o <strong>padrão</strong> e clicamos em <strong>próximo</strong>.

<img src="images/configurandoVM/Step-5-1.PNG">

Novamente deixamos o <strong>padrão</strong> e clicamos em <strong>próximo</strong>.

<img src="images/configurandoVM/Step-5-2.PNG" alt="Configurando o tamanho do disco rigido">

Nessa tela configuramos o tamanho do <strong>Disco Rígido</strong>, o recomendado é <strong>20 GigaBytes</strong>, depois de configurado, clicamos em <strong><i><ins>Criar</ins></i></strong>.

<hr>

Com nossa <strong>Máquina Virtual</strong> criada, basta configurar a <strong>Máquina Virtual</strong> para a instalação do <strong>Sistema Operacional</strong>.

<img src="images/configurandoVM/Step-6.PNG" alt="Máquina Virtual MySql-Server deligada">
</div>

<div id="configurandoVM" style="background: rgba(255, 255, 255, .2); padding: 20px; color: rgba(0, 0, 0, 1); border-radius: 10px; margin-top: 25px">

# <strong><i>Configurando Máquina Virtual para instalar o Sistema Operacional</i></strong>

Para instalar o Ubuntu server, primeiro precisamos da ISO do Ubuntu Server, para isso, vá ao <a href='https://ubuntu.com/download/server'>site oficial do Ubuntu.</a>
<img src='images/instalandoUbuntu/Step-1.PNG' alt="Site do Ubuntu Server">

<hr>

Clique em <strong><ins>Option 2 - Manual server Installation.</ins></strong>

<img src='images/instalandoUbuntu/Step-2.png' alt="Botão 'Option 2 - Manual server installation'">

<hr>

Na próxima tela, clique no botão verde Download <strong><ins>Ubuntu Server 20.04.4 LTS</ins></strong>.

<img src="images/instalandoUbuntu/Step-3.PNG" alt="Tela de download Ubuntu Server 20.04.4 LTS">

<hr>

Na Tela que se abrirá seu <strong>Download</strong> deverá começar <strong>automaticamente</strong>, se não acontecer, clique em <strong>download now</strong> e espere terminar.

<img src="images/instalandoUbuntu/Step-4.PNG">

<hr>

com o download finalizado, abra o <strong>Virtual Box</strong>, com o <strong>Virtual Box</strong> aberto, vá até a máquina em que criamos, clique com o <strong>Botão Direito</strong> sobre ela e vá em <strong>configurações</strong>.

<img src="images/instalandoUbuntu/Step-5.png" alt="Tela de configurações da VM">

aqui vamos fazer algumas configurações.

<hr>

Primeiro vamos configurar o número de processadores para não dar <i>crash</i> durante a instalação do <strong>Ubuntu Server</strong>, clique sobre <strong>Sistema</strong> no <strong>lado esquerdo</strong> e vá na aba <strong>Processador</strong>.

<img src="images/instalandoUbuntu/Step-6.PNG" alt="configurando processadores">

<hr>

Dependendo de seu <strong>Hardware</strong>, é recomendado utilizar 3 processadores.

<img src="images/instalandoUbuntu/Step-7.PNG" alt="alterando número de processadores para 3">

<hr>

Agora, clique em <strong>Armazenamento</strong> no <strong>lado esquerdo</strong> da janela.

<img src="images/instalandoUbuntu/Step-8.PNG" alt="janela de armazenamento">

<hr>

Clique sobre o sub-item de Controladora: IDE que está Vazio, clique no disco azul do lado direito da janela.

<img src="images/instalandoUbuntu/Step-9.png" alt="configurando boot do ubuntu">

<hr>

Escolha a opção <strong>'Escolher uma imagem de disco...'</strong> na janela que abrirá, escolha a <strong>ISO</strong> que você acabou de fazer o <strong>download</strong>.

<img src="images/instalandoUbuntu/Step-10.png" alt="escolhendo a ISO do Ubuntu">

<hr>

Agora, vá no <strong>lado esquerdo</strong> da tela e selecione a opção <strong>Rede</strong>.

<img src="images/instalandoUbuntu/Step-11.PNG" alt="acessando a configuração de rede">

<hr>

Clique sobre a opção <strong>NAT</strong> e selecione <strong>Placa em modo bridge</strong>.

<img src="images/instalandoUbuntu/Step-12.PNG" alt="Alterando configurações de rede">

<hr>

Com todas as configurações <strong>prontas</strong>, basta clicar em <strong>Ok</strong> no <strong>canto inferior direito da janela</strong>.

<img src="images/instalandoUbuntu/Step-13.png">

<hr>

Agora clique <strong>duas vezes</strong> sobre a <strong>Máquina Virtual 'MySql-Server'</strong>.
<img src="images/instalandoUbuntu/Step-14.PNG" alt="ligando a máquina virtual">

</div>

<div id="instalandoUbuntu">

# <strong><i>Instalando o Ubuntu</i></strong>

</div>