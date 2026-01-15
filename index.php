<?php
session_start();
?>


<!DOCTYPE html>
<html>

<head>
    <title>Simple PHP Chatbot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .abc1 {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
            margin-top: 40px;
        }
    </style>
</head>

<body class="bg-light">
    <div class="abc1">
        <h1 style="text-align: center;">Simple Chatbot Assistant</h1>
    </div>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Simple Chatbot
            </div>
            <div class="card-body">
                <?php
                if (isset($_SESSION['chat'])) {
                    foreach ($_SESSION['chat'] as $chat) {
                        if ($chat['sender'] == 'user') {
                            echo '<div class="alert alert-primary text-end"><b>Anusara:</b> ' . $chat['message'] . '</div>';
                        } else {
                            echo '<div class="alert alert-secondary"><b>Assistant:</b> ' . $chat['message'] . '</div>';
                        }
                    }
                }
                ?>

                <form action="chatbot.php" method="POST">
                    <div class="input-group">
                        <input type="text" name="message" class="form-control" placeholder="Type your message..."
                            required>
                        <button class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>