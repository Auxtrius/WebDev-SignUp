<?php
    require_once './tools/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Sign Up';
    require_once('./includes/head.php');
?>
<body>
    <?php
        $title = 'Home';
        require_once('./includes/header.user.php');
    ?>
    <main>
        <section class="p-3 p-md-5">
            <h1 class="h2">Create an account</h1>
            <p class=>Sign up to order your favorite pizza.</p>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-5">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" value="<?php if(isset($_POST['firstName'])){ echo $_POST['firstName']; } ?>">
                            <?php
                                if(isset($_POST['firstName']) && !validate_fn($_POST)){
                            ?>
                                <p class='brand-color'>Please enter a valid first name.</p>
                            <?php
                                }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" value="<?php if(isset($_POST['lastName'])){ echo $_POST['lastName']; } ?>">
                            <?php
                                if(isset($_POST['lastName']) && !validate_ln($_POST)){
                            ?>
                                <p class='brand-color'>Please enter a valid last name.</p>
                            <?php
                                }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="<?php if(isset($_POST['password'])){ echo $_POST['password']; } ?>">
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" value="<?php if(isset($_POST['confirmPassword'])){ echo $_POST['confirmPassword']; } ?>">
                            <?php
                                if(isset($_POST['password']) && isset($_POST['confirmPassword']) && !validate_cp($_POST)){
                            ?>
                                <p class='brand-color'>The password did not match.</p>
                            <?php
                                }
                            ?>
                        </div>
                        <button type="submit" class="btn btn-primary brand-bg-color">Sign Up</button>
                </div>
            </div>
        </section>
    </main>
    <?php
        $title = 'Home';
        require_once('./includes/js.php');
    ?>
    <script src="./js/landing-page.js"></script>
</body>
</html>