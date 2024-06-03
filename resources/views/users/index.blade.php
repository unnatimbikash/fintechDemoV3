@extends('layouts.layout')
@section('title', 'setting')
@section('content')
<div class="content-wrapper">
    <div class="col-lg-12 stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title"> User Lists</h4>
            <p class="card-description">
            <div>
              <button class="btn btn-info mt-1" data-toggle="modal" data-target="#addUserModal">
                <i class="ti-plus mr-2 "></i> Add user
              </button>
            </div>
            </p>
            <div class="row border">
              <div class="col-md-6 p-1 d-flex align-items-center">
                <span class="mr-3 status-option active" id="investor" data-status="investor">Investor/User</span>
                <span class="mr-3 status-option" id="admin" data-status="admin">Admin Account</span>
                <span class="mr-3 status-option" id="all" data-status="all">All</span>
              </div>
              <div class="col-md-6 d-flex justify-content-end align-items-center p-3">
                <input type="text" class="form-control mr-2" placeholder=" Quick Search...">
                <i class="ti-filter mr-3"></i>
                <i class="ti-file mr-3"></i>
                <i class="ti-settings"></i>
              </div>
            </div>
            <div class="table-responsive pt-3">
              <div id="investorTable" class="table-container active">
                <!-- Add the respective form for investor here -->
                <div class="form-container" id="investorForm">
                  <!-- Investor form content -->
                  <table class="table table-hover">
                    <thead class="text-uppercase">
                      <tr>
                        <th>User</th>
                        <th>Email</th>
                        <th>Balance(Rs)</th>
                        <th>Verified Status</th>
                        <th>Last Login</th>
                        <th>Status</th>
                        <th>More</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Jacob <span><label class="badge badge-warning">Admin</label></span></td>
                        <td>Photoshop@gmail.com</td>
                        <td>6543</td>
                        <td><i class="fa-solid fa-triangle-exclamation mr-2 text-danger"></i><span><label
                              class="badge ">Email</label></span><i
                            class="fa-regular fa-circle-question mr-2 text-warning"></i><span><label
                              class="badge">Kyc</label></span></td>
                        <td>Not logged yet</td>
                        <td><label class="badge badge-success">Active</label></td>

                        <td class="dropdown">
                          <i class="fa-solid fa-ellipsis" id="dropdownMenuButton2" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"></i>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                            <a class="dropdown-item" href="#" data-toggle="modal"
                              data-target="#viewDetailsModal"><i class="fa-solid fa-info-circle"></i> <span
                                class="mx-2">View Details</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#sendEmailModal"><i
                                class="fa-solid fa-envelope"></i> <span class="mx-2">Send Email</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal"
                              data-target="#activitiesModal"><i class="fa-solid fa-chart-line"></i> <span
                                class="mx-2">Activities</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#referralsModal"><i
                                class="fa-solid fa-user-friends"></i> <span class="mx-2">Referrals</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#resetPassModal"><i
                                class="fa-solid fa-key"></i> <span class="mx-2">Reset Pass</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#suspendModal"><i
                                class="fa-solid fa-ban"></i> <span class="mx-2">Suspend</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal"
                              data-target="#verifyEmailModal"><i class="fa-solid fa-envelope-circle-check"></i>
                              <span class="mx-2">Verify Email</span></a>
                          </div>
                        </td>

                      </tr>

                      <tr>
                        <td>Jacob <span><label class="badge badge-warning">Admin</label></span></td>
                        <td>Photoshop@gmail.com</td>
                        <td>6543</td>
                        <td><i class="fa-regular fa-circle-check mr-2 text-success "></i><span><label
                              class="badge ">Email</label></span><i
                            class="fa-regular fa-circle-question mr-2 text-warning"></i><span><label
                              class="badge">Kyc</label></span></td>
                        <td>24May,2024 11:10 AM</td>
                        <td><label class="badge badge-info">Inctive</label></td>
                        <td class="dropdown">
                          <i class="fa-solid fa-ellipsis" id="dropdownMenuButton2" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"></i>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                            <a class="dropdown-item" href="#" data-toggle="modal"
                              data-target="#viewDetailsModal"><i class="fa-solid fa-info-circle"></i> <span
                                class="mx-2">View Details</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#sendEmailModal"><i
                                class="fa-solid fa-envelope"></i> <span class="mx-2">Send Email</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal"
                              data-target="#activitiesModal"><i class="fa-solid fa-chart-line"></i> <span
                                class="mx-2">Activities</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#referralsModal"><i
                                class="fa-solid fa-user-friends"></i> <span class="mx-2">Referrals</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#resetPassModal"><i
                                class="fa-solid fa-key"></i> <span class="mx-2">Reset Pass</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#suspendModal"><i
                                class="fa-solid fa-ban"></i> <span class="mx-2">Suspend</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal"
                              data-target="#verifyEmailModal"><i class="fa-solid fa-envelope-circle-check"></i>
                              <span class="mx-2">Verify Email</span></a>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
              <div id="adminTable" class="table-container">
                <!-- Add the respective form for admin here -->
                <div class="form-container" id="adminForm">
                  <!-- Admin form content -->
                  <table class="table table-hover">
                    <thead class="text-uppercase">
                      <tr>
                        <th>User</th>
                        <th>Email</th>
                        <th>Balance(Rs)</th>
                        <th>Verified Status</th>
                        <th>Last Login</th>
                        <th>Status</th>
                        <th>More</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Jacob <span><label class="badge badge-warning">Admin</label></span></td>
                        <td>Photoshop@gmail.com</td>
                        <td>6543</td>
                        <td><i class="fa-solid fa-triangle-exclamation mr-2 text-danger"></i><span><label
                              class="badge ">Email</label></span><i
                            class="fa-regular fa-circle-question mr-2 text-warning"></i><span><label
                              class="badge">Kyc</label></span></td>
                        <td>Not logged yet</td>
                        <td><label class="badge badge-success">Active</label></td>
                        <td class="dropdown">
                          <i class="fa-solid fa-ellipsis" id="dropdownMenuButton2" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"></i>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                            <a class="dropdown-item" href="#" data-toggle="modal"
                              data-target="#viewDetailsModal"><i class="fa-solid fa-info-circle"></i> <span
                                class="mx-2">View Details</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#sendEmailModal"><i
                                class="fa-solid fa-envelope"></i> <span class="mx-2">Send Email</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal"
                              data-target="#activitiesModal"><i class="fa-solid fa-chart-line"></i> <span
                                class="mx-2">Activities</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#referralsModal"><i
                                class="fa-solid fa-user-friends"></i> <span class="mx-2">Referrals</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#resetPassModal"><i
                                class="fa-solid fa-key"></i> <span class="mx-2">Reset Pass</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#suspendModal"><i
                                class="fa-solid fa-ban"></i> <span class="mx-2">Suspend</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal"
                              data-target="#verifyEmailModal"><i class="fa-solid fa-envelope-circle-check"></i>
                              <span class="mx-2">Verify Email</span></a>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td>Jacob <span><label class="badge badge-warning">Admin</label></span></td>
                        <td>Photoshop@gmail.com</td>
                        <td>6543</td>
                        <td><i class="fa-regular fa-circle-check mr-2 text-success "></i><span><label
                              class="badge ">Email</label></span><i
                            class="fa-regular fa-circle-question mr-2 text-warning"></i><span><label
                              class="badge">Kyc</label></span></td>
                        <td>24May,2024 11:10 AM</td>
                        <td><label class="badge badge-info">Inctive</label></td>
                        <td class="dropdown">
                          <i class="fa-solid fa-ellipsis" id="dropdownMenuButton2" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"></i>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                            <a class="dropdown-item" href="#" data-toggle="modal"
                              data-target="#viewDetailsModal"><i class="fa-solid fa-info-circle"></i> <span
                                class="mx-2">View Details</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#sendEmailModal"><i
                                class="fa-solid fa-envelope"></i> <span class="mx-2">Send Email</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal"
                              data-target="#activitiesModal"><i class="fa-solid fa-chart-line"></i> <span
                                class="mx-2">Activities</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#referralsModal"><i
                                class="fa-solid fa-user-friends"></i> <span class="mx-2">Referrals</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#resetPassModal"><i
                                class="fa-solid fa-key"></i> <span class="mx-2">Reset Pass</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#suspendModal"><i
                                class="fa-solid fa-ban"></i> <span class="mx-2">Suspend</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal"
                              data-target="#verifyEmailModal"><i class="fa-solid fa-envelope-circle-check"></i>
                              <span class="mx-2">Verify Email</span></a>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
              <div id="allTable" class="table-container">
                <!-- Add the respective form for all here -->
                <div class="form-container" id="allForm">
                  <!-- All form content -->
                  <table class="table table-hover">
                    <thead class="text-uppercase">
                      <tr>
                        <th>User</th>
                        <th>Email</th>
                        <th>Balance(Rs)</th>
                        <th>Verified Status</th>
                        <th>Last Login</th>
                        <th>Status</th>
                        <th>More</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Jacob <span><label class="badge badge-warning">Admin</label></span></td>
                        <td>Photoshop@gmail.com</td>
                        <td>6543</td>
                        <td><i class="fa-solid fa-triangle-exclamation mr-2 text-danger"></i><span><label
                              class="badge ">Email</label></span><i
                            class="fa-regular fa-circle-question mr-2 text-warning"></i><span><label
                              class="badge">Kyc</label></span></td>
                        <td>Not logged yet</td>
                        <td><label class="badge badge-success">Active</label></td>
                        <td class="dropdown">
                          <i class="fa-solid fa-ellipsis" id="dropdownMenuButton2" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"></i>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                            <a class="dropdown-item" href="#" data-toggle="modal"
                              data-target="#viewDetailsModal"><i class="fa-solid fa-info-circle"></i> <span
                                class="mx-2">View Details</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#sendEmailModal"><i
                                class="fa-solid fa-envelope"></i> <span class="mx-2">Send Email</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal"
                              data-target="#activitiesModal"><i class="fa-solid fa-chart-line"></i> <span
                                class="mx-2">Activities</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#referralsModal"><i
                                class="fa-solid fa-user-friends"></i> <span class="mx-2">Referrals</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#resetPassModal"><i
                                class="fa-solid fa-key"></i> <span class="mx-2">Reset Pass</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#suspendModal"><i
                                class="fa-solid fa-ban"></i> <span class="mx-2">Suspend</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal"
                              data-target="#verifyEmailModal"><i class="fa-solid fa-envelope-circle-check"></i>
                              <span class="mx-2">Verify Email</span></a>
                          </div>
                        </td>


                      </tr>

                      <tr>
                        <td>Jacob <span><label class="badge badge-warning">Admin</label></span></td>
                        <td>Photoshop@gmail.com</td>
                        <td>6543</td>
                        <td><i class="fa-regular fa-circle-check mr-2 text-success "></i><span><label
                              class="badge ">Email</label></span><i
                            class="fa-regular fa-circle-question mr-2 text-warning"></i><span><label
                              class="badge">Kyc</label></span></td>
                        <td>24May,2024 11:10 AM</td>
                        <td><label class="badge badge-info">Inctive</label></td>
                        <td class="dropdown">
                          <i class="fa-solid fa-ellipsis" id="dropdownMenuButton2" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"></i>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                            <a class="dropdown-item" href="#" data-toggle="modal"
                              data-target="#viewDetailsModal"><i class="fa-solid fa-info-circle"></i> <span
                                class="mx-2">View Details</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#sendEmailModal"><i
                                class="fa-solid fa-envelope"></i> <span class="mx-2">Send Email</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal"
                              data-target="#activitiesModal"><i class="fa-solid fa-chart-line"></i> <span
                                class="mx-2">Activities</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#referralsModal"><i
                                class="fa-solid fa-user-friends"></i> <span class="mx-2">Referrals</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#resetPassModal"><i
                                class="fa-solid fa-key"></i> <span class="mx-2">Reset Pass</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#suspendModal"><i
                                class="fa-solid fa-ban"></i> <span class="mx-2">Suspend</span></a>
                            <a class="dropdown-item" href="#" data-toggle="modal"
                              data-target="#verifyEmailModal"><i class="fa-solid fa-envelope-circle-check"></i>
                              <span class="mx-2">Verify Email</span></a>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
            <!-- Modals -->
            <!-- View Details Modal -->
            <div class="modal fade" id="viewDetailsModal" tabindex="-1" role="dialog"
              aria-labelledby="viewDetailsModalLabel" aria-hidden="true">
              <div class="modal-dialog " role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="viewDetailsModalLabel">View Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row ">
                      <div class="col-md-3 ">
                        <h4>Token Balance</h4>

                        <p>0</p>

                      </div>
                      <div class="col-md-3 ">
                        <h4>Contributed</h4>
                        <p>0 USD</p>
                      </div>
                      <div class="col-md-3  ">
                        <h4>User Status</h4>
                        <p class="badge badge-danger">Suspend</p>
                      </div>
                      <div class="col-md-3">
                        <h4>Action</h4>
                        <i class="fa-solid fa-triangle-exclamation mr-2 text-danger"></i><span><label
                            class="badge ">Email</label></span><i
                          class="fa-regular fa-circle-question mr-2 text-warning"></i><span><label
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
                                <td>Bill Gates</td>
                              </tr>
                              <tr>
                                <th>Mobile No:</th>
                                <td>555 77 854</td>
                              </tr>
                              <tr>
                                <th>E-Mail Id:</th>
                                <td>xyz@gmail.com</td>
                              </tr>
                              <tr>
                                <th>D.o.B :</th>
                                <td>16th Jun 1998</td>
                              </tr>
                              <tr>
                                <th>Nationality:</th>
                                <td>Indian</td>
                              </tr>
                              <tr>
                                <th>Wallet Address:</th>
                                <td>Not Yet Added</td>
                              </tr>
                              <tr>
                                <th>Joining Date:</th>
                                <td>8th Nov 2023</td>
                              </tr>
                              <tr>
                                <th>Referred By:</th>
                                <td>Without Referral</td>
                              </tr>
                              <tr>
                                <th>Reg Method:</th>
                                <td>Internal</td>
                              </tr>
                              <tr>
                                <th>2FA Enabled:</th>
                                <td>No</td>
                              </tr>
                              <tr>
                                <th>last Login:</th>
                                <td>Not logged</td>
                              </tr>
                            </table>


                          </div>
                        </div>
                      </div>

                      <div>

                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                        <input type="text" class="form-control" id="emailSubject" placeholder="New Message">
                      </div>
                      <div class="form-group">
                        <label for="emailGreeting">Email Greeting</label>
                        <input type="text" class="form-control" id="emailGreeting" placeholder="Hello User">
                      </div>

                      <div class="form-group">
                        <label for="emailMessage">Email Message</label>
                        <textarea class="form-control" id="emailMessage"
                          placeholder="Type your message here"></textarea>
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
                  <form>
                    <div class="form-group ">
                      <label for="userRole">User Type</label>
                      <select class="form-control" id="userRole">
                        <option>White Label</option>
                        <option>Retailer</option>
                        <option>API Partner</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="userName">User Name</label>
                      <input type="text" class="form-control" id="userName" placeholder="Enter user name">
                    </div>
                    <div class="form-group">
                      <label for="userEmail">Email address</label>
                      <input type="email" class="form-control" id="userEmail" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="userNumber">Mobile Number</label>
                      <input type="text" class="form-control" id="userName" placeholder="Enter Mobile name">
                    </div>
                    <div class="form-group">
                      <label for="userPassword">Password</label>
                      <input type="password" class="form-control" id="userPassword" placeholder="Password">
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
      const statusOptions = document.querySelectorAll('.status-option');
      const tableContainers = document.querySelectorAll('.table-container');

      statusOptions.forEach(option => {
        option.addEventListener('click', function () {
          statusOptions.forEach(opt => opt.classList.remove('active'));
          option.classList.add('active');

          const status = option.getAttribute('data-status');
          tableContainers.forEach(container => {
            if (container.id.includes(status)) {
              container.classList.add('active');
            } else {
              container.classList.remove('active');
            }
          });
        });
      });
    });

    function showForm(formId) {
      var forms = document.querySelectorAll('.form-container');
      forms.forEach(function (form) {
        form.style.display = 'none';
      });
      document.getElementById(formId).style.display = 'block';
    }

  </script>

