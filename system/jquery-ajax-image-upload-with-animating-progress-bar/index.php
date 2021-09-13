<!--Google Analytics-->
<html>
<head>
<title>File Upload Progress Bar Using jQuery And PHP On TalkersCode.com</title>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.form.js"></script>
<script>
	function upload_image() 
	{
		var bar = $('#bar');
		var percent = $('#percent');
		
		$('#myForm').ajaxForm({
			beforeSubmit: function() {
				document.getElementById("progress_div").style.display="block";
				var percentVal = '0%';
				bar.width(percentVal)
				percent.html(percentVal);
			},
			uploadProgress: function(event, position, total, percentComplete) {
				var percentVal = percentComplete + '%';
				bar.width(percentVal)
				percent.html(percentVal);
			},
			success: function() {
				var percentVal = '100%';
				bar.width(percentVal)
				percent.html(percentVal);
			},
			complete: function(xhr) {
				if(xhr.responseText)
				{
					document.getElementById("output_image").innerHTML=xhr.responseText;
				}
			}
		}); 
	}
</script> 


<style>
body
{
	margin:0px auto;
	padding:0px;
	font-family:helvetica;
}
h1
{
	text-align:center;
	font-size:35px;
	margin-top:100px;
	color:#2E2E2E;
}
h1 p
{
	text-align:center;
	margin:0px;
	font-size:18px;
	text-decoration:underline;
	color:white;
}
#myForm 
{ 
width:400px;
margin-top:50px;
margin: 20px; 
background: #A9BCF5; 
border-radius: 10px; 
padding: 15px 
}

.progress {text-align:left;margin-top:20px;display:none; position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
.bar { background-color:#2E64FE; width:0%; height:30px; border-radius: 3px; }
.percent { position:absolute; display:inline-block; top:8px; left:48%; }
img
{
	margin-top:20px;
	width:300px;
}
</style>

</head>
<body>




<br>
<br>



<h1>File Upload Progress Bar Using <br>jQuery And PHP <p>TalkersCode.com</p></h1>

<center>
<form action="upload_file.php" id="myForm" name="frmupload" method="post" enctype="multipart/form-data">
    <input type="file" id="upload_file" name="upload_file" />
	<input type="submit" name='submit_image' value="Submit Image" onclick='upload_image();'/> 
</form>

<div class='progress' id="progress_div">
<div class='bar' id='bar'></div>
<div class='percent' id='percent'>0%</div>
</div>

<div id='output_image'>
Please Wait While Image Uploading and Displaying
</div>
</center>


</body>
</html>