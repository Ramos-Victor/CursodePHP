<h2 class="text-left mb-4 text-primary">REGISTER USERS</h2>

<form action="/pages/forms/create_user.php" method="POST" class="mt-3">

    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="nm_user" placeholder="Type your name">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="email" class="form-control" name="nm_email" placeholder="Type your email">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" name="cd_password" placeholder="Type your password">
    </div>

    <button type="submit" class="btn btn-primary">Register</button>

</form>

<?php echo get('message'); ?>