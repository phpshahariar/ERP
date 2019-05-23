@extends('admin.admin')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Update Project</h3>
            </div>
            <div class="card-body">
                <form class="user" action="{{ url('/update/project') }}" method="POST" id="projectEditForm">
                    @csrf
                    <input type="hidden" value="{{ $edit_project->id }}" required class="form-control form-control-user" name="id" id="name" placeholder="Project id">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Project Name : </label>
                            <input type="text" value="{{ $edit_project->name }}" required class="form-control form-control-user" name="name" id="name" placeholder="Project Name">
                            <span style="color: red"> {{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                        </div>
                        <div class="col-sm-6">
                            <label>Project Type : </label>
                            <input type="text" value="{{ $edit_project->project_type }}" required class="form-control form-control-user" name="project_type" id="project_type" placeholder="Project Type">
                            <span style="color: red"> {{ $errors->has('project_type') ? $errors->first('project_type') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Project Vendor : </label>
                            <input type="text" value="{{ $edit_project->vendor }}" required name="vendor" class="form-control form-control-user" id="vendor" placeholder="Project Vendor">
                            <span style="color: red"> {{ $errors->has('vendor') ? $errors->first('vendor') : ' ' }}</span>
                        </div>
                        <div class="col-sm-6">
                            <label>Project Area : </label>
                            <input type="text" value="{{ $edit_project->area }}" required name="area" class="form-control form-control-user" id="exampleLastName" placeholder="Project Area">
                            <span style="color: red"> {{ $errors->has('area') ? $errors->first('area') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Project PO No : </label>
                            <input type="text" value="{{ $edit_project->po_number }}" required name="po_number" class="form-control form-control-user" id="exampleFirstName" placeholder="Project PO Number">
                            <span style="color: red"> {{ $errors->has('po_number') ? $errors->first('po_number') : ' ' }}</span>
                        </div>
                        <div class="col-sm-6">
                            <label>Project PO : </label>
                            <input type="number" value="{{ $edit_project->balance }}" required name="balance" class="form-control form-control-user" id="exampleLastName" placeholder="Project PO">
                            <span style="color: red"> {{ $errors->has('balance') ? $errors->first('balance') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Project Start Date : </label>
                            <input type="text" value="{{ $edit_project->start_date }}" required name="start_date" class="form-control form-control-user" id="start_date" placeholder="Project Start Date">
                            <span style="color: red"> {{ $errors->has('start_date') ? $errors->first('start_date') : ' ' }}</span>
                        </div>
                        <div class="col-sm-6">
                            <label>Project End Date : </label>
                            <input type="text" value="{{ $edit_project->end_date }}" required name="end_date" class="form-control form-control-user" id="end_date" placeholder="Project end Date">
                            <span style="color: red"> {{ $errors->has('end_date') ? $errors->first('end_date') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ url('/create/project') }}" type="button" class="btn btn-danger" data-dismiss="modal">Back</a>
                        <button type="submit" class="btn btn-primary">SubmiT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection