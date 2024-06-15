@extends('layouts.layout')
@section('title', 'setting')
@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> User Lists</h4>
                    <p class="card-description">
                    @can('adduser')
                    <div>
                        <button class="btn btn-info mt-1" data-toggle="modal" data-target="#addUserModal">
                            <i class="ti-plus mr-2 "></i> Add user
                        </button>
                    </div>
                    @endcan
                    </p>               
                    <div class="table-responsive pt-3">
                        <div id="investorTable" class="table-container active">
                            <!-- Add the respective form for investor here -->
                            <div class="form-container" id="investorForm">
                                <!-- Investor form content -->
                                <table class="table table-hover">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th>ID</th>
                                            <th>User</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Balance (Rs)</th>
                                            <th>Verified Status</th>
                                            <th>Last Login</th>
                                            <th>Status</th>
                                            <th>More</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;?>
                                        @foreach ($users as $key => $user)
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{ $user->name}}<span><label class="badge badge-warning">{{$user->role}}</label></span></td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    @if(!empty($user->getRoleNames()))
                                                        @foreach($user->getRoleNames() as $rolename)
                                                            @if($rolename=='Admin')
                                                                <span class="badge badge-danger">{{$rolename}}</span>
                                                            @elseif($rolename=='MasterDistributor')
                                                                <span class="badge badge-success">{{$rolename}}</span>
                                                            @else
                                                                <span class="badge badge-secondary">{{$rolename}}</span>
                                                            @endif
                                                            
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>{{ $user->mainwallet }}</td>
                                                <td><i class="fa-solid fa-triangle-exclamation mr-2 text-danger"></i><span><label
                                                            class="badge ">Email</label></span><i
                                                        class="{{ $user->kyc == 'pending'
                                                            ? 'fa-regular fa-hourglass-start'
                                                            : ($user->kyc == 'submitted'
                                                                ? 'fa-solid  fa-circle-question'
                                                                : ($user->kyc == 'verified'
                                                                    ? 'fa-regular fa-circle-check'
                                                                    : 'fa-regular fa-circle-xmark')) }}"></i><span><label
                                                            class="badge">Kyc</label></span></td>
                                                <td>{{ $user->lastlogin }}</td>
                                                <td><label class="badge badge-success">{{ ucfirst($user->status) }}</label>
                                                </td>

                                                <td class="dropdown">
                                                    <i class="fa-solid fa-ellipsis" id="dropdownMenuButton2"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"></i>
                                                    <div class="dropdown-menu dropdown-menu-right"
                                                        aria-labelledby="dropdownMenuButton2">
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#viewDetailsModal" onclick="viewdetails({{$user}})"><i
                                                                class="fa-solid fa-info-circle" ></i> <span
                                                                class="mx-2">View Details</span></a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#sendEmailModal"><i
                                                                class="fa-solid fa-envelope"></i> <span class="mx-2">Send
                                                                Email</span></a>
                                                                @if($user->kyc=="pending")
                                                                <a class="dropdown-item" href="{{url('member/editdetails')}}/{{$user->id}}" ><i
                                                                    class="fa-solid fa-chart-line"></i> <span
                                                                    class="mx-2">edit profile</span></a>
                                                                @endif
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#referralsModal"><i
                                                                class="fa-solid fa-user-friends"></i> <span
                                                                class="mx-2">Referrals</span></a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa-solid fa-key"></i>
                                                            <span class="mx-2" onclick="resetpassword({{$user->id}})">Reset Pass</span></a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#suspendModal"><i class="fa-solid fa-ban"></i>
                                                            <span class="mx-2">Suspend</span></a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#verifyEmailModal"><i
                                                                class="fa-solid fa-envelope-circle-check"></i>
                                                            <span class="mx-2">Verify Email</span></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <input type="hidden" value="{{$user}}" id="userinfodata">
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>    
                        </div>
                    </div>
                    <div style="float: right;">
                        {{$users->links() }}
                    </div>
                    
                    <!-- Modals -->
                    {{-- reset password --}}
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                          <form action="{{url('member/resetpasswords')}}" onsubmit="resetformsubmit(event)" method="POST" id="passwordresetform">
                            @csrf
                                <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Verify Password</label>
                                    <input type="password" class="form-control" id="verifypassword" name="verifypassword" >
                                    <small  class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Your Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                    <small  class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmpassword" name="confirmpassword">
                                    <small id="confirmpassword" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                            </div>
                            <input type="hidden" class="form-control" id="passwordid" value="" >
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                          </div>
                        </div>
                      </div>
                    <!-- View Details Modal -->
                    <div class="modal fade" id="viewDetailsModal" tabindex="-1" role="dialog"
                        aria-labelledby="viewDetailsModalLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-lg" role="document">
                            <div class="modal-content ">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="viewDetailsModalLabel">View Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row ">
                                        <div class="col-md-3 ">
                                            <h4>Main Wallet</h4>
                                            <p id="viewmainwallet">0</p>
                                        </div>
                                        <div class="col-md-3 ">
                                            <h4>Contributed</h4>
                                            <p>0 USD</p>
                                        </div>
                                        <div class="col-md-3  ">
                                            <h4>User Status</h4>
                                            <p class="badge badge-danger" id="viewstatus">Suspend</p>
                                        </div>
                                        <div class="col-md-3">
                                            <h4>Action</h4>
                                            <i class="fa-solid fa-triangle-exclamation mr-2 text-danger"></i><span><label
                                                    class="badge ">Email</label></span><i
                                                class="fa-regular  mr-2 " id="viewkycstatus"></i><span><label
                                                    class="badge">Kyc</label></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4>User Information</h4>
                                                <div class="table-responsive pt-3">
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <th>Name:</th>
                                                            <td id="viewname"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Mobile No:</th>
                                                            <td id="newphonenumber">555 77 854</td>
                                                        </tr>
                                                        <tr>
                                                            <th>E-Mail Id:</th>
                                                            <td id="viewEmail">xyz@gmail.com</td>
                                                        </tr>
                                                        <tr>
                                                            <th>D.o.B :</th>
                                                            <td id="viewdob">16th Jun 1998</td>
                                                        </tr>
                                                        {{-- <tr>
                                                            <th>Nationality:</th>
                                                            <td>Indian</td>
                                                        </tr> --}}
                                                        {{-- <tr>
                                                            <th>Wallet Address:</th>
                                                            <td>Not Yet Added</td>
                                                        </tr> --}}
                                                        <tr>
                                                            <th>Joining Date:</th>
                                                            <td id="joiningdate">8th Nov 2023</td>
                                                        </tr>
                                                        {{-- <tr>
                                                            <th>Referred By:</th>
                                                            <td>Without Referral</td>
                                                        </tr> --}}
                                                        {{-- <tr>
                                                            <th>Reg Method:</th>
                                                            <td>Internal</td>
                                                        </tr>
                                                        <tr>
                                                            <th>2FA Enabled:</th>
                                                            <td>No</td>
                                                        </tr> --}}
                                                        <tr>
                                                            <th>last Login:</th>
                                                            <td id="viewlogin">Not logged</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                    <!-- Send Email Modal -->
                    <div class="modal fade" id="sendEmailModal" tabindex="-1" role="dialog"
                        aria-labelledby="sendEmailModalLabel" aria-hidden="true">
                        <div class="modal-dialog " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="sendEmailModalLabel">Send Email</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="emailSubject">Email Subject</label>
                                            <input type="text" class="form-control" id="emailSubject"
                                                placeholder="New Message">
                                        </div>
                                        <div class="form-group">
                                            <label for="emailGreeting">Email Greeting</label>
                                            <input type="text" class="form-control" id="emailGreeting"
                                                placeholder="Hello User">
                                        </div>

                                        <div class="form-group">
                                            <label for="emailMessage">Email Message</label>
                                            <textarea class="form-control" id="emailMessage" placeholder="Type your message here"></textarea>
                                        </div>



                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- activities modal -->
                    <div class="modal fade" id="sendEmailModal" tabindex="-1" role="dialog"
                        aria-labelledby="sendEmailModalLabel" aria-hidden="true">
                        <div class="modal-dialog " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="sendEmailModalLabel">Send Email</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- main-panel ends -->
                <!-- add user modal -->

                <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog"
                    aria-labelledby="addUserModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header mb-0">
                                <h5 class="modal-title " id="addUserModalLabel">Add New User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body ">
                                <form method="post" action="{{ url('/member/store') }}">
                                    @csrf
                                    <!-- @if ($errors->any())
                            @foreach ($errors->all() as $error)
    <div >{{ $error }}</div>
    @endforeach
                        @endif -->
                                    <div class="form-group ">
                                        <label for="userRole">User Type</label>
                                        <select class="form-control" id="userRole" name="roleid"
                                            value="{{ old('roleid') ? old('roleid') : '' }}">
                                            <option value=""> -- Select Role -- </option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}"
                                                    {{ old('roleid') == $role->id ? 'selected' : '' }}>{{ $role->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('roleid'))
                                            <span class="error">{{ $errors->first('roleid') }}</span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">User Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter user name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="error">{{ $errors->first('name') }}</span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="error">{{ $errors->first('email') }}</span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile Number</label>
                            <input type="text" class="form-control" id="mobile" name="mobile"
                                placeholder="Enter Mobile name" value="{{ old('mobile') }}">
                            @if ($errors->has('mobile'))
                                <span class="error">{{ $errors->first('mobile') }}</span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="error">{{ $errors->first('password') }}</span>
                        @enderror
                </div>

                <div class="form-group">
                    <label for="conformpassword">Confirm Password</label>
                    <input type="password" class="form-control" id="conformpassword"
                        name="conformpassword" placeholder="Conform Password">
                    @if ($errors->has('conformpassword'))
                        <span class="error">{{ $errors->first('conformpassword') }}</span>
                    @enderror
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="checkbox">
                    <label class="form-check-label" for="checkbox">
                        Required Email Verification
                    </label>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection

