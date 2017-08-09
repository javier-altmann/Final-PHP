<? include_once('inc/header.php');?>

<?
 $sql = 'SELECT * FROM productos';
 $resultado = $con->query($sql);

 ?>
  
<?
    if(empty($_GET['id'])){
        echo 'Not FOUND !!!!';
        }else{
		  $sql = 'SELECT * FROM productos WHERE id_producto = '.$_GET['id'];
		  $resultado = $con->query($sql)->fetch();
    }
    ?>
 

        <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Carrito de compras</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" TYPE="text/css" href="./css/ver_mas.css">

  </head>
                    
            
  <body>
	
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img class="img-responsive" src="<?=$resultado['imagen_de_producto']?>" /></div>
						
						</div>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title"><? echo $resultado['Nombre_de_producto']?></h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description"><? echo $resultado['descripcion']?></p>
						<h4 class="price">Precio del producto: <span>$ <? echo  $resultado['Precio_de_producto']?> </span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						
						<div class="action">
							<button onclick="javascript:window.location.href='listado_productos.php'" class="add-to-cart btn btn-default" type="button">Comprar</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?
         $id_producto = $_GET['id'];    
         $id_usuario = $_SESSION['usuario']['id'];
             
            
             
          $insertSql = "INSERT INTO compras (id_producto,usuario_id)
 					VALUES ('$id_producto','$id_usuario')";    
             
 			$con->exec($insertSql);
         ?>
         
  </body>
</html>

     

        
<? include_once('inc/footer.php'); ?>