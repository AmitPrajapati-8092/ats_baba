<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_job_seekers;
use App\countries;
use App\cities;
use App\states;
use App\tbl_post_jobs;
use App\Tbl_seeker_applied_for_job;

class jobseekersmanageController extends Controller
{
   public function index()
   {
   	$job_seekers_list=Tbl_job_seekers::all();

      // $data = Tbl_job_seekers::leftjoin('tbl_seeker_applied_for_job','tbl_seeker_applied_for_job.seeker_ID','=','tbl_job_seekers.ID')
      //                         ->leftjoin('tbl_post_jobs','tbl_post_jobs.ID','=','tbl_seeker_applied_for_job.job_ID')
      //                         ->select('tbl_job_seekers.dated','tbl_job_seekers.state','tbl_job_seekers.city','tbl_job_seekers.country','tbl_job_seekers.email'
      //                                  ,'tbl_job_seekers.cv_file','tbl_job_seekers.ID','tbl_seeker_applied_for_job.job_ID','tbl_post_jobs.job_title','tbl_post_jobs.job_code')
      //                         ->orderBy('tbl_job_seekers.ID', 'ASC')
      //                         ->where('tbl_seeker_applied_for_job.seeker_id',$id)
      //                         ->get()
      //                         ->toArray();        
      //                         return  $data;
   	return view('job_seekers')->with('job_seekers_list',$job_seekers_list);
   } 

   public function de($id=""){
      $d = Tbl_job_seekers::where('ID',$id)->delete();
      return redirect('admin/job_seekers_manage');
   }
   


   public function view_job(Request $request){


         $id = $request->id;
         $data = Tbl_seeker_applied_for_job::leftjoin('tbl_post_jobs','tbl_post_jobs.ID','=','tbl_seeker_applied_for_job.job_ID')
                                 ->select('tbl_seeker_applied_for_job.seeker_ID','tbl_seeker_applied_for_job.job_ID','tbl_post_jobs.job_code','tbl_post_jobs.job_title')
                                 ->orderBy('tbl_seeker_applied_for_job.seeker_ID', 'ASC')
                                 ->where('tbl_seeker_applied_for_job.seeker_id',$id)
                                 ->get()
                                 ->toArray();      
                              
                              return response()->json($data);
   }

   public function sts_change(Request $request){

      $id=$request->id;
      $status=$request->sts_change;
      // return $id;
      tbl_job_seekers::where('ID', $id)->update(array(
         'sts'=>$status
     )); 

      return redirect("admin/job_seekers_manage");
   }



   // edit_manage_jobseekers

   public function edit_candeate($id=""){

        $value['countries']=countries::get();
        $value['cities']=cities::get();
        $value['states']=states::get();
        $value['seekers']=Tbl_job_seekers::where('ID',$id)->get();
        
      //   return $value['seekers'];

      return view ('edit_manage_jobseekers')->with('value',$value);
   }

   public function update(Request $Request){


        $id=$Request->ID;
      //   $pay_rate=$Request->pay;
      //   $exploded_value = explode('-', $pay_rate);
      //   $value_one = $exploded_value[0];
      //   $value_two = $exploded_value[1];
        $city_op=$Request->city_op;
        $country=$Request->country;
        $state=$Request->state;
        $city=$Request->city;

        $toReturn_country=countries::where('country_id',$country)->first();
        $toReturn_state=states::where('state_id',$state)->first();
        $toReturn_city=cities::where('city_id',$city)->first();
      //   return $toReturn_country->country_name;
        if($city_op==""){

         Tbl_job_seekers::where('ID',$id)->update(array(
                'first_name'=>$Request->first_name,
                'middle_name'=>$Request->middle_name,
                'last_name'=>$Request->last_name,
                'email'=>$Request->email,
                'mobile'=>$Request->mobile,
                'gender'=>$Request->gender,
                'address_line_1'=>$Request->present,
                'address_line_2'=>$Request->permanent,
                'country'=>$toReturn_country->country_name,
                'state'=>$toReturn_state->state_name,
                'city'=>$toReturn_city->city_name,
                'dob'=>$Request->dob,
    
            ));
        }
        else{


         Tbl_job_seekers::where('ID',$id)->update(array(
               'first_name'=>$Request->first_name,
               'middle_name'=>$Request->middle_name,
               'last_name'=>$Request->last_name,
               'email'=>$Request->email,
               'mobile'=>$Request->mobile,
               'gender'=>$Request->gender,
               'address_line_1'=>$Request->present,
               'address_line_2'=>$Request->permanent,
               'country'=>$toReturn_country->country_name,
                'state'=>$toReturn_state->state_name,
                'city'=>$city_op,
                'dob'=>$Request->dob,
    
            ));

        }
        
       
        return redirect('admin/job_seekers_manage');
   }


