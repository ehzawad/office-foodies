<?php include("header.html") ?>

<a href="registration"> Register as a user (office employee) </a> |
<a href="new_office"> Register as a office </a> |
<a href="new_vendor"> Register as a food vendor </a> |
<br /><br />
<form action="checkregistrationvendor">
    <?=showError()?>

    <fieldset>
        <label>Vendor Name</label>
        <input type="text" name="vendorname"><br><br>

    </fieldset>

    <fieldset>
        <legend>Person who will manage the account of this Vendor</legend>
        <label>Name</label>
        <input type="text" name="name"><br><br>
        <label>Email</label>
        <input type="text" name="email"><br><br>
        <label>password</label>
        <input type="password" name="password"><br><br>
        <label>Confirm Password</label>
        <input type="password" name="confirmpassword"><br><br>

        <label>Phone</label>
        <input type="text" name="phone"><br><br>

    </fieldset>
    <fieldset>
        <h3>Your account will not be approved untill we physically confirm your registration</h3>
    </fieldset>

    <input type="submit">
</form>
</td>

<?php include("footer.html") ?>
