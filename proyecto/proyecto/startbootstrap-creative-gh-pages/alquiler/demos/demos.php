<?php

$mysqli = new mysqli('localhost', 'root', '', 'crud');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

$page = isset($_GET['p'])? $_GET['p'] : '' ;
if($page=='view'){

    $result = $mysqli->query("SELECT * FROM alquiler");
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["address"] ?></td>
            <td><?php echo $row["campo1"] ?></td>
            <td><?php echo $row["campo2"] ?></td>
            <td><?php echo $row["campo3"] ?></td>
            <td><?php echo $row["campo4"] ?></td>
            <td><?php echo $row["total"] ?></td>
        </tr>
        <?php
    }

} else{


header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);

if ($input['action'] === 'edit') {
    $mysqli->query("UPDATE alquiler SET name='" . $input['name'] . "', address='" . $input['address'] . "', campo1='" . $input['campo1'] . "', campo2='" . $input['campo2'] . "', campo3='" . $input['campo3']."', campo4='" . $input['campo4']."', total='" . $input['total']."' WHERE id='" . $input['id'] . "'");
} else if ($input['action'] === 'delete') {
        $mysqli->query("DELETE FROM alquiler WHERE id='" . $input['id'] . "'");
} else if ($input['action'] === 'restore') {
    $mysqli->query("UPDATE tabledit SET deleted=0 WHERE id='" . $input['id'] . "'");
}

mysqli_close($mysqli);

echo json_encode($input);
      
    
}
?>