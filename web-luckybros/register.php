<?php
//session_start();
include 'header.php';
include 'conn.php';

if ($_SESSION) {
    header('location: index.php');
} else {

    if (isset($_POST['submit'])) {
        if ($_POST['password'] !== $_POST['confirm_password'])
            header('Location: register.php');

        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $bio = $_POST['bio'];
        $desc = $_POST['desc'];

        $sql = "INSERT INTO users (`email`, `username`, `password`,`bio`,`description`)
            VALUES ('$email', '$username', '$password','$bio','$desc')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
}

?>

<div class="jumbotron">
    <h2>Create an Account</h2>
    <form action="register.php" method="POST">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Insert your email">
            <small class="form-text text-muted">enter a valid email address</small>
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Insert username">
        </div>
        <div class="form-group">
            <label>Bio</label>
            <input type="text" class="form-control" id="bio" name="bio" placeholder="Insert bio">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" id="username" name="desc" placeholder="Describe yourself">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="password" name="password" onkeyup='check();'>
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" onkeyup=' check();'>
            <span id="message"></span>
        </div>
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script type="text/javascript">
    var check = function() {
        if (document.getElementById('password').value ==
            document.getElementById('confirm_password').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'Password Matches!';
        } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'Password is not the same!';
        }
    }
</script>
<?php include 'footer.php' ?>