<?php

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

//Login page 
Route::get('/','Login_Controller@index');
Route::post('login','Login_Controller@login_page');
Route::get('forget_password','Login_Controller@forget_password');
Route::post('email_link','Login_Controller@send_mail');
Route::get('email_red/{email}','Login_Controller@email_red_view');
Route::post('forgot','Login_Controller@forgot');
Route::get('logout','Login_Controller@session_out');

Route::get('forgetpassword','Login_Controller@forgetpassword_form');
Route::post('forgetemail','Login_Controller@send_email');

// JobSeeker Section routes definition
Route::get('indexjobseeker','Job_Seeker_Controller@index');
Route::get('jobseeker/my_account','Job_Seeker_Controller@manage_account');
Route::post('jobseeker/my_account/update','Job_Seeker_Controller@update_manage_account');

Route::post('jobseeker/change_pass/password_update','Job_Seeker_Controller@update_pass');
Route::post('jobseeker/edit_jobseeker/upload_photo','Job_Seeker_Controller@uploaded_image');
Route::post('jobseeker/add_skill/add','Job_Seeker_Controller@add');
Route::get('jobseeker/add_skill','Job_Seeker_Controller@show');
Route::get('jobseeker/my_jobs','Job_Seeker_Controller@my_jobs');

Route::get('jobseeker/add_info','Job_Seeker_Controller@add_info');
Route::get('jobseeker/search_jobs','Job_Seeker_Controller@search_jobs');

// Admin Dasahboard routes
Route::get('admindashboard','job_seeker_Controller@index1');
Route::post('admindashboard/addexp','job_seeker_Controller@addexp');
Route::post('admindashboard/addedu','job_seeker_Controller@addedu');
// Admin Dasahboard routes

//Super admin route definition
Route::get('admin','userloginController@loginPage');
Route::post('adminLogin','userloginController@adminLogin');
Route::get('admin/dashboard','userloginController@dashboard');
Route::get('admin/logout','userloginController@logout');
Route::get('admin/emp_or_comp','EmployerCompanyController@index');
Route::get('employer/status/update/{id}','EmployerCompanyController@updateStatus');
Route::get('employer/top_employer/update/{id}','EmployerCompanyController@top_employer');
Route::get('admin/job_seekers_manage','jobseekersmanageController@index');
Route::get('admin/page_management','CMSController@index');    
Route::post('admin/page_management/add','CMSController@add');
Route::get('admin/page_management/edit','CMSController@edit');
Route::get('admin/page_management/delete/{id}','CMSController@delete');
Route::get('cms/{pagehead}','CMSController@pagecontent');
Route::get('admin/invitejobseeker','Invite_jobseekerController@index');
Route::post('admin/invitejobseeker/add','Invite_jobseekerController@add');
Route::get('admin/inviteemployer','Invite_employerController@index');
Route::post('admin/inviteemployer/add','Invite_employerController@add');
Route::get('admin/institute','InstituteController@index');                   
Route::post('admin/institute/add','InstituteController@add_institute');      
Route::post('admin/institute/edit','InstituteController@edit_institute');        
Route::get('admin/institute/delete/{id}','InstituteController@delete_institute');    
Route::get('admin/salary','SalaryController@index'); 
Route::post('admin/salary/add','SalaryController@add'); 
Route::post('admin/salary/edit','SalaryController@edit_salary');
Route::get('admin/salary/delete/{id}','SalaryController@delete_salary');
Route::get('admin/qualification','QualificationController@index');
Route::post('admin/qualification/add','QualificationController@add_qualification');
Route::post('admin/qualification/edit','QualificationController@edit_qualification');
Route::get('admin/qualification/delete/{id}','QualificationController@delete_qualification');
Route::get('admin/ads','Ads_Management@index');
Route::post('admin/upda_ads','Ads_Management@update_ads');
Route::get('admin/countries','CountriesController@index');
Route::post('admin/countries/add','CountriesController@add_countries'); 
Route::post('admin/countries/edit','CountriesController@edit_countries'); 
Route::get('admin/countries/delete/{id}','CountriesController@delete_countries');
Route::get('admin/cities','CityController@index');
Route::post('admin/cities/add','CityController@add_cities');
Route::post('admin/cities/edit','CityController@edit_cities');
Route::get('admin/cities/delete/{id}','CityController@delete');
Route::get('admin/prohibited_keyword','ProhibitedController@index');        
Route::post('admin/prohibited_keyword/add','ProhibitedController@add');        
Route::post('admin/prohibited_keyword/edit','ProhibitedController@edit');       
Route::get('admin/prohibited_keyword/delete/{id}','ProhibitedController@delete'); 
Route::get('admin/manageskills','ManageSkillController@index');
Route::get('admin/team_members','TeamMemberController@index');       
Route::post('admin/team_members/add','TeamMemberController@add_teammembertype');        
Route::post('admin/team_members/edit','TeamMemberController@edit_teammembertype');        
Route::get('admin/team_members/delete/{id}','TeamMemberController@delete_teammembertype'); 
Route::get('admin/visa_type','VisaTypeController@index');          
Route::post('admin/visa_type/add','VisaTypeController@add_visa_type');              
Route::post('admin/visa_type/edit','VisaTypeController@edit_visa_type');          
Route::get('admin/visa_type/delete/{id}','VisaTypeController@delete_visa_type'); 
Route::get('admin/pay_umo','Pay_UMO_Controller@index');
Route::post('admin/pay_umo/add','Pay_UMO_Controller@add_pay_umo');
Route::post('admin/pay_umo/edit','Pay_UMO_Controller@edit_pay_umo');
Route::get('admin/pay_umo/delete/{id}','Pay_UMO_Controller@delete_pay_umo');
//Super admin route definition






