<!-- process_form.php --> 
<?php 
// Ensure error reporting is enabled for debugging (remove in production) 
error_reporting(E_ALL); 
ini_set('display_errors', 1); 
 
// Replace 'your_db_hostname', 'your_db_username', 'your_db_password', and 'your_db_name' with your database credentials 
$hostname = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'db_contact'; 
 
// Connect to the database 
$mysqli = new mysqli($hostname, $username, $password, $database); 
 
// Check the connection 
if ($mysqli->connect_errno) { 
    die("Failed to connect to MySQL: " . $mysqli->connect_error); 
} 
 
// Check if the form data was submitted 
if ($_SERVER["REQUEST_METHOD"] === "POST") { 
    // Retrieve data from the form 
    $fldName = $_POST['name']; 
    $fldEmail = $_POST['email']; 
 
    // Prepare the insert query 
    $insertQuery = "INSERT INTO users (name, email) VALUES (?, ?)"; 
 
    // Prepare the statement 
    if ($stmt = $mysqli->prepare($insertQuery)) { 
        // Bind parameters to the statement 
        $stmt->bind_param("ss", $name, $email); 
 
        // Execute the statement 
        if ($stmt->execute()) { 
            echo "Data successfully inserted into the database!"; 
        } else { 
            echo "Error: " . $mysqli->error; 
        } 
 
        // Close the statement 
        $stmt->close(); 
    } else { 
        echo "Error: " . $mysqli->error; 
    } 
 
    // Close the database connection 
    $mysqli->close(); 
} 
?> 