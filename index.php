<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>PHP HTML</title>
</head>
<body>
    <?php
    $a = 1;
    $b = 36;
    $c = $a + $b;
    

for($a==1;$a<=10;$a++){
    $b = $a;
    echo "$a x " . $a . "=" . $b;
    if($b==1||$b==3||$b==5||$b==7||$b==9){
        echo " ganjil" . "<br>";
    }
    else{
        echo " genap <br>";
    }
}

    if($c <= 10) {
        echo '<h1 style="color:green">' . $c .'<h1>';
    }elseif($c <= 20) {
        echo '<h1 style="color:blue">' . $c .'<h1>';
    }elseif($c <= 30) {
        echo '<h1 style="color:red">' . $c .'<h1>';
    }elseif($c <= 40) {
        echo '<h1 style="color:orange">' . $c .'<h1>';
    }elseif($c <= 50) {
        echo '<h1 style="color:purple">' . $c .'<h1>';
    }elseif($c <= 60) {
        echo '<h1 style="color:skyblue">' . $c .'<h1>';
    }elseif($c <= 70) {
        echo '<h1 style="color:yellow">' . $c .'<h1>';
    }elseif($c <= 80) {
        echo '<h1 style="color:grey">' . $c .'<h1>';
    }elseif($c <= 90) {
        echo '<h1 style="color:black">' . $c .'<h1>';
    }else{
        echo '<h1 style="color:indigo">' . $c .'<h1>';
    }
    
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>