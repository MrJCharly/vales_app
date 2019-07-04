<?php  
  //
?>

<div class="card m-2">
  <div class="card-header">
    Vales
  </div>
  <div class="p-2">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Id</th>          
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $vars['result']->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $row["id_vale"]; ?></td>
          </tr>
        <?php } ?>        
      </tbody>
    </table>          
  </div>
</div>
