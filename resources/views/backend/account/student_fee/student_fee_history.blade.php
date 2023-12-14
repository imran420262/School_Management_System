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
							<div class="table-responsive">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th width="5%">SL</th>  
											<th>ID No</th> 
											<th>Name </th>
											<th>Year</th>
											<th>Class </th>
											<th>Fee Type</th>
											<th>Total Paid taka</th>
											<th>Total Due</th>
											<th>Last Paid Amount In Taka</th>
											<th>Last Paid Date</th> 
				 
				 
										</tr>
									</thead>
									<tbody>
										@foreach($allData as $key => $value )
										@php
											$fee = App\Models\FeeCategoryAmount::where('fee_category_id',$value['fee_category']['id'] )->where('class_id',$value['student_class']['id'])->first();
										@endphp
										<tr>
											<td>{{ $key+1 }}</td>
											<td> {{ $value['student']['id_no'] }}</td> <!-- ID No -->
											<td> {{ $value['student']['name'] }}</td>	<!-- Name -->
											<td> {{ $value['student_year']['name'] }}</td>	<!-- Year -->
											<td> {{ $value['student_class']['name'] }}</td>	 <!-- Class -->
											<td> {{ $value['fee_category']['name'] }} </td>	<!--Fee Type -->

											{{-- 1 = Registration Fee id --}}
											{{-- 2 = Monthly Fee id --}}
											{{-- 3 = Exam fee id --}}
											
											<!-- registration, monthly, exam total fee paid amount -->
											@if ($value['fee_category']['id'] == 1)
											<td> {{ $value['student']['total_registration_fee_paid'] }} </td>						
											@endif
											
											@if ($value['fee_category']['id'] == 2)
											<td> {{ $value['student']['total_monthly_fee_paid'] }} </td>						
											
											@endif
											
											@if ($value['fee_category']['id'] == 3)
											
											
											<td> {{ $value['student']['total_exam_fee_paid'] }} </td>						
											@endif
											<!--End of registration, monthly, exam total fee paid amount -->
											
											
											<!-- registration, monthly, exam due amount -->
											@php	

											//Monthly Due										
											if ($value['fee_category']['id'] == 2) {

												$discount = App\Models\AssignStudent::with(['discount'])->where('student_id',$value['student']['id'])->where('year_id',$value['student_year']['id'])->where('class_id',$value['student_class']['id'])->first();

												$regDate = strtotime($value['student']['join_date']);
												// $date2 = strtotime('2022-03-01');
												$date2 = strtotime(date('Y-m-d', time()));
												$months = 1;
												while (($regDate = strtotime('+1 MONTH', $regDate)) <= $date2){
													$months++;
												}


												$total_monthly_fee_paid = $value['student']['total_monthly_fee_paid'];
												
												$monthly_fee = 
												$orginalfee = $fee->amount;
												$discount = $discount->discount->discount;
												$discountablefee = $discount/100*$orginalfee;
												$finalfee = (int)$orginalfee-(int)$discountablefee; 
												
												$monthly_due = ((int)$finalfee*(int)$months)-(int)$total_monthly_fee_paid;


												echo '<td>'.$monthly_due.'</td>';
												// echo '<td>'.$months.'</td>';
												// echo '<td> '.strtotime($regDate).' </td>';						
											}

											//Registration Due
											if ($value['fee_category']['id'] == 1) {
												// $registration_fee = App\Models\FeeCategoryAmount::get();
												
												$total_registration_fee_paid = $value['student']['total_registration_fee_paid'];
												$registration_fee = $fee->amount;
												$registration_due = (int)$registration_fee-(int)$total_registration_fee_paid;
												echo '<td>'.$registration_due.'</td>';
											}

											//Exam Due
											if ($value['fee_category']['id'] == 3) {
												
												$examDate = App\Models\ExamSchedule::where('class_id',$value['student_class']['id'])->get();
											
												$examCount = 0;
												foreach ($examDate as $key => $date) {
													$examCount+=1;
												}

												$examfee = (int)$fee->amount;
												$total_exam_fee = $examfee*$examCount;
												$examDue = $total_exam_fee-(int)$value['student']['total_exam_fee_paid'];
											
												echo '<td>'.$examDue.'</td>';
												// echo '<td>'.$value['student']['total_exam_fee_paid'].'</td>';	
												
											}
				
											@endphp
											<!--End of registration, monthly, exam due amount -->
											
											{{-- <td>{{ date('d M y',strtotime($value['student']['join_date'])) }}</td>	 --}}

											<!-- Currently paid amount -->
											{{-- @if ($value->amount != "")
											<td> {{ $value->amount }}</td>												
											@else
											<td> 0</td>
											@endif --}}
											<!-- End of currently paid amount -->
											
											<td>{{ $value->amount }}</td>
											<td> {{ date('d M Y', strtotime($value->date))  }}</td>
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
		</section> <!-- End of content -->	  
	</div><!-- End of container full -->
</div> <!-- End of content Wrapper -->
@endsection
