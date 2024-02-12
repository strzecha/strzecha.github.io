<?php
    session_start();
    if($_REQUEST["message"] == "" || $_REQUEST["email"] == ""){
        $_SESSION["result"] = "MISSING_DATA";
        header("Location: contact.php");
        exit();
    }

    $to = "info@example.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $cmessage = $_REQUEST['message'];

	$headers = "From: info@example.com \r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "You have a message from ".$from;

	$body = <<<END
        <!DOCTYPE html>
        <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <title>Express Mail</title>
            </head>
            <body>
                <table style='width: 100%;'>
                    <tbody>
                        <tr>
                            <td><strong>Name:</strong> {$name}</td>
                            <td><strong>Email:</strong> {$from}</td>
                        </tr>
                        <tr>
                            <td><strong>Subject:</strong> {$csubject}</td>
                        </tr>
                        <tr>
                            <td>{$cmessage}</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
    END;

    $send = mail($to, $subject, $body, $headers, "-f info@example.com");
    
	if(isset($_REQUEST["message"]))
        unset($_REQUEST["message"]);
    if(isset($_REQUEST["email"]))
        unset($_REQUEST["email"]);
    if(isset($_REQUEST["name"]))
        unset($_REQUEST["name"]);

    $_SESSION["result"] = "OK";
	header("Location: contact.php");
	exit();

?>