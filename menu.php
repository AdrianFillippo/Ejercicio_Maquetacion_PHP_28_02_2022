<?php
    header('Access-Control-Allow-Origin: *');

    $plantilla = (object) null;
    $plantilla->imagen = (string) '<img src="img/logo.png">';
    $plantilla->menu = (string) '
    <li><a href="#">Home</a></li>
    <li><a href="#">TV Shows</a></li>
    <li><a href="#">Movies</a></li>
    <li><a href="#">Latest</a></li>
    <li><a href="#">My list</a></li>
        
    ';
    $plantilla->buscar = (string) '
        <input type="text" placeholder="Search">
        <ion-icon name="search"></ion-icon>
        <i class="fa-solid fa-magnifying-glass"></i>
    ';

    $plantilla->fondo = (string) '<img src="img/bge.jpg" class="bg">';
    $plantilla->titulo = (string) '
    <div class="content">
        <img src="img/name.png" class="movieTitle">
        <h4>
            <span>2021 </span>
            <span><i>12+</i> </span>
            <span>1h 49min </span>
            <span>Musical </span>
        </h4>
        <p>A young Colombian woman may be the last hope for her family, when she discovers that the magic that surrounds Encanto, an enchanted place that blesses children with unique gifts, is in grave danger.</p>
        <div class="buttons">
            <a href="#"><i class="fa-solid fa-play"></i> Play</a>
            <a href="#"><i class="fa-solid fa-plus"></i> My list</a>

        </div>
    </div>
    ';
    $plantilla->playlogo = (string) '
    <a class="play" data-video="false"> 
        <img src="img/play.png">Watch Trailer</a>';
    
    $plantilla->trailer = (string) '
    <video src="img/trailer.mp4" controls ></video>
    <img src="img/close.png" class="close" data-video="false">
    ';

   

 echo json_encode($plantilla, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
?>