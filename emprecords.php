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
 $id = $_GET['id'];
 
 $db = new Database();
 
 //Create query
 
 $query = "SELECT * FROM allEmpRecords WHERE id=".$id;
 
 // Run the query
 
 $empRecords = $db->select($query)->fetch_assoc();
?>
		<main role="main" class="container">
      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
        <div class="lh-100">
          <h1>Weekly Time Sheet</h2>
        </div>
      </div>

		<div class="my-3 p-3 bg-white rounded box-shadow">
		
		
		<p>Resours Name: <b><?php echo $empRecords['teamMember'];?></b> </p>
		<p>Project Name: <b>time sheet application</b> </p>
		<p>For Week Ending: <b><?php echo formartDate($empRecords['weekEnding']);?></b> </p>
		<p>Activity Description: <b><?php echo $empRecords['activityDescription'];?></b> </p>
		<p>Deliverable / Outcomes: <b><?php echo $empRecords['deleverabls'];?></b> </p>
		<p>Resourse Signature: <b><?php echo $empRecords['resourseSignature'];?></b> </p>
		<p>Manager Approval: <b><?php echo $empRecords['managerApproval'];?></b> </p>
		
		 <h6 class="border-bottom border-gray pb-2 mb-0"><b>Hours Worked:</b><b><?php echo $empRecords['totalhours'];?></b></h6>
		<!--<a  class="btn btn-primary" href="emprecords.php?id=<//?php echo urlencode($empRecords['id']);?>">Read more</a>-->
        <div class="media text-muted pt-3">
         	
        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
		<table class="table table-striped table-light">
			  <thead>
				<tr>
				  <th scope="col">#</th>
				  <th scope="col"><b>Monday</b></th>
				  <th scope="col"><b>Tuesday</b></th>
				  <th scope="col"><b>Wendsday</b></th>
				  <th scope="col"><b>Thursday</b></th>
				  <th scope="col"><b>Friday</b></th>
				  <th scope="col"><b>Satarday</b></th>
					<th scope="col"><b>Sunday</b></th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <th scope="row">Weekly Hours Worked</th>
				  <td><?php echo $empRecords['mon'];?></td>
				  <td><?php echo $empRecords['tus'];?></td>
				  <td><?php echo $empRecords['wed'];?></td>
				  <td><?php echo $empRecords['thur'];?></td>
				  <td><?php echo $empRecords['fri'];?></td>
				  <td><?php echo $empRecords['sat'];?></td>
				  <td><?php echo $empRecords['sun'];?></td>
				</tr>
			  </tbody>
			</table>
			
				<div style="text-align:right;"><a  class="btn btn-secondary" href="index.php">Back</a></div>
			</div>
			
	 </div>
	 </div>
    </main>
	
         
<?php 
	include "include/footer.php";
?>
