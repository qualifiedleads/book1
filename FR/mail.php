<?php
if (isset($_POST['request'],$_POST['name'],$_POST['address']))
{
    $to = "sarlselbooks@yahoo.fr";
    $subject = "Demande du livre";
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = isset($_POST['phone'])? $_POST['phone'] : "Not set.";
    $email = isset($_POST['email'])? $_POST['email'] : "no-reply@email.none";

    // Prepare values.
    $headers = "From: {$name} <{$email}>\r\n";
    $headers .= "Reply-To: {$name} <{$email}>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $message = <<<MSG
        <table>
            <tbody>
                <tr>
                    <td>Name</td><td>:</td><td>{$name}</td>
                </tr>
                <tr>
                    <td>Address</td><td>:</td><td>{$address}</td>
                </tr>
                <tr>
                    <td>Phone</td><td>:</td><td>{$$phone}</td>
                </tr>
                <tr>
                    <td>Email</td><td>:</td><td>{$email}</td>
                </tr>
            </tbody>
        </table>
MSG;
    try
    {
        mail($to,$subject,$message,$headers);
        $response = array('status'=>'ok','message'=>'Message sent.');
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json");
        echo json_encode($response);
    }
    catch(Exception $e)
    {
        $response = array('status'=>'error','message'=>'Internal server error.');
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json");
        echo json_encode($response);
    }
}