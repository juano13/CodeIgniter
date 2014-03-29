<div class = "row">
  <div class="col-sm-12 col-md-4 col-lg-2">

    <?php
    $data['menu']='newUser';
     $this->load->view('menuUser',$data); ?>
  </div>
  <div class="col-sm-12 col-md-8 col-lg-10">
  <?php echo form_open('user/newUser'); ?>
  <form class "form-horizontal" role="form">
    <div class="form-group">
           
      <label for="nombre1">nombre
      <input name="username" type="text" class="form-control" placeholder="nombre"></label>
    </div>
      <div class="form-group">
      <label for="apellido1">Apellidos
      <input name="password" type="text"class="form-control"  placeholder="apellidos"></label>
    </div>
    <div class="form-group">
        <div class="input-group">
              <span class="input-group-addon">Tipo de Usuario</span>
          <select name="role" class="form-control" >
            <option value="user">Usuario</option>
            <option value="admin">Administrador</option>
          </select>
        </div> 
     </div>  
    <div class="form-group">
      <label for="registro">Registrar</label>
     
    </div>
    <button type="submit" class="btn btn-default">Aceptar</button>
  </form>
  <?php echo form_close(); ?>
  </div>
</div>

