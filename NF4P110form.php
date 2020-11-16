<?php

?>

<html>
 <head>
  <title>Greetings Earthling</title>
 </head>
 <body>
     <style>
        p.clasificacion {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        p.clasificacion input {
            position: absolute;
            top: -100px;
        }

        p.clasificacion label {
            float: right;
            color: #333;
        }

        p.clasificacion label:hover,
        p.clasificacion label:hover ~ label,
        p.clasificacion input:checked ~ label {
            color: #dd4;
        }
     </style>
    <form action="NF4P111formprocess.php" method="post">
        <select name="movie_type">
            <option value="">Danos una opinión de cada película</option>
            <option value="movie_name">Godzilla: King of Monsters</option>
            <option value="movie_name">Valerian and the City of a Thousand Planets</option>
            <option value="movie_name">Blade Runner 2049</option>
            <option value="movie_name">Los juegos del hambre</option>
            <option value="movie_name">Passengers</option>
            <option value="movie_name">Star Wars: Episodio IV - Una nueva esperanza.</option>
        </select>
        <br>
        <table>
            <tr>
                <td>Nombre: <input type="text" name="name"/></td>
            </tr>
            <tr>
                <td><textarea name="comentarios" rows="10" cols="40">¡Danos tu opinión!</textarea></td>
            </tr>
        </table>
        <p class="clasificacion" name="estrellas">
            <input id="radio1" type="radio" name="estrellas" value="5">
            <label for="radio1">★</label>
            <input id="radio2" type="radio" name="estrellas" value="4">
            <label for="radio2">★</label>
            <input id="radio3" type="radio" name="estrellas" value="3">
            <label for="radio3">★</label>
            <input id="radio4" type="radio" name="estrellas" value="2">
            <label for="radio4">★</label>
            <input id="radio5" type="radio" name="estrellas" value="1">
            <label for="radio5">★</label>
        </p>
        <p>
            <input type="submit" name="submit" value="Enviar" />
        </p>
    </form>

</html>
