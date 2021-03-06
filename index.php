<html>
  	<head>
  		<title>Connekt</title>
  		<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
  		<link type="text/css" href="css/bootstrap-table.css" rel="stylesheet">
  		<link type="text/css" href="css/font-awesome.css" rel="stylesheet">
  </head>

  <body>

  <div class="container">
  	<div class="col-md-12">
  		<div class="page-header">
  			<h1>
  			Connekt
  			</h1>
  		</div>


  		<div class="panel panel-success">
  			<div class="panel-heading ">
  				<h5>Connected and Disconnected users</h5>
  			 </div>

  			<div class="panel-body">
  				<div class="row">
  					<div class="col-md-12">

  						<table 	id="table"
  			                	data-show-columns="true"
   				                data-height="460">
  						</table>
  					</div>
  				</div>
  			</div>
  		</div>

  	</div>
  </div>

  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-table.js"></script>


  <script type="text/javascript">

  	 var $table = $('#table');
  		     $table.bootstrapTable({
  			      url: 'list-connected.php',
  			      search: true,
  			      pagination: true,
  			      buttonsClass: 'primary',
  			      showFooter: true,
  			      minimumCountColumns: 5,
  			      columns: [{
  			          field: 'num',
  			          title: '#',
  			          sortable: true,
  			      },{
  			          field: 'imei_code',
  			          title: 'IMEI',
  			          sortable: true,
  			      },{
  			          field: 'active_time',
  			          title: 'Connected',
  			          sortable: true,
  			      },{
  			          field: 'last_active_time',
  			          title: 'Disconnected',
  			          sortable: true,
  			      },{
  			          field: 'type',
  			          title: 'Mode',
  			          sortable: true,

  			      },  ],

    			 });

  </script>

  </body>
  </html>
