<?php

    $server = [
        'Server Name'  => $_SERVER['SERVER_NAME'],
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Document Root' => $_SERVER['DOCUMENT_ROOT'],
        'Script Name' => $_SERVER['SCRIPT_NAME'],
        'Script Root' => $_SERVER['SCRIPT_FILENAME'],
    ];

    $client = [
        'Client Machine/Browser info' => $_SERVER['HTTP_USER_AGENT'],
        'Client IP' => $_SERVER['REMOTE_ADDR'],
        'Remote Port' => $_SERVER['REMOTE_PORT'],
    ];
    // foreach($server as $serverDescription => $serverOutput){
    //     echo "$serverDescription: $serverOutput <hr>";
    // }

    // foreach($client as $clientDescription => $clientOutput){
    //     echo "$clientDescription: $clientOutput <hr>";
    // }
?>