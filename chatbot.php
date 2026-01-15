<?php
    session_start();

    $userMessage = strtolower(trim($_POST['message']));

    if (!isset($_SESSION['chat'])) {
        $_SESSION['chat'] = [];
    }

    if ($userMessage == "hi" || $userMessage == "hello") {
    $reply = "Hello! How can I help you?";
    }
    elseif ($userMessage == "what is a chatbot") {
        $reply = "A chatbot is a program that can talk with humans.";
    }
    elseif ($userMessage == "bye") {
        $reply = "Goodbye! Have a nice day.";
    }
    else {
        $reply = "Sorry, I didn't understand that.";
    }

    /* Store user message */
    $_SESSION['chat'][] = [
        "sender" => "user",
        "message" => $_POST['message']
    ];

    /* Store bot reply */
    $_SESSION['chat'][] = [
        "sender" => "bot",
        "message" => $reply
    ];

    header("Location: index.php");
    exit;
?>