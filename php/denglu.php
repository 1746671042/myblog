<?php
header("content-type:text/html;charset=utf8");
if(isset($_POST["wp_submit"])){
    $name = isset($_POST["log"])?$_POST["log"]:"";
    $pwd = isset($_POST["pwd"])?$_POST["pwd"]:"";
    
    if($name =="" || $pwd ==""){
        echo "<script>alert('请填写用户名或密码');history.go(-1);</script>";
        exit();
    }
    
          //1. 连接数据库
                $con = mysqli_connect("localhost", "root", "111444le", "php");
                if(mysqli_connect_errno() != 0){//输出错误码，正确是0
                     echo "<script>alert('系统错误');history.go(-1);</script>";
                //    echo mysqli_connect_error();//输出错误原因
                    die();//组织程序运行
                }
                //2.校验编码
                mysqli_set_charset($con, "utf8");

    
    $sql = "select * from liuyantwo where name='{$name}' and pwd='{$pwd}'";
    $result = mysqli_query($con, $sql);
    if(!$result){
        echo "<script>alert('系统错误');history.go(-1);</script>";
        exit();
    } 
    $count = mysqli_num_rows($result);//获取查询结果的条数
    if($count<1){
         echo "<script>alert('用户名或密码不对！！');history.go(-1);</script>";
       exit();
    }
    else{
       $row = mysqli_fetch_assoc($result);
        setcookie("user_id",$row["name"], time()+60);
        setcookie("user_name",$row["pwd"], time()+60);
         echo "<script>alert('登陆成功！！');window.location.href ='../my.html';</script>";

    }              
}
else{
    echo "<script>alert('系统错误');</script>";

}
 