@extends('layouts.layout')
@section('title', 'Role')
@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card" id="permissioncard">
                <div class="card-body" id="permission_card_body">
                    <h4 class="card-title">Permission List</h4>
                    <p class="card-description">
                        <div>
                            <button class="btn btn-info mt-1" data-toggle="modal" data-target="#addpermission">
                                <i class="ti-plus mr-2 "></i> Add Permission
                            </button>
                        </div>
                    </p> 
                    <div class="table-responsive">
                        <table class="table table-hover" id="permission_table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Display Name</th>
                                    <th>Group</th>
                                    <th>Last Update</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($permission as $permision)
                                <tr>
                                    <td>{{$permision->name}}</td>
                                    <td>{{$permision->display_name}}</td>
                                    <td>{{$permision->group}}</td>
                                    <td>{{date('Y-m-d H:i a', strtotime($permision->updated_at))}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <i class="fa-solid fa-ellipsis" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editModal1">
                                                    <i class="fas fa-edit mr-2"></i> Edit
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div style="float: right;">
                        {{$permission->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- add permission -->
    <div class="modal fade" id="addpermission" tabindex="-1" role="dialog" aria-labelledby="addpermissionLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addpermissionLabel">Add Permission</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addpermission" action="{{ route('permission.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="rolename">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="displayName">Display Name</label>
                            <input type="text" class="form-control" id="displayName" name="displayName" required>
                        </div>
                        <div class="form-group">
                            <label for="displayName">Group</label>
                            <input type="text" class="form-control" id="group" name="group" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="role_submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection