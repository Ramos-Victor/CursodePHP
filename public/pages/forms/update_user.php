<?php

require '../../../bootstrap.php';

$id = filter_input(INPUT_POST,'cd_user', FILTER_SANITIZE_NUMBER_INT);

if(isEmpty()){
    flash('message','
Fill in all fields!');

    return redirect("edit_user&id={$id}");
}

$validate = validateData([
    'nm_user'=>'s',
    'nm_email'=>'e',
]);

$updated = update('tb_usuario',$validate,['cd_user',$id]);


if($updated){
    flash('message', 'User updated successfully!!','success');

    return redirect("edit_user&id={$id}");
}

flash('message', 'Error trying to update user!');
redirect("/edit_user&id={$id}");