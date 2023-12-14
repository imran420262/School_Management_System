<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            [
                'frontend.layouts.master',
                'frontend.contact_us',
                'frontend.home',
                'frontend.class',
                'frontend.teacher',
                'frontend.contact',
                'admin.index',
                'backend.employee.monthly_salary.monthly_salary_pdf',
                'backend.report.profit.profit_pdf',
                'backend.student.monthly_fee.monthly_fee_pdf',
                'backend.report.student_result.student_result_pdf',
                'backend.report.marksheet.marksheet_pdf',
                'backend.report.attend_report.attend_report_pdf',
                'frontend.event',
                'frontend.notice',
                'backend.employee.employee_reg.employee_details_pdf',
                'backend.report.attend_report_student.student_attend_report_pdf',
                'backend.student_portal.student_result_info',
                'backend.student_portal.student_result_info_pdf'
            ],
            'App\Http\ViewComposers\FrontendMasterComposer'
        );

        // view()->composer('frontend.home','App\Http\ViewComposers\FrontendMasterComposer');
    }
}
