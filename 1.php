<?php
$servername = "139.159.144.57";//这是我用的华为云服务器
$username = 'gly'; //面试用我直接把一个毕设用的没有多少权限的登录用户写下来
$password = 'WANMEI=1liujun'; 
$dbname = "school"; //数据库重新做一个
$gitid =$_POST['githubid'];
$email =$_POST['E-mail'];

$zdyck =$_POST['githuburl'];
$danl =$_POST['Vercel'];
$conn =@ new mysqli($servername, $username, $password, $dbname);//mysql自带报错两次，@屏蔽

if ($conn->connect_error) {
    echo "error"; 
}
else{

if($gitid!=null&&$gitid!=''){}//这里模拟后端分别处理两种表单
if($giturl!=null&&$giturl!=''){}//这里模拟后端分别处理两种表单
$xxx=0;
$sql = " SELECT tid,tname from ts;"; //在这里替换要查询或者添加的什么sql语句，这里面面试用不做数据库，直接写返回结果
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
while($row = $result->fetch_assoc()){//单列可以重复读取如tid
    echo $row['tid'];//查询的tid为 1 这里模拟提交表单后成功的返回数据，因为面试题目中没有详细表明需求

}


} else {
    echo"'错误'";
}
}