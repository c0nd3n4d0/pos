<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar productos
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar productos</li>
    
    </ol>

  </section>

  <section class="content">

    <!-- Default box -->
    <div class="box">

      <div class="box-header with-border">

          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">

              Agregar Producto

          </button>

      </div>

      <div class="box-body">

          <table class="table table-bordered table-striped dt-responsive tablas">

              <thead>

                  <tr>

                    <th style="width:10px">#</th>
                    <th>Imagen</th>
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>Categoria</th>
                    <th>Stock</th>
                    <th>Precio de compra</th>
                    <th>Precio de venta</th>
                    <th>Agregado</th>
                    <th>Acciones</th>

                  </tr>
                  
              </thead>

              <tbody>

                  <tr>

                        <td>1</td>
                        <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                        <td>0001</td>
                        <td>lOREM IPSUM DOLOR</td>
                        <td>LOREM</td>
                        <td>20</td>
                        <td>5.00</td>
                        <td>10.00</td>
                        <td>2017-12-11 12:05:32</td>
                        <td>

                          <div class="btn-group">

                            <button class="btn btn-warning btn"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                          </div>

                        </td>    
                  </tr>

              </tbody>

          </table>

      </div>

      <!-- /.box-body -->

    </div>

    <!-- /.box -->

  </section>

  <!-- /.content -->

</div>

<!-- /.content-wrapper -->



<!--
  ********************************************
          MODAL AGREGAR PRODUCTOS
  ********************************************
-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">

  <div class="modal-dialog">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data">

          <div class="modal-header" style="background:#3c8dbc; color:white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Agregar Producto</h4>

          </div>

          <!-- ENTRADA PARA EL CODIGO -->

          <div class="modal-body">

            <div class="box-body">

              <div class="from-group">

                <div class="input-group">

                  <span class="input-group-addon"> <i class="fa fa-code"></i></span>

                  <input type="text" class="form-control input-lg" name="nuevoCodigo" placeholder="Ingresar codigo" required>

                </div>

              </div>

                      <!-- ENTRADA PARA LA DESCRIPCION -->

                      <br>

              <div class="from-group">

                <div class="input-group"> 

                  <span class="input-group-addon"> <i class="fa fa-product-hunt"></i></span>

                  <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar descripcion" required>

                </div>

              </div>

                        <!-- ENTRADA PARA LA CATEGORIA -->

                        <br>

              <div class="from-group">

                <div class="input-group"> 

                  <span class="input-group-addon"> <i class="fa fa-th"></i></span>

                  <select class="form-contol input-lg" name="nuevaCategoria" id="">

                    <option value="">Seleccionar categoria</option>
                    <option value="Taladros">Taladros</option>
                    <option value="Andamios">Andamios</option>
                    <option value="Equipos para construccion">Equipos para construccion</option>

                  </select>

                </div>

              </div>


                <!-- ENTRADA PARA STOCK -->

                <br>

                <div class="from-group">

                  <div class="input-group"> 

                    <span class="input-group-addon"> <i class="fa fa-check"></i></span>

                    <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Stock" required>

                  </div>

                </div>


                  <!-- ENTRADA PARA PRECIO COMPRA -->

                  <br>

                  <div class="from-group row">

                  <div class="col-xs-6">

                      <div class="input-group"> 

                      <span class="input-group-addon"> <i class="fa fa-arrow-up"></i></span>

                      <input type="number" class="form-control input-lg" name="nuevoPrecioCompra" min="0" placeholder="Precio de compra" required>

                      </div>

                  </div>

                  <!-- ENTRADA PARA PRECIO VENTA -->

                  <div class="col-xs-6">

                    <div class="input-group"> 

                      <span class="input-group-addon"> <i class="fa fa-arrow-down"></i></span>

                      <input type="number" class="form-control input-lg" name="nuevoPrecioVenta" min="0" placeholder="Precio de venta" required>

                    </div>

                    <br>

                    <!-- CHECKBOX PARA PORCENTAJE -->

                    <div class="col-xs-6">

                        <div class="form-group">

                        <label>
                        
                        <input type="checkbox" class="minimal porcentaje" checked>
                        Utilizar procentaje
                      </label>

                        </div>

                    </div>

                     <!-- Entrada PARA PORCENTAJE -->

                    <div class="col-xs-6" style="padding:0">

                        <div class="input-group">

                          <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>

                          <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        </div>

                    </div>

                  </div>

                  </div>


                        <!-- ENTRADA PARA LA FOTO -->

                        <br>

              <div class="from-group">

                  <div class="panel">SUBIR IMAGEN</div>

                  <input type="file" id="nuevaImagen" name="nuevaImagen">

                  <p class="help-block">Peso máximo de la imagen 2MB</p>

                  <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="100px">

              </div>

            </div>

          </div>


          <!-- BOTONES -->


          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar</button>

          </div>

      </form>

    </div>

  </div>

</div>