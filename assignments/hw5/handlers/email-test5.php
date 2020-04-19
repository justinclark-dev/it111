<?PHP
    // $sender = 'justin.clark@northseattle.edu';
    $sender = 'justin.clark@northseattle.edu';
    $recipient = 'justin.clark@seattlecolleges.edu';

    $subject = "php mail test";
    $message = "php test message";
    $headers = 'From:' . $sender;

    if (mail($recipient, $subject, $message, $headers)) {
        echo "Message accepted :)";
    }
    else {
        echo "Error: Message not accepted!!";
    }
?>