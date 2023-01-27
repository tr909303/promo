<?php
  $rating = $_POST['rating'];
  $feedback = $_POST['feedback'];

  $to = "cardao@live.com.pt";
  $subject = "Feedback from Techno Music Releases website";
  $message = "Rating: $rating\nFeedback: $feedback";
  $headers = "From: feedback@technomusicreleases.com";

  mail($to, $subject, $message, $headers);
?>
