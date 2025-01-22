<?php

function send(array $data){
    $email = new PHPMailer\PHPMailer\PHPMailer;
    $email->CharSet = 'UTF-8';
    $email->SMTPSecure = 'plain';
    $email->isSMTP();
    $email->Host= 'smtp.mailtrap.io';
    $email->Port = 465;
    $email->SMTPAuth = true;
    $email->Username = 'ac439f9a3de1f7';
    $email->Password = '68ede3a27b05df';
    $email->isHTML(true);
    $email->setFrom('vm02oliveiraramos@gmail.com');
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['mensagem'];
    $email->Subject = $data['assunto'];
    $email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um progaram que aceita ver HTML';
    $email->MsgHTML($data['mensagem']);

    return $email->send();

}