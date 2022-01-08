
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>	

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">
  
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>
<a href="https://docs.google.com/spreadsheets/d/e/2PACX-1vRwjlKU8axzY5MopFdd38SrfgyqC8oLZzLbE0nhFy5rKHIDytgDqOPY1Bk_aEhThIL_aRjkCMF6xeYw/pub?gid=0&single=true" target="_blabk" class="dt-button buttons-html5">Original Google Sheets File Here</a>
			<table id="example" class="display">
			<thead><th>Name</th><th>Father Name</th><th>Mobile Number</th></thead>
<?php 

	$googlesheet = "https://docs.google.com/spreadsheets/d/e/2PACX-1vRwjlKU8axzY5MopFdd38SrfgyqC8oLZzLbE0nhFy5rKHIDytgDqOPY1Bk_aEhThIL_aRjkCMF6xeYw/pub?gid=0&single=true&output=csv";
	
	if (($handle = fopen($googlesheet, "r")) !== FALSE) {
			while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
					$c++; ?>
				
			<tr>
				<td><?php echo $data[0];?></td>
				<td><?php echo $data[1];?></td>
				<td><?php echo $data[2];?></td>
			</tr>
					<?php	
		}
		}
		
		fclose($handle);
	?>
	
			</table>
			
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>

