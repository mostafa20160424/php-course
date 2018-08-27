<!DOCTYPE html>
<html>
<head>
	<title>page</title>
</head>
<body>
	<form method="post" action="add.php">
		<input type="text" name="first">+
		<input type="text" name="second">
		<input type="submit" name="">
	</form>

	<script type="text/javascript" src="../bootstrap-3.3.7-dist/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$("form").on('submit',function(){
			var contents = $(this).serialize();

			$.ajax({
				url:"add.php",
				type:"post",
				data:contents,
				dataType:"json",//data will return the response  type
				success:function(data){
					alert(data.result);
				}
			})

			return false;
		});
	</script>
</body>
</html>