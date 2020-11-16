
<html>
 <head>
  <title>Say My Name</title>
 </head>
 <body>
<?php
echo '<h1>Hola ' . $_POST['name'] . '!</h1>';
echo 'Comentario: ' . $_POST['comentarios'];
echo '</br>';
echo 'Has dado: '. $_POST['estrellas'].'estrellas';
echo '</br>';
echo 'Película: '. $_POST['movie_type'];
?>
  </pre>
 </body>
</html>