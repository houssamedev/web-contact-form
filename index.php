<!DOCTYPE html>
<html>
<head>
<title>Dice Program</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>
<body class="bg-gray-800">
<main class="container mx-auto min-h-screen flex flex-col justify-center content-center max-w-3xl space-y-4 bg-white shadow-md m-5 p-8 rounded-md">
<h1 class="text-black text-6xl text-center">
    Contact Form!
</h1>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //collect value of input field
   $username = $_POST['username'];
   $email = $_POST['email'];
   $issue = $_POST['issue'];
   $comment = $_POST['comment'];
?>
<form method="post" action="router.php" class="container flex flex-col space-y-4">
	<label class="text-black text-xl"> User Name : </label>
	<input class="border-2 border-gray-800  text-xl div-1 focus" type="text" id="username" name="username" size="10" value="<?php echo $username;?>" required>
	<label class="text-black text-xl"> Email Address : </label>
	<input class="border-2 border-gray-800  text-xl div-1 focus" type="text" id="email" name="email" size="10" value="<?php echo $email;?>" required>
	<label class="text-black text-xl">Issues : </label>
	<select name="issue" id="issue" class="border-2 border-gray-800  text-xl div-1">
        <option value="<?php echo $issue;?>"><?php echo $issue;?></option>
	</select>
	<label class="text-black text-xl">Comment : </label>
	<textarea id="summernote" name="editordata"><?php echo $comment;?></textarea>
	<input type="submit" value="Send" id="myBtn"  class="border-2 border-black text-black w-48 mx-auto  text-xl"/>
</form>
<?php }
else {
?>
<form method="post" action="router.php" class="container flex flex-col space-y-4">
	<label class="text-black text-xl"> User Name : </label>
	<input class="border-2 border-gray-800  text-xl div-1 focus" type="text" id="username" name="username" size="10" value="" required>
	<label class="text-black text-xl"> Email Address : </label>
	<input class="border-2 border-gray-800  text-xl div-1 focus" type="text" id="email" name="email" size="10" value="" required>
	<label class="text-black text-xl" for="issue">Issues : </label>
	<select name="issue" id="issue" class="border-2 border-gray-800  text-xl div-1">
		<option value='' selected disabled hidden>Choose here</option>
        <option value="Query">Query</option>
        <option value="Feedback">Feedback</option>
        <option value="Complaint">Complaint</option>
        <option value="Other">Other</option>
	</select>
	<label class="text-black text-xl">Comment : </label>
	<textarea id="summernote" name="editordata"></textarea>
	<input type="submit" value="Send" id="myBtn"  class="border-2 border-black text-black w-48 mx-auto  text-xl"/>
</form>
<?php }?>
</main>
<script>
$('#summernote').summernote({
        placeholder: 'Write Your Comment Here.',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
</script>
</body>
</html>