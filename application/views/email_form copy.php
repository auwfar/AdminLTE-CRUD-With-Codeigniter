<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Email</title>
</head>

<body>
    <?php
    echo $this->session->flashdata('email_sent');
    echo $this->session->flashdata('message');
    echo form_open('/Email_controller/send_mail');
    ?>
    <select name="pilih" id="pilih">
        <option value="register">Register</option>
        <option value="forgot">Forgot password</option>
    </select>
    <input type="email" name="email" value="" required />
    <input type="submit" value="SEND MAIL">

    <?php
    echo form_close();
    ?>
</body>

</html>

