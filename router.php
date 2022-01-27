<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="style.css" rel="stylesheet">
</head>
<body>

<h2>Admin Panel : </h2>
<form method ="post" action="index.php">
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //collect value of input field
   $username = $_POST['username'];
   $email = $_POST['email'];
   $issue = $_POST['issue'];
   $comment = $_POST['editordata'];
   
   echo "<table>
  <tr>
    <th>User Name</th>
    <th>Email Address</th>
    <th>Issue</th>
	<th>Comment</th>
	<th>Action</th>
  </tr>
  <tr>
    <td><input class='inputs' type='text' name='username' readonly value='{$username}'></td>
    <td><input class='inputs' type='text' name='email' readonly value='{$email}'></td>
    <td><select name='issue' id='issue' class='inputs'>
		<option value='{$issue}' selected disabled>{$issue}</option>
        <option value='Query'>Query</option>
        <option value='Feedback'>Feedback</option>
        <option value='Complaint'>Complaint</option>
        <option value='Other'>Other</option>
	</select></td>
	<td><input class='inputs' type='text' name='comment' readonly value='{$comment}'></td>
	<td>
	<input type = 'button' onclick ='Modify(this);' value='Edit' class='btn'/>
	</td>
  </tr>
</table>";
   
 }
?>
<div class="wrapper">
<input type="submit" value="Fill The Form" class="btn"/>
</div>
</form>
<script>
function Modify(button) {
  var x = document.getElementsByClassName('inputs');
  for (i=0;i<4;i++){
	if(x[i].readOnly == true){
		x[i].readOnly = false;
		button.value = "Save";
	} else{
		x[i].readOnly = true;
		button.value = "Edit";
	}
  
  }
}
</script>
</body>
</html>