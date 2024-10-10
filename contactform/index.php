<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h2>Contact Us</h2>
        <form action="studentform.php" method="POST" onsubmit="return validateForm()">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact" required>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            <input type="submit" value="SUBMIT">
        </form>
    </div>

    <script>
        function validateForm() {
            const firstName = document.getElementById("first_name").value;
            const lastName = document.getElementById("last_name").value;
            const age = document.getElementById("age").value;
            const contact = document.getElementById("contact").value;
            const address = document.getElementById("address").value;
            
            let errorMessage = '';
            
            if (!firstName || !lastName || !age || !contact || !address) {
                errorMessage = "All fields are required!";
            } else if (isNaN(age) || age <= 0) {
                errorMessage = "Please enter a valid age";
            }
            
            if (errorMessage) {
                alert(errorMessage);
                return false;
            }
            
            return true;
        }
    </script>

</body>
</html>