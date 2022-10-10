
    <?php
    $pessoa["nome"] =$_GET["fname"];
    $pessoa["genero"] =$_GET["fgenero"];
    $pessoa["data"] =$_GET["fdata"];
    $pessoa["telefone"] =$_GET["telefone"];
    $pessoa ["email"]=$_GET["femail"];
     
    $jsonen=json_encode($pessoa);
    $file = fopen("texto.txt", "w");

    echo fwrite($file, "$jsonen");
    fclose($file);
    print_r ($pessoa);
    print_r($jsonen);

    ?>
