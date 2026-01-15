<?php
    $userMessage = strtolower(trim($_POST['message']));
    $reply = "";

    if ($userMessage == "hi" || $userMessage == "hello") {
        $reply = "Hello! How can I help you?";
    } elseif ($userMessage == "what is a chatbot") {
        $reply = "A chatbot is a program that can talk with humans.";
    } elseif ($userMessage == "bye") {
        $reply = "Goodbye! Have a nice day.";
    } else {
        $reply = "Sorry, I didn't understand that.";
    }

    header("Location: index.php?reply=" . urlencode($reply));
?>