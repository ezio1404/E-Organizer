

<table class="table table-striped table-hover" >
  <thead>
    <?php
     foreach($fields as $f){
    ?>
    <th><?php echo $f?></th>
    <?php
     }
    ?>
  </thead>
    <tbody>
    <?php
     foreach($events as $e){
    ?>
    <tr>

    <td><?php echo $e['event_id'];?></td>
    <td><?php echo $e['event_title'];?></td>
    <td><?php echo $e['event_desc'];?></td>
    <td><?php echo $e['event_date'];?></td>
    <td><?php echo $e['event_start_time'];?></td>
    <td><?php echo $e['event_end_time'];?></td>
    <td><?php echo $e['event_venue'];?></td>
    <td><?php echo $e['event_guest'];?></td>
    <td><button type="button"  class="text-dark nav-link btn btn-light btn-outline-light" data-toggle="modal" data-target="#exampleModal">
  Login
</button></td>
    </tr>
    <?php
     }
    ?>
    </tbody>
</table>
