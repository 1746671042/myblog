<?php
header('content-type:text/html;charset=utf-8');
if (isset($_POST["sub"])) {
    $countent = strip_tags($_POST["content"]);
} else {
    $countent = "";
}

//1. 连接数据库
$con = mysqli_connect("localhost", "root", "root", "liuyan");
if (mysqli_connect_errno() != 0) {//输出错误码，正确是0
    echo "<script>alert('系统错误');history.go(-1);</script>";

    die(); //组织程序运行
}

//2.校验编码
mysqli_set_charset($con, "utf8");


//3.执行sql语句
$sql = "insert into ly(liuyan) values('{$countent}')";
$result = mysqli_query($con, $sql);
//删除\增加\修改语句的返回结果成功为true，失败为false
if (mysqli_errno($con) != 0) {
    echo "<script>alert('递交失败');history.go(-1);</script>";
} else {
    echo "<script>alert('递交成功');window.location.href='geiwoliuyan.html';</script>";
}

mysqli_close($con);
?>
