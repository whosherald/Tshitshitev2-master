<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Claims_model;
use App\Models\Cliamant_Bank_Model;
use App\Models\Deceased_model;
use App\Models\In_Progress_Model;
use App\Models\Complete_Progress_Model;
use DB;
use Session;
session_start();

class ClaimsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if(Session::get('memberClaims_formCompleted') == true){
            request()->session()->regenerateToken();
        }
        //Initialisation
        //section1
        // $mainMemberId='false';
        $mainMemberId=5;
        $claims = null;
        $sectionOne=false;
        $section=1;
        $nextState=0;
        $mainMember=null;
        //section2
        $cliamant_bank=null;
        //section3
        $deceased=null;
        //section4
        $claims=null;
        //section5

        if(Session::has('memberClaims_mainMemberId')){ //if not inprogress but have not completed form during refresh
            $mainMemberId = Session::get('memberClaims_mainMemberId'); //get mainmemberid
            $section=Session::get('memberClaims_currentSection'); //get section number
            if(is_null($section)){
                $section=1;
            }
            if (Session::has('memberClaims_nextState')){ //get next state
                $nextState=Session::get('memberClaims_nextState');
                if(is_null($nextState)){
                    $nextState=0;
                }
                Session::forget('memberClaims_nextState');
                Session::put('memberClaims_currentSection', $section+$nextState);
            }
        }

        //initialisation complete

        if ($mainMemberId !='false') {

            $mainMember = $mainMember = DB::table('main_member')->where('mm_id', $mainMemberId)->first();
            $saleRep = DB::table('sales_representative')->where('sales_rep_id', $mainMember->sales_rep_id)->first();

            if($mainMember){$sectionOne=true;}
            else{$sectionOne=false;}

            //section 1
            $claims = DB::table('claims')->where('mm_id', $mainMemberId)->first();
            //section 2
            $cliamant_bank = DB::table('cliamant_bank')->where('mm_id', $mainMemberId)->first();
            //section 3
            $deceased= DB::table('Deceased')->where('mm_id', $mainMemberId)->first();
            //section 4
        }


        return view('forms.member_claim', [
            'mainMemberId' => $mainMemberId,
            'mainMember' => $mainMember,
            'claims' => $claims,
            'cliamant_bank' => $cliamant_bank,
            'deceased' => $deceased,
            'sectionOne' => $sectionOne,
            'section' => $section,
            'nextState'=>$nextState,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //initial state
        $section = $request->input('section');
        $nextState= $request->input('nextState');
        $input = $request->except('_token', 'section','nextState');
        Session::put('memberClaims_formCompleted', false);

        // Session::put('section', $section);
        $mainMemberId = Session::get('memberClaims_mainMemberId'); // Retrieve mainMemberId from session


        if ($section === 'section1') {
            // Process section 2 data
            // **********figure how to get the main-memberid
            $section=1;
            $claims = new Claims_model();
            $claims->fill($input);
            $claims->mm_id = $mainMemberId;
            $claims->claim_choose_file = isset($input['claim_choose_file']) ? true : false;
            $claims->save();

            //making it to be in progress by default
            $inProgress = In_Progress_Model::where('form', 'claims')->where('main_member_id', $mainMemberId)->first();
            if (!$inProgress) {
                $inProgress = new In_Progress_Model();
                $inProgress->fill([
                    'main_member_id' => $mainMemberId,
                    'form' => 'claims'
                ]);
                $inProgress->save();
            }

            Session::put('memberClaims_mainMemberId', $mainMemberId);
            Session::put('memberClaims_sectionOne', true);

        }
        if ($section === 'section2') {
            // Process section 5 data
            $section=2;
            $claims_bank = new Cliamant_Bank_Model();
            $claims_bank->fill($input);
            $claims_bank->mm_id = $mainMemberId;

            $claims_bank->save();
        }
        if ($section === 'section3') {
            // Process section 6 data
            $section=3;
            $deceased = new Deceased_model();
            $deceased->fill($input);
            $deceased->mm_id = Session::get('memberClaims_mainMemberId');
            $deceased->save();
        }
        if ($section === 'section4') {
            // Process section 4 data
            $section=4;
            if($nextState == 1){ //if you go out of bound of the form, the form is completed
                $mainMemberIdExists = Complete_Progress_Model::where('form', 'claims')->where('main_member_id', $mainMemberId)->exists();

                if (!$mainMemberIdExists) {
                    $completedProgressMembers = new Complete_Progress_Model();
                    $completedProgressMembers->fill([
                        'main_member_id' => $mainMemberId,
                        'form' => 'claims'
                    ]);
                    $completedProgressMembers->save();
                }
                In_Progress_Model::where('form', 'claims')->where('main_member_id', $mainMemberId)->delete();

                //restarting the form
                Session::flush();
                Session::put('memberClaims_formCompleted', true);

                $response = [
                    'message' => 'Data saved for section ' . $section,
                    'section' => $section,
                    'input' => $input,
                    'nextState' => $nextState,
                ];
                return response()->json($response);
            }
        }

        $sectionOne= Session::get('memberClaims_sectionOne');
        Session::put('memberClaims_currentSection', $section); //if reload page on a section the currentTab=$section-1
        Session::put('memberClaims_nextState', $nextState);

        $response = [
            'message' => 'Data saved for section ' . $section,
            'section' => $section,
            'input' => $input,
            'sectionOne' => $sectionOne,
            'nextState' => $nextState,
        ];
        return response()->json($response);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, $id)
    {
        $section = $request->input('section');
        $nextState= $request->input('nextState');
        $input = $request->except('_token', 'section','nextState');
        $mainMemberId = Session::get('memberClaims_mainMemberId');

        // if($id == 0){ //if on verification form and one of the section buttons have been pressed
        //     if ($section === 'section1') {
        //         // Process section 5 data
        //         $section=1;
        //     }
        //     elseif ($section === 'section2') {
        //         // Process section 5 data
        //         $section=2;
        //     }
        //     elseif ($section === 'section3') {
        //         // Process section 6 data
        //         $section=3;
        //     }
        //     elseif ($section === 'section4') {
        //         // Process section 7 data
        //         $section=4;
        //     }

        //     $sectionOne= true;
        //     Session::put('currentSection', $section); //if reload page on a section the currentTab=$section-1
        //     Session::put('nextState', $nextState);
        //     Session::put('sectionOne', true);

        //     $response = [
        //         'message' => 'Data updated for section ' . $section,
        //         'section' => $section,
        //         'mainMemberId' => $mainMemberId,
        //         'input' => $input,
        //         'id' => $id,
        //         'sectionOne' => $sectionOne,
        //         'nextState' => $nextState,
        //     ];
        //     Session::put('formCompleted', false);
        //     return response()->json($response);
        // }
        //if not on the verification page

        if ($section === 'section1') {
            // Process section 1 data
            $section=1;
            $claims = Claims_model::where('mm_id', $mainMemberId)->first();
            $data=$claims;
            if ($claims) {
                // $input = array_intersect_key($input, (array) $policyDetails);
                $input = array_filter($input, function ($value, $key) use ($claims) {
                    return !is_null($value) && (!isset($claims->$key) || $value !== $claims->$key);
                }, ARRAY_FILTER_USE_BOTH);
                // DB::table('policy_details')->where('mm_id', $mainMemberId)->update($input);
                $claims->claim_choose_file = isset($input['claim_choose_file']) ? 1 : 0;
                $claims->update($input);
            }

            $inProgress = In_Progress_Model::where('form', 'claims')->where('main_member_id', $mainMemberId)->first();
            if (!$inProgress) {
                $inProgress = new In_Progress_Model();
                $inProgress->fill([
                    'main_member_id' => $mainMemberId,
                    'form' => 'claims'
                ]);
                $inProgress->save();
            }

        }elseif ($section === 'section2') {
            $section=2;
            // $policyDetails = DB::table('policy_details')->where('mm_id', $mainMemberId)->first();
            $claims_bank = Cliamant_Bank_Model::where('mm_id', $mainMemberId)->first();
            $data=$claims_bank;
            if ($claims_bank) {
                // $input = array_intersect_key($input, (array) $policyDetails);
                $input = array_filter($input, function ($value, $key) use ($claims_bank) {
                    return !is_null($value) && (!isset($claims_bank->$key) || $value !== $claims_bank->$key);
                }, ARRAY_FILTER_USE_BOTH);
                // DB::table('policy_details')->where('mm_id', $mainMemberId)->update($input);
                $claims_bank->update($input);
            }
        }
        elseif ($section === 'section3') {
            $section=3;
            $deceased = Deceased_model::where('mm_id', $mainMemberId)->first();
            $data=$deceased;
            if ($deceased) {
                // $input = array_intersect_key($input, (array) $policyDetails);
                $input = array_filter($input, function ($value, $key) use ($deceased) {
                    return !is_null($value) && (!isset($deceased->$key) || $value !== $deceased->$key);
                }, ARRAY_FILTER_USE_BOTH);
                // DB::table('policy_details')->where('mm_id', $mainMemberId)->update($input);
                $deceased->update($input);
            }
        }
        elseif ($section === 'section4') {
            $section=4;
            // $policyDetails = Policy_Details_Model::where('mm_id', $mainMemberId)->first();
            // $data=$policyDetails;
            // if ($policyDetails) {
            //     // $input = array_intersect_key($input, (array) $policyDetails);
            //     $input = array_filter($input, function ($value, $key) use ($policyDetails) {
            //         return !is_null($value) && (!isset($policyDetails->$key) || $value !== $policyDetails->$key);
            //     }, ARRAY_FILTER_USE_BOTH);
            //     // DB::table('policy_details')->where('mm_id', $mainMemberId)->update($input);
            //     $policyDetails->update($input);
            // }
        }

        $sectionOne= true;
        Session::put('memberClaims_currentSection', $section); //if reload page on a section the currentTab=$section-1
        Session::put('memberClaims_nextState', $nextState);
        Session::put('memberClaims_formCompleted', false);
        Session::put('memberClaims_sectionOne', true);
        $response = [
            'message' => 'Data updated for section ' . $section,
            'section' => $section,
            'mainMemberId' => $mainMemberId,
            'input' => $input,
            'id' => $id,
            'data' => $data,
            'sectionOne' => $sectionOne,
            'nextState' => $nextState,
        ];

        return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function checkMainMemberId(Request $request)
    {
        $section = $request->input('section');
        $mainMemberId = Session::get('memberClaims_mainMemberId');
        $model = null;
        $currentPayment = null;
        $mainMemberIdExists = false;

        if ($section === 1 || $section === 'section1') {
            $model = Claims_model::class;
        } elseif ($section === 2 || $section === 'section2') {
            $model = Cliamant_Bank_Model::class;
        } elseif ($section === 3 || $section === 'section3') {
            $model = Deceased_model::class;
        } elseif ($section === 4 || $section === 'section4') {
            // $model = Beneficiary_Details_Model::class;
        }

        if ($model) {
            $mainMemberIdExists = $model::where('mm_id', $mainMemberId)->exists();
            $response=[
                'part' => 1,
                'message' => 'Data updated for section ' . $section,
                'section' => $section,
                'mainMemberId' => $mainMemberId,
                // 'input' => $input,
                'exists' => $mainMemberIdExists,
            ];
            return response()->json($response);
        }

        $response=[
            'part' => 2,
            'message' => 'Data updated for section ' . $section,
            'section' => $section,
            'mainMemberId' => $mainMemberId,
            // 'input' => $input,
            'exists' => false,
        ];
        return response()->json($response);
    }
}
