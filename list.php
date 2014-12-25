<?php

$link = mysqli_connect("localhost","root","lict@2","crud02");

$query = "select * from student;";

$result = mysqli_query($link,$query);

?>
<ol>

    <li><a href="create.html">Create New</a> </li>
</ol>

<table border="1" width="70%">

    <tr>
        <td>ID NO: </td>
        <td>First Name: </td>>
    </tr>>

<?php
    foreach($result as $row){
?>

    <tr>
        <td><?php echo $row['id' ] ?></td>
        <td><?php echo $row['first_name'] ?></td>


        <?php
        }
        ?>
</table>


