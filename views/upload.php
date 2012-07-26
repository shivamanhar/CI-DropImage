<?php 	
	/* ========================
	| The label is where you will set the attributes which  determines the coming action. 
	| @data-param is the $_GET['action']
	| @data-entry is the id of the element you will be attaching the image to (such as a blog entry)
	| ======================= */	
	echo form_label('Images', 'fileselect', array('class' => 'imageAjax', 'data-param' => 'headlines', 'data-entry' => $some_number));
	$data = array(
		'name'	=>	'fileselect[]',
		'id'			=>	'fileselect',
		'multiple'	=>	'multiple',
		);
	echo form_upload($data) .br();
?>

	<div id="filedrag">or drop files here</div>
	<div id="progress"></div>
	<div id="messages"></div>	
	<script type="text/javascript" src="<?php echo JS; ?>image_ajax.js"></script>
	<style>
	#filedrag	{
		font-weight: bold;
		text-align: center;
		padding: 1em 0;
		margin: 1em 0;
		color: #555;
		border: 2px dashed #555;
		border-radius: 7px;
		cursor: default;
	}
	
	#filedrag.hover	{
		color: #f00;
		border-color: #f00;
		border-style: solid;
		box-shadow: inset 0 3px 4px #888;
	}
	
	img	{
		max-width: 100%;
	}
	
	pre	{
		width: 95%;
		height: 8em;
		font-family: monospace;
		font-size: 0.9em;
		padding: 1px 2px;
		margin: 0 0 1em auto;
		border: 1px inset #666;
		background-color: #eee;
		overflow: auto;
	}
	
	#messages	{
		padding: 0 10px;
		margin: 1em 0;
		border: 1px solid #999;
	}
	
	#progress p	{
		display: block;
		width: 240px;
		padding: 2px 5px;
		margin: 2px 0;
		border: 1px inset #446;
		border-radius: 5px;
		background: #eee url("progress.png") 100% 0 repeat-y;
	}
	
	#progress p.success {		
		background: #0c0 none 0 0 no-repeat;
	}
	
	#progress p.failed	{
		background: #c00 none 0 0 no-repeat;
	}
</style>