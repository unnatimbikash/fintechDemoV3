@extends('layouts.layout')
@section('title', 'dashboard')
@section('content')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Welcome Aamir</h3>
            <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
          </div>
          <div class="col-12 col-xl-4">
           <div class="justify-content-end d-flex">
            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
              <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
               <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                <a class="dropdown-item" href="#">January - March</a>
                <a class="dropdown-item" href="#">March - June</a>
                <a class="dropdown-item" href="#">June - August</a>
                <a class="dropdown-item" href="#">August - November</a>
              </div>
            </div>
           </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card tale-bg">
          <div class="card-people mt-auto">
            <img src="images/dashboard/people.svg" alt="people">
            <div class="weather-info">
              <div class="d-flex">
                <div>
                  <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                </div>
                <div class="ml-2">
                  <h4 class="location font-weight-normal">Bangalore</h4>
                  <h6 class="font-weight-normal">India</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin transparent">
        <div class="row">

          <!-- <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-tale">
              <div class="card-body">
                <p class="mb-4">Today’s Transaction</p>
                <p class="fs-30 mb-2">85000</p>
                <div class="percentage-circle ms-3">
                  <span>6%</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <p class="mb-0">0 since last week</p>
                  <button class="btn btn-primary view-button">View</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
              <div class="card-body">
                <p class="mb-4">Total Users</p>
                <div class="d-flex align-items-center">
                  <p class="fs-30 mb-2 mb-0">17</p>
                  <div class="percentage-circle ms-3">
                    <span>64%</span>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <p class="mb-0">0 since last week</p>
                  <button class="btn btn-primary view-button">View</button>
                </div>
              </div>
            </div>
          </div> -->
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-tale">
              <div class="card-body">
                <p class="mb-4">Today’s Transaction</p>
                <div class="d-flex align-items-center">
                  <p class="fs-30 mb-2 mb-0">85000</p>
                  <div class="percentage-circle ms-3">
                    <span>6%</span>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <p class="mb-0">0 since last week</p>
                  <button class="btn view-button">View</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
              <div class="card-body">
                <div class=" d-flex justify-content-between align-items-center">
                  <p class="mb-4">Total Users</p>
                  <div class="toggle-buttons">
                    <!-- Replace buttons with toggler icons -->
                    <button class="btn btn-outline-primary ms-2">User</button>
      <button class="btn btn-outline-primary ms-2">KYC</button>
                  </div>
                </div>


                <div class="d-flex align-items-center">
                  <p class="fs-30 mb-2 mb-0">17</p>
                  <div class="percentage-circle ms-3">
                    <span>64%</span>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <p class="mb-0">0 since last week</p>
                  <button class="btn view-button">View</button>
                </div>
              </div>
            </div>
          </div>
       </div>
        <div class="row">
          <!-- <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
            <div class="card card-light-blue">
              <div class="card-body">

                <p class="mb-4">Wallet Balance</p>
                <p class="fs-30 mb-2">20 INR</p>

                <div class="container mt-3">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4" >
                    <p>0</p>
                    <p>Retailer</p>
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-5" >
                    <p>0</p>
                    <p>Distributor</p>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3" >
                    <p>0</p>
                    <p>API</p>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div> -->
          <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
            <div class="card card-light-blue">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <p class="mb-4">Wallet Balance</p>
                  <div class="toggle-buttons ">
                    <!-- Replace checkboxes with buttons -->
                    <button class="btn ms-2">API</button>
                    <button class="btn ms-2">Wallet</button>
                  </div>
                </div>
                <p class="fs-30 mb-2">20 INR</p>
                <div class="container mt-3">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                      <p>0</p>
                      <p>Retailer</p>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                      <p>0</p>
                      <p>Distributor</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                      <p>0</p>
                      <p>API</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 stretch-card transparent">
            <div class="card card-light-danger">
              <div class="card-body">
                <p class="mb-4">Number of Clients</p>
                <p class="fs-30 mb-2">47033</p>
                <p>0.22% (30 days)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <p class="card-title">registration Statistics</p>
            <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
            <div class="d-flex flex-wrap mb-5">
              <div class="mr-5 mt-3">
                <p class="text-muted">Master Distributor</p>
                <h3 class="text-primary fs-30 font-weight-medium">12.3k</h3>
              </div>
              <div class="mr-5 mt-3">
                <p class="text-muted">Distributor</p>
                <h3 class="text-primary fs-30 font-weight-medium">14k</h3>
              </div>
              <div class="mr-5 mt-3">
                <p class="text-muted">Merchant</p>
                <h3 class="text-primary fs-30 font-weight-medium">71.56%</h3>
              </div>
              <div class="mt-3">
                <p class="text-muted">Downloads</p>
                <h3 class="text-primary fs-30 font-weight-medium">34040</h3>
              </div>
            </div>
            <canvas id="order-chart" width="464" height="232" style="display: block; width: 464px; height: 232px;" class="chartjs-render-monitor"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
           <div class="d-flex justify-content-between">
            <p class="card-title">Transaction Graph</p>
            <a href="#" class="text-info">View all</a>
           </div>
            <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
            <div id="sales-legend" class="chartjs-legend mt-4 mb-2"><ul class="1-legend"><li><span style="background-color: rgb(152, 189, 255);"></span>Credit</li><li><span style="background-color: rgb(75, 73, 172);"></span>Debit</li></ul></div>
            <canvas id="sales-chart" width="464" height="232" style="display: block; width: 464px; height: 232px;" class="chartjs-render-monitor"></canvas>
          </div>
        </div>
      </div>
    </div>



    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body"><div class="d-flex justify-content-between">
            <p class="card-title">Total Transaction </p>
            <a href="#" class="text-info">View all</a>
           </div>
            <!-- <p class="card-title mb-0">Total Transactions</p> -->
            <div class="table-responsive">
              <table class="table table-striped table-borderless">
                <thead>
                  <tr>
                    <th>User</th>
                    <th>Transaction Id</th>
                    <th>Date</th>
                    <th>Amount(Rs)</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>John</td>
                    <td class="font-weight-bold">TXN327800</td>
                    <td>21 Sep 2018</td>
                    <td>3200</td>
                    <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                  </tr>
                  <tr>
                      <td>John</td>
                      <td class="font-weight-bold">TXN327800</td>
                      <td>21 Sep 2018</td>
                      <td>3200</td>
                    <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                  </tr>
                  <tr>
                      <td>John</td>
                      <td class="font-weight-bold">TXN327800</td>
                      <td>21 Sep 2018</td>
                      <td>3200</td>
                    <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                  </tr>
                  <tr>
                      <td>John</td>
                      <td class="font-weight-bold">TXN327800</td>
                      <td>21 Sep 2018</td>
                      <td>3200</td>
                    <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                  </tr>
                  <tr>
                      <td>John</td>
                      <td class="font-weight-bold">TXN327800</td>
                      <td>21 Sep 2018</td>
                      <td>3200</td>
                    <td class="font-weight-medium"><div class="badge badge-danger">Cancelled</div></td>
                  </tr>
                  <tr>
                      <td>John</td>
                      <td class="font-weight-bold">TXN327800</td>
                      <td>21 Sep 2018</td>
                      <td>3200</td>
                    <td class="font-weight-medium"><div class="badge badge-warning">Pending</div></td>
                  </tr>
                  <tr>
                      <td>John</td>
                      <td class="font-weight-bold">TXN327800</td>
                      <td>21 Sep 2018</td>
                      <td>3200</td>
                    <td class="font-weight-medium"><div class="badge badge-success">Completed</div></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
