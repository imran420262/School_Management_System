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
                    <h4 class="box-title">Add Slider Image</h4>			  
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{ route('school.details.sliderimage.store') }} " enctype="multipart/form-data">
                                @csrf
                                <div class="add_item">
                                    <div class="row">
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Choose Slider Image 1<span class="text-danger">*</span></h5>
												<input type="file" name="image1" class="form-control" id="image1" > 

                                                <div class="controls">
                                                  
                                                </div>
                                            </div> <!-- // end form group -->
                                        </div> <!-- End col-md-3 --> 
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <img id="showImage1" src="{{ url('upload/slider_image/'.$slider_image1->name) }}" style="height: 100px; border: 1px solid #000000;">
                                                </div>
                                            </div> <!-- // end form group -->
                                        </div> <!-- End col-md-3 -->
                                    </div>
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Choose Slider Image 2<span class="text-danger">*</span></h5>
												<input type="file" name="image2" class="form-control" id="image2" > 

                                                <div class="controls">
                                                  
                                                </div>
                                            </div> <!-- // end form group -->
                                        </div> <!-- End col-md-3 --> 
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <img id="showImage2" src="{{ url('upload/slider_image/'.$slider_image2->name) }}" style="height: 100px; border: 1px solid #000000;">
                                                </div>
                                            </div> <!-- // end form group -->
                                        </div> <!-- End col-md-3 -->

                                    </div>
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Choose Slider Image 3<span class="text-danger">*</span></h5>
												<input type="file" name="image3" class="form-control" id="image3" > 

                                                <div class="controls">
                                                  
                                                </div>
                                            </div> <!-- // end form group -->
                                        </div> <!-- End col-md-3 --> 
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <img id="showImage3" src="{{ url('upload/slider_image/'.$slider_image3->name) }}" style="height: 100px; border: 1px solid #000000;">
                                                </div>
                                            </div> <!-- // end form group -->
                                        </div> <!-- End col-md-3 -->

                                    
                                    </div>
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Choose Slider Image 4<span class="text-danger">*</span></h5>
												<input type="file" name="image4" class="form-control" id="image4" > 

                                                <div class="controls">
                                                  
                                                </div>
                                            </div> <!-- // end form group -->
                                        </div> <!-- End col-md-3 --> 
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <img id="showImage4" src="{{ url('upload/slider_image/'.$slider_image4->name) }}" style="height: 100px; border: 1px solid #000000;">
                                                </div>
                                            </div> <!-- // end form group -->
                                        </div> <!-- End col-md-3 -->
                                    </div>
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Choose Slider Image 5<span class="text-danger">*</span></h5>
												<input type="file" name="image5" class="form-control" id="image5" > 

                                                <div class="controls">
                                                  
                                                </div>
                                            </div> <!-- // end form group -->
                                        </div> <!-- End col-md-3 --> 
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <img id="showImage5" src="{{ url('upload/slider_image/'.$slider_image5->name) }}" style="height: 100px; border: 1px solid #000000;">
                                                </div>
                                            </div> <!-- // end form group -->
                                        </div> <!-- End col-md-3 -->

                                
                                    </div>
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Choose Slider Image 6<span class="text-danger">*</span></h5>
												<input type="file" name="image6" class="form-control" id="image6" > 

                                                <div class="controls">
                                                  
                                                </div>
                                            </div> <!-- // end form group -->
                                        </div> <!-- End col-md-3 --> 
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <img id="showImage6" src="{{ url('upload/slider_image/'.$slider_image6->name) }}" style="height: 100px; border: 1px solid #000000;">
                                                </div>
                                            </div> <!-- // end form group -->
                                        </div> <!-- End col-md-3 -->
                                    </div>
                                    
                                    
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

{{-- <div style="visibility: hidden;">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
        <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
            <div class="form-row">
                <div class="col-md-3">
                    <div class="form-group">
                        <h5>Choose Slider Image<span class="text-danger">*</span></h5>
                        <input type="file" name="image" class="form-control" id="image" > 

                        <div class="controls">
                          
                        </div>
                    </div> 
                </div> 
                
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="controls">
                            <img id="showImage" src="" style="width: 100px; width: 100px; border: 1px solid #000000;">
                        </div>
                    </div> 
                </div> 

                <div class="col-md-2" style="padding-top: 25px;">
                    <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> </span>
                    <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i> </span>    		
                </div>		
            </div>  			
        </div>  		
    </div>  	
</div>


<script type="text/javascript">

    $(document).ready(function(){
        var counter = 0;
        $(document).on("click",".addeventmore",function(){
 			var whole_extra_item_add = $('#whole_extra_item_add').html();
 			$(this).closest(".add_item").append(whole_extra_item_add);
 			counter++;
 		});
 		$(document).on("click",'.removeeventmore',function(event){
 			$(this).closest(".delete_whole_extra_item_add").remove();
 			counter -= 1
 		});
 	});
 </script> --}}

<script type="text/javascript">
	$(document).ready(function(){
		$('#image1').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage1').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
		$('#image2').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage2').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
		$('#image3').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage3').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
		$('#image4').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage4').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
		$('#image5').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage5').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
		$('#image6').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage6').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
		
	});
</script>


@endsection
