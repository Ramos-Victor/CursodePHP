<h2 class="text-left mb-4 text-primary">EDIT USER</h2>

<?php
    $user = find('tb_usuario','cd_user',$_GET['id']);
?>

<form action="/pages/forms/update_user.php" method="POST" class="mt-3">

    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="nm_user" placeholder="Type your name" value=<?= $user->nm_user ?>>
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" name="nm_email" placeholder="Type your email" value=<?= $user->nm_email ?>>
    </div>


    <input type="hidden" name="cd_user" value=<?= $user->cd_user ?>>

    <button type="submit" class="btn btn-primary">Update</button>

</form>

<?php echo get('message'); ?>