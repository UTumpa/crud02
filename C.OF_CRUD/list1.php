<?php

$link = mysqli_connect("localhost","root","lict@2","crud01");

$query = "select * from emails;";

$result = mysqli_query($link,$query);

?>
<ol>

    <li><a href="create1_email.php">Create New</a> </li>
</ol>

<table border="1" width="70%">

    <tr>
        <td>ID NO: </td>
        <td>Email: </td>
        <td>Date: </td>>>
    </tr>>

    <?php
    foreach($result as $row){
    ?>

    <tr>
        <td><?php echo $row['id' ] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['created'] ?></td>


        <?php
        }
        ?>
</table>


