
<html>
	<head>
		<title>Project Management</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files/css/stylesheet.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>files/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div class="row header">
				<center>Project Management</center>
				<a href="<?php echo base_url("index.php/Dccpercontroller/settings"); ?>"><span class="settings glyphicon glyphicon-cog"><span style="text-decoration:underline">Settings</span></span></a>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div id="pmem" class="nameslist">Project Members</div>
					<?php
					if(isset($results)){  
						foreach ($results as $row) {
					?>
					<a href="<?php echo base_url("index.php/Dccpercontroller/show/main/$row->member_id"); ?>"><div class="nameslist"><?php echo $row->name ?></div></a>
					<?php
					}  
					}
					else {
							echo "No results found";
						}	
					?>
				</div>

				<div class="col-md-9">
					<?php if($memberDetails != NULL){ ?> 
					<div class="row">
						<?php
						foreach($memberDetails as $row){
						?>
						<div><img src="<?php echo base_url(); ?>files/<?php echo $row->image ?>" height="120" width="170"/></div>
						<div class="name"> <?php echo $row->name; ?> </div>
						<?php
					}	
					?>
					</div>
					<?php
					}	
					?>
					<div class="button"><button type="button" class="btn btn-default" style="color:#ffffff; background-color:#666666;">Create Report</button></div>
					<div class="row clear">
							<table class="table table-striped">
								<thead>
 							     <tr>
 							       <th class="tablehead twidth" style="vertical-align:middle;">Task</th>
 							       <th class="tablehead" style="vertical-align:middle;">Start Date</th>
 							       <th class="tablehead" style="vertical-align:middle;">End Date</th>
 							       <th class="tablehead" style="vertical-align:middle;">Estimated Hours</th>
 							       <th class="tablehead" style="vertical-align:middle;">Hours Spent</th>
 							       <th class="tablehead" style="vertical-align:middle;">Schedule Variance</th>
 							     </tr>
 							   </thead>
 							   <?php if(is_array($memberTasks) && sizeof($memberTasks)>0){ ?>
 							   <tbody>

 							   	
 							   	<?php
 							   		foreach($memberTasks as $row){
 							   		?>
 							   		
 							     <tr>
 							       <td><?php echo $row->task_desc ?></td>
 							       <td><?php echo $row->start_date ?></td>
 							       <td><?php echo $row->end_date ?></td>
 							       <td><?php echo $row->estimated_hours ?></td>
 							       <td><?php echo $row->hours_spent ?></td>
 							       <td><?php echo $row->task_id ?></td>
 							     </tr>
 							     <?php
 							 	}
 							 ?>
 							   </tbody>
 							   <?php
 							 	}
 							 ?>
							</table>
					</div>
					

					<?php if($links != NULL){ ?> 
					<div class="row centeralign">
						<ul class="pagination pagination-sm">
    					<?php echo $links; ?>
  						</ul>
					</div>
					<?php
 						}
 					?>
				</div>
			</div>
		</div>
	</body>
</html>