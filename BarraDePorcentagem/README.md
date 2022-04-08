# Barra de porcentagem com CSS e JavaScript

<hr>

## <i><ins>Índice</i></ins>

<ul>
    <li><a href="#degrade">Barra em degradê</a>
    <li><a href="#solida">Barra em cor sólida</a>
    <li><a href="#display">Display de porcentagem</a>
</ul>

<hr>

Para começar, criamos uma animação em CSS,
ou seja, as <code>@keyframes</code>, vai ser nela que iremos fazer a animação da barra preenchendo, há duas maneiras de fazer essa animação:<br>
><br>1 - barra preenchendo com degradê.<br>
<img src="https://user-images.githubusercontent.com/82785675/162432320-e6c1d8df-cc62-43e7-8fb5-2f072255b928.PNG">

><br>2 - Barra preenchendo com cor sólida.<br>
<img src="https://user-images.githubusercontent.com/82785675/162433723-d24a4f72-f3fb-43bb-9385-bc350bffa78a.PNG">

<br>

<hr>

>## <strong id="degrade"><i>Barra com preenchimento em degradê</i></strong>
<br>
Primeiro de tudo, precisamos criar duas div's, uma para ser o degradê, e outra para ser a barra de progresso.<br>
>Código:<br>
<img src="https://user-images.githubusercontent.com/82785675/162453052-f6af0a16-0f79-4c8e-98c6-f77f773269f8.PNG"><br>

<hr>

Agora precisamos definir o tamanho máximo que a barra vai alcançar quando chegar á 100%, eu definí como <code>250px</code>, mas pode ser qualquer tamanho.<br>
>Código:<br>
<img src="https://user-images.githubusercontent.com/82785675/162453057-ed0c3355-3d81-4264-af29-046e51fc5fdc.PNG"><br>

<hr>

Vamos estilizar nossa <code>div#barra</code>, para deixar igual aos exemplos dados acima, precisamos definir uma altura, colocar um degradê de fundo e adicionar uma borda, ficando desse jeito.<br>
> Código:<br>
<img src="https://user-images.githubusercontent.com/82785675/162453060-80271d1b-04fa-4eb1-83fa-0d0e721d644a.PNG"><br>
Resultado:<br>
<img src="https://user-images.githubusercontent.com/82785675/162438277-7912a2da-7167-42d2-82bd-99b0d1bcf625.PNG">

<hr>

Agora, precisamos estilicar a <code>div#progress</code>, pois é ela que irá fazer a barra aumentar.<br>
Como exemplo, coloquei ela como <strong>branca</strong>.<br>
>Código:<br>
<img src="https://user-images.githubusercontent.com/82785675/162453062-d12f2363-b32f-44cc-a224-2a1629a304c5.PNG"><br>
Resultado:<br>
<img src="https://user-images.githubusercontent.com/82785675/162440400-e89c344f-9c19-4804-9bd8-b305901be0a4.PNG">

<hr>

E finalmente, faremos a animação com o <code>@keyframes</code>.<br>

>Código:<br>
<img src="https://user-images.githubusercontent.com/82785675/162455357-c1cbf6f7-271f-4d95-8554-ad7355a4b0ea.PNG"><br>
Resultado:<br>
<img src="https://user-images.githubusercontent.com/82785675/162453729-b634b4e2-24c2-4d67-a7f4-9067c4dee77e.gif"><br>
Pronto! nossa barra de progresso em degradê está pronta!<br>
Código completo:<br>
<img src="https://user-images.githubusercontent.com/82785675/162460723-b3eb527e-086f-4470-ae5d-d32c0f156612.PNG">

<hr>

>## <strong id="solida"><i>Barra com preenchimento em cor sólida</i></strong>

Começamos criando as div's.

<img src="https://user-images.githubusercontent.com/82785675/162463080-2ef064e6-174d-475d-9dc7-5250e1a26237.PNG">

<hr>

Em seguida, definimos o tamanho máximo que a barra de progresso irá percorrer até atingir 100%.

<img src="https://user-images.githubusercontent.com/82785675/162464336-19dec3df-7157-4e54-9ff3-2709693d94c0.PNG">

<hr>

Agora estilizamos a <code>div#progress</code>, para deixar igual aos exemplos dados acima.<br>

<img src="https://user-images.githubusercontent.com/82785675/162467032-5d27810b-6895-4cd0-8b1d-3e4e8cef63da.PNG"><br>

Estilizamos tambéma <code>div#barra</code> para ficar igual aos exemplos.<br>
><img src="https://user-images.githubusercontent.com/82785675/162469373-136c9cde-b8fc-435f-8592-5eb832d40b78.PNG"><br>
Resultado:<br>
<img src="https://user-images.githubusercontent.com/82785675/162480558-1089ead7-56bb-4196-8d00-5f806fdfde20.PNG"><br>

<hr>

Agora adicionamos a animação com <code>@keyframes</code>.<br>

>Código:<br>
<img src="https://user-images.githubusercontent.com/82785675/162483148-f57c5d4b-bab1-4fdc-b7ee-e33f9368513b.PNG"><br>
Resultado:<br>
<img src="https://user-images.githubusercontent.com/82785675/162483785-a0cf0c3e-f0f5-4fe3-8df0-b129ca82d5f8.gif">

Pronto! nossa barra de porcentagem está pronta.<br>

>Código:<br>
<img src="https://user-images.githubusercontent.com/82785675/162483889-e0d28b02-92e6-4357-8195-fae6e70d7c3e.PNG">

<hr>

>## <strong id="display"><i>Display da porcentagem</i></strong>

Para mostrarmos o display na tela, precisamos criar um <code>span</code> para que o JavaScript possa acessar e manipular esse elemento.

<img src="https://user-images.githubusercontent.com/82785675/162484644-bb79b3f5-2543-40cb-8c3c-1c920b27c285.PNG"><br>

<hr>

Agora vamos fazer a parte de JavaScript, usando a função <code>setInteval()</code>.<br>

<img src="https://user-images.githubusercontent.com/82785675/162486574-83224af0-8f83-4a84-ae0f-129b65e9aec4.PNG">

<hr>

O código do nosso display fica da seguinte forma.

<img src="https://user-images.githubusercontent.com/82785675/162487575-c55538ce-4249-49ad-810b-d980b729b6e2.PNG">