//JobSeeker Section routes definition
Route::get('indexjobseeker','Job_Seeker_Controller@index');
Route::get('jobseeker/my_account','Job_Seeker_Controller@manage_account');
Route::post('jobseeker/my_account/update','Job_Seeker_Controller@update_manage_account');
Route::get('jobseeker/change_pass','Job_Seeker_Controller@change_pass');
Route::post('jobseeker/change_pass/password_update','Job_Seeker_Controller@update_pass');
Route::post('jobseeker/edit_jobseeker/upload_photo','Job_Seeker_Controller@uploaded_image');
Route::post('jobseeker/add_skill/add','Job_Seeker_Controller@add');
Route::get('jobseeker/add_skill','Job_Seeker_Controller@show');
Route::get('jobseeker/my_jobs','Job_Seeker_Controller@my_jobs');
Route::get('jobseeker/add_info','Job_Seeker_Controller@add_info');
Route::get('jobseeker/add_info/add','Job_Seeker_Controller@insert_additonal_info');
Route::get('jobseeker/search_jobs','Job_Seeker_Controller@search_jobs');
Route::post('jobseeker/dashboard/notes','job_seeker_Controller@notes'); 




// Route::get('emp','Employee_Dashboard_Controller@index');

// // Route::get('emp/admindashboard','Employee_Dashboard_Controller@my_resume');
Route::get('create_team_member',function() { return view('create_team_member'); });
Route::get('create_team_member_group',function() { return view('create_team_member_group'); });
Route::get('manage_team_members',function() { return view('manage_team_members'); });
Route::get('manage_team_members_group',function() { return view('manage_team_members_group'); });

Route::post('admindashboard/addexp','Job_Seeker_Controller@addexp');
Route::post('admindashboard/addedu','Job_Seeker_Controller@addedu');

// Admin Dasahboard routes

Route::get('notifications','NotificationController@show_notification');
Route::get('notification/details/{id}','NotificationController@details');


//New Register Jobpost.......................................................... 
Route::get('jobpostsignup','Post_Job_Controller@index');
Route::post('jobpostsignup/add','Post_Job_Controller@insert');
//New Register Jobseeker........................................................
Route::get('jobseekersignup','Seeker_Signup_Controller@index');
Route::post('jobseekersignup/add','Seeker_Signup_Controller@add');
Route::post('jobseeker/dashboard/notes','Job_Seeker_Controller@notes'); 


