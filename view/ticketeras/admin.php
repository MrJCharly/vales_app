<?php  
  //
?>

<div class="card m-2">
  <div class="card-header">
  <span class="font-weight-bold">Ticketeras</span>
    <a class="btn btn-primary float-right" href="index.php?v=ticketeras/create" role="button">Agregar ticketera</a>
  </div>
  <div class="alert alert-warning m-2" role="alert" style="display:none;">
    No items found!
  </div>
  <div class="p-2" style="">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nro</th>
          <th scope="col">Proveedor</th>          
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $vars['result']->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $row["nro"]; ?></td>  
            <td><?php echo $row["id_proveedor"]; ?></td>
          </tr>
        <?php } ?>        
      </tbody>
    </table>          
  </div>
</div>
