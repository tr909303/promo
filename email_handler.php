<?php
  // Retrieve form data
  $feedback = $_POST["feedback"];
  $rating = $_POST["rating"];
  $track = $_POST["track"];
  $download = $_POST["download"];
  
  // Email recipient
  $to = "cardao@live.com.pt";
  
  // Email subject
  $subject = "Feedback for track: $track";
  
  // Email message
  $message = "Track: $track\nRating: $rating\nFeedback: $feedback\n";
  
  // Additional headers
  $headers = "From: feedback@example.com\r\n";
  
  // Send email
  if (mail($to, $subject, $message, $headers)) {
    echo "Feedback sent successfully! You can download the track from the link below: ";
    if ($download) {
      echo "<a href='https://soundcloud.com/cardao/download'>Download Track</a>";
    }
  } else {
    echo "Failed to send feedback. Please try again later.";
  }
?>
