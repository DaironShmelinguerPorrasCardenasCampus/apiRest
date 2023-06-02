<?php

//json_decode  ->  Takes a JSON encoded string and converts it into a PHP value.
//json_encode  ->  Returns the JSON representation of a value

//PDO_MYSQL 
//is a driver that implements the PHP Data Objects (PDO) interface to enable 
//access from PHP to MySQL databases.


//MySQLi
//PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases


  $campers = '[
    {
      "imagen": "rinconC.jpg",
      "nombre": "Andres Santiago Rincón Diaz",
      "edad": 19,
      "promedio": 4.9,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "beginner",
      "especialidad": "backEnd",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 2.8,
      "Ser": 3,
      "Review": 2.5,
      "Skills": 3,
      "Asitencia": 4.8,
      "id": 1
    },
    {
      "imagen": "camper-anonimo2.jpg",
      "nombre": "Angela Gomez Lizarazo",
      "edad": 20,
      "promedio": 4,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "middle",
      "especialidad": "backEnd",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 1,
      "Ser": 1,
      "Review": 1,
      "Skills": 1,
      "Asitencia": 1,
      "id": 2
    },
    {
      "imagen": "camiloC.jpg",
      "nombre": "Camilo Andres Caballero",
      "edad": 22,
      "promedio": 4,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "advanced",
      "especialidad": "frontEnd",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 4.8,
      "Ser": 3.5,
      "Review": 4.5,
      "Skills": 3.2,
      "Asitencia": 3.2,
      "id": 3
    },
    {
      "imagen": "Edwing.jpg",
      "nombre": "Edwing Stiven Mejia Saenz",
      "edad": 19,
      "promedio": 3.9,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "middle",
      "especialidad": "frontEnd",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 4,
      "Ser": 4,
      "Review": 4.5,
      "Skills": 3.9,
      "Asitencia": 4.8,
      "id": 4
    },
    {
      "imagen": "esteban.jpeg",
      "nombre": "Esteban Dario Ruiz Paredes",
      "edad": 19,
      "promedio": 4.1,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "beginner",
      "especialidad": "backEnd",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 4.5,
      "Ser": 3,
      "Review": 4.8,
      "Skills": 3,
      "Asitencia": 5,
      "id": 5
    },
    {
      "imagen": "jairo.jpg",
      "nombre": "Jairo Alonso Cardenas Blanco",
      "edad": 17,
      "promedio": 3.9,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "advanced",
      "especialidad": "frontEnd",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 3.2,
      "Ser": 3.2,
      "Review": 4.5,
      "Skills": 3,
      "Asitencia": 4.8,
      "id": 6
    },
    {
      "imagen": "javierAndresNunez.jpeg",
      "nombre": "Javier Andres Nuñez Sanchez",
      "edad": 17,
      "promedio": 3,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "advanced",
      "especialidad": "backEnd",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 3.8,
      "Ser": 4,
      "Review": 4.5,
      "Skills": 3.8,
      "Asitencia": 4.8,
      "id": 7
    },
    {
      "imagen": "pabon.jpg",
      "nombre": "Jhon Fredy Pabon Bolaño",
      "edad": 19,
      "promedio": 4.3,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "beginner",
      "especialidad": "backEnd",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 3.2,
      "Ser": 3.8,
      "Review": 4.5,
      "Skills": 3.4,
      "Asitencia": 4.8,
      "id": 8
    },
    {
      "imagen": "joel.jpg",
      "nombre": "Joel Santiago Abril Gelvez",
      "edad": 18,
      "promedio": 4.4,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "beginner",
      "especialidad": "fullStack",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 3.8,
      "Ser": 4.5,
      "Review": 5,
      "Skills": 3.8,
      "Asitencia": 5,
      "id": 9
    },
    {
      "imagen": "camper-anonimo1.jpg",
      "nombre": "Johan Arley Florez Duran",
      "edad": 21,
      "promedio": 3,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "advanced",
      "especialidad": "backEnd",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 3.2,
      "Ser": 3,
      "Review": 3.5,
      "Skills": 3.2,
      "Asitencia": 3.8,
      "id": 10
    },
    {
      "imagen": "jose.jpeg",
      "nombre": "Jose Arley Pabon Celis",
      "edad": 22,
      "promedio": 4,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "beginner",
      "especialidad": "backEnd",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 4.5,
      "Ser": 4,
      "Review": 3.5,
      "Skills": 4.8,
      "Asitencia": 3,
      "id": 11
    },
    {
      "imagen": "sepulveda.jpg",
      "nombre": "Juan David Sepulveda Rojas",
      "edad": 18,
      "promedio": 4.2,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "middle",
      "especialidad": "fullStack",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 3,
      "Ser": 3,
      "Review": 3.5,
      "Skills": 4,
      "Asitencia": 4.8,
      "id": 12
    },
    {
      "imagen": "juan.jpeg",
      "nombre": "Juan Jose Lizarazo Lopez",
      "edad": 21,
      "promedio": 3.5,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "advanced",
      "especialidad": "fullStack",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 3.2,
      "Ser": 3,
      "Review": 3.5,
      "Skills": 3,
      "Asitencia": 3,
      "id": 13
    },
    {
      "imagen": "villamizar.jpg",
      "nombre": "Juan Jose Villamizar Santander",
      "edad": 23,
      "promedio": 4.3,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "beginner",
      "especialidad": "fullStack",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 3.8,
      "Ser": 3,
      "Review": 2.5,
      "Skills": 3.8,
      "Asitencia": 4.8,
      "id": 14
    },
    {
      "imagen": "julianV.jpg",
      "nombre": "Julian Vega Blanco",
      "edad": 16,
      "promedio": 3.2,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "middle",
      "especialidad": "backEnd",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 4.8,
      "Ser": 3,
      "Review": 4.5,
      "Skills": 4,
      "Asitencia": 3.8,
      "id": 15
    },
    {
      "imagen": "justin.jpg",
      "nombre": "Justin Andres Corredor Garcia",
      "edad": 24,
      "promedio": 4.1,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "advanced",
      "especialidad": "frontEnd",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 3.8,
      "Ser": 3.5,
      "Review": 2.5,
      "Skills": 3,
      "Asitencia": 3,
      "id": 16
    },
    {
      "imagen": "maicol.jpg",
      "nombre": "Maicol David Estrada León",
      "edad": 25,
      "promedio": 4.5,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "middle",
      "especialidad": "fullStack",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 2,
      "Ser": 2,
      "Review": 3,
      "Skills": 2.5,
      "Asitencia": 5,
      "id": 17
    },
    {
      "imagen": "marcela.jpg",
      "nombre": "Marcela Esperanza Betancourt Perenguez",
      "edad": 35,
      "promedio": 4.2,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "beginner",
      "especialidad": "backEnd",
      "direccion": "Calle 32 # 49-74",
      "celular": 3154317110,
      "Ingles": 3.8,
      "Ser": 4.8,
      "Review": 4.5,
      "Skills": 4,
      "Asitencia": 3.8,
      "id": 18
    },
    {
      "imagen": "camper-anonimo3.jpg",
      "nombre": "Mateo Gomez Sepulveda",
      "edad": 21,
      "promedio": 3.6,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "beginner",
      "especialidad": "backEnd",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 3.8,
      "Ser": 3,
      "Review": 2.5,
      "Skills": 3.8,
      "Asitencia": 2,
      "id": 19
    },
    {
      "imagen": "camiloO.jpg",
      "nombre": "Neider Camilo Orozco Pereira",
      "edad": 25,
      "promedio": "",
      "nivelCAmpus": "intermedio",
      "nivelIngles": "advanced",
      "especialidad": "fullStack",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 3.8,
      "Ser": 4.5,
      "Review": 4.5,
      "Skills": 4,
      "Asitencia": 4.8,
      "id": 20
    },
    {
      "imagen": "machado.jpg",
      "nombre": "Nicolas Machado Capacho",
      "edad": 19,
      "promedio": 4.4,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "middle",
      "especialidad": "backEnd",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 4.9,
      "Ser": 4.8,
      "Review": 4,
      "Skills": 3.8,
      "Asitencia": 4.8,
      "id": 21
    },
    {
      "imagen": "costeño.jpg",
      "nombre": "Phidolly Isaias Ojeda Blanco",
      "edad": 17,
      "promedio": 4.8,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "advanced",
      "especialidad": "backEnd",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 3.8,
      "Ser": 4,
      "Review": 4.8,
      "Skills": 4.5,
      "Asitencia": 4.8,
      "id": 22
    },
    {
      "imagen": "ricardo.jpg",
      "nombre": "Ricardo Andrés Franco Quintero",
      "edad": 17,
      "promedio": 3.8,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "middle",
      "especialidad": "frontEnd",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 4.5,
      "Ser": 4.5,
      "Review": 4.8,
      "Skills": 4.5,
      "Asitencia": 5,
      "id": 24
    },
    {
      "imagen": "issac.jpg",
      "nombre": "Santiago Isaac Duran Alvarado",
      "edad": 17,
      "promedio": 4,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "beginner",
      "especialidad": "backEnd",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 3.8,
      "Ser": 3,
      "Review": 2.5,
      "Skills": 3,
      "Asitencia": 4.8,
      "id": 25
    },
    {
      "imagen": "zuluaga.jpg",
      "nombre": "Sebastian Andres Zuluaga Salgado",
      "edad": 18,
      "promedio": 4.3,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "middle",
      "especialidad": "frontEnd",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 4.8,
      "Ser": 4,
      "Review": 4.5,
      "Skills": 4,
      "Asitencia": 4.8,
      "id": 26
    },
    {
      "imagen": "sergio.jpg",
      "nombre": "Sergio Alejandro Rodriguez Prada",
      "edad": 19,
      "promedio": 4.5,
      "nivelCAmpus": "intermedio",
      "nivelIngles": "advanced",
      "especialidad": "frontEnd",
      "direccion": "Calle 5 # 28-35",
      "celular": 3154317110,
      "Ingles": 3.8,
      "Ser": 3.5,
      "Review": 4.8,
      "Skills": 4,
      "Asitencia": 4.8,
      "id": 28
    },
    {
      "imagen": "valentinaN.jpg",
      "nombre": "Valentina Navarro Pacheco",
      "edad": "17",
      "promedio": "4.5",
      "nivelCAmpus": "intermedio",
      "nivelIngles": "advanced",
      "especialidad": "frontEnd",
      "direccion": "Calle 5 # 28-35",
      "celular": "3154317110",
      "Ingles": "5",
      "Ser": "2",
      "Review": "3",
      "Skills": "4",
      "Asitencia": "5",
      "id": 29
    }
  ]';



$datoscampers = json_decode($campers, true); // EL JSON SE VUELVE LEGIBLE PARA PHP Y SE VUEVLE ARRAY ASOCIATIVO


$server = "localhost";
$user = "campus";
$pass = "campus2023";
$bd = "estadisticas";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");


foreach ($datoscampers as $camper) {
    
    mysqli_query($conexion,"INSERT INTO campers (id,imagen,nombre,edad,promedio,nivelCAmpus,nivelIngles,especialidad, direccion, celular, Ingles, Ser, Review, Skills, Asitencia) 
    VALUES ('".$camper['id']."','".$camper['imagen']."','".$camper['nombre']."','".$camper['edad']."','".$camper['promedio']."','".$camper['nivelCAmpus']."','".$camper['nivelIngles']."','".$camper['especialidad']."','".$camper['direccion']."','".$camper['celular']."','".$camper['Ingles']."','".$camper['Ser']."','".$camper['Review']."','".$camper['Skills']."','".$camper['Asitencia']."')");	
        
}	


mysqli_close($conexion);

?>