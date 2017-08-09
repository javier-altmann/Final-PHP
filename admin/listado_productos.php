<? include_once('inc/header.php');?>
<?
 $sql = 'SELECT * FROM productos';
 $resultado = $con->query($sql);
 ?>
     <head>
          <link rel="stylesheet" TYPE="text/css" href="./css/listado_productos.css">
          <script type="text/javascript" src="js/listado_productos.js"></script>
     </head>
      <div class="gris">
      <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      
        <div class="item active">
          <img src="file_sitio/foto1-slide.png">
           <div class="carousel-caption">
            <h4><a class="fuente"href="#">Lorem ipsum dolor sit amet consetetur sadipscing</a></h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. </p>
          </div>
        </div><!-- End Item -->
 
         <div class="item">
          <img src="file_sitio/foto2-slide.png">
           <div class="carousel-caption">
            <h4><a class="fuente" href="#">consetetur sadipscing elitr, sed diam nonumy eirmod</a></h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. </p>
          </div>
        </div><!-- End Item -->
        
        <div class="item">
          <img src="file_sitio/foto3-slide.png">
           <div class="carousel-caption">
            <h4><a class="fuente" href="#">tempor invidunt ut labore et dolore</a></h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. </p>
          </div>
        </div><!-- End Item -->
        
        <div class="item">
          <img src="file_sitio/foto3-slide.png">
           <div class="carousel-caption">
            <h4><a class="fuente" href="#">magna aliquyam erat, sed diam voluptua</a></h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. </p>
          </div>
        </div><!-- End Item -->

      
      </div><!-- End Carousel Inner -->

    
    <ul class="list-group col-sm-4">
      <li data-target="#myCarousel" data-slide-to="0" class="list-group-item "><h4>Promoción Notebook ACER 40% OFF</h4></li>
      <li data-target="#myCarousel" data-slide-to="1" class="list-group-item"><h4>Promoción Notebook MSI 50% OFF</h4></li>
      <li data-target="#myCarousel" data-slide-to="2" class="list-group-item"><h4>Promoción Notebook LEONOVO 30% OFF</h4></li>
      <li data-target="#myCarousel" data-slide-to="3" class="list-group-item"><h4>Promoción Notebook MSI 20% OFF</h4></li>
      
    </ul>

      <!-- Controls -->
      <div class="carousel-controls">
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>

    </div><!-- End Carousel -->
</div>
    </div>  
      

      
       <div class="todo-blanco">
        <div class="espacios">
         <? foreach($resultado as $row){  ?> 
      <div class="col-md-3 column productbox">
    <img src="<?=$row['imagen_de_producto']?>" class="img-responsive">
    <div class="producttitle"><? echo $row['Nombre_de_producto']?></div>
    <div class="productprice"><div class="pull-right">
   
    <button onclick="location.href = 'ver_mas.php?id=<?=$row['id_producto']?>';"  type="button" class="btn btn-warning">Ver mas</button>
    </div>
    <div class="pricetext">$<? echo $row['Precio_de_producto']?></div>
    </div>
</div>
<?}?> 
</div>

</div>
      

    
       
<? include_once('inc/footer.php');
                    