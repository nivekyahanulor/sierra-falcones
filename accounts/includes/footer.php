
    </div>
    </div>

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

	<script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js"></script>
    <script src="assets/vendors/summernote/summernote-lite.min.js"></script>
    <script src="assets/js/moment.js"></script>
	<link rel="stylesheet" media="print" href="app.css" />
    <script src="assets/js/fullcalendar.js"></script>
	<script src="assets/js/main.js"></script>

	<?php 
		include('controller/calendar.php');
		$calendar = array();
		while($res = $advocacy->fetch_object()){ 
			
			 $start = $res->advocacy_schedule_date;
			 $startDate  = date("Y-m-d", strtotime($start));
			 $endDate  = date("Y-m-d", strtotime($end));
			 $calendar[] = array( "title" => $res->advocacy_title,
								  "start" => $startDate."T00:00:00.000",
								  "description" => $res->advocacy_sub_title,
								  "advocacy_chapter" => $res->advocacy_chapter,
								  "advocacy_status" => $res->advocacy_status,
								  "advocacy_id" => $res->advocacy_id,
								  "activities" => $res->activities,
								  "link" => 'advocacy.php',
								);
		}
		
	?>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
	<script>
	$(document).ready(function() {
		
            $('#table-assigned-resources').DataTable({
                dom: 'Bfrtip',
                responsive: false,
                pageLength: 25,
                // lengthMenu: [0, 5, 10, 20, 50, 100, 200, 500],

                 buttons: [
					{
						extend: 'print',
						title: 'Assigned Resources',
						exportOptions: {
							columns: [ 0, 1, 2, 3,4,5,6 ]
						}
					},
					{
						extend: 'excelHtml5',
						title: 'Assigned Resources',
						exportOptions: {
							columns: [ 0, 1, 2, 3,4,5,6 ]
						}
					},
					{
						extend: 'pdfHtml5',
						title: 'Assigned Resources',
						exportOptions: {
							columns: [ 0, 1, 2, 3,4,5,6 ]
						}
					},
				]

            }); 
			
			$('#table-released-resources').DataTable({
                dom: 'Bfrtip',
                responsive: false,
                pageLength: 25,
                // lengthMenu: [0, 5, 10, 20, 50, 100, 200, 500],

                 buttons: [
					{
						extend: 'print',
						title: 'Released Resources',
						exportOptions: {
							columns: [ 0, 1, 2, 3,4,5,6 ,7]
						}
					},
					{
						extend: 'excelHtml5',
						title: 'Released Resources',
						exportOptions: {
							columns: [ 0, 1, 2, 3,4,5,6 ,7]
						}
					},
					{
						extend: 'pdfHtml5',
						title: 'Released Resources',
						exportOptions: {
							columns: [ 0, 1, 2, 3,4,5,6 ,7]
						}
					},
				]

            });
			
			$('#table-committee-report').DataTable({
                dom: 'Bfrtip',
                responsive: false,
                pageLength: 25,
                // lengthMenu: [0, 5, 10, 20, 50, 100, 200, 500],

                 buttons: [
					{
						extend: 'print',
						title: 'Committee Report',
						exportOptions: {
							columns: [ 0, 1, 2, 3,4]
						}
					},
					{
						extend: 'excelHtml5',
						title: 'Committee Report',
						exportOptions: {
							columns: [ 0, 1, 2, 3,4]
						}
					},
					{
						extend: 'pdfHtml5',
						title: 'Committee Report',
						exportOptions: {
							columns: [ 0, 1, 2, 3,4]
						}
					},
				]

            });
			
			
			
     });	

	 function printDiv() {
            var divContents = document.getElementById("resourcestep2").innerHTML;
            var a = window.open('', '_blank');
            a.document.write('<html>');
			a.document.write('<head><title>Released Resources</title></head>');
            a.document.write('<body style="font-family: sans-serif; background-color: #f0ecd2"> <h1 style="color: #cca934; ">Receive Resources </h1>');
            a.document.write('<div style="line-height:150%; color: #6c757d; font-weight: 500">');
			a.document.write(divContents);
			a.document.write('</div>');
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
	
	</script>
	<script>
		var link = 'http://sierrafalcones.org/accounts/';
		$('#advocacy').on('change', function() {
				$.ajax({
				   type: "POST",
				   url: link + 'controller/get-chapter.php',
				   data : {
							 'advocacy'  : this.value , 
					},
				   success: function(data)
				   {
						$("#chapter").val(data);
				   }
			   });	
		});		
		
		$('#advocacy1').on('change', function() {
				$("#partners").html(""); 
				$.ajax({
				   type: "POST",
				   url: link + 'controller/get-resources.php',
				   data : {
							 'advocacy'  : this.value , 
					},
				   success: function(data)
				   {
						var parsedjson = $.parseJSON(data);
								   $("<option/>",{value:"",text:""}).appendTo("#partners");
						$.each( parsedjson , function( index, item ) {
								   $("<option/>",{value:item,text:item}).appendTo("#partners");
						});

				   }
			   });	
		});		
		
		$('#partners').on('change', function() {
				$.ajax({
				   type: "POST",
				   url: link + 'controller/get-partners-data.php',
				   dataType:"json",
				   data : {
							 'partners'  : this.value , 
					},
				   success: function(data)
				   {
						$("#rel_resources").val(data[0].sponsor_supplies);
						$("#rel_qty").val(data[0].sponsor_qty);
						$("#rel_date").val(data[0].date_received);
				   }
			   });	
		});		

	$(document).ready(function() {
	  
		$('#closecalendar').click(function() {
			$('#calendarmodal').modal('hide');
		});
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaDay'
			},
			defaultView: 'month',
			events: <?php echo json_encode($calendar);?>,
			eventClick:  function(event, jsEvent, view) {
			   $('#calendarmodal').modal('show');
				$('.modal').find('#title').html('Advocacy : <br>' + event.title + '<br><br>');
				$('.modal').find('#chapter').html('Chapter : <br>' + event.advocacy_chapter + '<br><br>');
				$('.modal').find('#description').html('Description : <br>' + event.description+ '<br><br>');
				$('.modal').find('#starts1').html('Date : <br>' +$.fullCalendar.moment(event.start).format('YYYY/MM/DD')+ '<br><br>');
				$('.modal').find('#status').html('Status : <br> On-Going' + event.advocacy_status+ ' % <br><br>');
				$('.modal').find('#link').html('View : <a href=' + event.link+ '> View Advocacy </a>');
				$('.modal').find('#advocacy_id').val(event.advocacy_id);
				$('.modal').find('#activities').val(event.activities);
        },
		});
		
	});		
	
	
    </script>
	 <script>
        $('#summernote').summernote({
            tabsize: 4,
            height: 220,
        })
        $("#hint").summernote({
            height: 100,
            toolbar: false,
            placeholder: 'type with apple, orange, watermelon and lemon',
            hint: {
                words: ['apple', 'orange', 'watermelon', 'lemon'],
                match: /\b(\w{1,})$/,
                search: function (keyword, callback) {
                    callback($.grep(this.words, function (item) {
                        return item.indexOf(keyword) === 0;
                    }));
                }
            }
        });

    </script>
	
</body>
<div class="modal" id="calendarmodal" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Calendar Details</h5>
              
              </div>
              <div class="modal-body">
				<form method="POST" action="controller/add-activities.php">							
						 <div id="title"></div>
						 <div id="chapter"></div>
						 <div id="description"></div>
						 <div id="starts1"></div>
						 <div id="status"></div>
						 <div id="link"></div>
						 <br>
						 <label> Activites :  </label>
						 <input type="hidden" id="advocacy_id" name="id">
						 <textarea class="form-control" id="activities" name="activity"></textarea>
											
              </div>
			   <div class="modal-footer bg-whitesmoke br">
			    <?php if($_SESSION['position'] ==2){?>
					<button type="submit" class="btn btn-info">Update</button>
				<?php } ?>
                <button type="button" class="btn btn-secondary" id="closecalendar" data-dismiss="modal">Close</button>
			</form>
              </div>
            </div>
          </div>
        </div>
</html>