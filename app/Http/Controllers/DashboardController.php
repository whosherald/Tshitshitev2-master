<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\In_Progress_Model;
use App\Models\Complete_Progress_Model;
use App\Models\Main_Member;
use DB;
use Session;
session_start();

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
        $membersInProgressStatus = In_Progress_Model::all();
        $completeProgressStatus = Complete_Progress_Model::all();
        $inProgressMainMembers = [];
        $completeProgressMainMembers = [];

        foreach ($membersInProgressStatus as $status) {
            $mainMemberId = $status->main_member_id;
            $inProgressMainMember = Main_Member::where('mm_id', $mainMemberId)->first();

            if ($inProgressMainMember) {
                $inProgressMainMembers[] = $inProgressMainMember;
            }
        }

        foreach ($completeProgressStatus as $status) {
            $mainMemberId = $status->main_member_id;
            $completeProgressMainMember = Main_Member::where('mm_id', $mainMemberId)->first();

            if ($completeProgressMainMember) {
                $completeProgressMainMembers[] = $completeProgressMainMember;
            }
        }

        return view('Admin.dashboard', [
            'inProgressMainMembers' => $inProgressMainMembers,
            'completeProgressMainMembers' => $completeProgressMainMembers,
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
        //
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
     public function edit(string $mainMemberId)
    {
        $mainMember = Main_Member::find($mainMemberId);

        if (!$mainMember) {
            // Handle the case where the main member doesn't exist
            // For example, you can redirect back with an error message
            return redirect()->back()->with('error', 'Main member not found');
        }

        Session::put('mainMemberId', $mainMemberId);

        return redirect('/member-capture');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $mainMemberId)
    {
        // Delete the resource from In_Progress_Model if it exists
        $inProgressModel = In_Progress_Model::where('main_member_id', $mainMemberId)->first();
        if ($inProgressModel) {
            $inProgressModel->delete();

            $mainMember = Main_Member::find($mainMemberId);
            if ($mainMember) {
                $mainMember->delete();
            }
        }

        // Redirect back to the member-capture page with a flash message
        return redirect('/dashboard')->with('flash_message', 'Member deleted successfully');
    }
}
