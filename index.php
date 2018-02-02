
 <?php 
	include "config/config.php";
?> 
<?php 
	include "libraries/Database.php";
?>
<?php 
	include "helper/format_helper.php";
?>
<?php 
	include "include/header.php";
?>

<?php
 $db = new Database();
 
 //Create query
 
 $query = "SELECT * FROM allEmpRecords";
 
 // Run the query
 
 $timesheet = $db->select($query);
?>	
	<main role="main" class="container">
      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
        <div class="lh-100">
          <h1>Weekly Time Sheet</h2>
        </div>
      </div>

	<?php 
		if($timesheet):
	?>	
	<?php while($row = $timesheet->fetch_assoc()) :?>
		<div class="my-3 p-3 bg-white rounded box-shadow">
		<p>Resours Name: <b><?php echo $row['teamMember'];?></b> </p>
		<p>Project Name: <b>time sheet application</b> <p>
		<p>For Week Ending: <b><?php echo formartDate($row['weekEnding']);?></b> </p>
		<p>Activity Description: <b><?php echo $row['activityDescription'];?></b> </p>
		<p>Deliverable / Outcomes: <b><?php echo $row['deleverabls'];?></b> </p>
		 <h6 class="border-bottom border-gray pb-2 mb-0"><b>Hours Worked:</b><b><?php echo $row['totalhours'];?></b></h6>
		 <br>
		<div style="text-align:right;"><a  class="btn btn-secondary" href="emprecords.php?id=<?php echo urlencode($row['id']);?>">Read more</a></div>
        <div class="media text-muted pt-3">
		</div>
	 </div>
	 <?php endwhile;?> 
		
			<?php else:?>
				<p>There are not Employee Timesheet Records.</p>
			<?php endif;?>
	 </div>
    </main>
	
         
<?php 
	include "include/footer.php";
?>
