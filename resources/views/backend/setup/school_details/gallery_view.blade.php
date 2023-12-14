@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
	<div class="container-full">
		<!-- Content Header (Page header) -->
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">School Site Gallery</h3>
							<a href="{{ route('gallery.image.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add Photo</a>			  
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="table-responsive">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th width="5%">SL</th>  
											<th>Image</th> 
											<th>Caption</th> 
											<th width="25%">Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($gallery as $key => $g )
										<tr>
											<td>{{ $key+1 }}</td>
											<td>
												<img src="{{asset('upload/gallery/'.$g->name)}}" id="showImage1" src="" style="height: 80px; border: 1px solid #000000;">	
											</td>				 
											<td> {{ $g->description }}</td>				 
											<td>
												<a href="{{ route('gallery.image.edit',$g->id) }}" class="btn btn-info">Edit</a>
												<a href="{{ route('gallery.image.delete',$g->id) }}" class="btn btn-danger" id="delete">Delete</a>
											</td>
										</tr>
										@endforeach
									</tbody>
									<tfoot>
									</tfoot>
								</table>
							</div>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</section>
		<!-- /.content -->
	</div>
</div>
@endsection
