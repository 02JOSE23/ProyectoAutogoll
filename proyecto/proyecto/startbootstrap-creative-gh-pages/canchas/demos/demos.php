<?php

$mysqli = new mysqli('localhost', 'root', '', 'crud');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

$page = isset($_GET['p'])? $_GET['p'] : '' ;
if($page=='view'){

    $result = $mysqli->query("SELECT * FROM cancha");
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["address"] ?></td>
            <td><?php echo $row["campo1"] ?></td>

        </tr>
        <?php
    }

} else{


header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);

if ($input['action'] === 'edit') {
    $mysqli->query("UPDATE cancha SET name='" . $input['name'] . "', address='" . $input['gender'] . "', campo1='" . $input['email'] . "', campo2='" . $input['phone'] . "' WHERE id='" . $input['id'] . "'");
} else if ($input['action'] === 'delete') {
        $mysqli->query("DELETE FROM cancha WHERE id='" . $input['id'] . "'");
} else if ($input['action'] === 'restore') {
    $mysqli->query("UPDATE tabledit SET deleted=0 WHERE id='" . $input['id'] . "'");
}

mysqli_close($mysqli);

echo json_encode($input);
      
    
}
?>