<?php

require '../../../bootstrap.php';


if(isEmpty()){
    flash('message','
Fill in all fields!');

    return redirect("contato");
}

$validate = validateData([
    'name'=>'s',
    'email'=>'e',
    'subject'=>'s',
    'message'=>'s'
]);


$data = [
    'quem'=> $validate->email,
    'para' => 'vm02oliveiraramos@gmail.com',
    'mensagem' => $validate->message,
    'assunto' =>$validate->subject
];

if(send($data)){

    flash('message','Email enviado com sucesso','success');

    return redirect("contato");
}