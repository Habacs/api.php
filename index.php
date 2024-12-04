<?php
if(!empty($_GET["name"])){
//$response = file_get_contents("https://randomuser.me/api");
$response = file_get_contents("https://api.agify.io?name={$_GET["name"]}");

//echo $response;

$data = json_decode($response, true);
//var_dump($data);

//echo $data["results"] [0] ["name"] ["first"], "\n";
$age = $data["age"];
}
?>
<!DOCTYPE html>
<head>
    <title>Example</title>
</head>
<body>

    
    <form>
        <label for ="name" >Name: </label>
        <input name="name" id="name">
        <button>Guess age</button>
    </form>

    <?php if (isset($age)) : ?>
        Age: <?= $age ?> 
    <?php endif;?>

</body>
</html>