   public function auto_login_seeker($id=""){
      $user_detail=Tbl_job_seekers::where('ID',$id)->first();
      // return $user_detail;
      $email_id =$user_detail->email;
    	$password =$request->password;
        $getUserDetails  = DB::table('user')->where('email',$email_id)->where('password',$password)->first();
        // print_r($getUserDetails);
        // exit;
        if($getUserDetails)
        {
            $email_assign    =$getUserDetails->email;
            $password_assign =$getUserDetails->password;
            $user_type=$getUserDetails->user_type;
            $user_id=$getUserDetails->user_id;
            if ($email_id==$email_assign && $password==$password_assign)
            {       
                $session_data = array(
                'id'   =>$getUserDetails->ID,
                'email'=>$getUserDetails->email,
                'full_name'=>$getUserDetails->full_name,
                'user_id'=>$getUserDetails->user_id,
                'type' =>$getUserDetails->user_type,
                'org_ID'=>$getUserDetails->org_ID
                );

                // session create
                Session::put($session_data);
                if($user_type=='seeker')
                {
                    return redirect('indexjobseeker');
                }
                elseif($user_type=='teammember')
                {
                    $toReturn=array();
                    $toReturn['team_member']=tbl_team_member::where('ID',Session::get('user_id'))->first();
                    $toReturn['is_team_leader']=tbl_team_member_type::where('team_leader_id',Session::get('user_id'))->first(); 
                    if(!empty($toReturn['is_team_leader']))
                    {
                        $list_teammember=tbl_team_member::where('team_member_type',$toReturn['is_team_leader']['type_ID'])->get()->toArray();
                        $toReturn['one_group_teammember_list']['id']=array();
                        $count=0;
                        foreach($list_teammember as $key=>$value)
                        {
                            $toReturn['one_group_teammember_list']['id'][$key]=$list_teammember[$key]['ID'];
                            $toReturn['one_group_teammember_list']['employer_id'][$key]=$list_teammember[$key]['employer_id'];
                            $toReturn['one_group_teammember_list']['company_id'][$key]=$list_teammember[$key]['company_id'];
                            $toReturn['one_group_teammember_list']['full_name'][$key]=$list_teammember[$key]['full_name'];
                            $count=$count+1;
                        }
                        $toReturn['one_group_teammember_list']['id'][$count]=@$toReturn['is_team_leader']['team_leader_id'];
                        $toReturn['user_permission']=Tbl_team_member_permission::where('team_member_id',$user_id)
                        ->leftjoin('tbl_module','tbl_team_member_permission.permission_value','=','tbl_module.module_id')
                        ->get()->toArray();
                        $session_data = array(
                        'id'   =>$getUserDetails->ID,
                        'email'=>$getUserDetails->email,
                        'full_name'=>$getUserDetails->full_name,
                        'user_id'=>$getUserDetails->user_id,
                        'type' =>$getUserDetails->user_type,
                        'org_ID'=>$getUserDetails->org_ID,
                        'user_permission'=>$toReturn['user_permission'],
                        'one_group_teammember_id'=>$toReturn['one_group_teammember_list']['id'],
                        'one_group_teammember_employer_id'=>$toReturn['one_group_teammember_list']['employer_id'],
                        'one_group_teammember_full_name'=>$toReturn['one_group_teammember_list']['full_name']
                        );
                        // // exit;  
                    }
                    else{
                    $toReturn['user_permission']=Tbl_team_member_permission::where('team_member_id',$user_id)
                    ->leftjoin('tbl_module','tbl_team_member_permission.permission_value','=','tbl_module.module_id')
                    ->get()->toArray();
                    $session_data = array(
                        'id'   =>$getUserDetails->ID,
                        'email'=>$getUserDetails->email,
                        'full_name'=>$getUserDetails->full_name,
                        'user_id'=>$getUserDetails->user_id,
                        'type' =>$getUserDetails->user_type,
                        'org_ID'=>$getUserDetails->org_ID,
                        'user_permission'=>$toReturn['user_permission']
                    );
                    }
                //    return $session_data;
                    Session::put($session_data);
                    Session::put("sessiondata",$session_data);
                    return redirect('employer/dashboard');
                }
                else
                {
                    return redirect('employer/dashboard');
                }        
            }
            else{
            	$error="NOT LOGIN !!!!";
            	return view('employee_admin')->with('error',$error);
            }
        
        }
        else{
            	$error="Email Id Not Found !!!!";
        	return view('employee_admin')->with('error',$error);
        }
   }
}
 