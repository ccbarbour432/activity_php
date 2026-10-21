<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exploring Basic PHP Elements</h1>
    <p>Calen Barbour</p>
    <p>October 20th, 2026</p>

    <?php
    // Define variables of different types
    $studentName = "Your First and Last Name"; // String
    $lessonNumber = 1;                         // Integer
    $isLearning = true;                        // Boolean
    $language = "PHP";                          // String

    // User-defined function using two variables
    function learningMessage($name, $language) {
        return $name . " is exploring the basics of " . $language . ".";
    }

    // Displays the function result in an H2 heading
    echo "<h2>" . learningMessage($studentName, $language) . "</h2>";

    // Displays additional variable values
    echo "<p>Lesson Number: " . $lessonNumber . "</p>";
    echo "<p>Currently Learning: " . ($isLearning ? "Yes" : "No") . "</p>";

    // Compares JavaScript and PHP
    echo "<p>JavaScript runs primarily in the browser to create interactive web pages, while PHP runs on the server to generate dynamic web content.</p>";
    ?>

    
    
</body>
</html>