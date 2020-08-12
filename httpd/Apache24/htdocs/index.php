<?php
$db=new mysqli("localhost","root","","test");//获取数据库连接
if(mysqli_connect_error()){
  echo 'Could not connect to database.';
  exit;
}
$result=$db->query("SELECT id,name FROM user");
// print "我车的品牌是 {$result}";
$row=$result->fetch_row(); 
echo("<script>console.log('".json_encode($row)."');</script>");  

function writeName()
{
  echo "Kai Jim Refsnes";
}
 
echo "My name is ";
writeName();
?>