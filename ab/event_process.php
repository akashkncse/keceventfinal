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

            updateIndexHtml($name);

            session_start();
            $_SESSION["success_message"] = "Event '$name' has been successfully added!";

            header("Location: eventregister.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error in preparing statement: " . $conn->error;
    }
}


function updateIndexHtml($eventName) {
    $indexFile = "index.php";
    

    if (file_exists($indexFile) && is_writable($indexFile)) {
        $content = file_get_contents($indexFile);

        $eventLink = strtolower(str_replace(' ', '', $eventName));

        $newEvent = '<li class="list-group-item border-0 p-2"><a href="#' . $eventLink . '" class="text-decoration-none">' . $eventName . '</a></li>';
        
        $quickAccessStart = strpos($content, '<div class="quickaccess">');
        
        if ($quickAccessStart !== false) {
            $ulStart = strpos($content, '<ul type="none" class="list-group list-group-flush">', $quickAccessStart);
            
            if ($ulStart !== false) {
                $ulEnd = strpos($content, '</ul>', $ulStart);
                
                if ($ulEnd !== false) {

                    $content = substr_replace($content, $newEvent, $ulEnd, 0);

                    file_put_contents($indexFile, $content);
                    return true;
                }
            }
        }
    }
    return false;
}

$conn->close();
?>