//switch statements = a control structure that allows us to
//execute different parts of code based on the value of a variable  


<?php
    $favcolor = "red";

        switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }

?>

// using multiple cases
<?php
$d = 3;

    switch ($d) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:  
            echo "The weeks feels so long!";
            break;
        case 6:
        case 0:
            echo "Weekends are the best!";
            break;
        default:
            echo "Something went wrong";
    }
?>