
<?php  
  include_once 'inc/db_config.php';
//  include_once 'inc/header.php';


?>
 

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
        
    
    <?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
?>

 <?php 
  if (!isset($_SESSION["user_loged"])) {

    header('Location: login.php');
  }

  
  include_once 'inc/nav.php';
?>
	<div class="content-wrapper p-md-5">

	
		<div class="container">
		
		 
		
			<div class="order-form">
				<form action="confirm_order.php" method="post"  class="product_form">
	              

	                <br><br><br>

	                <table class="table table-hover text-center table-striped" id="mytable">
	                
	                 <div class="row">
	                	<div class="col-md-6 text-center" style="
    margin-bottom: 33px;">
		                	<label for="name">Name: &nbsp;&nbsp;</label>

		                	<?php $name=$_SESSION['user_name']; ?>

			                <input style="
    border-radius: 10px; text-align:center;" class="" type="text" id="name" value="<?= $name ?>" name="name" readonly>

		                </div>

		                <div class="col-md-6 text-center">
		                	<label for="order_date">Order Date: &nbsp;&nbsp;</label>
		                	<input style="
    border-radius: 10px; text-align:center;" type="Date"  id="order_date"  name="order_date" value="<?php echo date("Y-m-d"); ?>" readonly >
		                </div>
	                </div>
	                
	                
	                
	                	<thead class="bg-primary text-white">
	                		<tr>
	                			<th>Service Name</th>
	                			<th>Cloth Type</th>
	                			<th>Qty</th>
	                			<th>
	                				<button type="button" class="btn btn-warning" id="add_new_row">
	                					<span class="fa fa-plus"></span> Add Item
	                				</button>
	                			</th>
	                		</tr>
	                	</thead>
	                	<tbody>
	                		<tr>
	                			<td>
							        <select class="service_name form-control" name="service_name[]">

							          <?php
							            $sql_query="SELECT * FROM `services";
							            $sql_result = DB_Query($sql_query);
							            while ($row = mysqli_fetch_assoc($sql_result)) {
							                  extract($row);
							          ?>

							            <option value="<?= $id ?>"

							            	<?php if(isset($_POST['i_service_name'])){ ?>
							            		<?php if($_POST['i_service_name']==$id){ ?>
							            		selected

							            	<?php } ?>

							            	<?php } ?>

							            	><?= $service_name ?></option>

							          <?php } ?>

							        </select>
							        
	                			</td>
	                			<td>
	                				<select class="cloth_type form-control" name="cloth_type[]">
							          <?php
							            $sql_query="SELECT * FROM `cloths ";
							            $sql_result = DB_Query($sql_query);
							            while ($row = mysqli_fetch_assoc($sql_result)) {
							                  extract($row);
							          ?>

							            <option value="<?= $id ?>"<?php if(isset($_POST['i_cloth_type'])){ ?>
							            		<?php if($_POST['i_cloth_type']==$id){ ?>
													selected

													<?php } ?>

							            	<?php } ?>

							            	><?= $cloth_type ?></option>

							          <?php } ?>
							        </select>
	                			</td>
	                			<td>
	                				<input class="form-control" type="number" id="qty" name="qty[]" required >
	                			</td>

	                			<td class="text-center">
	                				<a onclick ="delete_row($(this))">
	                					<span class="fa fa-trash fa-2x text-danger"></span>
	                				</a>
	                			</td>
	                		</tr>
	                	</tbody>
	                </table>

	                
	                <br><br><br><br>
	                <div class="text-center text-uppercase">
	                  <button name="order_submit" type="submit" class="btn-sm btn-success">Order</button>
	                  &nbsp;&nbsp;&nbsp;&nbsp;
	                  <button type="reset" class="btn-sm btn-danger">Reset</button>
	                </div>

	             </form>
			</div>
		</div>

		
	

<?php 
	include_once 'inc/footer.php';
?>