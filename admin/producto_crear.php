<?php include_once('inc/header.php');?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <?php include_once('inc/left_menu.php');?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
				  
						<h2>Crear Producto</h2>

				
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" enctype="multipart/form-data" action="producto_crear.php"  method="post" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Producto <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							
                          <input type="text" id="producto" name="producto"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Precio <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							
                          <input type="text" id="precio" name="precio" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Descripcion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							
                          <input type="text" id="descripcion" name="descripcion"  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      
                      <div class="form-group">
                         <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            
                               </div>
                      </div>
                        </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<!--cancelo la edición o creación y vuelvo al listado -->
                          <button onclick="javascript:window.location.href='producto_listar.php'" class="btn btn-primary" type="button">Volver atras</button>
                          
                          <button onclick="document.querySelector('#demo-form2').submit()" type="submit" class="btn btn-success">Guardar producto</button>
                        </div>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>


            
        </div>
        <!-- /page content -->
        <?php
            if( isset($_POST['producto']) ){
                include 'inc/producto/helper.php';
                crearProducto($con);
                header('Location: producto_listar.php');
                ?>window.location.href = 'producto_listar.php';<?php
             }
               
        ?>
<?php include_once('inc/footer.php');
