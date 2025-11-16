


<?php include 'inc/navbar.php' ?>
<?php include 'inc/header.php' ?>






<h1>register </h1>
<div class="container">
    <div class="row">
        <div class="col-8 mx-auto bg-light my-5 border-dark border-3">
            <h2 class=" p-2 mt-3 text-center"> Register </h2>

            <?php
                if (isset($_SESSION['errors'])):
                foreach ($_SESSION['errors'] as $error):
            ?>
                    <div class="alert alert-danger text-center">
                        <?php echo $error; ?>
                    </div>

            <?php endforeach;
                unset($_SESSION['errors']);
            endif;
            ?>

            




            <form action="handlears/handleRegister.php" method="POST" class="pt-3">

                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm-password" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="submit" name="" class="form-control btn btn-success">
                </div>

            </form>
        </div>
    </div>
</div>

<?php include 'inc/footer.php'; ?>