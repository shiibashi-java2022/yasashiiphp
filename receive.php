<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>出力結果</title>
</head>
<body>
    <pre>
    <?php
    //print_r($_POST);

    echo htmlspecialchars($_POST['recipe_name'],ENT_QUOTES);
    echo"<br>";
   
    echo match ($_POST["category"]){
        "1" => "和食",
        "2" => "中華",
        "3" => "洋食",
    }."<br>";

    echo match ($_POST["difficulty"]){
        "1" => "簡単",
        "2" => "普通",
        "3" => "難しい",
    }."<br>";
    if(is_numeric($_POST["budget"])){
        echo number_format($_POST["budget"]);
    }
    echo "<br>";
    echo nl2br(htmlspecialchars($_POST["howto"],ENT_QUOTES));
    ?>   
    </pre> 
</body>
</html>
