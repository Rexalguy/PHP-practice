
<?php
    $cookie_name = "fav_movie";
    $cookie_value = "Inception";

    $cookie_name2 = "fav_color";
    $cookie_value2 = "Blue";

    setcookie($cookie_name, $cookie_value, time() + (86400 * 2), "/");
    setcookie($cookie_name2, $cookie_value2, time() + (86400 * 2), "/");

    foreach($_COOKIE as $key => $value){
        echo "{$key} => {$value} <br>";
    }

    setcookie($cookie_name2, $cookie_value2, time() - 7, "/");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // echo "Hello World!";
        // print "Hello World!";

        define("SITE_NAME", "My Website");
        echo SITE_NAME;

        $a = 5; $b = 10;
        $sum = $a + $b;
        echo "The sum of $a and $b is: $sum";

        echo "<br>";
        echo __LINE__; // current line number
        echo __FILE__; // current file name

        echo "<br>";

        $age = 20;
        $status = ($age >= 18) ? "Adult" : "Minor";
        echo "You are an $status.";

        for($i = 0; $i < 5; $i++) {
            echo "Number: $i <br>";
        }

        $a = 5;
        while($a > 0) {
            echo "Countdown: $a <br>";
            $a--;
        }

        $students = ["Alice", 43, "Charlie"];
        echo "<br>";
        foreach($students as $student) {
            echo "Student: $student <br>";
        }

        $student = [
            "name" => "Alice",
            "age" => 20,
            "grade" => "A"
        ];
        echo "Name: " . $student['name'] . "<br>";
        echo "Age: " . $student['age'] . "<br>";
        echo "Grade: " . $student['grade'] . "<br>";

        function add($x, $y) {
            echo "Adding $x and $y <br>";
            return $x + $y;
        }

        function addOnly($x, $y) {
            echo "Result: " . ($x + $y) . "<br>";
        }

        $result = add(5, 10);
        echo "Result of add: $result <br>";
        addOnly(35,5);

        //File handling
        $filename = "file.txt";
        $file = fopen($filename, "w");
        if (!$file) {
            echo "Error opening file!";
            exit();
        }

        fwrite($file, "Hello, this is a test file.\n");
        fclose($file);

        //To read the file
        $file = fopen($filename, "r");
        if (!$file) {
            echo "Error opening file!";
            exit();
        }
        $filesize = filesize($filename);

        $content = fread($file, $filesize);
        fclose($file);
        echo "File content: <br>" . "<pre>" . $content . "</pre>";

    ?>

    <a href="insert.php">Add Guest</a>
</body>
</html>