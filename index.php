<?php 
include_once './layouts/header.php';
?>
    <h1>Admission Form</h1>
    <section id="form">
        <div class="container">
            <div class="row">
                <div class="card w-90">
                    <form action="./controller/validation.php" method="POST">
                        <input name="full_name" type="text" placeholder="Full Name" class="form-control <?= isset($_SESSION['form_errors']['name_error']) ? 'is-invalid' : '' ?>" value="<?= $_SESSION['valid_data']['full_name'] ?? '' ?>">
                        <span class="text-danger"><?= $_SESSION['form_errors']['name_error'] ?? '' ?></span>

                        <input name="userName" type="text" placeholder="Username" class="form-control <?= isset($_SESSION['form_errors']['userName_error']) ? 'is-invalid' : '' ?>" value="<?= $_SESSION['valid_data']['userName'] ?? '' ?>">
                        <span class="text-danger"><?= $_SESSION['form_errors']['userName_error'] ?? '' ?></span>

                        <input name="phone" type="tel" placeholder="Enter your phone number" class="form-control <?= isset($_SESSION['form_errors']['phone_number_error']) ? 'is-invalid' : '' ?>" value="<?= $_SESSION['valid_data']['phone'] ?? '' ?>">
                        <span class="text-danger"><?= $_SESSION['form_errors']['phone_number_error'] ?? '' ?></span>

                        <input name="mail" type="email" placeholder="Enter your Email" class="form-control <?= isset($_SESSION['form_errors']['email_error']) ? 'is-invalid' : '' ?>" value="<?= $_SESSION['valid_data']['mail'] ?? '' ?>">
                        <span class="text-danger"><?= $_SESSION['form_errors']['email_error'] ?? '' ?></span>

                        <input name="pass" type="password" placeholder="Enter your password" class="form-control <?= isset($_SESSION['form_errors']['passowrd_error']) ? 'is-invalid' : '' ?>" value="<?= $_SESSION['valid_data']['pass'] ?? '' ?>">
                        <span class="text-danger"><?= $_SESSION['form_errors']['passowrd_error'] ?? '' ?></span><br>

                        <select name="payment">
                            <option>Bkash</option>
                            <option>Nagad</option>
                            <option>Rocket</option>
                            <option>Cash</option>
                        </select>
                        <div  class="gender col-6 justify-content-start">
                            <div class="radio">
                                <input name="gender" type="radio" id="male" value="Male">
                                <label for="male">Male</label>
                            </div>
                            <div class="radio">
                                <input name="gender" type="radio" id="female" value="Female">
                                <label for="female">Female</label>
                            </div>
                        </div>
                        <button class="btn btn-primary w-100 my-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<?php
include_once './layouts/footer.php';