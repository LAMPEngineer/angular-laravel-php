<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>Sudents</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	
    <!-- BootStrap DatePicker JS -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
    ></script>
    <!-- BootStrap DatePicker CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
    />
</head>
<body>
	<section style="padding-top:60px;">
		<dir class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							Students <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#studentModal">Add New Student</a>
						</div>
						<div class="card-body">
							<table id="studentTable" class="table">
								<thead>
									<tr>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Email</th>
										<th>Phone</th>
									</tr>
								</thead>
								<tbody>
									@foreach($students as $student)
									<tr>
										<td>{{$student->firstname}}</td>
										<td>{{$student->lastname}}</td>
										<td>{{$student->email}}</td>
										<td>{{$student->phone}}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</dir>
	</section>

<!-- Modal -->
<div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="studentForm">
        	@csrf
        	<div class="form-group">
        		<label for="firstname">First Name</label>
        		<input type="text" class="form-control" id="firstname">
        	</div>
        	<div class="form-group">
        		<label for="lastname">Last Name</label>
        		<input type="text" class="form-control" id="lastname">
        	</div>
        	<div class="form-group">
        		<label for="email">Email</label>
        		<input type="text" class="form-control" id="email">
        	</div>
        	<div class="form-group">
        		<label for="phone">Phone</label>
        		<input type="text" class="form-control" id="phone">
        	</div>
        	<div class="form-group date fj-date">
        		<label for="dob">Date of Birth</label>
        		<input type="text" class="form-control" id="dob"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
        	</div>

        	<button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>
	<script>
		$("#studentForm").submit(function(e){
			e.preventDefault();

			let firstname = $("#firstname").val();
		    let lastname = $("#lastname").val();
		    let email = $("#email").val();
		    let phone = $("#phone").val();
		    let _token = $("input[name=_token]").val();

		    $.ajax({
		    	url:"{{route('student.name')}}",
		    	type:"POST",
		    	data:{
		    		firstname:firstname,
		    		lastname:lastname,
		    		email:email,
		    		phone:phone,
		    		_token:_token
		    	},
		    	success:function(response)
		    	{
		    		if(response)
		    		{
		    			$("#studentTable tbody").prepend('<tr><td>'+response.firstname+'</td><td>'+response.lastname+'</td><td>'+response.email+'</td><td>'+response.phone+'</td></tr>');
		    			$("#studentForm")[0].reset();
		    			$("#studentModal").modal('hide');
		    		}
		    	}
		    });

		});	



		$( document ).ready(function() {
			$('.fj-date').datepicker({
			    format: "mm//dd/yyyy"
			});
		});
	</script>	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>