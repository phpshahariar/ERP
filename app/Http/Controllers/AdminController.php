<?php

namespace App\Http\Controllers;

use App\Project;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('admin.home.index');
    }

    public function create_project(){
        $show_project = Project::all();
        return view('admin.project.project', compact('show_project'));
    }

    public function save_project(Request $request){

        $this->validate($request,[
            'name'  => 'required|max:255',
            'project_type'  => 'required|max:255',
            'vendor'  => 'required|max:255',
            'area'  => 'required|max:255',
            'po_number'  => 'required|max:255',
            'balance'  => 'required|min:4|max:8',
            'start_date'  => 'required|date',
            'end_date'  => 'required|date',
        ]);

        $new_project = new Project();
        $new_project->name = $request->name;
        $new_project->project_type = $request->project_type;
        $new_project->vendor = $request->vendor;
        $new_project->area = $request->area;
        $new_project->po_number = $request->po_number;
        $new_project->balance = $request->balance;
        $new_project->start_date = $request->start_date;
        $new_project->end_date = $request->end_date;
        $new_project->save();
        Toastr::success('Project Add Successfully', 'Success');
        return redirect()->back();
    }

    public function edit_project($id){
        $edit_project = Project::find($id);
        return view('admin.project.edit-project', compact('edit_project'));
    }

    public function update_project(Request $request){

        $this->validate($request,[
            'name'  => 'required|max:255',
            'project_type'  => 'required|max:255',
            'vendor'  => 'required|max:255',
            'area'  => 'required|max:255',
            'po_number'  => 'required|max:255',
            'balance'  => 'required|min:4|max:8',
            'start_date'  => 'required|date',
            'end_date'  => 'required|date',
        ]);

        $update_project = Project::find($request->id);
        $update_project->name = $request->name;
        $update_project->project_type = $request->project_type;
        $update_project->vendor = $request->vendor;
        $update_project->area = $request->area;
        $update_project->po_number = $request->po_number;
        $update_project->balance = $request->balance;
        $update_project->start_date = $request->start_date;
        $update_project->end_date = $request->end_date;
        if ($update_project->save()){
            Toastr::success('Project Update Successfully', 'Success');
        }else{
            Toastr::error('Project Not Updated', 'Error');
        }
        return redirect('/create/project');
    }

    public function delete_project($id){
        $delete_project = Project::find($id);
        $delete_project->delete();
        Toastr::success('Project Delete Successfully', 'Success');
        return redirect()->back();
    }
}
