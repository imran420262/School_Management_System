@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		 

		<!-- Main content -->
		<section class="content">
		  <div class="row">

		
<div class="col-12">
<div class="box bb-3 border-warning">
				  <div class="box-header">
	 <h4 class="box-title">Manage <strong>Student Result Report</strong></h4>
				  </div>

				  <div class="box-body">
				
 <form method="GET" action="{{ route('report.student.result.get') }}" target="_blank">
			@csrf
			<div class="row">



<div class="col-md-3">

 		 <div class="form-group">
		<h5>Year <span class="text-danger"> </span></h5>
		<div class="controls">
	 <select name="year_id" id="year_id" required="" class="form-control">
			<option value="" selected="" disabled="">Select Year</option>
			 @foreach($years as $year)
 <option value="{{ $year->id }}" >{{ $year->name }}</option>
		 	@endforeach
			 
		</select>
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 3 --> 



 			
 		<div class="col-md-3">

 		 <div class="form-group">
		<h5>Class <span class="text-danger"> </span></h5>
		<div class="controls">
	 <select name="class_id" id="class_id"  required="" class="form-control">
			<option value="" selected="" disabled="">Select Class</option>
			 @foreach($classes as $class)
			<option value="{{ $class->id }}">{{ $class->name }}</option>
		 	@endforeach
			 
		</select>
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 3 --> 

			 <div class="col-md-3">

				<div class="form-group">
			  <h5>Group <span class="text-danger"> </span></h5>
			  <div class="controls">
		   <select name="group_id" id="group_id"  required="" class="form-control">
				  <option value="" selected="" disabled="">Select Group</option>
				   @foreach($groups as $group)
				  <option value="{{ $group->id }}">{{ $group->name }}</option>
				   @endforeach
				   
			  </select>
			</div>		 
			</div>
			
				   </div> <!-- End Col md 3 --> 

				   <div class="col-md-3">
	  
					<div class="form-group">
				  <h5>Subject <span class="text-danger"> </span></h5>
				  <div class="controls">
			   <select name="assign_subject_id" id="assign_subject_id"  required="" class="form-control">
					  <option  selected="" >Select Subject</option>
						
					   
				  </select>
				</div>		 
				</div>
				
					   </div> <!-- End Col md 3 --> 
			   <div class="col-md-3">
	  
				<div class="form-group">
			  <h5>Shift <span class="text-danger"> </span></h5>
			  <div class="controls">
		   <select name="shift_id" id="shift_id"  required="" class="form-control">
				  <option value="" selected="" disabled="">Select Shift</option>
				   @foreach($shifts as $shift)
				  <option value="{{ $shift->id }}">{{ $shift->name }}</option>
				   @endforeach
				   
			  </select>
			</div>		 
			</div>
			
				   </div> <!-- End Col md 3 --> 
	  
	  
			   
 		


<div class="col-md-3">

 		 <div class="form-group">
		<h5>Exam Type <span class="text-danger"> </span></h5>
		<div class="controls">
 <select name="exam_type_id" id="exam_type_id"  required="" class="form-control">
			<option value="" selected="" disabled="">Select Class</option>
			 @foreach($exam_type as $exam)
			<option value="{{ $exam->id }}">{{ $exam->name }}</option>
		 	@endforeach
			 
		</select>
	  </div>		 
	  </div>
	  
 			</div> <!-- End Col md 3 --> 

 


 			<div class="col-md-3" style="padding-top: 25px;"  >

  <input type="submit" class="btn btn-rounded btn-primary" value="Search">

	  
 			</div> <!-- End Col md 3 --> 		
			</div><!--  end row --> 

 

		</form> 

			       
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>

 
<!--   // for get Student Subject  -->

<script type="text/javascript">
	$(function(){
	  $(document).on('change','#class_id',function(){
		$(document).on('change','#group_id',function(){
		  var class_id = $('#class_id').val();
		  var group_id = $('#group_id').val();
		$.ajax({
		  url:"{{ route('marks.getsubject') }}",
		  type:"GET",
		  // data:{class_id:class_id},
		  data:{'class_id':class_id,'group_id':group_id},
		  success:function(data){
			var html = '<option value="">Select Subject</option>';
			$.each( data, function(key, v) {
			  html += '<option value="'+v.assigned_subject.id+'">'+v.assigned_subject.name+'</option>';
			});
			$('#assign_subject_id').html(html);
		  }
		});
		})
	  });
	});
  </script>
  
  {{-- For get student shift --}}
  <script type="text/javascript">
		$(function(){
		$(document).on('change','#assign_subject_id',function(){
		  
			var subject_id = $('#assign_subject_id').val();
		  $.ajax({
			url:"{{ route('student.attendance.getshift') }}",
			type:"GET",
			// data:{class_id:class_id},
			data:{'subject_id':subject_id},
			success:function(data){
			  var html = '<option value="">Select Shift</option>';
			  $.each( data, function(key, v) {
				html += '<option value="'+v.school_shift.id+'">'+v.school_shift.name+'</option>';
			   
			  });
			  $('#shift_id').html(html);
			}
		  });
		  })
		
	  });
  </script>

<script type="text/javascript">
  $(document).on('click','#search',function(){
    var year_id = $('#year_id').val();
    var class_id = $('#class_id').val();
    var group_id = $('#group_id').val();
    var shift_id = $('#shift_id').val();
    var assign_subject_id = $('#assign_subject_id').val();
    var exam_type_id = $('#exam_type_id').val();
     $.ajax({
      url: "{{ route('student.marks.getstudents')}}",
      type: "GET",
      data: {'year_id':year_id,'class_id':class_id,'shift_id':shift_id,'group_id':group_id},
      success: function (data) {
        $('#marks-entry').removeClass('d-none');
        var html = '';
        $.each( data, function(key, v){
          html +=
          '<tr>'+
          '<td>'+v.student.id_no+'<input type="hidden" name="student_id[]" value="'+v.student.id+'"> <input type="hidden" name="id_no[]" value="'+v.student.id_no+'"> </td>'+
          '<td>'+v.student.name+'</td>'+
         
          '<td>'+v.student.fname+'</td>'+
          '<td>'+v.student.gender+'</td>'+
          '<td><input type="text" class="form-control form-control-sm" name="marks[]"></td>'+
          '</tr>';
        });
        html = $('#marks-entry-tr').html(html);
      }
    });
  });

</script>
 


@endsection
