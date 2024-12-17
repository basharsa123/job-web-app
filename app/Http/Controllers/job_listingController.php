<?php

namespace App\Http\Controllers;

use App\Models\job_listing;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class job_listingController extends Controller
{
    public function index()
    {
        $jobs =  job_listing::with('employee')->latest()->paginate(3);
        return view(
            'jobs.index',
            [
                'jobs' => $jobs
            ]
        );
    }
    public function store()
    {
        //! validation
        request()->validate([
            'job_name' => ['required', 'min:3']
            /** unless error title require */
            ,
            'salary' => ['required']
            /** unless error title required */
        ]);
        job_listing::create(
            [
                'employee_id' => 1,
                'title' => request('job_name'),
                'salary' => request('salary')
            ]
        );
        return  redirect('/jobs');
    }
    public function show(job_listing $job_listing)
    {
        return view('jobs.job', ['job' => $job_listing]);
    }
    public function update(job_listing $job)
    {
        //! authorize
                //! authorize using gates
                Gate::authorize('edit_jobs', $job);
                //?authorize without using gates 
                //? if (Auth::guest()) 
                //? {
                //?     return redirect('/login');
                //? }
                //?  else if ($job->employee->user->isNot(Auth::user())) {
                //?     abort(403);
                //? }
        if (Auth::guest()) {
            return redirect('/login');
        }
        return view('jobs.update', ['job' => $job]);
    }
    public function edit(job_listing $job) //? the button of update at update page
    {
        //!validate
        request()->validate([
            'job_name' => ['required', 'min:3']
            /* unless error title require */,
            /** unless error title required */
            'salary' => ['required']
        ]);
        //! update
        $job->update(
            [
                'title' => request('job_name'),
                'salary' => request('salary')
            ]
        );
        //* or
        //* $job->title = request('title');  
        //* $job->salary = request('salary');  
        //* $job->save();
        //?redirect
        return  redirect('/jobs/' . $job->id);
    }
    public function destroy(job_listing $job_listing)
    {
        //? delete
        $job_listing->delete();
        //?redirect 
        return redirect('/jobs');
    }
}
