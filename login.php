<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("blog", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into login(UserName, Email, Password ) values ('$username', '$email', '$paqssword')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>
