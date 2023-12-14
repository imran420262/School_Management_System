<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
    <table class="table">
        <tr>
            <td><h2>
                <?php $image_path = "/upload/".$school_details[0]['image']; ?>
                <img src="{{ public_path() . $image_path }}" width="100" height="100">
            </h2></td>
            <td><h2>{{ $school_details[0]['school_name'] }}</h2>
                <p> <b>Marks of {{ $allMarks['0']['exam_type']['name'] }}</b> </p>
            </td> 
        </tr>
    </table>
    <br> <br>
    {{-- <strong>Employee Name : </strong> {{ $EmployeeAttendance[0]['user']['name'] }}, <strong> ID No : </strong>{{ $EmployeeAttendance[0]['user']['id_no'] }}, <strong> Month : </strong> {{ $month }} --}}
    
    @php
        $assign_student = App\Models\AssignStudent::where('year_id',$allMarks['0']->year_id)->where('class_id',$allMarks['0']->class_id)->first();
    @endphp
    
    <strong>Name : </strong> {{ $allMarks['0']['student']['name'] }} <br>
    <strong> ID No : </strong>{{ $allMarks['0']['id_no'] }} <br>
    <strong> Roll : </strong> {{ $assign_student->roll }} <br>
    <strong> Class : </strong>{{ $allMarks['0']['student_class']['name'] }}<br>
    <strong> Session : </strong>{{ $allMarks['0']['year']['name'] }}<br>
    <strong> Exam Type: </strong> {{ $allMarks['0']['exam_type']['name'] }}
    <br> <br>
    <table id="customers" class="table">
        <thead>
            <tr>    
                <th scope="col"> <h4>SL</h4></th>
                <th scope="col"> <h4>Subject</h4></th>
                <th scope="col"> <h4>Marks</h4></th>
                <th scope="col"> <h4>Letter Grade</h4></th>
                <th scope="col"> <h4>Grade Point</h4></th>
            </tr>
        </thead>

        <tbody>
            @php
                $total_marks = 0;
                $total_point = 0;
            @endphp
            @foreach($allMarks as $key => $mark)
                @php
                $get_mark = $mark->marks;
                $total_marks = (float)$total_marks+(float)$get_mark;
                $total_subject = App\Models\StudentMarks::where('year_id',$mark->year_id)->where('class_id',$mark->class_id)->where('exam_type_id',$mark->exam_type_id)->where('student_id',$mark->student_id)->get()->count();
                @endphp
                <tr>
                    <td scope="row">{{ $key+1 }}</td>
                    <td scope="row">{{ $mark['assign_subject']['school_subject']['name'] }}</td>
                    {{-- <td class="text-center">{{ {{ $mark['assign_subject']['school_subject']['name'] }} }}</td> --}}
                    <td scope="row">{{ $get_mark }}</td>
                    @php
                    $grade_marks = App\Models\MarksGrade::where([['start_marks','<=', (int)$get_mark],['end_marks', '>=',(int)$get_mark ]])->first();
                    $grade_name = $grade_marks->grade_name;
                    $grade_point = number_format((float)$grade_marks->grade_point,2);
                    $total_point = (float)$total_point+(float)$grade_point;
                    @endphp
                    <td scope="row">{{ $grade_name }}</td>
                    <td scope="row">{{ $grade_point }}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="3"><strong style="padding-left: 30px;">Total Maks</strong></td>
                <td colspan="3"><strong style="padding-left: 38px;">{{ $total_marks }}</strong></td>
            </tr>
        </tbody>
    </table> <br><br>

    <table id="customers">
        @php
        $total_grade = 0;
        $point_for_letter_grade = (float)$total_point/(float)$total_subject;
        $total_grade = App\Models\MarksGrade::where([['start_point','<=',$point_for_letter_grade],['end_point','>=',$point_for_letter_grade]])->first();
        $grade_point_avg = (float)$total_point/(float)$total_subject;
        @endphp
        
        <tr>
            <td width="50%"><strong>Grade Point Average</strong></td>
            <td width="50%"> 
                @if($count_fail > 0)
                0.00
                @else
                {{number_format((float)$grade_point_avg,2)}}
                @endif
            </td>
        </tr>
        <tr>
            <td width="50%"><strong>Letter Grade </strong></td>
            <td width="50%"> 
                @if($count_fail > 0)
                F
                @else
                {{ $total_grade->grade_name }}
                @endif
            </td>
        </tr>
        <tr>
            <td width="50%">Total Marks with Fraction</td>
            <td width="50%"><strong>{{ $total_marks }}</strong></td>
        </tr>
    </table> <br><br>

    <table id="customers">
        <tbody>
            <tr>
              <td style="text-align: left;"><strong>Remrks:</strong>
                @if($count_fail > 0)
                Fail
                @else
                {{ $total_grade->remarks }}
                @endif
              </td>
            </tr>
          </tbody>
    </table>

    <br> <br>
    <i style="font-size: 10px; float: right;">Print Data : {{ date("d M Y") }}</i>
    <hr style="border: dashed 2px; width: 95%; color: #000000; margin-bottom: 50px">
</body>
</html>
