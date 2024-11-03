<html>

<head>
    <title>  это мой title </title>
</head> 


<body>


<?php

echo "hello world";
echo "<br/>";


//var_dump($data);

foreach ($users as $user) {
    echo"<p> Имя: " . $user->name
        . ' Возраст: ' . $user->age
        . '</p>'; 



} 



?>


</body>

</html>



