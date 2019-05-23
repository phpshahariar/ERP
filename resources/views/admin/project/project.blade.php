@extends('admin.admin')

@section('content')

    <div class="container-fluid">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".create-project">Add Project</button>

        <div class="modal fade create-project" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="card">
                        <div class="card-header">
                            <h2>Project Create Form</h2>
                        </div>
                        <div class="card-body">
                            <form class="user" action="{{ url('/save/project') }}" method="POST" id="projectAddForm">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Project Name : </label>
                                        <input type="text" required class="form-control form-control-user" name="name" id="name" placeholder="Project Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Project Type : </label>
                                        <input type="text" required class="form-control form-control-user" name="project_type" id="project_type" placeholder="Project Type">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Project Vendor : </label>
                                        <input type="text" required name="vendor" class="form-control form-control-user" id="vendor" placeholder="Project Vendor">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Project Area : </label>
                                        <input type="text" required name="area" class="form-control form-control-user" id="exampleLastName" placeholder="Project Area">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Project PO No : </label>
                                        <input type="text" required name="po_number" class="form-control form-control-user" id="exampleFirstName" placeholder="Project PO Number">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Project PO : </label>
                                        <input type="number" required name="balance" class="form-control form-control-user" id="exampleLastName" placeholder="Project PO">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Project Start Date : </label>
                                        <input type="date" required name="start_date" class="form-control form-control-user timepicker" id="dateMy" placeholder="Project Start Date">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Project End Date : </label>
                                        <input type="date" required name="end_date" class="form-control form-control-user timepicker" id="dateToMy" placeholder="Project end Date">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">SubmiT</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Create Project Table</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th width="5%">SL</th>
                            <th>Project Name</th>
                            <th>Project Type</th>
                            <th>Vendor</th>
                            <th>Area</th>
                            <th>PO Number</th>
                            <th>Total PO</th>
                            <th>Start date</th>
                            <th>End date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($show_project as $key => $project)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->project_type }}</td>
                                <td>{{ $project->vendor }}</td>
                                <td>{{ $project->area }}</td>
                                <td>{{ $project->po_number }}</td>
                                <td>TK. {{ number_format($project->balance,2) }}</td>
                                <td>{{ $project->start_date }}</td>
                                <td>{{ $project->end_date }}</td>
                                <td width="10%" style="text-align: center;">
                                    <a href="{{ url('/edit/project/'.$project->id) }}" class="btn btn-sm btn-primary" title="Edit">
                                        <span class="fa fa-edit"></span>
                                    </a>
                                    <a href="{{ url('/project/delete/'.$project->id) }}" onclick="return confirm('Are You Sure Delete This!')" class="btn btn-sm btn-danger" title="Delete">
                                        <span class="fa fa-trash-alt"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
 @endsection