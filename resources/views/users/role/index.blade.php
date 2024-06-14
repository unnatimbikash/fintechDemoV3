@extends('layouts.layout')
@section('title', 'Role')
<style>
    .display {
        display: none;
    }

  
</style>
@section('content')
<div class="content-wrapper">
    <!-- role Form -->
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card" id="rolecard">
            <div class="card-body" id="role_card_body">
                <h4 class="card-title">Role List</h4>
                <p class="card-description">
                <div>
                    <button class="btn btn-info mt-1" data-toggle="modal" data-target="#addrole">
                        <i class="ti-plus mr-2 "></i> Add Role
                    </button>
                </div>
                </p>
                <div class="table-responsive">
                    <table class="table table-hover" id="role_table">
                        <thead>
                            <tr>
                                <th class="display">ID</th>
                                <th>Name</th>
                                <th>Display Name</th>
                                <th>Last Update</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td class="display id">ID</td>
                                <td class="name">{{$role->name}}</td>
                                <td class="dispaly_name">{{$role->display_name}}</td>
                                <td>{{date('Y-m-d H:i a', strtotime($role->updated_at))}}</td>
                                <td>
                                    <input type="hidden" value="{{$role}}" id="roleidhidden{{$role->id}}">
                                    <div class="dropdown">
                                        <i class="fa-solid fa-ellipsis" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editModal1">
                                                <i class="fas fa-edit mr-2"></i> Edit
                                            </a>
                                            <span class="dropdown-item"  data-toggle="modal" data-target="#permissionModalCenter" data-value="{{$role}}" >
                                                <i class="fas fa-user-shield mr-2"></i>
                                                Permission
                                            </span>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#schemeModal1">
                                                <i class="fas fa-cogs mr-2"></i> Scheme
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
                    {{$roles->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!--  add roll Modalform  -->
<div class="modal fade" id="addrole" tabindex="-1" role="dialog" aria-labelledby="addroleLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addroleLabel">Add Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('role.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="rolename">Role Name</label>
                        <input type="text" class="form-control" id="rolename" name="rolename" required>
                    </div>
                    <div class="form-group">
                        <label for="displayName">Display Name</label>
                        <input type="text" class="form-control" id="displayName" name="displayName" required>
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

<!-- Permission Modal -->
<div class="modal fade" id="permissionModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="permissionModalLabel1">{{__('messages.permission')}}</h5>
                <span id="headerrolename" class="badge badge-dark" style="margin-left: 100px;"></span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="permissionForm" action="{{url('/assignpermissionrole')}}">
                    @csrf
                    <input type="hidden" id="roleid" name="role_id">
                    <div id="container_id"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Scheme Modal -->
<div class="modal fade" id="schemeModal1" tabindex="-1" role="dialog" aria-labelledby="schemeModalLabel1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="schemeModalLabel1">Scheme</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Scheme form content -->
                <form id="schemeForm">
                    <div class="form-group">
                        <label for="schemeSelect">Select Scheme</label>
                        <select class="form-control" id="schemeSelect">
                            <option value="" disabled selected>Select a scheme</option>
                            <option value="scheme1">Scheme 1</option>
                            <option value="scheme2">Scheme 2</option>
                            <option value="scheme3">Scheme 3</option>
                            <option value="scheme4">Scheme 4</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <!-- <div class="form-group">
                                            <label for="roleName">Role Name</label>
                                            <input type="text" class="form-control" id="roleName" placeholder="Enter role name">
                                        </div> -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#permissionModalCenter').on('shown.bs.modal',(event)=>{
            let datapermission=$(event.relatedTarget);
            let val=datapermission.data('value');
            $('#headerrolename').text(val.name);
            $('#roleid').val(val.id);
            $('#container_id').html('');
            $.ajax({
                url: "{{URL::to('/getrolepermission')}}",
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'id':val.id,
                },
                cache:false,
                success: function (data) {
                if(data.status=='success'){
                        var permission=data.permission;
                        var allpermission=data.groupdata;
                        var permissionval=[];
                        $.each( permission, function( key, value ) {
                            permissionval.push( value['permission_id']);
                        });

                        $.each(allpermission, function(key, permissions) {
                            var groupHtml = `<div class="container">
                                                <div class="row">
                                                    <span class="badge badge-secondary">${key}</span>
                                                </div>
                                                <div class="row">`;

                            $.each(permissions, function(index, permission) {
                                var isChecked = permissionval.includes(permission.id) ? 'checked' : '';
                                groupHtml += `<div class="col-md-2">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" name="data[${permission.id}]" id="${permission.name}" ${isChecked}>
                                                    <label class="form-check-label" for="${permission.name}">${permission.display_name}</label>
                                                </div>
                                            </div>`;
                            });

                            groupHtml += `</div></div>`;

                            $('#container_id').append(groupHtml);
                        });
                        
                }
                },
            });
        });
    });

    
</script>
@endsection