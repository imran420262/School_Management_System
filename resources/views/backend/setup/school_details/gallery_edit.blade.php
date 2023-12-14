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
                    <h4 class="box-title">Add Gallery Image</h4>			  
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="{{ route('gallery.image.update') }} " enctype="multipart/form-data">
                                @csrf
                                <div class="add_item">
                                    <div class="row">
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Choose Image<span class="text-danger">*</span></h5>
												<input type="file" name="image1" class="form-control" id="image1" > 
												<input type="text" name="g_id" hidden value="{{ $id }}" class="form-control" id="image1" > 

                                                <div class="controls">
                                                  
                                                </div>
                                            </div> <!-- // end form group -->
                                        </div> <!-- End col-md-3 --> 
                                        
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <img src="{{asset('upload/gallery/'.$gallery->name)}}" id="showImage1" src="" style="height: 100px; border: 1px solid #000000;">
                                                </div>
                                            </div> <!-- // end form group -->
                                        </div> <!-- End col-md-3 -->
                                    </div>
                                    
                                    <div class="box">
                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            {{-- <form> --}}
                                                <textarea name="description" class="textarea" placeholder=""
                                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $gallery->description }}</textarea>
                                            {{-- </form> --}}
                                        </div>
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


 {{-- <script src="js/pages/editor.js"></script> --}}
<script type="text/javascript">

	$(document).ready(function(){
		$('#image1').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage1').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
		
	});
</script>


@endsection
