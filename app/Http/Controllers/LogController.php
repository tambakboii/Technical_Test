<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        $logs = Log::all();
        return view('logs.index', compact('logs'));
    }

    public function create()
    {
        return view('logs.create');
    }

    public function store(Request $request)
    {
        Log::create($request->all());
        return redirect()->route('logs.index');
    }

    public function destroy($id)
    {
        Log::find($id)->delete();
        return redirect()->route('logs.index');
    }
}
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class LogController extends Controller
// {
//     public function index()
//     {
//         $logs = Log::all();
//         return view('logs.index', compact('logs'));
//     }

//     public function create()
//     {
//         return view('logs.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'action' => 'required|string',
//             'user_id' => 'required|exists:Users,user_id',
//         ]);

//         Log::create([
//             'action' => $request->action,
//             'user_id' => $request->user_id,
//         ]);

//         return redirect()->route('logs.index');
//     }
// }
