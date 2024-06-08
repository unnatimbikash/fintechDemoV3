@extends('layouts.layout')
@section('title', 'setting')
@section('content')
<<<<<<< HEAD
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
                        {{-- <div class="col-md-6 p-1 d-flex align-items-center">
                <span class="mr-3 status-option active" id="investor" data-status="investor">Investor/User</span>
                <span class="mr-3 status-option" id="admin" data-status="admin">Admin Account</span>
                <span class="mr-3 status-option" id="all" data-status="all">All</span>
              </div> --}}
                        <div class="col-md-6 d-flex justify-content-end align-items-center p-3">
                            <input type="text" class="form-control mr-2" placeholder=" Quick Search...">
                            <i class="ti-filter mr-3"></i>
                            <i class="ti-file mr-3"></i>
                            <i class="ti-settings"></i>
                        </div>
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
                <!-- <div class="col-md-6 d-flex justify-content-end align-items-center p-3">
                  <input type="text" class="form-control mr-2" placeholder=" Quick Search...">
                  <i class="ti-filter mr-3"></i>
                  <i class="ti-file mr-3"></i>
                  <i class="ti-settings"></i>
                </div> -->
                <div class="col-md-6 d-flex justify-content-end align-items-center p-3">
                  <input type="text" class="form-control mr-2" placeholder=" Quick Search by TRNX ID...">
                  <i id="filter-icon" class="fa-solid fa-filter mr-3 text-primary" style="cursor: pointer;"></i>
                  <div class="dropdown">
                    <i class="fa-solid fa-file mr-3 text-primary" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false" style="cursor: pointer;"></i>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Entire</a>
                      <a class="dropdown-item" href="#">Minimal </a>
                      <a class="dropdown-item" href="#">Compact</a>
                    </div>
                  </div>
                  <div class="dropdown">
                    <i class="fa-solid fa-gear text-primary" id="settingsDropdown" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false" style="cursor: pointer;"></i>
                    <div class="dropdown-menu dropdown-menu-right p-1" aria-labelledby="settingsDropdown">
                      <h6 class="dropdown-header">Show</h6>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="showOptions" id="show10" value="10">
                        <label class="form-check-label" for="show10">10</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="showOptions" id="show20" value="20">
                        <label class="form-check-label" for="show20">20</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="showOptions" id="show30" value="30">
                        <label class="form-check-label" for="show30">30</label>
                      </div>

                      <h6 class="dropdown-header">Order By</h6>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="orderByOptions" id="orderByUserId"
                          value="UserId">
                        <label class="form-check-label" for="orderByUserId">UserId</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="orderByOptions" id="orderByName"
                          value="Name">
                        <label class="form-check-label" for="orderByName">Name</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="orderByOptions" id="orderByToken"
                          value="Token">
                        <label class="form-check-label" for="orderByToken">Token</label>
                      </div>

                      <h6 class="dropdown-header">Order</h6>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="orderOptions" id="orderAsc" value="ASC">
                        <label class="form-check-label" for="orderAsc">ASC</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="orderOptions" id="orderDesc"
                          value="DESC">
                        <label class="form-check-label" for="orderDesc">DESC</label>
                      </div>
                    </div>
                  </div>



                  <!-- <i class="ti-file mr-3"></i> -->

                  <!-- <i class="ti-settings"></i> -->
                </div>
                <div class="filter-section col-md-12">
                  <div class="row">
                    <div class="col-md-4">
                      <label for="filterId">Search by </label>

                      <div class="input-group">
                        <input type="text" id="filterId" class="form-control" placeholder="ID">
                        <select class="custom-select" id="inputGroupSelect04"
                          aria-label="Example select with button addon">
                          <!-- <option selected>Choose...</option> -->
                          <option value="name">Name</option>
                          <option value="email">Email</option>
                          <option value="id">Id</option>
                          <option value="wallet">Wallet</option>
                        </select>

                      </div>
                    </div>

                    <div class="col-md-3">
                      <label for="filteraccountstatus">Account Status</label>
                      <select id="filteraccountstatus" class="form-control">
                        <option value="all">All</option>
                        <option value="activated">Activated</option>
                        <option value="suspended">Suspended</option>


                      </select>
                    </div>

                    <div class="col-md-3">
                      <label for="filterregmethod">Reg Method</label>
                      <select id="filterregmethod" class="form-control">
                        <option value="all">All</option>
                        <option value="internal">Internal</option>
                        <option value="email">Email</option>
                        <option value="google">Google</option>
                        <option value="facebook">Facebook</option>
                        <!-- Add more currencies as needed -->
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label for="filterverifiedstatus">Verified Status</label>
                      <select id="filterverifiedstatus" class="form-control">
                        <option value="all">All</option>

                        <option value="email">Email</option>
                        <option value="kyc">KYC</option>
                        <option value="both">Both</option>
                        <!-- Add more currencies as needed -->
                      </select>
                    </div>






                  </div>
                  <div class="row mt-2">
                    <div class="col-md-3">
                      <label for="filtertokenbalance">Token Balance</label>
                      <select id="filtertokenbalance" class="form-control">
                        <option value="anyamount">Any Amount</option>

                        <option value="hastoken">Has Token</option>
                        <option value="zerotoken">Zero Token</option>
                        <option value="both">Both</option>
                        <!-- Add more currencies as needed -->
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label for="filterreferredby">Is Referred By</label>
                      <select id="filtertokenbalance" class="form-control">
                        <option value="any">Any</option>

                        <option value="yes">Yes</option>
                        <option value="no"> No</option>

                      </select>
                    </div>
                    <div class="col-md-2">
                      <!-- <label for="hasWallet">Has Wallet</label> -->



                      <div class="form-check mt-5">
                        <input class="form-check-input" type="checkbox" id="hasWallet"
                          style="transform: scale(1.5); ">
                        <label class="form-check-label " for="hasWallet">Has Wallet</label>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <!-- <label for="includeAdmin">Including Admin</label> -->
                      <div class="form-check mt-5">
                        <input class="form-check-input" type="checkbox" id="includeAdmin"
                          style="transform: scale(1.5);">
                        <label class="form-check-label" for="includeAdmin">Including Admin</label>
                      </div>
                    </div>


                    <div class="col-md-2 text-right">
                      <button class="btn btn-primary mt-4">Search</button>
                    </div>
                  </div>
                  <!-- <div class="row mt-2">


                    </div> -->
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
                                        @foreach ($users as $key => $user)
                                            <tr>
                                                <td>{{ $user->name}}<span><label class="badge badge-warning">{{$user->role}}</label></span></td>
                                                <td>{{ $user->email }}</td>
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
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#activitiesModal"><i
                                                                class="fa-solid fa-chart-line"></i> <span
                                                                class="mx-2">Activities</span></a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#referralsModal"><i
                                                                class="fa-solid fa-user-friends"></i> <span
                                                                class="mx-2">Referrals</span></a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa-solid fa-key"></i>
                                                            <span class="mx-2" onclick="resetpassword({{$key}})">Reset Pass</span></a>
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
                                                <i class="fa-solid fa-ellipsis" id="dropdownMenuButton2"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#viewDetailsModal"><i
                                                            class="fa-solid fa-info-circle"></i> <span class="mx-2">View
                                                            Details</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#sendEmailModal"><i class="fa-solid fa-envelope"></i>
                                                        <span class="mx-2">Send Email</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#activitiesModal"><i
                                                            class="fa-solid fa-chart-line"></i> <span
                                                            class="mx-2">Activities</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#referralsModal"><i
                                                            class="fa-solid fa-user-friends"></i> <span
                                                            class="mx-2">Referrals</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#resetPassModal"><i class="fa-solid fa-key"></i>
                                                        <span class="mx-2">Reset Pass</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#suspendModal"><i class="fa-solid fa-ban"></i> <span
                                                            class="mx-2">Suspend</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#verifyEmailModal"><i
                                                            class="fa-solid fa-envelope-circle-check"></i>
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
                                                <i class="fa-solid fa-ellipsis" id="dropdownMenuButton2"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"></i>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#viewDetailsModal"><i
                                                            class="fa-solid fa-info-circle"></i> <span class="mx-2">View
                                                            Details</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#sendEmailModal"><i class="fa-solid fa-envelope"></i>
                                                        <span class="mx-2">Send Email</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#activitiesModal"><i
                                                            class="fa-solid fa-chart-line"></i> <span
                                                            class="mx-2">Activities</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#referralsModal"><i
                                                            class="fa-solid fa-user-friends"></i> <span
                                                            class="mx-2">Referrals</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#resetPassModal"><i class="fa-solid fa-key"></i>
                                                        <span class="mx-2">Reset Pass</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#suspendModal"><i class="fa-solid fa-ban"></i> <span
                                                            class="mx-2">Suspend</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#verifyEmailModal"><i
                                                            class="fa-solid fa-envelope-circle-check"></i>
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
                                                <i class="fa-solid fa-ellipsis" id="dropdownMenuButton2"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"></i>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#viewDetailsModal"><i
                                                            class="fa-solid fa-info-circle"></i> <span class="mx-2">View
                                                            Details</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#sendEmailModal"><i class="fa-solid fa-envelope"></i>
                                                        <span class="mx-2">Send Email</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#activitiesModal"><i
                                                            class="fa-solid fa-chart-line"></i> <span
                                                            class="mx-2">Activities</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#referralsModal"><i
                                                            class="fa-solid fa-user-friends"></i> <span
                                                            class="mx-2">Referrals</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#resetPassModal"><i class="fa-solid fa-key"></i>
                                                        <span class="mx-2">Reset Pass</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#suspendModal"><i class="fa-solid fa-ban"></i> <span
                                                            class="mx-2">Suspend</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#verifyEmailModal"><i
                                                            class="fa-solid fa-envelope-circle-check"></i>
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
                                                <i class="fa-solid fa-ellipsis" id="dropdownMenuButton2"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"></i>
                                                <div class="dropdown-menu dropdown-menu-right"
                                                    aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#viewDetailsModal"><i
                                                            class="fa-solid fa-info-circle"></i> <span class="mx-2">View
                                                            Details</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#sendEmailModal"><i class="fa-solid fa-envelope"></i>
                                                        <span class="mx-2">Send Email</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#activitiesModal"><i
                                                            class="fa-solid fa-chart-line"></i> <span
                                                            class="mx-2">Activities</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#referralsModal"><i
                                                            class="fa-solid fa-user-friends"></i> <span
                                                            class="mx-2">Referrals</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#resetPassModal"><i class="fa-solid fa-key"></i>
                                                        <span class="mx-2">Reset Pass</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#suspendModal"><i class="fa-solid fa-ban"></i> <span
                                                            class="mx-2">Suspend</span></a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#verifyEmailModal"><i
                                                            class="fa-solid fa-envelope-circle-check"></i>
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
                  <form method="post" action="{{url('/member/store')}}">
                    @csrf
                    <!-- @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div >{{$error}}</div>
                        @endforeach
                    @endif -->
                    <div class="form-group ">
                      <label for="userRole">User Type</label>
                      <select class="form-control" id="userRole" name="roleid" value="{{old('roleid')?old('roleid'):''}}">
                          <option value=""> -- Select Role -- </option>
                        @foreach($roles as $role)
                          <option value="{{$role->id}}" {{(old('roleid')==$role->id?'selected':'')}}>{{$role->name}}</option>
                        @endforeach
                      </select>
                      @if($errors->has('roleid'))
                        <span class="error">{{ $errors->first('roleid') }}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="name">User Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Enter user name" value="{{old('name')}}">
                      @if($errors->has('name'))
                        <span class="error">{{ $errors->first('name') }}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{old('email')}}">
                      @if($errors->has('email'))
                        <span class="error">{{ $errors->first('email') }}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="mobile">Mobile Number</label>
                      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile name" value="{{old('mobile')}}">
                      @if($errors->has('mobile'))
                        <span class="error">{{ $errors->first('mobile') }}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
                      @if($errors->has('password'))
                        <span class="error">{{ $errors->first('password') }}</span>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="conformpassword">Confirm Password</label>
                      <input type="password" class="form-control" id="conformpassword" name="conformpassword" placeholder="Conform Password">
                      @if($errors->has('conformpassword'))
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const statusOptions = document.querySelectorAll('.status-option');
        const tableContainers = document.querySelectorAll('.table-container');

        statusOptions.forEach(option => {
            option.addEventListener('click', function() {
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
        forms.forEach(function(form) {
            form.style.display = 'none';
        });
        document.getElementById(formId).style.display = 'block';
    }
    function viewdetails(data){
        console.log(data);
        $('#viewname').text(data.name);
        $('#newphonenumber').text(data.mobile);
        $('#viewEmail').text(data.email);
        $('#viewdob').text(data.dob);
        $('#joiningdate').text(data.created_at);
        $('#viewlogin').text(data.lastlogin);
        $('#viewmainwallet').text(data.mainwallet);
        $('#viewstatus').text(data.status);
        if(data.kyc=="pending"){
            $('#viewkycstatus').addClass('fa-circle-question');
        }else if(data.kyc=="submitted"){
            $('#viewkycstatus').addClass('fa-hourglass-start');
        }else if(data.kyc=="verified"){
            $('#viewkycstatus').addClass('fa-circle-check');
        }else{
            $('#viewkycstatus').addClass('fa-circle-xmark');
        }
    }
    function resetpassword (params) {
       $('#passwordid').val(params)
    }
    function resetformsubmit(e){
        e.preventDefault();
        let passwordresetform=document.getElementById('passwordresetform');
        const formdata= new FormData(passwordresetform);
        $.ajax({
            type:'post',
            url:$('#passwordresetform').attr('action'),
            data:{
                '_token':formdata.get('_token'),
                'id':$('#passwordid').val(),
                'previouspassword':formdata.get('verifypassword'),
                'password':formdata.get('password'),
                'confirmpassword':formdata.get('confirmpassword'),
            },success:(data)=>{

            },error:(error)=>{

            }
        })
    }
</script>
