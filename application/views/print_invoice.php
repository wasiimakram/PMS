
<html lang="en">

    <head>

	<link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>/assets/css/datepicker3.css" rel="stylesheet">
	<script src="<?php echo base_url() ?>/assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/chart.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/chart-data.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/easypiechart.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/custom.js"></script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PDF</title>
		<script  src="https://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="  crossorigin="anonymous"></script>



        <script src="webcamjs-master/webcam.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>   
	   <script type="text/javascript" src="jspdf.min.js"></script>

<script type="text/javascript">
function printDiv(printablediv){
        //alert('wefjasd');
		
		 //Get the HTML of div
            var divElements = document.getElementById(printablediv).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

}
</script>

<!--<script type="text/javascript">
	 function gennPDF()
	 {
				html2canvas(document.body,{
	    			onrendered: function(canvas){

	    			var img = canvas.toDataURL("image/png");
	    			var doc = new jspdf('l','in',[15, 15]);
	    			doc.addImage(img, 'JPEG', 0.8,0.8); 
					doc.save('test.pdf');		
	    			}
	    		});
	 
	 }
	 </script>
-->


<body>	


    
           <div id="printablediv" class="col-sm-6 col-sm-offset-3">
                        
          <h2><center>Pharmacy Management System</center></h2>
          <h4><center>Wasi Welfare Foundation Lahore</center></h4>
          
         <br>
        <table class="table table-hover table-bordered">
                        
                        <tr>
                        <th>Seriel No</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>	
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
                      	 </tr>
                         <?php
						 
						       $price = $price + $prc;
						  } ?>    
                        <tr>
                        <td><b>#</b></td>
                        <td colspan="2"><b>Sub Total</b></td>
                        <td colspan="4"><center><b><?php echo $price ?> PKR</b></td>
                        
                        </tr>

						<tr>
                        <td><b>#</b></td>
                        <td colspan="2"><b>Grand Total</b></td>
                        <td colspan="4"><center><b><?php echo $price ?> PKR</b></td>
                        
                        </tr>

                        </table>
                        <h5><center>PMS Developed by <b>Wasi Foundation</b></center></h5>
 					
                                    </div>
                                    
       
       <input type="button" onclick="javascript:printDiv('printablediv')"  value="Print" 
        class="btn btn-success" style="margin-top:580px;">
</body>
</html>
