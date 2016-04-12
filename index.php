<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stilo.css">
        <script type="text/javascript" language="javascript" src="javascript/jquery.js"></script>
<body>
<?php
include './Idade.php';
$idade = new idade();
echo $idade->verificaIdade();
echo $
//iniciaBox();
///verificaIdade();
//fechaBox();
$ano = $_REQUEST["campo"];
calcularData($ano);
function calcularData($data) {
    $data2=2016-$data;
    echo '<div class="result "id="result">';
    if ($data2==2016){
        echo 'Insira a Data';
    }
    else{
   echo 'Resultado: '.$data2;
    echo '</div>';
    }
}

?>

<br>

    
    

</div>


    
</body>
</html>
