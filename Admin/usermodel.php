<?php 
    require_once('db.php');

    function admin($username, $password){

        $con = getConnection();
        $sql = "select * from admin where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count > 0){
            return true;
        }else{
            return false;
        }
    }

    function addUser($user){
        $con = getConnection();
        $sql = "insert into admin values('', '{$user['name']}', '{$user['email']}', '{$user['dob']}') 
        '{$user['mobile_number']}','{$user['gender']}', '{$user['blood_group']}', '{$user['division']}', '{$user['city']}',
         '{$user['address']}','{$user['password']}','{$user['confirm_password']}',)";
        $status = mysqli_query($con, $sql);
        return $status;
    }


?>