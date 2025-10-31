<html>

    <?php 
    $greet = "helo";
    echo $greet . "<br>";
    $add = function ($a,$b){
        return a*b;
    };
    $keys = [1,2,3];
    $values = ["Semyon","al","dania"];
    $result = array_combine($keys,$values);
    print_r($result);
    $result[1] = "Mars";
    print_r($result);
    if ($result[1]="Mars"){
        echo "The mars is the name";
    }
    else{
        echo "Mars is not the name";
    }

    for($i=0; $i<5; $i++){
        echo "Number: $i\n";
    }

    while ($count <= 3) {
    echo "Count: $count<br>";
    $count++;
    }

    $fruits = ["apple", "banana", "cherry"];

    foreach ($fruits as $fruit) {
        echo "$fruit<br>";
    }

    $person = [
    "name" => "Semyon",
    "age" => 23,
    "sport" => "tennis"
    ];

    foreach ($person as $key => $value) {
        echo "$key: $value<br>";
    }


    $numbers = [1, 2, 3, 4, 5];

    foreach ($numbers as $num) {
        if ($num % 2 == 0) {
            echo "$num is even<br>";
        } else {
            echo "$num is odd<br>";
        }
    }
    ?>
    

    
</html>