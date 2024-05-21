<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar Clientes
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio </a></li>
      
      <li class="active">Administrar Clientes</li>
    
    </ol>

  </section>

  <section class="content">

    <!-- Default box -->
    <div class="box">

      <div class="box-header with-border">

          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">

              Agregar Cliente

          </button>

      </div>

      <div class="box-body">

          <table class="table table-bordered table-striped dt-responsive tablas">

              <thead>

                  <tr>

                    <th style="width:10px">#</th>
                    <th>Nombre del cliente</th>
                    <th>INE</th>
                    <th>Email</th>
                    <th>Télefono</th>
                    <th>Dirección</th>
                    <th>Fecha de nacimiento</th>
                    <th>Total de compras</th>
                    <th>Ultima Compra</th>
                    <th>Ingreso al sistema</th>
                    <th>Acciones</th>
                    
                  </tr>
                  
              </thead>

              <tbody>

                  <tr>

                        <td>1</td>
                        <td>Equipos Electromecanicos</td>
                        <td>Equipos Electromecanicos</td>
                        <td>Equipos Electromecanicos</td>
                        <td>Equipos Electromecanicos</td>
                        <td>Equipos Electromecanicos</td>
                        <td>Equipos Electromecanicos</td>
                        <td>Equipos Electromecanicos</td>
                        <td>Equipos Electromecanicos</td>
                        <td>Equipos Electromecanicos</td>
                        <td>

                          <div class="btn-group">

                            <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
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
          MODAL AGREGAR CLIENTES
  ********************************************
-->

<div id="modalAgregarCliente" class="modal fade" role="dialog">

  <div class="modal-dialog">
    
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data">

          <div class="modal-header" style="background:#3c8dbc; color:white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Agregar Cliente</h4>

          </div>

         

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL DOCUMENTO ID -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar documento" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL EMAIL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELÉFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCIÓN -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>

              </div>

            </div>

             <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar fecha nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

              </div>

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