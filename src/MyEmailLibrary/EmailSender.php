<?php

namespace MyEmailLibrary;

class EmailSender {
    public function sendEmail($to, $subject, $message, $headers = null) {
        if ($headers === null) {
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=utf-8\r\n";
            $headers .= "From: your_email@example.com\r\n";
        }

        $success = mail($to, $subject, $message, $headers);

        if ($success) {
            return true;
        } else {
            return false;
        }
    }
}
