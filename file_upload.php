<form action="process_file_upload.php" method="POST" enctype="multipart/form-data">
	<!-- without enctype="multipart/formdata" file uploads won't work-->

	<input type="file" name="image_upload">
	<!-- use an input type file for uploads -->
	<button type="submit">Upload Image</button>

</form>