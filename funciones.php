<?php
$db = mysqli_connect("localhost","root","","vinosylicores");
function getPro(){
    global $db;
    mysqli_set_charset($db,"utf8");
    $get_producto = "SELECT * FROM producto";
    $resultado_producto = mysqli_query($db,$get_producto);
    if(mysqli_connect_errno()){
        echo "Error al conectar a la Base de datos";
        exit();
    }
    mysqli_select_db($db,"vinosylicores") or die ("No se encuentra la base de datos");

    while ($fila = mysqli_fetch_array($resultado_producto)){

        $id_prod = $fila['idproducto'];
        $nombre = $fila['nombrep'];
        $precio = $fila['precio'];
        $img = $fila['imagen'];
?>
        <div class='imagen'>
        <img src="img/<?php echo $img?>" style='width:100%'>
        <div class='texto-imagen'>
            <p><?php echo $nombre?></p>
            <input type='checkbox' required name='agregar[]' value='<?php echo $id_prod; ?>'>
            <p>Precio:$ <?php echo $precio?></p>
            <p>Cantidad: </p>
            <div>
                <select name='cantidad'>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
    </div>;
<?php } } ?>

<?php
function agregar(){
    global $db;    
    if(isset($_POST['enviar'])){
        foreach($_POST['agregar'] as $agregar_id){

            $product_qty = $_POST['cantidad'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $comentario = $_POST['comentario'];

            $consulta = "SELECT idcliente FROM cliente where nombre='$nombre' AND apellido='$apellido'";
            $resultado_consulta = mysqli_query($db,$consulta);
            $count = mysqli_num_rows($resultado_consulta);
                if(!$count){
                    $agregar_usuario = "INSERT INTO cliente(nombre,apellido) values ('$nombre','$apellido')";
                    $add = mysqli_query($db,$agregar_usuario);
                }
            

            $get_p_cat ="SELECT idcliente FROM cliente where nombre='$nombre' AND apellido='$apellido'";
            $query = mysqli_query($db,$get_p_cat);
            $cliente = mysqli_fetch_array($query);
            $idcliente = $cliente['idcliente'];

            $agregar_producto = "INSERT INTO detpedido(idproducto,idcliente,cantidad,comentario) values ('$agregar_id',$idcliente,'$product_qty','$comentario')";
            $agregar = mysqli_query($db,$agregar_producto);
            
            if($agregar && !$count){     
                echo "<script>alert('Se creo  cliente y se agrego el pedido.')</script>";
                echo "<script>window.open('index.php', '_self')</script>";
            }else if($agregar && $count!=0){
                echo "<script>alert('Se agrego el pedido al cliente existente.')</script>";
                echo "<script>window.open('index.php', '_self')</script>";
            }
        }
          
    }           
}
echo @$up = agregar();
?>