//Route::get('login','EmployerloginController@index');
//Route::post('login/emp','EmployerloginController@login');


Route::get('dashboard','dashboardController@index');


//Employer Section routes definition
Route::get ('employer/companyprofile','CompanyProfileController@index');
Route::get('employer/companyprofile/edit','CompanyProfileController@edit');
Route::post('employer/companyprofile/update','CompanyProfileController@update');
Route::get('employer/posted_companies','PostedCompaniesController@index');
Route::get('employer/posted_companies/add_form','PostedCompaniesController@add_form');
Route::post('employer/posted_companies/add','PostedCompaniesController@add');
Route::get('employer/posted_companies/edit/{id}','PostedCompaniesController@edit');
Route::post('employer/posted_companies/update','PostedCompaniesController@update');
Route::get('employer/posted_companies/delete/{id}','PostedCompaniesController@delete');
Route::get('employer/manages_team_members','EmployerManageTeamMemberController@index');
Route::get('employer/post_new_contacts','ContactController@index');
Route::post('employer/post_new_contacts/add','ContactController@add');
Route::get('employer/my_posted_contacts','ContactController@show');
Route::get('employer/my_posted_contacts/delete/{id}','ContactController@delete');
Route::post('employer/post_new_email_contact/add','ContactController@add_email_form');
Route::get('employer/post_new_email_contact/show','ContactController@show_email_form');
Route::get('employer/my_posted_contacts/delete_email/{id}','ContactController@delete_email');
Route::get('employer/my_posted_contacts/delete_email_list/{id}','ContactController@delete_email_list');
Route::post('employer/importContact','Import_Controller@import');
Route::get('employer/search_resume','Job_Employer_Controller@list');
Route::get('employer/search_resume/delete/{id}','Job_Employer_Controller@list_delete');
Route::get('employer/post_new_candidate','Job_Employer_Controller@show_form');
Route::post('employer/post_new_candidate/insert','Job_Employer_Controller@post_new_candidate');
Route::get('employer/dashboard','Job_Employer_Controller@dashboard');
Route::post('job_application/sts','Job_Employer_Controller@status');



Route::get('employer/Application','Job_Employer_Controller@application');
Route::get('employer/posted_jobs','Job_Employer_Controller@view_my_posted_job');
Route::get('employer/delete/{id}','Job_Employer_Controller@delete_employer');


Route::get('employer/post_new_job','Job_Employer_Controller@view_post_form');
Route::post('employer/post_new_job/post_job','Job_Employer_Controller@Add_to_post_job');
Route::get('employer/jobsdetails/{id}','Job_Employer_Controller@show_detail');
Route::get('employer/job/edit/{id}','Job_Employer_Controller@editjob');
Route::post('employer/post_job/update','Job_Employer_Controller@updatejob');
Route::get('employer/teammember','Job_Employer_Controller@showteam');
Route::post('employer/teammemberadd','Job_Employer_Controller@showteamadd');
Route::get('employer/teammember/add','Job_Employer_Controller@addteam');
Route::post('employer/teammember/addinsert','Job_Employer_Controller@addteaminsert'); 
Route::get('employer/manageteammember','Job_Employer_Controller@manageteam');
Route::get('employer/manageteammember/delete/{id}','Job_Employer_Controller@delete_teammember');
Route::get('employer/manageteammember/edit/{id}','Job_Employer_Controller@edit_teammember');
Route::post('employer/manageteammember/edit/add','Job_Employer_Controller@edit_teammember_add');
Route::get('employer/manageteammember/add','Job_Employer_Controller@manageteamadd');
Route::get('employer/manageteammember/add/delete/{id}','Job_Employer_Controller@delete_teammember_type');
Route::post('employer/manageteammember/add/edit','Job_Employer_Controller@manageteamaddedit');


