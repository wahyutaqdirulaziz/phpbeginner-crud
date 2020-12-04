<?php include 'base.php' ?>



<?php startblock('konten') ?>

<div class="container">
    <form action="aksi/add_users.php" method="post">
        <div class="form-group">
            <label for="">nama lengkap</label>
            <input class="form-control" type="text" name="nama_lengkap">
        </div>
        <div class="form-group">
            <label for="">email</label>
            <input class="form-control" type="email" name="email">
        </div>
        <div class="form-group">
            <label for="">password</label>
            <input class="form-control" type="text" name="password">
        </div>
        <button class="btn btn-danger" name="submit">submit</button>
    </form>
</div>


<?php endblock() ?>