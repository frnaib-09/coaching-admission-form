<?php 
include_once './layouts/header.php';
?>
    <h1>Admission Form</h1>
    <section id="form">
        <div class="container">
            <div class="row">
                <div class="card w-90">
                    <form action="./controller/validation.php" method="POST">
                        <input name="full_name" type="text" placeholder="Full Name">
                        <input name="userName" type="text" placeholder="Username">
                        <input name="phone" type="tel" placeholder="Enter your phone number">
                        <input name="mail" type="email" placeholder="Enter your Email">
                        <input name="pass" type="password" placeholder="Enter your password">
                        <select name="payment">
                            <option>Bkash</option>
                            <option>Nagad</option>
                            <option>Rocket</option>
                            <option>Cash</option>
                        </select>
                        <div class="gender col-6 justify-content-start">
                            <div class="radio">
                                <input type="radio" id="male" name="option" value="1">
                                <label for="male">Male</label>
                            </div>
                            <div class="radio">
                                <input type="radio" id="female" name="option" value="2">
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