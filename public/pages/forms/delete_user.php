<?php

require '../../../bootstrap.php';

$id = filter_input(INPUT_POST,'cd_user', FILTER_SANITIZE_NUMBER_INT);


$deleted = delete('tb_usuario','cd_user',$id);


if($deleted){
    return redirectToHome();
}

flash('message', 'Error trying to delete user!');
return redirectToHome();