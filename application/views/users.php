
<?php include('navbar.php'); ?>

		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
		</div><!--/.row-->
		
        
        <!---Managers View ----------->
        
        
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					
                    <div class="panel-heading">
						Users View
                       
                        <a href="<?php echo base_url() ?>Admin/add_user" class="pull-right panel-settings panel-button-tab-right"> <em class="fa fa-user"></em> 
                        </a><!--add new user--->

						</div>


					<div class="panel-body">
						<div class="canvas-wrapper">
                        
                        <?php if($this->session->flashdata('manager_reg')) {?>
                        <div class="alert alert-success">
							<?php echo $this->session->flashdata('manager_reg');  ?>
					   </div>
					  <?php } ?> 
                      
                       <?php if($this->session->flashdata('update_data')) {?>
                        <div class="alert alert-success">
							<?php echo $this->session->flashdata('update_data');  ?>
					   </div>
					  <?php } ?>
                         
                        
                        <table class="table table-hover table-bordered">
                        
                        <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Manager ID</th>
                        <th>Phone No</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th colspan="2"><i class="fa fa-setting"></i>Operation</th>
                        </tr>
                        
                        <?php foreach($result as $res){ ?>
                        
                        <tr>
                        <td><?php echo $res->name  ?></td>
                        <td><?php echo $res->username  ?></td>
                        <td><?php echo $res->password  ?></td>
                        <td><?php echo $res->managerid  ?></td>
                        <td><?php echo $res->no ?></td>
                        <td><?php echo $res->email  ?></td>
                        <td><?php echo $res->type	  ?></td>
                        
                        <td><a href="<?php echo base_url() ?>Admin/delete_user/<?php echo $res->id ?>">
                        <i class="fa fa-trash"></i></a></td>
                        
                        <td><a href="<?php echo base_url() ?>Admin/get_user/<?php echo $res->id ?>">
                        <i class="fa fa-edit"></i></a></td>

                        </tr>
                        <?php } ?>
                        </table>
                        
                        
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
	<script>
	window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart2 = document.getElementById("bar-chart").getContext("2d");
	window.myBar = new Chart(chart2).Bar(barChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart3 = document.getElementById("doughnut-chart").getContext("2d");
	window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart4 = document.getElementById("pie-chart").getContext("2d");
	window.myPie = new Chart(chart4).Pie(pieData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart5 = document.getElementById("radar-chart").getContext("2d");
	window.myRadarChart = new Chart(chart5).Radar(radarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.05)",
	angleLineColor: "rgba(0,0,0,.2)"
	});
	var chart6 = document.getElementById("polar-area-chart").getContext("2d");
	window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	segmentShowStroke: false
	});
};
	</script>	
</body>
</html>
