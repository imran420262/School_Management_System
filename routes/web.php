<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\Setup\StudentClassController;
use App\Http\Controllers\Backend\Setup\StudentYearController;
use App\Http\Controllers\Backend\Setup\StudentGroupController;
use App\Http\Controllers\Backend\Setup\StudentShiftController;
use App\Http\Controllers\Backend\Setup\FeeCategoryController;
use App\Http\Controllers\Backend\Setup\FeeAmountController;
use App\Http\Controllers\Backend\Setup\ExamTypeController;
use App\Http\Controllers\Backend\Setup\SchoolSubjectController;
use App\Http\Controllers\Backend\Setup\AssignSubjectController;
use App\Http\Controllers\Backend\Setup\AssignTeacherSubjectController;
use App\Http\Controllers\Backend\Setup\DesignationController;
use App\Http\Controllers\Backend\Setup\SchoolDetailsController;
use App\Http\Controllers\Backend\Student\StudentRegController;
use App\Http\Controllers\Backend\Student\StudentRollController;
use App\Http\Controllers\Backend\Student\RegistrationFeeController;
use App\Http\Controllers\Backend\Student\MonthlyFeeController;
use App\Http\Controllers\Backend\Student\ExamFeeController;
use App\Http\Controllers\Backend\Student\StudentAttendanceController;
use App\Http\Controllers\Backend\Employee\EmployeeRegController;
use App\Http\Controllers\Backend\Employee\EmployeeSalaryController;
use App\Http\Controllers\Backend\Employee\EmployeeLeaveController;
use App\Http\Controllers\Backend\Employee\EmployeeAttendanceController;
use App\Http\Controllers\Backend\Employee\MonthlySalaryController;
use App\Http\Controllers\Backend\Marks\MarksController;
use App\Http\Controllers\Backend\DefaultController;
use App\Http\Controllers\Backend\Marks\GradeController;
use App\Http\Controllers\Backend\Account\StudentFeeController;
use App\Http\Controllers\Backend\Account\AccountSalaryController;
use App\Http\Controllers\Backend\Account\OtherCostController;
use App\Http\Controllers\Backend\Report\ProfiteController;
use App\Http\Controllers\Backend\Report\MarkSheetController;
use App\Http\Controllers\Backend\Report\AttenReportController;
use App\Http\Controllers\Backend\Report\ResultReportController;
use App\Http\Controllers\Backend\site\SiteManagementController;
use App\Http\Controllers\Backend\Student\ExamScheduleController;
use App\Http\Controllers\ThemeSwitchController;
use App\Http\Controllers\PublicMessageController;
use App\Http\Controllers\Backend\Account\StudentFeeControllerViewStudentFee;
use App\Http\Controllers\Backend\Student\StudentPortal;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('auth.login');
    return view('frontend.home');
})->name('site');


Route::get('/class', function () {
    return view('frontend.class');
})->name('class');

Route::get('/teacher', function () {
    return view('frontend.teacher');
})->name('teacher');

Route::get('event', function() {
    return view('frontend.event');
})->name('event');
Route::get('notice', function() {
    return view('frontend.notice');
})->name('notice');

Route::get('/gallery',[SiteManagementController::class,'ViewGallery'])->name('gallery.view');
Route::get('/class/details/{class_details}{shift}/',[SiteManagementController::class,'ClassDetails'])->name('class.details');
Route::get('/event/details/{id}',[SiteManagementController::class,'EventDetails'])->name('event.details');
Route::get('/teachers/details/{id}',[SiteManagementController::class,'TeacherDetails'])->name('teacher.details');
Route::get('/notice/details/{id}',[SiteManagementController::class,'NoticeDetails'])->name('notice.details');
Route::get('/contact',[PublicMessageController::class,'ContactUs'])->name('contact');
Route::post('/contact/message',[PublicMessageController::class,'ContactMessage'])->name('contact.message');
Route::get('/publicmsg/view',[PublicMessageController::class,'PublicMessageView'])->name('public.message.view');
Route::get('/publicmsg/read/{id}',[PublicMessageController::class,'PublicMessageRead'])->name('public.message.read');
Route::get('/admission', [SiteManagementController::class, 'AdmissionForm'])->name('admission.form');
Route::post('/admission/store', [SiteManagementController::class, 'AdmissionStore'])->name('admission.store');


