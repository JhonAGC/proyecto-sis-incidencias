

<div class="modal fade" id="editar<?php echo $fila['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">EDITAR USUARIO</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                 

                  <form action="" method="POST">
                  

                        <input type="hidden" class="form-control"  name="id" value="<?php echo $fila['id']?>" >
                      



                      <div class="form-group">
                        <label  class="col-form-label">USUARIO:</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $fila['usuario']?>" >
                      </div>

                      <div class="form-group">
                        <label  class="col-form-label">NOMBRE:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $fila['nombre']?>">
                      </div>

                      <div class="form-group">
                        <label  class="col-form-label">TIPO DE USUARIO:</label>
                        <select name="tipo_usuario" id="" class="form-control">
                          <option value="1">Administrador</option>
                          <option value="2">Usuario Normal</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label  class="col-form-label">CONTRASEÑA:</label>
                        <input type="text" class="form-control" id="contraseña" name="contraseña" value="<?php echo $fila['password']?>">
                      </div>

                      <div class="modal-footer">
                        <input type="submit" class="btn btn-danger" data-dismiss="modal" value="Salir"></input>
                        <input type="submit" class="btn btn-primary" value="Guardar Cambios" name="actualizar"></input>
                      </div>

                  </form>
                </div>
              </div>
            </div>
          </div>

