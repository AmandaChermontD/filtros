
    <?php
$jsonen = file_get_contents("texto.txt");
$pessoa = json_decode($jsonen);


echo "<table border=1>";
    echo "<tr>
    <th>Nome</th>
    <th>Genero</th>
    <th>Data de Nascimento</th>
    <th>Telefone</th>
    <th>Email</th>
    </tr>";
    foreach ($pessoa as $pessoas) {
        echo "<td>" . $pessoas . "</td>";
    }
    echo "</tr></table>"


 ?>
