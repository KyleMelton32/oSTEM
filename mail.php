<?php
    $to1 = "ostemmsu@gmail.com";
    $to2 = "montana-state@chapters.ostem.org";
    $from = $_REQUEST['name'];
    $headers = "Content-type: text/html;From: $from";

    $fields = array();
    $fields["name"] = $_REQUEST['name'];
    $fields["email"] = $_REQUEST['email'];
    $fields["message"] = $_REQUEST['message'];

    $body = "Here is what was sent:\n\n";
    $body .= 'Name : '.$fields['name']. '<br>';
    $body .= 'Email : '.$fields['email']. '<br>';
    $body .= 'Message : '.$fields['message']. '<br>';

    $send = mail($to1, $body, $headers);
    $send = mail($to2, $body, $headers);


