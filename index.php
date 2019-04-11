<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form>

    <select name="Courses">
        <option>Course 1</option>
    </select>

    <input type="text" name="subject" placeholder="subject">
    <input type="text" name="score" placeholder="score">
    <input type="text" name="courseunit" placeholder="course unit">


    <select name="operator">
        <option>None</option>
        <option>Add</option>
    </select>

    <br>
    <button type="Submit" name="Submit" Value="Submit">GenerateGP</button>
</form>
<p>The GP is:</p>
<?php
    if (isset($_GET['Submit'])) {
        $result1 = $_GET['subject'];
        $result2 = $_GET['score'];
        $result3 = $_GET['courseunit'];
        $operator = $_GET['operator'];
        switch ($operator) {
        case "None":
            echo "You need to select a method!";
        break;
        case "Add":
            echo $result1 + $result2 / 15;
        break;
            
        }

    }

?>


<!-- /* second course - courses are done one after the other. */ -->



<form>

    <select name="Courses">
        <option>Course 2</option>
    </select>

    <input type="text" name="subject" placeholder="subject">
    <input type="text" name="score" placeholder="score">
    <input type="text" name="courseunit" placeholder="course unit">


    <select name="operator">
        <option>None</option>
        <option>Add</option>
    </select>

    <br>
    <button type="Submit" name="Submit" Value="Submit">GenerateGP</button>
</form>
<p>The GP is:</p>
<?php
    if (isset($_GET['Submit'])) {
        $result1 = $_GET['subject'];
        $result1 = $_GET['score'];
        $result1 = $_GET['courseunit'];
        $operator = $_GET['operator'];
        switch ($operator) {
        case "None":
            echo "You need to select a method!";
        break;
        case "Add":
            echo $result1 + $result2;
        break;
        
        
            
        }

    }

?>

    
</body>
</html>