<?php
?>

<div class="card mt-2">
  <div class="card-header">
    <span class="font-weight-bold">Nueva ticketera</span>
  </div>
  
  <div class="card-body">
    <form method="POST">
      <input type="hidden" name="v" value="<?php echo $_GET['v']; ?>"/>
      <div class="form-group">
        <label for="nro">Nro</label>
        <input type="text" class="form-control" name="Ticketera[nro]" placeholder="Nro de ticketera">
      </div>

      <div class="form-group">
        <label for="idProveedor">Proveedor</label>
        <input type="text" class="form-control" name="Ticketera[id_proveedor]" placeholder="Proveedor">
      </div>
      
      <button type="submit" class="btn btn-primary">Crear</button>
    </form>
  </div>
</div>