//employeer Features for marketing
Route::get('employer/marketing','MarketingController@index');
Route::post('employer/market_mail','MarketingController@send_mail');
Route::get('employer/schedule','MarketingController@schedule_email');
Route::post('employer/mails','MarketingController@send_mail');
Route::post('employer/emailTemplate','MarketingController@add_template');
Route::get('employer/emailTemplate/edit/{id}','MarketingController@edit_template');
Route::post('employer/emailTemplate/updated','MarketingController@update_template');
Route::post('employer/marketing/addcontact','MarketingController@addcontact');
Route::get('employer/emailTemplate/delete/{id}','MarketingController@deletetemplate');
Route::get('employer/marketing/emaillistdelete/{id}','MarketingController@deleteemaillist');
Route::get('employer/marketing/contactdelete/{id}','MarketingController@deleteContact');
Route::get('notifications','NotificationController@show_notification');


// Jobsseeker Routes definition
Route::get('test',function()
{
	return view('employer_manage_team_members');
});

Route::get('jobseeker/dashboard','Job_Seeker_Controller@dashboard');


Route::get('employer/Application','Job_Employer_Controller@application');
Route::get('employer/posted_jobs','Job_Employer_Controller@view_my_posted_job');
Route::get('employer/post_new_job','Job_Employer_Controller@view_post_form');
Route::post('employer/post_new_job/post_job','Job_Employer_Controller@Add_to_post_job');
Route::get('employer/job/edit/{id}','Job_Employer_Controller@editjob');
Route::post('employer/post_job/update','Job_Employer_Controller@updatejob');


Route::get('employer/post_new_contacts','Job_Employer_Controller@index');
Route::post('employer/post_new_contacts/add','Job_Employer_Controller@add');
Route::get('employer/my_posted_contacts','Job_Employer_Controller@show');
Route::get('employer/my_posted_contacts/delete/{id}','Job_Employer_Controller@delete');
Route::post('employer/post_new_email_contact/add','Job_Employer_Controller@add_email_form');
Route::get('employer/post_new_email_contact/show','Job_Employer_Controller@show_email_form');
Route::get('employer/my_posted_contacts/delete_email/{id}','Job_Employer_Controller@delete_email');
Route::get('employer/my_posted_contacts/delete_email_list/{id}','Job_Employer_Controller@delete_email_list');
Route::post('employer/importContact','Import_Controller@import');

// Employer Section routes definition
Route::get('employer/teammember','Job_Employer_Controller@showteam');
Route::post('employer/teammemberadd','Job_Employer_Controller@showteamadd');
Route::get('employer/teammember/add','Job_Employer_Controller@addteam');
Route::post('employer/teammember/addinsert','Job_Employer_Controller@addteaminsert');

Route::get('employer/manageteammember','Job_Employer_Controller@manageteam');
Route::get('employer/manageteammember/delete/{id}','Job_Employer_Controller@delete_teammember');
Route::get('employer/manageteammember/edit/{id}','Job_Employer_Controller@edit_teammember');
Route::post('employer/manageteammember/edit/add','Job_Employer_Controller@edit_teammember_add');
Route::get('employer/manageteammember/add','Job_Employer_Controller@manageteamadd');
Route::get('employer/manageteammember/add/delete/{id}','Job_Employer_Controller@delete_teammember_type');
Route::post('employer/manageteammember/add/edit','Job_Employer_Controller@manageteamaddedit');
Route::get('employer/jobsdetails/{id}','Job_Employer_Controller@show_detail');
Route::get('employer/jobsdetails/{id}','JobDetailsController@show_detail');
Route::get('jobseeker/dashboard','Job_Seeker_Controller@dashboard');
Route::get('admin','userloginController@loginPage');
Route::post('adminLogin','userloginController@adminLogin');
Route::get('admin/dashboard','userloginController@dashboard');
Route::get('admin/logout','userloginController@logout');

Route::get('admin/cities','CityController@index');

