<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <title>Vinos y licores</title>
</head>

<body>

    <header class="container contenido" style="max-width:1500px">
        <img class="imagen-cabecera" src="img/header.jpg" width="1500" height="600">
        <div class="carta-centro">
            <h1>Vinos y Licores</h1>
            <h3>BY PEDRO</h3>
        </div>
    </header>

    <h2>Cliente</h2>
    
    <div>
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellido">
            <br>
            <div class="imagen">
                <img src="img/vinoblanco.png" alt="5 Terre" style="width:100%">
                <div class="texto-imagen">
                    <p>Vino blanco</p>
                    <input type="checkbox" name="agregar[]" value="1">
                    <p>Precio: $1000</p>
                    <p>Cantidad: </p>
                    <div>
                        <select name="cantidad">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="imagen">
                <img src="img/vinotinto.jpg" alt="5 Terre" style="width:100%">
                <div class="texto-imagen">
                    <p>Vino tinto</p>
                    <input type="checkbox" name="agregar[]" value="2">
                    <p>Precio: $1500</p>
                    <p>Cantidad: </p>
                    <div>
                        <select name="cantidad">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="imagen">
                <img src="img/vinoblanco.png" alt="5 Terre" style="width:100%">
                <div class="texto-imagen">
                    <p>Vino rosado</p>
                    <input type="checkbox" name="agregar[]" value="3">
                    <p>Precio: $1300</p>
                    <p>Cantidad: </p>
                    <div>
                        <select name="cantidad">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="imagen">
                <img src="img/Tequila 916.jpg" alt="5 Terre" style="width:100%">
                <div class="texto-imagen">
                    <p>Tequila 916</p>
                    <input type="checkbox" name="agregar[]" value="4">
                    <p>Precio: $2000</p>
                    <p>Cantidad: </p>
                    <div>
                        <select name="cantidad">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="imagen">
                <img src="img/riomexcalmain.jpg" alt="5 Terre" style="width:100%">
                <div class="texto-imagen">
                    <p>Rio Mezcal</p>
                    <input type="checkbox" name="agregar[]" value="5">
                    <p>Precio: $2500</p>
                    <p>Cantidad: </p>
                    <div>
                        <select name="cantidad">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="imagen">
                <img src="img/1800.jpg" alt="5 Terre" style="width:100%">
                <div class="texto-imagen">
                    <p>Tequila 1800</p>
                    <input type="checkbox" name="agregar[]" value="6">
                    <p>Precio: $500</p>
                    <p>Cantidad: </p>
                    <div>
                        <select name="cantidad">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="imagen">
                <img src="img/rancho.jpg" alt="5 Terre" style="width:100%">
                <div class="texto-imagen">
                    <p>Rancho escondido</p>
                    <input type="checkbox" name="agregar[]" value="7">
                    <p>Precio: $50</p>
                    <p>Cantidad: </p>
                    <div>
                        <select name="cantidad">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="imagen">
                <img src="img/vodka.jpg" alt="5 Terre" style="width:100%">
                <div class="texto-imagen">
                    <p>Vodka</p>
                    <input type="checkbox" name="agregar[]" value="8">
                    <p>Precio: $250</p>
                    <p>Cantidad: </p>
                    <div>
                        <select name="cantidad">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="imagen">
                <img src="img/tecate.jpg" alt="5 Terre" style="width:100%">
                <div class="texto-imagen">
                    <p>Tecate 18 latas 355c/u</p>
                    <input type="checkbox" name="agregar[]" value="<9">
                    <p>Precio: $200</p>
                    <p>Cantidad: </p>
                    <div>
                        <select name="cantidad">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="imagen">
                <img src="img/corona.jpg" alt="5 Terre" style="width:100%">
                <div class="texto-imagen">
                    <p>Coronita 24 Botellas de 210 ml
                        </p>
                    <input type="checkbox" name="agregar[]" value="10">
                    <p>Precio: $245</p>
                    <p>Cantidad: </p>
                    <div>
                        <select name="cantidad">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <textarea name="comentario" placeholder="Comentarios"></textarea>
            <br>
            <input type="submit" value="Enviar"name="enviar">
        </form>
    </div>
    </div>
    <?php 
               
               function update(){
                   
                   global $db;
                   
                   if(isset($_POST['enviar'])){
                       
                       foreach($_POST['agregar'] as $agregar_id){
                           
                           $agregar_producto = "INSERT INTO detpedido where IDPRODUCTO='$agregar_id'";
                           
                           $agregar = mysqli_query($db,$agregar_producto);
                           
                           if($agregar){
                               
                            echo "<script>alert('Producto agregado')</script>"; 

                            echo "<script>window.open('index.php','_self')</script>";

                               
                           }
                           
                       }
                       
                   }
                   
               }
               echo @$up = update();
              
               ?>
</body>

</html>


