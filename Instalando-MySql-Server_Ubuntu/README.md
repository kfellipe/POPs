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
    <td><ins><a href="https://github.com/kfellipe/POPs/Criando-VM">Instalação do Virtual Box</a></ins></td>
</tr>
</table>

<hr>

<div id="criandoVM"/>

># <strong><i>Criando Máquina Virtual</i></strong>

Abra o <strong>Virtual Box</strong> e localize o <i>lado direito</i> da janela clique em <ins><strong>Novo</strong></ins> ou pressione <ins><strong>Ctrl+N</strong></ins>.

![Lado direito da janela do Virtual Box](https://user-images.githubusercontent.com/82785675/162192104-afd79248-5c8f-4d7b-b075-cd7e8904b43d.PNG)

<hr>

Configure o <i>Nome</i>, <i>Tipo</i> e <i>Versão</i> da <strong>Máquina Virtual</strong>, como exemplo de nome coloquei <strong>MySql-Server</strong>, mas pode colocar o nome que quiser, como vamos usar o <strong>Ubuntu</strong> para instalar o <strong>MySql</strong>, Configure a <i>Tipo</i> como <strong>Linux</strong> e a <i>Versão</i> como <strong>Ubuntu (64-bit)</strong>.

![Alterando principais informações sobre a VM](https://user-images.githubusercontent.com/82785675/162192126-31d24b1e-a575-40b6-870f-08e0376612c4.png)

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

<img src="https://user-images.githubusercontent.com/82785675/162193158-2d16e057-6265-4b05-b448-2083ae69223e.PNG" alt="Memória RAM alocada">

<hr>

Na próxima tela, configuramos o <strong>Disco Rígido</strong>, Deixamos a opção <strong><i>Criar um novo disco rígido virtual agora</i></strong> marcada e clicamos no botão <strong>Criar</strong>.

<img src="https://user-images.githubusercontent.com/82785675/162193162-cc74055e-543a-4641-86de-eb1c5efd62c9.PNG" alt="Criação do Disco Rígido">

<hr>

Abrira um <i><strong>popup</strong></i> para configurarmos algumas Características do <strong><i>Disco Virtual</i></strong>, aqui deixamos o <strong>padrão</strong> e clicamos em <strong>próximo</strong>.

<img src="https://user-images.githubusercontent.com/82785675/162193164-1a87b417-0553-4f60-89c9-e35e236d6e71.PNG" alt="Escolha a opção VDI (VirtualBox Disk Image)">

Novamente deixamos o <strong>padrão</strong> e clicamos em <strong>próximo</strong>.

<img src="https://user-images.githubusercontent.com/82785675/162193167-f862213b-0e5e-45e9-8d12-905208f8f221.PNG" alt="Escolha a opção Dinamicamente alocado">

Nessa tela configuramos o tamanho do <strong>Disco Rígido</strong>, o recomendado é <strong>20 GigaBytes</strong>, depois de configurado, clicamos em <strong><i><ins>Criar</ins></i></strong>.

<img src="https://user-images.githubusercontent.com/82785675/162193169-ddf6a055-7b30-4278-99ff-e2e0f7d580fe.PNG" alt="Configurando o tamanho do disco rigido">

<hr>

Com nossa <strong>Máquina Virtual</strong> criada, basta configurar a <strong>Máquina Virtual</strong> para a instalação do <strong>Sistema Operacional</strong>.

<img src="https://user-images.githubusercontent.com/82785675/162193171-4b31fa95-1602-42d9-8990-3c9c273206f0.PNG" alt="Máquina Virtual MySql-Server deligada">

<br>
<hr>
<br>

<div id="configurandoVM"/>

># <strong><i>Preparando a Máquina Virtual para instalar o Sistema Operacional</i></strong>

Para instalar o Ubuntu server, primeiro precisamos da ISO do Ubuntu Server, para isso, vá ao <a href='https://ubuntu.com/download/server'>site oficial do Ubuntu.</a>
<img src='https://user-images.githubusercontent.com/82785675/162195983-1de9f5bd-4c01-4f36-b8bf-4ac64bd78177.PNG' alt="Site do Ubuntu Server">

<hr>

Clique em <strong><ins>Option 2 - Manual server Installation.</ins></strong>

<img src='https://user-images.githubusercontent.com/82785675/162195988-5419c383-7d9d-4de5-a66a-53f9aa38611f.png' alt="Botão 'Option 2 - Manual server installation'">

<hr>

Na próxima tela, clique no botão verde Download <strong><ins>Ubuntu Server 20.04.4 LTS</ins></strong>.

<img src="https://user-images.githubusercontent.com/82785675/162195989-1a1796bc-d399-4a2d-a0c9-53577a34f72c.PNG" alt="Tela de download Ubuntu Server 20.04.4 LTS">

<hr>

Na Tela que se abrirá seu <strong>Download</strong> deverá começar <strong>automaticamente</strong>, se não acontecer, clique em <strong>download now</strong> e espere terminar.

<img src="https://user-images.githubusercontent.com/82785675/162195991-fe6f9593-a225-4875-a232-1f42e4bda87b.PNG">

<hr>

com o download finalizado, abra o <strong>Virtual Box</strong>, com o <strong>Virtual Box</strong> aberto, vá até a máquina em que criamos, clique com o <strong>Botão Direito</strong> sobre ela e vá em <strong>configurações</strong>.

<img src="https://user-images.githubusercontent.com/82785675/162195992-e55ae73f-888f-4055-ab36-195e11f9d920.PNG" alt="Tela de configurações da VM">

aqui vamos fazer algumas configurações.

<hr>

Primeiro vamos configurar o número de processadores para não dar <i>crash</i> durante a instalação do <strong>Ubuntu Server</strong>, clique sobre <strong>Sistema</strong> no <strong>lado esquerdo</strong> e vá na aba <strong>Processador</strong>.

<img src="https://user-images.githubusercontent.com/82785675/162195995-fd782d94-6628-4ef7-9911-f4d1241f1b52.PNG" alt="configurando processadores">

<hr>

Dependendo de seu <strong>Hardware</strong>, é recomendado utilizar 3 processadores.

<img src="https://user-images.githubusercontent.com/82785675/162195996-c9d20ba1-dc6e-4286-9990-ff05bfb0e165.PNG" alt="alterando número de processadores para 3">

<hr>

Agora, clique em <strong>Armazenamento</strong> no <strong>lado esquerdo</strong> da janela.

<img src="https://user-images.githubusercontent.com/82785675/162195997-cb12718a-2244-427e-b158-8a501b540a93.PNG" alt="janela de armazenamento">

<hr>

Clique sobre o sub-item de Controladora: IDE que está Vazio, clique no disco azul do lado direito da janela.

<img src="https://user-images.githubusercontent.com/82785675/162195998-406ac8c1-72cb-4df4-8f8f-42d7a7745636.png" alt="configurando boot do ubuntu">

<hr>

Escolha a opção <strong>'Escolher uma imagem de disco...'</strong> na janela que abrirá, escolha a <strong>ISO</strong> que você acabou de fazer o <strong>download</strong>.

<img src="https://user-images.githubusercontent.com/82785675/162195999-42b1151e-a698-4f10-bef0-11f64493426b.png" alt="escolhendo a ISO do Ubuntu">

<hr>

Agora, vá no <strong>lado esquerdo</strong> da tela e selecione a opção <strong>Rede</strong>.

<img src="https://user-images.githubusercontent.com/82785675/162196001-2a5a2aff-b7a3-4d1c-8a92-24ef91fc3a35.PNG" alt="acessando a configuração de rede">

<hr>

Clique sobre a opção <strong>NAT</strong> e selecione <strong>Placa em modo bridge</strong>.

<img src="https://user-images.githubusercontent.com/82785675/162196002-6328ecb3-689b-45c5-ac17-127412461a36.png" alt="Alterando configurações de rede">

<hr>

Com todas as configurações <strong>prontas</strong>, basta clicar em <strong>Ok</strong> no <strong>canto inferior direito da janela</strong>.

<img src="https://user-images.githubusercontent.com/82785675/162196004-58ff82a8-b7a7-4304-a89e-cdc980ac4f0c.png">

Pronto! sua <strong>Máquina Virtual</strong> está pronta para instalar o <strong>Ubuntu</strong>.

<div id="instalandoUbuntu"/>

<br>
<hr>
<br>

># <strong><i>Instalando o Ubuntu</i></strong>

Para inicar a <strong>Máquina Virtual</strong>, <strong>clique duas vezes</strong> sobre ela.

<img src="https://user-images.githubusercontent.com/82785675/162196007-d568135b-2e8a-45a6-ae16-dcf7359db9a9.PNG" alt="ligando a máquina virtual">

<hr>

Uma tela como essa deverá aparecer.

<img src="https://user-images.githubusercontent.com/82785675/162205926-8a58b5de-eae8-47ae-8ee0-0df7880f1e79.PNG" alt="Ecolhendo o idioma">

Com as <strong><i>setas do teclado</i></strong>, navegue pelo <strong>menu</strong> e escolha a <strong>linguagem desejada</strong>.

<hr>

Na próxima tela, selecione o equivalente à <strong><ins>Continue without updating</ins></strong>

<img src="https://user-images.githubusercontent.com/82785675/162205931-53547b93-dac8-4ce8-bd4a-76553e090e4a.PNG" alt="Escolhendo continuar sem atualizar">

<hr>

Na próxima tela, selecione o <strong>idoma do seu teclado</strong>, se você não sabe qual é o idioma, selecione o equivalente à <strong>Identify keyboard</strong> e <strong>responda</strong> algumas <strong>questões sobre o seu teclado</strong>.

<img src="https://user-images.githubusercontent.com/82785675/162205933-9e899b4c-bced-45a7-963d-b26f8cf0f1a5.PNG" alt="Escolhendo o idioma do teclado">

<hr>

Nessa tela <strong>configuramos a rede</strong>, podemos deixar no <strong>padrão</strong> e selecionamos <strong><i>Done</i></strong>.

<img src="https://user-images.githubusercontent.com/82785675/162205937-4ff37554-24fe-410f-a7bc-5ece7dbd07b3.PNG" alt="Configurando a rede">

<hr>

Agora configuramos o <strong>Proxy</strong>, podemos deixar em branco e selecionar <strong>Done</strong>.

<img src="https://user-images.githubusercontent.com/82785675/162205941-a365ee29-3bee-447d-abfd-6b38aa874ed9.PNG" alt="Configurando o servidor Proxy">

<hr>

Na próxima tela, configuramos o <strong><i>Ubuntu archive mirror</i></strong>, podemos deixar no <strong>padrão</strong> e selecionamos <strong>Done</strong>.

<img src="https://user-images.githubusercontent.com/82785675/162205942-6a2dfdb4-7dba-459f-af01-05e5d651feae.PNG" alt="Configurando o servidor de arquivos Ubuntu">

<hr>

Novamente deixamos o <strong>padrão</strong> e selecionamos <strong>Done</strong>.

<img src="https://user-images.githubusercontent.com/82785675/162205943-311e0cc5-f649-4e04-968e-119b52497d2e.PNG" alt="Escolhendo o disco no qual o Ubuntu vai ser instalado">

<hr>

Nesta tela, configuramos as opções de armazenamento, podemos deixar o padrão e selecionarmos Done, abrirá uma janela pedindo confirmação, selecione Continue.

<img src="https://user-images.githubusercontent.com/82785675/162205947-f0790488-11bd-40c3-a5c5-19b8b9ef0eac.PNG" alt="confirmando a instalação do Ubuntu">

<hr>

Abrirá uma tela pedindo algumas <strong>informações</strong> do <strong>perfil</strong> a ser criado.

<img src="https://user-images.githubusercontent.com/82785675/162205948-972afd18-3f18-4d7c-98f1-43b775099ab9.PNG" alt="Configurando informações do perfil">

basta colocar as respectivas informações e selecionarmos <strong><ins>Done</ins></strong>.

<img src="https://user-images.githubusercontent.com/82785675/162205950-56b7721b-c89a-4cca-8eed-96dfc4e85d92.PNG"
alt="Configurando informações do perfil">

<hr>

Nessa tela, selecionamos se <strong>queremos ou não</strong> instalar o <strong><i>OpenSSH server</i></strong>, o recomendado é <strong>instala-lo</strong>, então marcamos o <strong>Checkbox</strong> e selecionamos <strong>Done</strong>.

<img src="https://user-images.githubusercontent.com/82785675/162205954-4644b1d2-a01b-421a-a543-9ccad11d089f.PNG">

<hr>

Agora <strong>selecionamos</strong> se queremos instalar alguns <strong>Server Snaps</strong>, podemos deixar o <strong>padrão</strong> e selecionamos <strong>Done</strong>.

<img src="https://user-images.githubusercontent.com/82785675/162205956-5239c150-f8d8-4757-824a-fc05c433aff7.PNG"
alt="Instalando Server Snaps">

Agora é só aguardar a instalação do <strong>Ubuntu Server</strong>, se você optar por ver mais <strong>detalhes</strong> da instalação, selecione <strong><ins>View full log</ins></strong>.

<img src="https://user-images.githubusercontent.com/82785675/162205958-9034c32c-7284-465a-852e-03c6c468d97f.PNG" alt="Aguarde a instalação finalizar">