<?php
  $result = $conn->query('select * from ticketeras');  
?>

<div class="card m-2">
  <div class="card-header">
    Ticketeras
  </div>
  <div class="p-2">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Id</th>          
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $row["id_ticketera"]; ?></td>
          </tr>
        <?php } ?>        
      </tbody>
    </table>          
  </div>
</div>
