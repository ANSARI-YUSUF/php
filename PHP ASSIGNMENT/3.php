<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Display</title>
</head>
<body>

<h2>Enter Array Elements</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="element_count">Enter the number of elements:</label>
    <input type="number" name="element_count" required>
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data
    $element_count = $_POST["element_count"];

    // Display the form to input array elements
    echo '<form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">';
    echo '<h2>Enter Array Elements</h2>';
    
    for ($i = 0; $i < $element_count; $i++) {
        echo '<label for="element' . $i . '">Enter element ' . ($i + 1) . ':</label>';
        echo '<input type="text" name="elements[]" required>';
        echo '<br>';
    }
    
    echo '<button type="submit">Submit</button>';
    echo '</form>';

    // Display the entered array
    if (isset($_POST["elements"])) {
        echo '<h2>Entered Array</h2>';
        echo '<pre>';
        print_r($_POST["elements"]);
        echo '</pre>';
    }
}
?>

</body>
</html>
