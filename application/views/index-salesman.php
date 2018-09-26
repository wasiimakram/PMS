


<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

</script>


<?php include('navbar.php'); ?>

<?php include('sidebar-salesman.php'); ?>
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"></h1>
			</div>
		</div><!--/.row-->
		

        
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					
                    <div class="panel-heading">
						Medicines
                 
                    <a href="<?php echo base_url() ?>Salesman/view_cart" class="pull-right panel-settings panel-button-tab-right"> 						<span class="badge"><?php echo $no ?></span><em class="fa fa-shopping-cart"></em> 
                        </a><!--add new user--->
              
                       

						</div>





					<div class="panel-body">
						<div class="canvas-wrapper">
                                <?php if($this->session->flashdata('add_cart')){ ?>
                  <div class="alert alert-danger">
                  <?php echo $this->session->flashdata('add_cart'); ?>
                  </div>
                  <?php } ?>
				  
                  <form>
                  <input  type="text" autofocus id="myInput" onkeyup="myFunction()" class="form-control"
                   placeholder="Search for Medicine..">
				  
                  </form>
                         <table class="table table-hover table-bordered" id="myTable">
                        
                        <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Catagory</th>
                        <th>Type</th>
                        <th>Quantity</th>
                        <th>Price/Item</th>
                        <th>Add To Cart</th>
                        </tr>
                        <?php foreach($medicines as $med){ ?>
                        
						<?php $id = $med->id;
						      $name = $med->name;
							  $quantity = $med->quantity;
							  $price = $med->price;
						 ?>
                        
                        
                        
                        <tr>
                        <td><?php echo $med->id ?></td>
                        <td><?php echo $med->name ?></td>
                        <td><?php echo $med->cat_name ?></td>
                        <td><?php echo $med->type_name ?></td>
                        <td><?php echo $med->quantity ?></td>
                        <td><?php echo $med->price ?></td>
                        
                        <td id="addcart"><a href="<?php echo base_url() ?>Salesman/add_cart/<?php echo $med->name ?>/
						<?php echo $med->quantity ?>/<?php echo $med->price ?>/<?php echo $med->id ?>">
                        
                        <i class="fa fa-shopping-cart"></i></a></td>
                         
                         
                         
						 <?php } ?>
                        </tr>


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
