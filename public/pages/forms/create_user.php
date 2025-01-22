<?php

require '../../../bootstrap.php';


if(isEmpty()){
    flash('message','
Fill in all fields!');

    return redirect("create_user");
}

$validate = validateData([
    'nm_user'=>'s',
    'nm_email'=>'e',
    'cd_password'=>'s'
]);

$registered = create('tb_usuario',$validate);

if($registered){
    flash('message', 'User registered successfully!!','success');

    return redirect("create_user");
}

flash('message', 'Error trying to register user!');
redirect("create_user");