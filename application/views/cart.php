
<?php include('navbar.php'); ?>

<?php include('sidebar-salesman.php'); ?>
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		</div><!--/.row-->
	
        <!---Managers View ----------->
        
        
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					
                    <div class="panel-heading">
						Your INVOICE
                  <a href="<?php echo base_url() ?>Salesman" class="pull-right panel-settings panel-button-tab-right"> 										 				<em class="fa fa-calendar"></em> 
                        </a><!--add new user--->
              
                       

						</div>


					<div class="panel-body">
						<div class="canvas-wrapper">
                        
        <?php if($this->session->flashdata('error')){ ?>
              <div class="alert alert-danger">
                       <?php echo $this->session->flashdata('error'); ?>
              </div>              
                        <?php } ?>
                        <table class="table table-hover table-bordered">
                        
                        <tr>
                        <th>Seriel No</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th colspan="3"><center>Action</center></th>
                        </tr>
                        
                          <?php 
						      $price = 0;
							
						 ?>
                        
                        <?php foreach($cart_data as $cd){
							$p = $cd->price;
							$q =$cd->quantity;
							$prc =$p * $q;
							
							 ?>
                        <tr>
                        <td><?php echo $cd->id  ?></td>
                        <td><?php echo $cd->name   ?></td>
                        <td><?php echo $cd->quantity   ?></td>
                         <td><?php echo $p * $q ?></td>
                         <td>
                         <a href="#"><i class="fa fa-plus"></i></a>
                         </td> 
                         <td><a href="#"><i class="fa fa-minus"></i></a>
                         </td> 
                         <td>
                         <a href="<?php echo base_url() ?>Salesman/delete_item/<?php echo $cd->id ?>"><i class="fa fa-trash"></i></a>
                         </td>
							 </tr>
                         <?php
						 
						       $price = $price + $prc;
						  } ?>    
                        <tr>
                        <td><b>#</b></td>
                        <td colspan="2"><b>Total Price</b></td>
                        <td colspan="4"><center><b><?php echo $price ?> PKR</b></td>
                        
                        </tr>

                        </table>
                        
                        <form method="post" action="<?php echo base_url() ?>Salesman/print_invoice">
                        <div class="row">
                        <div class="form-group col-sm-3">
                        <input class="form-control" type="text" name="name" placeholder="Enter Customer Name">
                        </div>
                        
                        <div class="form-group col-sm-3">
                        <input  type="number" class="form-control" name="no" placeholder="Enter Cell No">
                        </div>
                        <input type="hidden" value="<?php echo $price ?>" name="price">
                        
                        <input type="submit" value="Order" class="btn btn-success" style="margin-top:10px;">
               			<button style="margin-top:10px;" class="btn btn-danger "><a href="<?php echo base_url() ?>Salesman/truncate_cart" style="color:#FFF">Cancel Invoice</a></button>
                        
                        </div>
                        </form>
                         
                        
                        
                        
                        
                        
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
			<?php include('footer.php'); ?>
		</div><!--/.row-->
	</div>	<!--/.main-->
	  

	<script src="<?php echo base_url() ?>/assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/chart.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/chart-data.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/easypiechart.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/custom.js"></script>
	
</body>
</html>
