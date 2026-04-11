<?php
$result = "";
if (isset($_POST['choice'])) {
    $choice = $_POST['choice'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    switch ($choice) {
        case "add":
            $result = "After Addition = " . ($num1 + $num2); break;
        case "sub":
            $result = "After Subtraction = " . ($num1 - $num2); break;
        case "mul":
            $result = "When Multiplication is done= " . ($num1 * $num2); break;
        case "div":
            if ($num2 != 0) { $result = "By Division operator = " . ($num1 / $num2); }
            else { $result = "Cannot divide by zero!"; } break;
        default: $result = "Invalid choice!";
    }
}
echo "Arjun Mehrania";
?>
<!DOCTYPE html><html><head><title>Menu Driven Program</title></head><body>
<h1>Switch Case Based Calculator</h1>
<form method="post">
    Enter first Number: <input type="number" name="num1" required><br><br>
    Enter second Number: <input type="number" name="num2" required><br><br>
    <h4>Choose any Operation:</h4>
    <input type="radio" name="choice" value="add"> Add<br>
    <input type="radio" name="choice" value="sub"> Subtract<br>
    <input type="radio" name="choice" value="mul"> Multiply<br>
    <input type="radio" name="choice" value="div"> Divide<br><br>
    <input type="submit" value="Calculate">
</form>
<h3><?php echo $result; ?></h3>
</body></html>
