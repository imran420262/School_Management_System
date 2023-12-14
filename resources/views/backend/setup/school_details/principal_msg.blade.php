@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <section class="content">
            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Principal's Message</h4>			  
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{ route('school.details.principalmsg.store') }} " enctype="multipart/form-data">
                                @csrf
                                <div class="add_item">
                                    <div class="row">
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Add Image<span class="text-danger">*</span></h5>
												<input type="file" name="principal_image" class="form-control" id="principal_image" > 

                                                <div class="controls">
                                                  
                                                </div>
                                            </div> <!-- // end form group -->
                                        </div> <!-- End col-md-3 --> 
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <img id="showImage1" src="{{ url('upload/'.$pm[0]['photo']) }}" style="height: 100px; border: 1px solid #000000;">
                                                </div>
                                            </div> <!-- // end form group -->
                                        </div> <!-- End col-md-3 -->
                                    </div>

                                    <div class="row">							
									
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Message</h5>
                                                <div class="controls">
                                                    <textarea class="textarea" name="principal_message" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                        {{ $pm[0]['message'] }}
                                                    </textarea>
                                                </div>		 
                                            </div>
                                        </div> <!-- End Col md 4 -->
                                        
                                        
                                    </div> <!-- End 4TH Row -->
                                    
                                   
                                    
                                    
                                </div> <!-- end Row -->
                                
                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                                </div>
                            </form> 
                        </div> <!-- /.col -->
                    </div><!-- /.row -->
                </div> <!-- /.box-body -->
            </div> <!-- /.box -->
        </section>
    </div>
</div>



<script type="text/javascript">
	$(document).ready(function(){
		$('#principal_image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage1').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
		
		
	});
</script>


@endsection
