<?php
	include_once('header.php');
?>
	<form  class="form" action="database config/UploadFileLogic.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input class="input" type="file" name="image" id="fileToUpload"></form>
  <button class="button" style="text-align: center;" type="submit" value="Upload Image" name="submit">Post</button>
</form>
<?php
	include_once('footer.php');
?>