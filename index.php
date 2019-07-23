<!DOCTYPE HTML>
<html>
<head>
    <style>
        input[type = text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>Dictionary: English - Vietnamese</h2>
<form method="post">
    <input type="text" name="search" placeholder="Enter word"/>
    <input type="submit" id="submit" value="Search">
</form>
<?php
$dictionary = array("hello" => "Xin chao", "how" => "the nao", "book" => "sach", "computer" => "may tinh");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $wordSearch = $_POST['search'];
    $flag = 0;

    foreach ($dictionary as $word => $description) {
        if ($wordSearch == $word) {
            echo "word: " . $word . "<br/>" . "mean: " . $description;
            $flag = 1;
        }
    }

    if ($flag == 0){
        echo "word NOT FOUND";
    }
}
?>
</body>
</html>