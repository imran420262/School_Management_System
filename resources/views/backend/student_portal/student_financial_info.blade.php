@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
	<div class="container-full">		 
		<!-- Main content -->
		<section class="content">
			
			<div class="row">
				<div class="col-12">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Student Fee List </h3>
							{{-- <a href="{{ route('student.fee.add') }}" style="float: right;" class="btn btn-rounded btn-success mb-5"> Add / Edit Student Fee</a>			   --}}
						</div>
					
						<!-- /.box-header -->
						<div class="box-body">
							<!-- info row -->
							<div class="row invoice-info">
								<div class="col-md-6 invoice-col">
									<address>
										<strong class="text-blue font-size-24">{{ Auth::user()->name }}</strong><br>
										<strong class="d-inline">ID: </strong>{{ Auth::user()->id_no }}<br>
										<strong class="d-inline">Your Discount: </strong>{{ $discount }}%<br>
									</address>
								</div>
							

								<div class="col-md-6 invoice-col text-right">
									<address>
										<strong class="d-inline">Registration fee in taka:</strong> {{ $reg_fee }}<br>
										<strong class="d-inline">Exam fee in taka:</strong> {{ $exam_fee }}<br>
										<strong class="d-inline">Monthly fee in taka:</strong> {{ $monthly_fee }}<br>
										<strong class="d-inline">Monthly fee with discount in taka:</strong> {{ $discounted_monthly_fee }}<br>
										<strong class="d-inline">Total Monthly fee with discount in taka:</strong> {{ $total_monthly_fee }}
										{{-- <strong class="d-inline">Fuckin months:</strong> {{ $months }} --}}
									</address>
								</div>
							</div>

							@if ($total_due > 0)
							<div class="alert alert-danger">Your current due is {{ $total_due }}. Please pay the due, otherwise you will not be able to sit in the exam</div>
								
							@endif
			
							<div class="table-responsive">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th width="5%">SL</th>  
											<th>Payment Date</th> 
											<th>Fee Type</th>
											<th>Paid Amount</th>
											
				 
				 
										</tr>
									</thead>
									<tbody>
										@foreach($allData as $key => $value )
										@php
											// $fee = App\Models\FeeCategoryAmount::where('fee_category_id',$value['fee_category']['id'] )->where('class_id',$value['student_class']['id'])->first();
										@endphp
										<tr>
											<td>{{ $key+1 }}</td>
                                            <td>{{ $value->date }}</td>
											<td> {{ $value['fee_category']['name'] }} </td>	<!--Fee Type -->

                                            <td>{{ $value['amount'] }}</td>
                                          
											
										</tr>
										@endforeach
									</tbody>
									<tfoot></tfoot>
					  			</table>
							</div> <!-- End of table-responsive -->
						</div> <!-- End of box-body -->
			 		</div> <!-- End of box -->
				</div> <!-- End of col-12 -->
		  	</div> <!-- End of row -->
              
            <div class="row">
				<div class="col-12 text-right">
					{{-- <p class="lead"><b>Payment Due</b><span class="text-danger"> 14/08/2018 </span></p> --}}

					<div>
						<p><strong> Registragion Fee Paid:</strong> {{ 0 + $reg_fee_paid }} | <strong>Due: </strong>{{ 0 + $reg_fee_due }} </p>
						<p><strong>Total Monthly Fee Paid:</strong> {{ 0 + $monthly_fee_paid }} | <strong>Due: </strong>{{ 0 + $monthly_fee_due }}</p>
						<p><strong>Total Exam Fee Paid:</strong> {{ 0 + $exam_fee_paid }} | <strong>Due: </strong>{{ 0 + $exam_fee_due }} </p>
					</div>
					<div class="total-payment">
						<h3><b>Total Paid :</b> {{ $total_paid }} | <b>Total due: </b>{{ $total_due }}</h3>
						{{-- <h3><b>Total Due :</b> {{ $discount }}</h3>
						<h3><b>Total Due :</b> {{ $class }}</h3> --}}
					</div>

				</div> <!-- /.col -->
			</div> <!-- /.row -->

		</section> <!-- End of content -->	  
	</div><!-- End of container full -->
</div> <!-- End of content Wrapper -->
@endsection
