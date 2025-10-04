<?php
function view_mainpage($my_conn){
    $sql="SELECT * FROM student "; // Query to collect records

echo "<table>";
$results = $my_conn->query($sql);
while ($row = $results->fetchArray()) {
	echo "<tr ><td>$row[id]</td><td>$row[name]</td></tr>";
}
echo "</table>";
}

function logout(){
  unset($_SESSION['login']);
  header("location: index.php");
}

function view_registration_form(){
	return file_get_contents(TEMPLATES_FOLDER."/registration_form.html");
}
function view_login_form(){
	return file_get_contents(TEMPLATES_FOLDER."/login_form.html");
}