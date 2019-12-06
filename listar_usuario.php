<?php
include_once("conexao.php");
$sql = "SELECT * FROM usuario";
if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
        echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>E-mail</th>";
        echo "</tr>";
while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }
echo "</table>";
// Free result set
mysqli_free_result($result);
} //continua no próximo slide
else{
    echo "No records matching your query were found.";
    }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
    }
    // Close connection
    mysqli_close($connection);
    ?>