<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kecevent";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $participant = $_POST["participant"];
    
    $sql = "INSERT INTO event (name, date, time, participant) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("sssi", $name, $date, $time, $participant);
        
        if ($stmt->execute()) {
            // Success - update the index.php file
            updateIndexHtml($name);
            
            // Set session for success message
            session_start();
            $_SESSION["success_message"] = "Event '$name' has been successfully added!";
            
            // Redirect back to the event registration page
            header("Location: eventregister.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
        
        // Close statement
        $stmt->close();
    } else {
        echo "Error in preparing statement: " . $conn->error;
    }
}

// Function to update the index.php file with the new event
function updateIndexHtml($eventName) {
    $indexFile = "index.php";
    
    // Check if the file exists and is writable
    if (file_exists($indexFile) && is_writable($indexFile)) {
        $content = file_get_contents($indexFile);
        
        // Format event name for the link (lowercase, no spaces)
        $eventLink = strtolower(str_replace(' ', '', $eventName));
        
        // Create new list item
        $newEvent = '<li class="list-group-item border-0 p-2"><a href="#' . $eventLink . '" class="text-decoration-none">' . $eventName . '</a></li>';
        
        // Find the closing </ul> tag in the quickaccess section
        $quickAccessStart = strpos($content, '<div class="quickaccess">');
        
        if ($quickAccessStart !== false) {
            $ulStart = strpos($content, '<ul type="none" class="list-group list-group-flush">', $quickAccessStart);
            
            if ($ulStart !== false) {
                $ulEnd = strpos($content, '</ul>', $ulStart);
                
                if ($ulEnd !== false) {
                    // Insert the new event before the closing </ul> tag
                    $content = substr_replace($content, $newEvent, $ulEnd, 0);
                    
                    // Write the modified content back to the file
                    file_put_contents($indexFile, $content);
                    return true;
                }
            }
        }
    }
    return false;
}

// Close connection
$conn->close();
?>