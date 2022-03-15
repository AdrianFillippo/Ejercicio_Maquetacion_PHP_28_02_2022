addEventListener("DOMContentLoaded", async(e)=>{
    let peticion = await fetch("https://adrianfillippo.000webhostapp.com/Ejercicio_Maquetacion_PHP_28_02_2022/menu.php");
    let json = await peticion.json();
    console.log(json);
    document.querySelector(".logo").insertAdjacentHTML("beforeend", json.imagen);
    document.querySelector(".navigation").insertAdjacentHTML("beforeend", json.menu);
    document.querySelector(".search").insertAdjacentHTML("beforeend", json.buscar);
    document.querySelector(".banner").insertAdjacentHTML("beforeend", json.fondo);
    document.querySelector(".banner").insertAdjacentHTML("beforeend", json.titulo);
    document.querySelector(".play").insertAdjacentHTML("beforeend", json.playlogo);
    document.querySelector(".trailer").insertAdjacentHTML("beforeend", json.trailer);



    document.querySelector(".play").addEventListener("click", (e)=>{
        document.querySelector(".trailer").classList.toggle("active");
        document.querySelector(".trailer video").play();
    })
    document.querySelector(".close").addEventListener("click", (e)=>{
        document.querySelector(".trailer").classList.toggle("active");
        document.querySelector(".trailer video").pause();
    })

})


