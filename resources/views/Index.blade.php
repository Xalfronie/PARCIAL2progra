<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Document</title>
</head>
<body>
<div>
    <button class="boton" onclick="window.location='{{route('Form')}}'">Reservaciones</button>
</div>
    

<div>
    <div class="wrapper">
    <div class="slider" id="slider">
        <ul class="slides">
        <li class="slide" id="slide1">
            <a href="#">
            <img src="{{asset('img/1.png')}}" alt="photo 1">
            </a>
        </li>
        <li class="slide" id="slide2">
            <a href="#">
            <img src="{{asset('img/2.png')}}" alt="photo 2">
            </a>
        </li>
        <li class="slide" id="slide3">
            <a href="#">
            <img src="{{asset('img/3.png')}}" alt="photo 3">
            </a>
        </li>
        <li class="slide" id="slide4">
            <a href="#">
            <img src="{{asset('img/4.png')}}" alt="photo 4">
            </a>
        </li>
        </ul>
        <ul class="slider-controler">
        <li><a href="#slide1">&bullet;</a></li>
        <li><a href="#slide2">&bullet;</a></li>
        <li><a href="#slide3">&bullet;</a></li>
        <li><a href="#slide4">&bullet;</a></li>
        </ul>
    </div>
    </div>
</div>

<center>
<div class="contenedor">
  <div class="izquierda">
    <h2>Quienes Somos</h2>
    <p>The Empire Hotel es un refugio de lujo, fundado en 2024, donde combinamos elegancia clásica con 
    comodidades modernas para ofrecer una experiencia inolvidable a nuestros huéspedes. Nuestra misión es 
    superar expectativas en cada visita.</p>
  </div>
  <div class="derecha">
    <h2>Nuestros Servicios</h2>
    <p>En the empire hotel ofrecemos una experiencia de lujo incomparable con gastronomía exquisita, 
    tratamientos rejuvenecedores en nuestro spa de clase mundial y elegantes salas de reuniones y eventos. 
    Nos enorgullecemos de brindar el más alto nivel de servicio y atención personalizada a cada uno de nuestros
    distinguidos visitantes.</p>
  </div>
</div>
</center>

</body>

<footer>
    <h3>Nuestro numero de telefono es: 2121-2828</h3>
    <h3>Nuestro numero de telefono para contactarnos por Whatsapp es: 2121-2222</h3>
</footer>
</html>