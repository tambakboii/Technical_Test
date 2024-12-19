<?php

// app/Http/Controllers/ApprovalController.php
namespace App\Http\Controllers;

use App\Models\Approval;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    public function index()
    {
        $approvals = Approval::all();
        return view('approvals.index', compact('approvals'));
    }

    public function create()
    {
        return view('approvals.create');
    }

    public function store(Request $request)
    {
        Approval::create($request->all());
        return redirect()->route('approvals.index');
    }

    public function destroy($id)
    {
        Approval::find($id)->delete();
        return redirect()->route('approvals.index');
    }
}

// namespace App\Http\Controllers;

// use App\Models\Approval;
// use Illuminate\Http\Request;

// class ApprovalController extends Controller
// {
//     public function index()
//     {
//         $approvals = Approval::all();
//         return view('approvals.index', compact('approvals'));
//     }

//     public function create()
//     {
//         return view('approvals.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'booking_id' => 'required|exists:Bookings,booking_id',
//             'approver_id' => 'required|exists:Users,user_id',
//             'status' => 'required|in:approved,rejected',
//             'comment' => 'nullable|string',
//         ]);

//         Approval::create([
//             'booking_id' => $request->booking_id,
//             'approver_id' => $request->approver_id,
//             'status' => $request->status,
//             'comment' => $request->comment,
//         ]);

//         return redirect()->route('approvals.index');
//     }
// }

