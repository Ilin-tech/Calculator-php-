<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator</title>
    <style type="text/css">      
         #calculator-container {
            width: 300px;
            height: 400px;
            background-color: skyblue;
            border-style: double;
            padding: 20px;
            text-align: center;
         }           
    </style>
</head>

<body style="background-color:azure;">
    <h4 style="font-family:cursive;">Calculator</h4>
    <div id="calculator-container">
        <form action="" method="POST">
            <input style="background-color: beige;" type="text" name="val1" placeholder="Enter number..." required><br>
            
            <!-- Dropdown for selecting an arithmetic operation -->
            <select name="operator">
                <option value="addition">+</option>
                <option value="subtraction">-</option>
                <option value="multiplication">*</option>
                <option value="division">/</option>
            </select><br>

            <input style="background-color: beige;" type="text" name="val2" placeholder="Enter number..." required>
            <br><br>
            
            <button style="font-family:cursive; background-color: beige;" type="submit">Calculate</button> <br>
        </form>
    </div>
</body>
</html>

<?php
    // Function to perform the calculation based on user input
    function calculate_result() {
        // Retrieve input values from the form
        $val1 = $_POST['val1'];
        $val2 = $_POST['val2'];

        // Determine the operation selected by the user
        switch ($_POST["operator"]) {
            case 'addition':
                $result = $val1 + $val2; // Perform addition
                return $result;
                break;

            case 'subtraction':
                $result = $val1 - $val2; // Perform subtraction
                return $result;
                break;

            case 'multiplication':
                $result = $val1 * $val2; // Perform multiplication
                return $result;
                break;

            case 'division':
                if ($val2 != 0) {
                    $result = $val1 / $val2; // Perform division, avoiding division by zero
                    return $result;
                } else {
                    return "Error: Division by zero";
                }
                break;
            
            default:
                return "Invalid Operation";
        }
    }

    // Display the result if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "The result is: " . calculate_result();
    }
?>
