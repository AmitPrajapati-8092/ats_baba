<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tbl_employers;
use App\Tbl_companies;
use App\Tbl_industry;
use App\Tbl_organization_type;
use App\Tbl_state;
use App\Tbl_cities;
use App\Tbl_countries;
use App\countries;
use App\states;
use App\city;
use App\Tbl_job_industries;
use Session;

class CompanyProfileController extends Controller
{
    public function __construct()
		{
			$this->middleware('mian_session');

		}
  public function index()
  {
    $companies = Tbl_employers::where('company_ID', Session::get('org_ID'))
      //return view('company_profile')->with('companies',$companies);
      ->join('tbl_companies as comp', 'tbl_employers.company_ID', '=', 'comp.ID')
      ->join('tbl_job_industries as industries', 'comp.industry_ID', '=', 'industries.ID')
      ->select(
        'comp.company_name as company_name',
        'tbl_employers.first_name as first_name',
        'industries.industry_name as industries_name',
        'comp.ownership_type as company_type',
        'comp.federal_id as federal_id',
        'comp.duns as duns',
        'comp.company_location as company_address',
        'comp.company_country as company_country',
        'comp.company_state as company_state',
        'comp.company_city as company_city',
        'comp.company_phone as company_phone',
        'tbl_employers.mobile_phone as company_mobile',
        'comp.company_website as company_website',
        'comp.no_of_employees as no_of_employees',
        'comp.company_description as company_description',
        'comp.company_logo as logo',
        'comp.org_type'
      )
      ->first();

    return view('company_profile')->with('companies', $companies);
  }


  public function edit()
  {
    $toReturn = array();
    $toReturn['companies'] = Tbl_employers::where('company_ID', Session::get('org_ID'))
      //return view('company_profile')->with('companies',$companies);
      ->join('tbl_companies as comp', 'tbl_employers.company_ID', '=', 'comp.ID')
      ->join('tbl_job_industries as industries', 'comp.industry_ID', '=', 'industries.ID')
      ->select(
        'comp.company_name as company_name',
        'tbl_employers.first_name as first_name',
        'industries.industry_name as industries_name',
        'comp.ownership_type as company_type',
        'comp.federal_id as federal_id',
        'comp.duns as duns',
        'comp.company_location as company_address',
        'comp.company_country as company_country',
        'comp.company_state as company_state',
        'comp.company_city as company_city',
        'comp.company_phone as company_phone',
        'tbl_employers.mobile_phone as mobile_phone',
        'comp.company_website as company_website',
        'comp.no_of_employees as no_of_employees',
        'comp.company_description as company_description',
        'tbl_employers.company_ID as company_id',
        'industries.ID as industries_id',
        'comp.company_logo as logo'
      )
      ->first();
    //   return $toReturn['companies']['company_mobile'];
    //   if(!empty($companies))
    //   {
    //       $toReturn['companies']=$companies->toArray();
    //   }
    //   else
    //   {
    //       $toReturn['companies']='null';
    //   }
    $toReturn['industries'] = Tbl_industry::all()->toArray();
    $toReturn['organization_type'] = Tbl_organization_type::all()->toArray();
    $toReturn['state'] = states::get()->toArray();
    $toReturn['city'] = Tbl_cities::get()->toArray();
    $toReturn['countries'] = countries::get()->toArray();

    return view('edit_company')->with('toReturn', $toReturn);
  }


  public function update(Request  $Request)
  {
    $employers = new Tbl_employers();
    //$companies= new Tbl_companies();
    $state = new Tbl_state();
    $company_id = $Request->company_id;
    // return $company_id;
    $industries_id = $Request->industries_id;
    $industries_name = $Request->industry_name;

    $upadateindustries_id = Tbl_industry::where('industry_name', $industries_name)->select('ID')->first()->toArray();
    //$job_seeker=Tbl_employers::where('ID',$company_id)->select('first_name')->first();
    $country_explode = explode('|', $Request->country_name);

    $file = $Request->files_upload;

    if(($file !=="")&&($file !==null)){

      if ($Request->hasFile('files_upload')) {

        $profile_image = $Request->file('files_upload');
        $new_profile_image =$profile_image->getClientOriginalName();
        $profile_image->move(public_path('companylogo'), $new_profile_image);

      }

    }
    else
    {
      $new_profile_image = $Request->files_upload_existing;
    }
    

    $companies = Tbl_companies::where('ID', $company_id)->update(array(
      'ownership_type' => $Request->company_type,
      'federal_id' => $Request->federal_id,
      'duns' => $Request->duns,
      'company_location' => $Request->company_address,
      'company_country' => @$country_explode[1],
      'company_state' => $Request->state,
      'company_city' => $Request->city_name,
      'company_phone' => $Request->company_phone,
      'no_of_employees' => $Request->noofemp,
      'company_website' => $Request->company_website,
      'company_description' => $Request->company_description,
      'industry_ID' => $upadateindustries_id['ID'],
      'org_type' => $Request->org_name,
      'company_logo' => $new_profile_image
    ));
    $employers = Tbl_employers::where('ID', Session::get('id'))->update(array(
      // 'first_name'=> $Request->first_name,
      'mobile_phone' => $Request->company_mobile,
      'company_ID' => $company_id
    ));
    $Success = "Company Profile Is Update SuccessFully";
    return  redirect('employer/companyprofile')->with('success', $Success);
  }
  public function url_for_profile_image(){

    $logo = Tbl_companies::where('ID',Session::get('org_ID'))->first();
      return $logo;
  }
}
