<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photographer_site";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    $stmt = $conn->prepare("INSERT INTO clients (name, email, phone, service, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $service, $message);

    if ($stmt->execute()) {
        echo '
        <div id="success-message" class="popup" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7); display: flex; justify-content: center; align-items: center;">
            <div class="popup-content" style="background-color: white; padding: 20px; border-radius: 10px; text-align: center; max-width: 500px; width: 80%;">
                <h1>Thank you, ' . $name . '!</h1>
                <p>Your request has been successfully submitted.</p>
                <p><strong>Name:</strong> ' . $name . '</p>
                <p><strong>Email:</strong> ' . $email . '</p>
                <p><strong>Phone:</strong> ' . $phone . '</p>
                <p><strong>Service:</strong> ' . $service . '</p>
                <p><strong>Message:</strong> ' . $message . '</p>
                <button id="close-popup" style="margin-top: 20px; padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">Continue browsing</button>
            </div>
        </div>

        <script>
            document.getElementById("close-popup").addEventListener("click", function() {
                window.location.href = "index.html";
            });
        </script>
        ';
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
