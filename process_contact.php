<?php

session_start();

require_once 'config.php';



// Set response header

header('Content-Type: application/json');



// Initialize response array

$response = [

    'success' => false,

    'message' => '',

    'errors' => [],

    'reset_form' => false

];



try {

    // Validate required fields

    $required = ['name', 'email', 'message', 'agree_terms'];

    foreach ($required as $field) {

        if (empty($_POST[$field])) {

            $response['errors'][] = "The {$field} field is required";

        }

    }



    // Validate email

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        $response['errors'][] = "Invalid email address";

    }



    // Validate numbers

    if (isset($_POST['passengers']) && $_POST['passengers'] <= 0) {

        $response['errors'][] = "Number of passengers must be at least 1";

    }



    if (isset($_POST['days']) && $_POST['days'] <= 0) {

        $response['errors'][] = "Number of days must be at least 1";

    }



    // If no errors, process the form

    if (empty($response['errors'])) {

        // Prepare data

        $name = $conn->real_escape_string($_POST['name']);

        $email = $conn->real_escape_string($_POST['email']);

        $phone = isset($_POST['phone']) ? $conn->real_escape_string($_POST['phone']) : null;

        $country = isset($_POST['country']) ? $conn->real_escape_string($_POST['country']) : null;

        $travel_date = isset($_POST['travel_date']) ? $conn->real_escape_string($_POST['travel_date']) : null;

        $passengers = isset($_POST['passengers']) ? (int)$_POST['passengers'] : null;

        $days = isset($_POST['days']) ? (int)$_POST['days'] : null;

        $tour_interest = isset($_POST['tour_interest']) ? $conn->real_escape_string($_POST['tour_interest']) : null;

        $message = $conn->real_escape_string($_POST['message']);

        $agree_terms = isset($_POST['agree_terms']) ? 1 : 0;



        // Prepare SQL query

        $stmt = $conn->prepare("INSERT INTO clients (

                    name, email, phone, country, travel_date, 

                    passengers, days, tour_interest, message, agree_terms, created_at

                ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");



        // Bind parameters

        $stmt->bind_param("sssssiissi", 

            $name, $email, $phone, $country, $travel_date,

            $passengers, $days, $tour_interest, $message, $agree_terms

        );



        // Execute query

        if ($stmt->execute()) {

            $response['success'] = true;

            $response['message'] = "Your message has been sent successfully! We will contact you soon.";

            $response['reset_form'] = true;

            

            // Optionally send email notification

            sendNotificationEmail($name, $email, $message);

        } else {

            $response['errors'][] = "Database error: " . $stmt->error;

        }



        $stmt->close();

    }

} catch (Exception $e) {

    $response['errors'][] = "An error occurred: " . $e->getMessage();

}



// Close connection

$conn->close();



// Return JSON response

echo json_encode($response);

exit();



// Helper function to send email notification

function sendNotificationEmail($name, $email, $message) {

    $to = "your-email@example.com";

    $subject = "New Contact Form Submission";

    $headers = "From: $email\r\n";

    $headers .= "Reply-To: $email\r\n";

    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    

    $email_body = "

    <html>

    <head>

        <title>New Contact Form Submission</title>

    </head>

    <body>

        <h2>New Contact Form Submission</h2>

        <p><strong>Name:</strong> $name</p>

        <p><strong>Email:</strong> $email</p>

        <p><strong>Message:</strong><br>".nl2br($message)."</p>

    </body>

    </html>

    ";

    

    @mail($to, $subject, $email_body, $headers);

}

?>