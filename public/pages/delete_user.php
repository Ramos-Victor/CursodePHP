<h2 class="text-left mb-4 text-primary">DELETE USER</h2>

<?php
    $user = find('tb_usuario','cd_user',$_GET['id']);
?>

<form action="/pages/forms/delete_user.php" method="POST" class="mt-3">

    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="nm_user"  value=<?= $user->nm_user ?> readonly>
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" name="nm_email" value=<?= $user->nm_email ?> readonly>
    </div>


    <input type="hidden" name="cd_user" value=<?= $user->cd_user ?>>

    <button type="submit" class="btn btn-danger">Delete</button>

</form>

<?php echo get('message'); ?>