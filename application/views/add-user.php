
<?php include('navbar.php'); ?>
		
		<br>
		
		
        
        <!---Managers View ----------->
        
        
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					
                    <div class="panel-heading">
						New Manager Registration
                       
                        <a href="<?php echo base_url() ?>Admin/users" class="pull-right panel-settings panel-button-tab-right"> <em class="fa fa-calendar"></em> 
                        </a><!--add new user--->
						</div>


					<div class="panel-body">
						<div class="canvas-wrapper">
                        
                        
                       
							<?php if($this->session->flashdata('error')){ ?>	
							
                            <div class="alert alert-danger">
                                <?php echo $this->session->flashdata('error') ?>
                            </div>
                            
                            <?php } ?>
						
                        
                        <form role="form" action="<?php echo base_url() ?>Admin/user_reg" method="post">
						
                        	<div class="form-group">
								<input class="form-control" placeholder="Full Name" name="name" type="text" autofocus>
							</div>
                            
                           <div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus>
							</div>

                            <div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" autofocus>
							</div>
                            
                            <div class="form-group">
								<input class="form-control" placeholder="Manager ID" name="managerid" type="text" autofocus>
							</div>
                            
                            <div class="form-group">
								<input class="form-control" placeholder="Email" name="email" type="email" autofocus>
							</div>

						
                        	<div class="form-group">
								<input class="form-control" placeholder="Phone No" name="no" type="number" >
							</div>
                          
                          <div class="form-group">
                            <select class="form-control" name="type">
                            <option selected disabled>----Select User Role-----</option>
                            <option>Admin</option>
                            <option>Pharmist</option>
                            <option>Salesman</option>
                            </select>
                          </div>

							<input type="submit" value="Register" name="submit" class="btn btn-success">					

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
