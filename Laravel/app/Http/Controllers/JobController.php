<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);// pervious     next     unsing offset
        //$jobs = Job::with('employer')->cursorPaginate(3);// same like simplaPaginate but a good choice if you want infinte scrolling or don't need to specific a page number,
// best choice for big data and it using a encoded string value to refere to the next set of results that Laravel have to fetch 
        //    $jobs = Job::with('employer')->paginate(3);// page number 
        return view('jobs.index', [
            'jobs' => $jobs
        ]);

    }
    public function create()
    {
        return view('jobs.create');
    }
    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);
        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);
        return redirect('/jobs');
    }
    public function show(Job $job)
    {
        // because we use Route Model Binding  so we are fetch now $job as instance not string so we don't have too use this line no more

        //$job = Job::find($id);
        return view('jobs.show', ['job' => $job]);
    }
    public function edit(Job $job)
    {
        Gate::define('edit-job', function (User $user, Job $job) {
            return $job->employer->user->is(Auth::user());
        });
        if (Auth::guest()) {
            return redirect('/login');
        }
        Gate::authorize('edit-job', $job);
        //$job = Job::find($id);
        return view('jobs.edit', ['job' => $job]);

    }
    public function update(Job $job)
    {
        // Validate
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);
        //authorize 
        //update the job
        //$job = Job::findOrFail($id);// use this method to handel NULL valuse if user try to access a non found user or id 

        //there are 2 way to update 
        // $job->title = request('title');
        // $job->salary = request('salary');
        // $job->save();

        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);

        //add persist  => findOrFail
        //redirect to the job page
        return redirect("/jobs/" . $job->id);
    }
    public function destroy(Job $job)
    {
        //authorize 

        // delete

        //$job = Job::findOrFail($id);
        $job->delete();
        //or you can write Job::findOrFail($id)->delete();
        //redirect
        return redirect("/jobs");
    }
}
