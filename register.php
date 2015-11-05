<!--Sean McCarthy-->
<?php
if (!isset($firstname)) {
    $firstname = '';
}
if (!isset($lastname)) {
    $lastname = '';
}
if (!isset($email)) {
    $email = '';
}
if (!isset($address)) {
    $address = '';
}
if (!isset($homephone)) {
    $homephone = '';
}
if (!isset($cellphone)) {
    $cellphone = '';
}
include ('../view/header.php');
?>

<div id="section">

<form action="../index.php" method="post">
    <h3>New User Registration</h3><br>
<?php if (!empty($error_message)) { ?>
        <p class="error">
    <?php echo htmlspecialchars($error_message); ?></p>
        <br>
<?php } ?>

    <label for="firstname">First Name:</label>
    <input type="text" name="firstname" id="firstname" placeholder="Your first name"
           value="<?php echo htmlspecialchars($firstname); ?>"><br>

    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname" id="lastname" placeholder="Your last name"
           value="<?php echo htmlspecialchars($lastname); ?>"><br>

    <label for="email">Email:</label>
    <input type="text" name="email" id="email" placeholder="Your email address"
           value="<?php echo htmlspecialchars($email); ?>"><br>

    <label for="address">Address:</label>
    <input type="text" name="address" id="address" placeholder="Your Address"
           value="<?php echo htmlspecialchars($address); ?>"><br>

    <label for="homephone">Home Phone:</label>
    <input type="text" name="homephone" id="homephone" placeholder="Home phone number"
           value="<?php echo htmlspecialchars($homephone); ?>"><br>

    <label for="cellphone">Cell Phone:</label>
    <input type="text" name="cellphone" id="cellphone" placeholder="Cell phone number"
           value="<?php echo htmlspecialchars($cellphone); ?>"><br>
    <br>

    <input type="submit" name="register" class="button" value="Register">
    <input type="reset" name="reset" class="button" value="Reset"> 

</form>
<p><a href="../index.php">Go Back</a></p>
</div>
<br>
<br>

<?php
include ('../view/footer.php');
?>
