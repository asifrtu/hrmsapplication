<?php include('header.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page_title; ?></title>
</head>
<body>
	<div class="container" style="padding-top: 120px;">
		<h1 class="page-header">Add Link
			<a href="<?php echo site_url('adminzone/todo'); ?>" class="btn btn-sm btn-danger pull-right">Link List</a>
		</h1>
		<p>
			<?php
			if(isset($msg)){
				echo $msg;
			}
			?>
		</p>
		<form action="<?php echo site_url('adminzone/todo/linkadd'); ?>" method="post">
			<table class="table table-striped table-bordered">
				<tr>
					<th>Link Name</th>
					<td><input type="text" class="form-control" name="task_title" /></td>
				</tr>
				<tr>
					<th>Link Url</th>
					<td><input type="text" class="form-control" name="task_status" /></td>
				</tr>
					<input type="hidden" class="form-control" name="section_id" value=<?php echo $sectionid;?>>
				
				<tr>
					<td colspan="2">
						<input type="submit" class="btn btn-danger" value="Add Link" />
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>