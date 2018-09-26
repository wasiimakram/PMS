	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php foreach($user as $u){ echo $u->name;}  ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Pharmist</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
        
        <!-------navigation start here--------->
        
		<ul class="nav menu">
			<li class="active"><a href="<?php echo base_url() ?>Pharmist">
            <em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			
            <li><a href="<?php echo base_url() ?>Pharmist/add_medicine">
            <em class="fa fa-medkit">&nbsp;</em> Add Medicines</a></li>
            
            <li><a href="<?php echo base_url() ?>Pharmist/catagories">
            <em class="fa fa-list-alt">&nbsp;</em> Medicine Generic</a></li>
            
            <li><a href="<?php echo base_url() ?>Pharmist/types">
            <em class="fa fa-list-alt">&nbsp;</em> Medicine Types</a></li>
			
            <li><a href="<?php echo base_url() ?>Login/logout"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
