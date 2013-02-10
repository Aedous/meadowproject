<?php
	/*
	Loading image screen for gallery
	*/
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
	}
	else
	{
		$id = 'null';
	}
?>
<div id="<?php echo $_GET['id']; ?>" class='loading-screen-minified floater'>
		<div class="text-box" style="width:54px; height:30px; display:block; margin:0 auto;">
			<img src="img/loader.gif" style="border:0px; margin:0 auto; width:54px; height:30px; display:block;" />
			<div class='text' style="color:white;">Loading</div>
		</div>
</div>