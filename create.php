
<?php
    require_once('/connect.php');
    if(isset($_POST['submit'])){

        $sql ="INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `detail`, `date`, `updata`)
         VALUES (NULL, '".$_POST['name']."', '".$_POST['phone']."', '".$_POST['email']."', '".$_POST['detail']."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."');";
         $result = $conn->query($sql);
         if($result){
            echo '<script> alert("ส่งข้อความสำเร็จ") </script>';
            header('Refresh:0; url=contact.php');
        }

    } else {
        echo 'upload failed';
        header('location:contact.php');
    }


         ?>