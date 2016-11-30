<?php
if (isset($_POST['request']))
{
    $to = "mike@rtb.cat";
    $subject = "Dianetics Book Order";

    // Prepare values.
    $headers = "From: MQL Mail Service <noreply@morequalifiedleads.co.uk>\r\n";
    //$headers .= "Reply-To: {$name} <{$email}>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // Build table values.
    $table = "<table><tbody>";
    foreach($_POST as $field=>$info)
    {
        if($field != "request")
        {
            $table .= "<tr><td>{$field}</td><td>:</td><td>{$info}</td></tr>";
        }
    }
    $table .= "</tbody></table>";
    $message = "<h4>Details</h4>{$table}";
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
