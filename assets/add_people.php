<?php
    if (
        isset($_POST['name']) and
        $_POST['name'] != ''   and
        isset($_POST['surname']) and
        $_POST['surname'] != '' and
        isset($_POST['company']) and
        isset($_POST['tel']) and
        isset($_POST['email_sub']) and
        $_POST['email_sub'] != '' and
        isset($_POST['email_ad']) and
        $_POST['email_ad'] != '' and
        isset($_POST['message']) and
        $_POST['message'] != ''
    )
    {
        $q = "INSERT INTO zapisy(imie, nazwisko, firma, telefon, temat, adres_email, wiadomosc) VALUES('$_POST[name]', '$_POST[surname]', '$_POST[company]', '$_POST[tel]', '$_POST[email_sub]', '$_POST[email_ad]', '$_POST[message]')";
        $r = mysqli_query($mdb, $q);
        header('Location: ./portfolio');
    }