<h2 class="text-left mb-4 text-primary">HOMEPAGE</h2>

<?php echo get('message'); ?>

<table class="table table-bordered table-striped text-center align-middle">
    <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">BUTTONS</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $users = all('tb_usuario');

        foreach ($users as $user):
        ?>
        <tr>
            <td><?= $user->cd_user ?></td>
            <td><?= $user->nm_user ?></td>
            <td><?= $user->nm_email ?></td>
            <td>
                <div class="btn-group" role="group">
                    <a href="/?page=edit_user&id=<?= $user->cd_user ?>" class="btn btn-success">Edit</a>
                    <a href="/?page=delete_user&id=<?= $user->cd_user ?>" class="btn btn-danger">Delete</a>
                </div>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>