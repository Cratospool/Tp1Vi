<?php
$link = mysqli_connect("localhost", "root", "", "gamestore");

if($_POST){

$q=$_POST['palabra']; //se recibe la cadena que queremos buscar
$query =  "SELECT * FROM productos where nombre like '%$q%'";
$result = mysqli_query($link, $query);

while($row=mysqli_fetch_array($result, MYSQLI_BOTH)){
$id=$row['id'];
$nombre=$row['nombre'];
$foto=$row['imagen'];

?>
<form class="display_box" action="index.html" method="post">

    <div class=" dropdown-item" aria-labelledby="dropdownMenuButton" >
    <a class="dropdown-item" href="verDetalle/<?php echo $id; ?>" style="text-decoration:none;" > <!--Recuperamos el id para pasarlo a otra pagina -->
    <img src="<?php echo $foto; ?>" width="60" height="60" /><!--Colocamos la foto Recuperada de la bd -->
    <b><?php echo $nombre; ?></b><!--Recuperamos el nombre recuperado de la bd -->
    </a>
    </div>
</form>

<?php
}

}
else
{

}

?>