// Route::get('/class', [DefaultController::class, 'FrontendClass'])->name('class');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');
Route::get('theme/switchtheme', [ThemeSwitchController::class, 'SwitchTheme'])->name('theme.switch');

//If try to access any url this will go to the login page
Route::group(['middleware' => 'auth'],function(){

    Route::get('/admission/view',[SiteManagementController::class,'AdmissionView'])->name('admission.view');
    Route::get('/admission/approve/{id}',[SiteManagementController::class,'AdmissionApprove'])->name('admission.approve');
    Route::get('/admission/reject/{id}',[SiteManagementController::class,'AdmissionReject'])->name('admission.reject');
    Route::post('/admission/student/store', [StudentRegController::class, 'StudentAdmissionRegStore'])->name('store.admission.student.registration');
    // Route::get('/publicmsg/read/{id}',[PublicMessageController::class,'PublicMessageRead'])->name('public.message.read');

    // Site Management
    Route::prefix('site')->group(function() {
        
        Route::get('/event/view', [SiteManagementController::class, 'ViewEvent'])->name('site.event.view');
        Route::get('/event/add', [SiteManagementController::class, 'AddEvent'])->name('site.event.add');
        Route::post('/event/store', [SiteManagementController::class, 'StoreEvent'])->name('site.event.store');
        Route::get('/event/delete/{id}', [SiteManagementController::class, 'DeleteEvent'])->name('site.event.delete');
        Route::get('/event/edit/{id}', [SiteManagementController::class, 'EditEvent'])->name('site.event.edit');
        Route::post('/event/update{id}', [SiteManagementController::class, 'UpdateEvent'])->name('site.event.update');
        
        Route::get('/notice/view', [SiteManagementController::class, 'ViewNotice'])->name('site.notice.view');
        Route::get('/notice/add', [SiteManagementController::class, 'AddNotice'])->name('site.notice.add');
        Route::post('noticet/store', [SiteManagementController::class, 'StoreNotice'])->name('site.notice.store');
        Route::get('/notice/delete/{id}', [SiteManagementController::class, 'DeleteNotice'])->name('site.notice.delete');
        Route::get('/notice/edit/{id}', [SiteManagementController::class, 'EditNotice'])->name('site.notice.edit');
        Route::post('/notice/update{id}', [SiteManagementController::class, 'UpdateNotice'])->name('site.notice.update');
        
        

    });

   /// Exam Management Routes  
   Route::prefix('exam')->group(function(){

        Route::get('/view', [ExamScheduleController::class, 'ViewExamDate'])->name('exam.date.view');
        Route::get('/add', [ExamScheduleController::class, 'AddExamDate'])->name('exam.date.add');
        Route::post('/store', [ExamScheduleController::class, 'StoreExamDate'])->name('exam.date.store');
        Route::get('/delete{id}', [ExamScheduleController::class, 'DeleteExamDate'])->name('exam.date.delete');
        // Route::get('/edit{id}', [ExamScheduleController::class, 'EditExamDate'])->name('exam.date.edit');
        // Route::post('marks/entry/store', [MarksController::class, 'MarksStore'])->name('marks.entry.store'); 
    }); 

    
    // User Management All Routes
    Route::prefix('users')->group(function() {
        
        Route::get('/view', [UserController::class, 'UserView'])->name('user.view');
        Route::get('/add', [UserController::class, 'UserAdd'])->name('users.add');
        Route::post('/store', [UserController::class, 'UserStore'])->name('user.store');
        Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('users.edit');
        Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('users.update');
        Route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('users.delete');
        

    });

    //Routes For User Profile and Change password
    Route::prefix('profiles')->group(function() {
        
        Route::get('/view', [ProfileController::class, 'ProfileView'])->name('profile.view');
        Route::get('/edit', [ProfileController::class, 'ProfileEdit'])->name('profile.edit');
        Route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');
        Route::get('/password/view', [ProfileController::class, 'PasswordView'])->name('password.view');
        Route::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');
        
    });

    //Routes for Student Portal

    Route::prefix('studentportal/')->group(function() {
        Route::get('financialinfo',[StudentPortal::class,'FinancialInfo'])->name('student.financial.info');
        Route::get('resultinfo/view',[StudentPortal::class,'ResultInfoView'])->name('student.result.info.view');
        Route::get('resultinfo',[StudentPortal::class,'ResultInfo'])->name('student.result.info');
        Route::post('downloadresult',[StudentPortal::class,'ResultDownload'])->name('student.result.download');
    });

    //Routes For Student class
    Route::prefix('setups')->group(function() {
        
        //Student Class Routes
        Route::get('student/class/view', [StudentClassController::class, 'ViewStudent'])->name('student.class.view');
        Route::get('student/class/add', [StudentClassController::class, 'StudentClassAdd'])->name('student.class.add');
        Route::post('student/class/store', [StudentClassController::class, 'StudentClassStore'])->name('store.student.class');
        Route::get('student/class/edit/{id}', [StudentClassController::class, 'StudentClassEdit'])->name('student.class.edit');
        Route::post('student/class/update/{id}', [StudentClassController::class, 'StudentClassUpdate'])->name('update.student.class');
        Route::get('student/class/delete/{id}', [StudentClassController::class, 'StudentClassDelete'])->name('student.class.delete');
        
        //Student Year Routes
        Route::get('student/year/view',[StudentYearController::class, 'ViewYear'])->name('student.year.view');
        Route::get('student/year/add',[StudentYearController::class, 'StudentYearAdd'])->name('student.year.add');
        Route::post('student/year/Store',[StudentYearController::class, 'StudentYearStore'])->name('store.student.year');
        Route::get('student/year/edit/{id}', [StudentYearController::class, 'StudentYearEdit'])->name('student.year.edit');
        Route::post('student/year/update/{id}', [StudentYearController::class, 'StudentYearUpdate'])->name('update.student.year');
        Route::get('student/year/delete/{id}', [StudentYearController::class, 'StudentYearDelete'])->name('student.year.delete');

        //Student Group Routes
        Route::get('student/group/view', [StudentGroupController::class, 'ViewGroup'])->name('student.group.view');
        Route::get('student/group/add', [StudentGroupController::class, 'StudentGroupAdd'])->name('student.group.add');
        Route::post('student/group/store', [StudentGroupController::class, 'StudentGroupStore'])->name('store.student.group');
        Route::get('student/group/edit/{id}', [StudentGroupController::class, 'StudentGroupEdit'])->name('student.group.edit');
        Route::post('student/group/update/{id}', [StudentGroupController::class, 'StudentGroupUpdate'])->name('update.student.group');
        Route::get('student/group/delete/{id}', [StudentGroupController::class, 'StudentGroupDelete'])->name('student.group.delete');

        // Student Shift Routes 
        Route::get('student/shift/view', [StudentShiftController::class, 'ViewShift'])->name('student.shift.view');
        Route::get('student/shift/add', [StudentShiftController::class, 'StudentShiftAdd'])->name('student.shift.add');
        Route::post('student/shift/store', [StudentShiftController::class, 'StudentShiftStore'])->name('store.student.shift');
        Route::get('student/shift/edit/{id}', [StudentShiftController::class, 'StudentShiftEdit'])->name('student.shift.edit');
        Route::post('student/shift/update/{id}', [StudentShiftController::class, 'StudentShiftUpdate'])->name('update.student.shift');
        Route::get('student/shift/delete/{id}', [StudentShiftController::class, 'StudentShiftDelete'])->name('student.shift.delete');

        // Fee Category Routes 
        Route::get('fee/category/view', [FeeCategoryController::class, 'ViewFeeCat'])->name('fee.category.view');
        Route::get('fee/category/add', [FeeCategoryController::class, 'FeeCatAdd'])->name('fee.category.add');
        Route::post('fee/category/store', [FeeCategoryController::class, 'FeeCatStore'])->name('store.fee.category');
        Route::get('fee/category/edit/{id}', [FeeCategoryController::class, 'FeeCatEdit'])->name('fee.category.edit');
        Route::post('fee/category/update/{id}', [FeeCategoryController::class, 'FeeCategoryUpdate'])->name('update.fee.category');
        Route::get('fee/category/delete/{id}', [FeeCategoryController::class, 'FeeCategoryDelete'])->name('fee.category.delete');

        // Fee Category Amount Routes 
        Route::get('fee/amount/view', [FeeAmountController::class, 'ViewFeeAmount'])->name('fee.amount.view');
        Route::get('fee/amount/add', [FeeAmountController::class, 'AddFeeAmount'])->name('fee.amount.add');
        Route::post('fee/amount/store', [FeeAmountController::class, 'StoreFeeAmount'])->name('store.fee.amount');
        Route::get('fee/amount/edit/{fee_category_id}', [FeeAmountController::class, 'EditFeeAmount'])->name('fee.amount.edit');
        Route::post('fee/amount/update/{fee_category_id}', [FeeAmountController::class, 'UpdateFeeAmount'])->name('update.fee.amount');
        Route::get('fee/amount/details/{fee_category_id}', [FeeAmountController::class, 'DetailsFeeAmount'])->name('fee.amount.details');

        // Exam Type Routes 
        Route::get('exam/type/view', [ExamTypeController::class, 'ViewExamType'])->name('exam.type.view');
        Route::get('exam/type/add', [ExamTypeController::class, 'ExamTypeAdd'])->name('exam.type.add');
        Route::post('exam/type/store', [ExamTypeController::class, 'ExamTypeStore'])->name('store.exam.type');
        Route::get('exam/type/edit/{id}', [ExamTypeController::class, 'ExamTypeEdit'])->name('exam.type.edit');
        Route::post('exam/type/update/{id}', [ExamTypeController::class, 'ExamTypeUpdate'])->name('update.exam.type');
        Route::get('exam/type/delete/{id}', [ExamTypeController::class, 'ExamTypeDelete'])->name('exam.type.delete');

        // School Subject All Routes 
        Route::get('school/subject/view', [SchoolSubjectController::class, 'ViewSubject'])->name('school.subject.view');
        Route::get('school/subject/add', [SchoolSubjectController::class, 'SubjectAdd'])->name('school.subject.add');
        Route::post('school/subject/store', [SchoolSubjectController::class, 'SubjectStore'])->name('store.school.subject');
        Route::get('school/subject/edit/{id}', [SchoolSubjectController::class, 'SubjectEdit'])->name('school.subject.edit');
        Route::post('school/subject/update/{id}', [SchoolSubjectController::class, 'SubjectUpdate'])->name('update.school.subject');
        Route::get('school/subject/delete/{id}', [SchoolSubjectController::class, 'SubjectDelete'])->name('school.subject.delete');

        // Assign Subject Routes 
        Route::get('assign/subject/view', [AssignSubjectController::class, 'ViewAssignSubject'])->name('assign.subject.view');
        Route::get('assign/subject/add', [AssignSubjectController::class, 'AddAssignSubject'])->name('assign.subject.add');
        Route::post('assign/subject/store', [AssignSubjectController::class, 'StoreAssignSubject'])->name('store.assign.subject');
        Route::get('assign/subject/edit/{class_id}', [AssignSubjectController::class, 'EditAssignSubject'])->name('assign.subject.edit');
        Route::post('assign/subject/update/{class_id}', [AssignSubjectController::class, 'UpdateAssignSubject'])->name('update.assign.subject');
        Route::get('assign/subject/details/{class_id}', [AssignSubjectController::class, 'DetailsAssignSubject'])->name('assign.subject.details');

        // Designation All Routes 
        Route::get('designation/view', [DesignationController::class, 'ViewDesignation'])->name('designation.view');
        Route::get('designation/add', [DesignationController::class, 'DesignationAdd'])->name('designation.add');
        Route::post('designation/store', [DesignationController::class, 'DesignationStore'])->name('store.designation');
        Route::get('designation/edit/{id}', [DesignationController::class, 'DesignationEdit'])->name('designation.edit');
        Route::post('designation/update/{id}', [DesignationController::class, 'DesignationUpdate'])->name('update.designation');
        Route::get('designation/delete/{id}', [DesignationController::class, 'DesignationDelete'])->name('designation.delete');

        // Assign subject to teacher
        Route::get('assign/teachersubject/view', [AssignTeacherSubjectController::class, 'ViewAssignTeacherSubject'])->name('assign.teachersubject.view');
        Route::get('assign/teachersubject/add', [AssignTeacherSubjectController::class, 'AddAssignTeacherSubject'])->name('assign.teachersubject.add');
        Route::post('assign/teachersubject/store', [AssignTeacherSubjectController::class, 'StoreAssignTeacherSubject'])->name('store.assign.teachersubject');
        // Route::get('assign/teachersubject/edit/{class_id}', [AssignTeacherSubjectController::class, 'EditAssignTeacherSubject'])->name('assign.teachersubject.edit');
        // Route::post('assign/subject/update/{class_id}', [AssignSubjectController::class, 'UpdateAssignSubject'])->name('update.assign.subject');
        Route::get('assign/teachersubject/delete/{subject_id}/{shift_id}', [AssignTeacherSubjectController::class, 'DeleteAssignTeacherSubject'])->name('assign.teachersubject.delete');
    
        //school Details
        Route::get('school/details/view',[SchoolDetailsController::class,'ViewDetails'])->name('school.details.view');
        Route::get('school/details/edit',[SchoolDetailsController::class,'EditDetails'])->name('school.details.edit');
        Route::post('school/details/store',[SchoolDetailsController::class,'StoreDetails'])->name('school.details.store');
        Route::get('school/details/sliderimage/add',[SchoolDetailsController::class,'SliderImageAdd'])->name('school.details.sliderimage.add');
        Route::get('school/details/galleryimage/add',[SchoolDetailsController::class,'GalleryImageAdd'])->name('gallery.image.add');
        Route::get('school/details/galleryimage/view',[SchoolDetailsController::class,'GalleryView'])->name('gallery.image.view');
        Route::post('school/details/galleryimage/store',[SchoolDetailsController::class,'GalleryImageStore'])->name('gallery.image.store');
        Route::post('school/details/galleryimage/update',[SchoolDetailsController::class,'GalleryImageUpdate'])->name('gallery.image.update');
        Route::get('school/details/galleryimage/delete/{id}',[SchoolDetailsController::class,'GalleryImageDelete'])->name('gallery.image.delete');
        Route::get('school/details/galleryimage/edit/{id}',[SchoolDetailsController::class,'GalleryImageEdit'])->name('gallery.image.edit');
        Route::post('school/details/sliderimage/store',[SchoolDetailsController::class,'SliderImageStore'])->name('school.details.sliderimage.store');
        Route::get('school/details/principalmsg/add',[SchoolDetailsController::class,'PrincipalMsgAdd'])->name('school.details.principalmsg.add');
        Route::post('school/details/principalmsg/store',[SchoolDetailsController::class,'PrincipalMsgStore'])->name('school.details.principalmsg.store');
    });

    /// Student Registration Routes  
    Route::prefix('students')->group(function(){

        Route::get('/reg/view', [StudentRegController::class, 'StudentRegView'])->name('student.registration.view');  
        Route::get('/reg/Add', [StudentRegController::class, 'StudentRegAdd'])->name('student.registration.add');
        Route::post('/reg/store', [StudentRegController::class, 'StudentRegStore'])->name('store.student.registration'); 
        Route::get('/year/class/wise', [StudentRegController::class, 'StudentClassYearWise'])->name('student.year.class.wise');
        Route::get('/reg/edit/{student_id}', [StudentRegController::class, 'StudentRegEdit'])->name('student.registration.edit');
        Route::post('/reg/update/{student_id}', [StudentRegController::class, 'StudentRegUpdate'])->name('update.student.registration');
        Route::get('/reg/promotion/{student_id}', [StudentRegController::class, 'StudentRegPromotion'])->name('student.registration.promotion');
        Route::post('/reg/update/promotion/{student_id}', [StudentRegController::class, 'StudentUpdatePromotion'])->name('promotion.student.registration');
        Route::get('/reg/details/{student_id}', [StudentRegController::class, 'StudentRegDetails'])->name('student.registration.details');
        
        // Student Roll Generate Routes 
        Route::get('/roll/generate/view', [StudentRollController::class, 'StudentRollView'])->name('roll.generate.view');
        Route::get('/reg/getstudents', [StudentRollController::class, 'GetStudents'])->name('student.registration.getstudents');
        Route::post('/roll/generate/store', [StudentRollController::class, 'StudentRollStore'])->name('roll.generate.store');
        
        // Student Attendance All Route
        Route::get('student/attendance/view', [StudentAttendanceController::class, 'AttendanceView'])->name('student.attendance.view');
        Route::post('attendance/student/add', [StudentAttendanceController::class, 'AttendanceAdd'])->name('student.attendance.add');
        Route::post('attendance/student/store', [StudentAttendanceController::class, 'AttendanceStore'])->name('store.student.attendance');
        Route::get('attendance/student/edit/{date}', [StudentAttendanceController::class, 'AttendanceEdit'])->name('student.attendance.edit');
        Route::get('attendance/student/details/{date}', [StudentAttendanceController::class, 'AttendanceDetails'])->name('student.attendance.details');
        Route::get('attendance/getshift', [StudentAttendanceController::class, 'GetShift'])->name('student.attendance.getshift');
        Route::post('attendance/report/viewpdf', [StudentAttendanceController::class, 'AttenReportView'])->name('student.attendance.report.viewpdf');
        Route::get('report/attendance/get', [StudentAttendanceController::class, 'AttenReportGet'])->name('student.report.attendance.get');



        // Registration Fee Routes 
        Route::get('/reg/fee/view', [RegistrationFeeController::class, 'RegFeeView'])->name('registration.fee.view');
        Route::get('/reg/fee/classwisedata', [RegistrationFeeController::class, 'RegFeeClassData'])->name('student.registration.fee.classwise.get');
        Route::get('/reg/fee/payslip', [RegistrationFeeController::class, 'RegFeePayslip'])->name('student.registration.fee.payslip');
        
        
        // Monthly Fee Routes 
        Route::get('/monthly/fee/view', [MonthlyFeeController::class, 'MonthlyFeeView'])->name('monthly.fee.view');
        Route::get('/monthly/fee/classwisedata', [MonthlyFeeController::class, 'MonthlyFeeClassData'])->name('student.monthly.fee.classwise.get');
        Route::get('/monthly/fee/payslip', [MonthlyFeeController::class, 'MonthlyFeePayslip'])->name('student.monthly.fee.payslip');
        
        // Exam Fee Routes 
        Route::get('/exam/fee/view', [ExamFeeController::class, 'ExamFeeView'])->name('exam.fee.view');
        Route::get('/exam/fee/classwisedata', [ExamFeeController::class, 'ExamFeeClassData'])->name('student.exam.fee.classwise.get');
        Route::get('/exam/fee/payslip', [ExamFeeController::class, 'ExamFeePayslip'])->name('student.exam.fee.payslip');
        
    }); 

    /// Employee Registration Routes
    Route::prefix('employees')->group(function(){

        Route::get('reg/employee/view', [EmployeeRegController::class, 'EmployeeView'])->name('employee.registration.view');
        Route::get('reg/employee/add', [EmployeeRegController::class, 'EmployeeAdd'])->name('employee.registration.add');
        Route::post('reg/employee/store', [EmployeeRegController::class, 'EmployeeStore'])->name('store.employee.registration'); 
        Route::get('reg/employee/edit/{id}', [EmployeeRegController::class, 'EmployeeEdit'])->name('employee.registration.edit');
        Route::post('reg/employee/update/{id}', [EmployeeRegController::class, 'EmployeeUpdate'])->name('update.employee.registration');
        Route::get('reg/employee/details/{id}', [EmployeeRegController::class, 'EmployeeDetails'])->name('employee.registration.details');
        Route::get('reg/employee/terminate/{id}', [EmployeeRegController::class, 'EmployeeTerminate'])->name('employee.registration.terminate');
        
        // Employee Salary All Routes 
        Route::get('salary/employee/view', [EmployeeSalaryController::class, 'SalaryView'])->name('employee.salary.view');
        Route::get('salary/employee/increment/{id}', [EmployeeSalaryController::class, 'SalaryIncrement'])->name('employee.salary.increment');
        Route::post('salary/employee/store/{id}', [EmployeeSalaryController::class, 'SalaryStore'])->name('update.increment.store');
        Route::get('salary/employee/details/{id}', [EmployeeSalaryController::class, 'SalaryDetails'])->name('employee.salary.details');
        
        
        // Employee Leave All Routes 
        Route::get('leave/employee/view', [EmployeeLeaveController::class, 'LeaveView'])->name('employee.leave.view');
        Route::get('leave/employee/add', [EmployeeLeaveController::class, 'LeaveAdd'])->name('employee.leave.add');
        Route::post('leave/employee/store', [EmployeeLeaveController::class, 'LeaveStore'])->name('store.employee.leave');
        Route::get('leave/employee/edit/{id}', [EmployeeLeaveController::class, 'LeaveEdit'])->name('employee.leave.edit');
        Route::post('leave/employee/update/{id}', [EmployeeLeaveController::class, 'LeaveUpdate'])->name('update.employee.leave');
        Route::get('leave/employee/delete/{id}', [EmployeeLeaveController::class, 'LeaveDelete'])->name('employee.leave.delete');
        Route::get('leave/employee/approve/{id}', [EmployeeLeaveController::class, 'LeaveApprove'])->name('employee.leave.approve');
        Route::get('leave/employee/rejecet/{id}', [EmployeeLeaveController::class, 'LeaveReject'])->name('employee.leave.reject');

        //Employee Leave Request Routes
        Route::get('leave/employee/request/add', [EmployeeLeaveController::class, 'LeaveRequestAdd'])->name('employee.leave.request.add');
        Route::get('leave/employee/request/view', [EmployeeLeaveController::class, 'LeaveRequestView'])->name('employee.leave.request.view');
    
        
        // Employee Attendance All Routes 
        Route::get('attendance/employee/view', [EmployeeAttendanceController::class, 'AttendanceView'])->name('employee.attendance.view');
        Route::get('attendance/employee/add', [EmployeeAttendanceController::class, 'AttendanceAdd'])->name('employee.attendance.add');
        Route::post('attendance/employee/store', [EmployeeAttendanceController::class, 'AttendanceStore'])->name('store.employee.attendance');
        Route::get('attendance/employee/edit/{date}', [EmployeeAttendanceController::class, 'AttendanceEdit'])->name('employee.attendance.edit');
        Route::get('attendance/employee/details/{date}', [EmployeeAttendanceController::class, 'AttendanceDetails'])->name('employee.attendance.details');
        
        
        // Employee Monthly Salary All Routes 
        Route::get('monthly/salary/view', [MonthlySalaryController::class, 'MonthlySalaryView'])->name('employee.monthly.salary');
        Route::get('monthly/salary/get', [MonthlySalaryController::class, 'MonthlySalaryGet'])->name('employee.monthly.salary.get');
        Route::get('monthly/salary/payslip/{employee_id}', [MonthlySalaryController::class, 'MonthlySalaryPayslip'])->name('employee.monthly.salary.payslip');
        
        
    }); 

    /// Marks Management Routes  
    Route::prefix('marks')->group(function(){

        Route::get('marks/entry/add', [MarksController::class, 'MarksAdd'])->name('marks.entry.add');
        Route::post('marks/entry/store', [MarksController::class, 'MarksStore'])->name('marks.entry.store'); 
        Route::get('marks/entry/edit', [MarksController::class, 'MarksEdit'])->name('marks.entry.edit'); 
        Route::get('marks/getstudents/edit', [MarksController::class, 'MarksEditGetStudents'])->name('student.edit.getstudents');
        Route::post('marks/entry/update', [MarksController::class, 'MarksUpdate'])->name('marks.entry.update');  
        
        // Marks Entry Grade 
        Route::get('marks/grade/view', [GradeController::class, 'MarksGradeView'])->name('marks.entry.grade');
        Route::get('marks/grade/add', [GradeController::class, 'MarksGradeAdd'])->name('marks.grade.add');
        Route::post('marks/grade/store', [GradeController::class, 'MarksGradeStore'])->name('store.marks.grade');
        Route::get('marks/grade/edit/{id}', [GradeController::class, 'MarksGradeEdit'])->name('marks.grade.edit');
        Route::post('marks/grade/update/{id}', [GradeController::class, 'MarksGradeUpdate'])->name('update.marks.grade');
        
    }); 
        
    Route::get('marks/getsubject', [DefaultController::class, 'GetSubject'])->name('marks.getsubject');
    Route::get('student/marks/getstudents', [DefaultController::class, 'GetStudents'])->name('student.marks.getstudents');
    Route::get('teacher/assignsubject/getteacher', [AssignTeacherSubjectController::class, 'GetTeacher'])->name('assignsubject.getteacher');


    /// Account Management Routes  
    Route::prefix('accounts')->group(function(){
        Route::get('student/fee/view', [StudentFeeController::class, 'StudentFeeView'])->name('student.fee.view'); //This route is for student fee history
        Route::get('student/fee/view2', [StudentFeeControllerViewStudentFee::class, 'StudentFeeView'])->name('student.fee.view2'); //This route is for student fee view
        Route::get('student/fee/add', [StudentFeeController::class, 'StudentFeeAdd'])->name('student.fee.add');
        Route::get('student/fee/getstudent', [StudentFeeController::class, 'StudentFeeGetStudent'])->name('account.fee.getstudent'); 
        Route::get('student/fee/view/getstudent', [StudentFeeControllerViewStudentFee::class, 'StudentFeeViewGetStudent'])->name('account.fee.view.getstudent'); 
        Route::post('student/fee/store', [StudentFeeController::class, 'StudentFeeStore'])->name('account.fee.store'); 
        
        // Employee Salary Routes
        Route::get('account/salary/view', [AccountSalaryController::class, 'AccountSalaryView'])->name('account.salary.view');
        Route::get('account/salary/add', [AccountSalaryController::class, 'AccountSalaryAdd'])->name('account.salary.add');
        Route::get('account/salary/getemployee', [AccountSalaryController::class, 'AccountSalaryGetEmployee'])->name('account.salary.getemployee');
        Route::post('account/salary/store', [AccountSalaryController::class, 'AccountSalaryStore'])->name('account.salary.store');
        
        // Other Cost Rotues 
        Route::get('other/cost/view', [OtherCostController::class, 'OtherCostView'])->name('other.cost.view');
        Route::get('other/cost/add', [OtherCostController::class, 'OtherCostAdd'])->name('other.cost.add');
        Route::post('other/cost/store', [OtherCostController::class, 'OtherCostStore'])->name('store.other.cost');
        Route::get('other/cost/edit/{id}', [OtherCostController::class, 'OtherCostEdit'])->name('edit.other.cost');
        Route::post('other/cost/update/{id}', [OtherCostController::class, 'OtherCostUpdate'])->name('update.other.cost');
        
    }); 

    /// Report Management All Routes  
    Route::prefix('reports')->group(function(){
        
        Route::get('monthly/profit/view', [ProfiteController::class, 'MonthlyProfitView'])->name('monthly.profit.view');
        Route::get('monthly/profit/datewais', [ProfiteController::class, 'MonthlyProfitDatewais'])->name('report.profit.datewais.get');
        Route::get('monthly/profit/pdf', [ProfiteController::class, 'MonthlyProfitPdf'])->name('report.profit.pdf');
        
        // MarkSheet Generate Routes 
        Route::get('marksheet/generate/view', [MarkSheetController::class, 'MarkSheetView'])->name('marksheet.generate.view');
        Route::get('marksheet/generate/get', [MarkSheetController::class, 'MarkSheetGet'])->name('report.marksheet.get');
        
        
        // Attendance Report Routes 
        Route::get('attendance/report/view', [AttenReportController::class, 'AttenReportView'])->name('attendance.report.view');
        Route::get('report/attendance/get', [AttenReportController::class, 'AttenReportGet'])->name('report.attendance.get');
        
        // Student Result Report Routes 
        Route::get('student/result/view', [ResultReportController::class, 'ResultView'])->name('student.result.view');
        Route::get('student/result/get', [ResultReportController::class, 'ResultGet'])->name('report.student.result.get');
        
        // Student ID Card Routes 
        Route::get('student/idcard/view', [ResultReportController::class, 'IdcardView'])->name('student.idcard.view');
        Route::get('student/idcard/get', [ResultReportController::class, 'IdcardGet'])->name('report.student.idcard.get');
        
    });

        
    
    

});//End of middlewire auth route