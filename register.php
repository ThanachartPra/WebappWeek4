<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Register</h1>
    <hr>
    <table style="border:2px solid black; width:40%" align="center">
        <tr>
            <td style="background-color: #6CD2FE;" colspan="2">กรอกข้อมูล</td>
            </tr>
        <tr>
            <td>ชื่อบัญชี:</td>
            <td><input type="text" name="Username"></td>
            </tr>
        <tr>
            <td>รหัสผ่าน:</td>
            <td><input type="password" name="Pass"></td>
            </tr>
        <tr>
            <td>ชื่อ-นามสกุล:</td>
            <td><input type="text" name="Fullname"></td>
            </tr>
        <tr>
            <td>เพศ:</td>
            <td><input type="radio" name="gender" value="m">ชาย<br>
                <input type="radio" name="gender" value="f">หญิง<br>
                <input type="radio" name="gender" value="o">อื่นๆ<br></td>
            </tr>
        <tr>
            <td>อีเมล:</td>
            <td><input type="text" name="Email"></td>
            </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="สมัครสมาชิก"></td>
        </tr>
    </table>
    <br>
    <div align="center"><a href="index.php">กลับหน้าหลัก</a></div>
</body>
</html>