<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Company;
use App\Http\Requests\JobPostRequest;
use App\Category;
use Auth;
class JobController extends Controller
{

  public function __construct(){
    $this->middleware(['employer','verified'],['except'=>array('index','show','apply','allJobs')]);
  }

  public function index(){
    $jobs = Job::latest()->limit(6)->where('status', 1)->get();
    $categories = Category::with('jobs')->get();

    $companies = Company::latest()->limit(4)->get()->random(4);
    $spotlight = Job::limit(6)->where('status', 1)->get()->random(6);
    return view('welcome',compact('spotlight','jobs', 'companies','categories'));
      }

  public function show($id,Job $job){



        $jobs = Job::latest()->where('status', 1)->where('company_id',$job->company_id)->limit(4)->get();
        $jobRecommendations = $this->jobRecommendations($job);
        return view('jobs.show', compact('job', 'jobs', 'jobRecommendations'));
      }

  public function jobRecommendations($job){
    $data = [];

    $jobBasedOnCategories = Job::latest()->where('status', 1)->where('category_id', $job->category_id)->where('id','!=',$job->id)->limit(6)->get();
    array_push($data, $jobBasedOnCategories);
    $jobBasedOnPosition = Job::latest()->where('status', 1)->where('position', 'LIKE', '%'.$job->position.'%')->where('id','!=',$job->id)->limit(6)->get();
    array_push($data, $jobBasedOnPosition);

    $collection = collect($data);
    $unique = $collection->unique("id");
    $jobRecommendations = $unique->values()->first();

    return $jobRecommendations;
  }

      public function create(){

            return view('jobs.create');

          }

          public function store(JobPostRequest $request){

            $user_id = auth()->user()->id;
            $company = Company::where('user_id', $user_id
            )->first();
            $company_id = $company->id;
              Job::create([
                'user_id' => $user_id,
                'company_id' => $company_id,
                'title' =>request('title'),
                'slug' =>str_slug(request('title')),
                'description'=>request('description'),
                'roles'=>request('roles'),
                'category_id'=>request('category'),
                'position'=>request('position'),
                'address'=>request('address'),
                'type'=>request('type'),
                'status'=>request('status'),
                'last_date'=>request('last_date'),
                'contact'=>request('contact')
              ]);

              return redirect()->back()->with('message', 'Your Job has succesfully created');

              }

          public function myjob(){

            $jobs = Job::where('user_id',auth()->user()->id)->get();
            return view('jobs.my-job', compact('jobs'));
          }

          public function edit($id){

            $job = Job::findOrFail($id);
            return view('jobs.edit', compact('job'));
          }

          public function update(Request $request,$id){

            $job = Job::findOrFail($id);
            $job->update($request->all());

            return redirect()->back()->with('message', 'Your Job Succesfully Updated');
          }

          public function apply(Request $request,$id){
            $jobId = Job::find($id);
            $jobId->users()->attach(Auth::user()->id);
            return redirect()->back()->with('message','Application Sent!');
          }

          public function cancelApply(Request $request,$id){
            $jobId = Job::find($id);
            $jobId->users()->detach(Auth::user()->id);
            return redirect()->back()->with('message','Application Canceled!');;
          }


          public function applicant(){
            $applicants = Job::has('users')->where('user_id',auth()->user()->id)->get();
            return view('jobs.applicants',compact('applicants'));
        }

        public function allJobs(Request $request){
          $keyword = $request->get('title');

          $type = $request->get('type');

          $category = $request->get('category_id');

          $address = $request->get('address');

          if($keyword||$type||$category||$address){
            $jobs = Job::where('title','LIKE','%'.$keyword.'%')
                  ->orWhere('type',$type)
                  ->orWhere('category_id',$category)
                  ->orWhere('address',$address)
                  ->paginate(10);
            return view('jobs.alljobs', compact('jobs'));
          }else{
          $jobs = Job::latest()->paginate(10);
          return view('jobs.alljobs',compact('jobs'));

          }
        }


}
