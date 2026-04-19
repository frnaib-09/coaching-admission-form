<?php
include_once './layouts/header.php';
include_once './database/env.php';
$query = 'SELECT * FROM `admission_form`';
$response = mysqli_query($connection, $query);
$regs = mysqli_fetch_all($response, 1);


?>

<div class="container mt-5">
  <h1 class="text-center mb-5">Student List</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Serial</th>
        <th scope="col">Full Name</th>
        <th scope="col">Username</th>
        <th scope="col">Phone</th>
        <th scope="col">E-mail</th>
        <th scope="col">Password</th>
        <th scope="col">Payment Method</th>
        <th scope="col">Gender</th>
      </tr>
    </thead>

    <?php
    foreach($regs as $reg) {
    ?>
        <tbody>
        <tr>
            <td class="text-center"><?= $reg['id'] ?></td>
            <td class="text-center"><?= $reg['name'] ?></td>
            <td class="text-center"><?= $reg['username'] ?></td>
            <td class="text-center"><?= $reg['phone'] ?></td>
            <td class="text-center"><?= $reg['email'] ?></td>
            <td class="text-center"><?= $reg['password'] ?></td>
            <td class="text-center"><?= $reg['payment'] ?></td>
            <td class="text-center"><?= $reg['gender'] ?></td>
        </tr>
        </tbody>
    <?php
    }
    ?>
  </table>
</div>






<?php
include_once './layouts/footer.php';