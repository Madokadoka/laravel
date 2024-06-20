<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авиабилеты</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body
background="/img/doroga_razmetka_dal_182824_3840x2400.jpg">
<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
<p>Введите ваш логин</p>
    <input type="text">
    <p>Введите ваш пароль</p>
    <input type="password">
    <button>Подтвердить</button>
  </div>
</div>
<header>
    <img src="img/НовыйХолст2.jpg" alt="">
    <a href="/">Автобусы</a>
    <a href="/avia">Авиабилеты</a>
    <a href="/poezda">Ж/д билеты</a>
    <a href="/metro">Электрички</a>
    <div class="login">
    <a href="#" id="myBtn">Войти</a>
    <p>или</p>
    <a href="#"id="myBtn1">Зарегистрироваться</a>
</div>
</header>
<div class="tickets">
    <h1>Авиабилеты</h1>
    <input list="tickets" placeholder="Откуда">
    <datalist id="tickets">
        <option value="Москва" >
        <option value="Санкт-Петербург" >
        <option value="Симферополь" >
        <option value="Минск" >
        <option value="Екатеринбург" >
        <option value="Ростов-на-Дону">
        <option value="Нижний Новгород">
        <option value="Волгоград">
        <option value="Одесса">
        <option value="Киев">
    </datalist>
    <img src="/img/fast-forward_248438.png" alt="" width="25px" height="25px">
    <input list="tickets" placeholder="Куда">
    <datalist id="tickets">
        <option value="Москва" >
        <option value="Санкт-Петербург" >
        <option value="Симферополь" >
        <option value="Минск" >
        <option value="Екатеринбург" >
        <option value="Ростов-на-Дону">
        <option value="Нижний Новгород">
        <option value="Волгоград">
        <option value="Одесса">
        <option value="Киев">
    </datalist>
    <input type="date">
    <button><a href="/raspisanie">Найти билеты</a></button>
</div>
<footer>
<a href="">Информация о нас!</a>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
<a href="">Информация о нас!</a>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
<a href="">Информация о нас!</a>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
<a href="">Информация о нас!</a>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, suscipit.</p>
<a href="">Информация о нас!</a>
</footer>
<script>
    
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}</script>
</body>
</html>