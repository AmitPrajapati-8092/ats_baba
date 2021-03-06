<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbl_post_jobs;
use App\tbl_job_industries;
use App\Tbl_seeker_applied_for_job;
use App\Tbl_job_seekers;
use App\Tbl_forward_candidate;
use App\tbl_post_jobs_change_log;
use App\tbl_job_history;
use App\user;
use DB;
class JobDetailsController extends Controller
{
    public function __construct()
		{
			$this->middleware('mian_session');

		}
 public function show_detail($id ="")       
 {

    $toReturn['application']=Tbl_seeker_applied_for_job::where('job_ID',$id)->get()->toArray();
    $toReturn['Client_submittals']=Tbl_forward_candidate::where('job_id',$id)
    ->leftjoin('tbl_job_seekers as seeker','tbl_forward_candidate.job_id','=','seeker.ID')
    ->leftjoin('tbl_post_jobs as job','tbl_forward_candidate.job_id','=','job.ID')
    ->select('job.job_code as job_code','seeker.country as country','seeker.state as state','seeker.city as city','job.job_title as job_title','job.job_mode as job_type','job.required_skills as skills','tbl_forward_candidate.current_org as current_org','tbl_forward_candidate.fullname as fullname','tbl_forward_candidate.mobile as mobile','tbl_forward_candidate.email as email','tbl_forward_candidate.visa_status as visa_status','tbl_forward_candidate.qualification1 as qualification1','tbl_forward_candidate.forward_date as forward_date')
    ->get()->toArray();
    $toReturn['list_job_history']=tbl_job_history::where('job_id',$id)->get()->toArray();
    // $user_name=user::where('ID')->get();
    // return $toReturn['list_job_history'];
    // return $toReturn['application'][0]; 
    $results = array();
    $data= tbl_post_jobs::where('ID',$id)->first();
    // foreach ($data as $key => $value) {
    //   $d = $value;
      $matchrecord=DB::table('tbl_job_seekers')->where('skills','LIKE', '%'.$data->required_skills.'%')->orWhere('city', 'LIKE', '%'.$data->city.'%')->orWhere('visa_status', 'LIKE', '%'.$data->job_visa_status.'%')->get()->toArray();
      // $results[] =$d;
      // return $matchrecord;
      $results['seeker_details']=$matchrecord;
      foreach($matchrecord as $key=>$value)
      {
              $city_match=strnatcasecmp($data->city,$matchrecord[$key]->city);
              $skill_match=strnatcasecmp($data->required_skills,$matchrecord[$key]->skills);
              $visa_match=strnatcasecmp($data->job_visa_status,$matchrecord[$key]->visa_status);
              if($city_match==0 || $visa_match==0 || $skill_match==0)
              {
                  $city_match_percentage=0;
                  $visa_match_percentage=0;
                  $skill_match_percentage=0;
                  if($city_match==0)
                  {
                      $city_match_percentage=25;
                  }
                  if($visa_match==0)
                  {
                      $visa_match_percentage=30;
                  }
                  if($skill_match==0)
                  {
                      $skill_match_percentage=45;
                  }
                  $results['seeker_details'][$key]->match_percentage=$city_match_percentage + $visa_match_percentage + $skill_match_percentage;
              }
     
  }
  
  $industry=tbl_job_industries::where('ID',@$data->industry_ID)->first();
 
//   foreach ($toReturn['matchingjobs'] as $key=> $value) {
//       $seeker_skill=$value['skills'];

//   }
//   foreach ($toReturn['matchingjobs'] as $key=> $value) {
//       $job_skill=$value['required_skills'];	
//   }
//         // $result=array_diff($seeker_skill,$job_skill);
//   $seeker_skill_array=explode(",",@$seeker_skill);
//   $job_skill_array=explode(",",@$job_skill);
//   $matching_skill=array_intersect($job_skill_array,$seeker_skill_array);
//   $no_of_seeker_skill=count($seeker_skill_array);
//   $no_of_matching_skill=count($matching_skill);
//         		// echo $no_of_matching_skill;
//         		// echo $no_of_seeker_skill;
//   $toReturn['matchingjobs']['matching_per'] =($no_of_matching_skill/$no_of_seeker_skill)*100;
        		// return $matching_per;
        		//return $toReturn['matchingjobs'];
        		// if($no_of_seeker_skill==$no_of_matching_skill)
        		// {
        		// 	return $matching_skill_per=100;
        		// }
  	      	// 	else if($)
        		// {
            // }  
            // return $industry;              
  return view('team_member_jobdetails')->with(['data'=>$data ?? '','potentialdata'=>$results ?? '','toReturn'=>$toReturn ?? '','industry'=>$industry ?? '']);

}
    
}
