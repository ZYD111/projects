<?php
    header('content-type:text/html;charset=utf-8');
    include './inde.php';

    //获取数据
    $getId = $_POST['id'];
    $stu_id = $_POST['stuid'];
    $stu_name = $_POST['stuname'];
    $stu_age = $_POST['stuage'];
    $stu_sex = $_POST['stusex'];
    $stu_marjor = $_POST['stumagor'];
     
    //修改
    $sql = "update table1 set stuid=$stu_id,name='$stu_name',old=$stu_age,sex='$stu_sex',class='$stu_marjor' where id=$getId";

    //执行
    $res = mysqli_query($connect,$sql);

    if($res){
        $a = array(
            "state" => 1,
            "info" => "修改成功"
        );
        echo json_encode($a);
    }else{
        $a = array(
            "state" => 0,
            "info" => "修改失败"
        );
        echo json_encode($a);
    }


?>