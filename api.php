<?php
  error_reporting(0);
  //设置json格式头部
  header('Content-type: application/json');
  //载入数据库文件
  require("data.php");
  $sql="select * from soul order by rand( ) limit 1";
  $result=mysqli_query($conn,$sql);
  if (mysqli_num_rows($result) > 0) { 
        while ($row = mysqli_fetch_assoc($result)) {
                echo json_encode(array('code'=>1,'data'=>$row['title']));
        }    
    } else {
        echo "0 results";
    }
?> 
