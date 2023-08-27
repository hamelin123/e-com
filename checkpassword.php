<?php
$password = $_POST['password'];
$repassword = $_POST['repassword'];
if('$password == "" & $repassword == "" ') {
echo "กรุณากรอกรหัสผ่านทั้ง 2 ช่อง";
} else if($password != $repassword){
echo "รหัสผ่านไม่ตรงกัน";
} else {
echo "รหัสผ่านตรงกัน";
}
?>