Route::get('admin/qualification','QualificationController@index');
Route::post('admin/qualification/add','QualificationController@add_qualification');
Route::post('admin/qualification/edit','QualificationController@edit_qualification');
Route::get('admin/qualification/delete/{id}','QualificationController@delete_qualification');

Route::post('admin/cities/add','CityController@add_cities');
Route::post('admin/cities/edit','CityController@edit_cities');
Route::get('admin/cities/delete/{id}','CityController@delete');
Route::get('admin/countries','CountriesController@index');//for countries call
Route::post('admin/countries/add','CountriesController@add_countries'); 
Route::post('admin/countries/edit','CountriesController@edit_countries'); 
Route::get('admin/countries/delete/{id}','CountriesController@delete_countries'); 

Route::get('admin/salary','SalaryController@index'); 
Route::get('admin/salary/edit','SalaryController@edit_salary');
Route::get('admin/salary/delete/{id}','SalaryController@delete_salary');
Route::post('admin/salary/add','SalaryController@add'); 


Route::get('admin/institute','InstituteController@index');        //for institute call
Route::post('admin/institute/add','InstituteController@add_institute');        //for institute call
Route::post('admin/institute/edit','InstituteController@edit_institute');        //for institute call
Route::get('admin/institute/delete/{id}','InstituteController@delete_institute');        //for institute call

Route::get('admin/industries','IndustryController@index');         //for industries call
Route::get('admin/page_management','CMSController@index');               //For manages pages
Route::post('admin/page_management/add','CMSController@add');
Route::get('admin/page_management/edit','CMSController@edit');

                      //For manages pages
Route::get('admin/pay_umo','Pay_UMO_Controller@index');
Route::post('admin/pay_umo/add','Pay_UMO_Controller@add_pay_umo');
Route::post('admin/pay_umo/edit','Pay_UMO_Controller@edit_pay_umo');
Route::get('admin/pay_umo/delete/{id}','Pay_UMO_Controller@delete_pay_umo');

Route::get('admin/visa_type','VisaTypeController@index');              //for visa type  call
Route::post('admin/visa_type/add','VisaTypeController@add_visa_type');              //for visa type  call
Route::post('admin/visa_type/edit','VisaTypeController@edit_visa_type');              //for visa type  call
Route::get('admin/visa_type/delete/{id}','VisaTypeController@delete_visa_type');              //for visa type  call

Route::get('admin/industries','IndustryController@index');  

Route::get('admin/prohibited_keyword','ProhibitedController@index');        
Route::post('admin/prohibited_keyword/add','ProhibitedController@add');        
Route::post('admin/prohibited_keyword/edit','ProhibitedController@edit');       
Route::get('admin/prohibited_keyword/delete/{id}','ProhibitedController@delete'); 
Route::get('admin/page_management','CMSController@index');               //For manages pages
Route::post('admin/page_management/add','CMSController@add');
Route::get('admin/page_management/edit','CMSController@edit');
Route::get('admin/page_management/delete/{id}','CMSController@delete');
Route::get('cms/{pagehead}','CMSController@pagecontent');
Route::get('admin/jobseekersmanage','jobseekersmanageController@index');
Route::get('admin/invitejobseeker','Invite_jobseekerController@index');
Route::post('admin/invitejobseeker/add','Invite_jobseekerController@add');
Route::get('jobseekersignup','JobseekrSignupController@index');
Route::post('jobseekersignup/add','JobseekrSignupController@add');
Route::get('admin/empcompmanage','EmployerCompanyController@index');
Route::get('admin/manageskills','ManageSkillController@index');
Route::get('admin/inviteemployer','InviteEmployerController@index');
Route::post('admin/inviteemployer/add','InviteEmployerController@add');
Route::get('employer/marketing','MarketingController@index');
Route::post('employer/market_mail','MarketingController@send_mail');
Route::get('employer/schedule','MarketingController@schedule_email');


// Route::get('employer/team_member_account','MarketingController@team_member_account');




