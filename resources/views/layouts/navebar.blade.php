<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        {{-- <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="../images/logo.svg" class="mr-2" alt="logo"/></a> --}}
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../images/logo2.jpeg" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                        <span class="input-group-text" id="search">
                            <i class="icon-search"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                        aria-label="search" aria-describedby="search">
                </div>
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                    data-toggle="dropdown">
                    <i class="icon-bell mx-0"></i>
                    <span class="count"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                    aria-labelledby="notificationDropdown">
                    <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-success">
                                <i class="ti-info-alt mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-normal">Application Error</h6>
                            <p class="font-weight-light small-text mb-0 text-muted">
                                Just now
                            </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-warning">
                                <i class="ti-settings mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-normal">Settings</h6>
                            <p class="font-weight-light small-text mb-0 text-muted">
                                Private message
                            </p>
                        </div>
                    </a>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-info">
                                <i class="ti-user mx-0"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-normal">New user registration</h6>
                            <p class="font-weight-light small-text mb-0 text-muted">
                                2 days ago
                            </p>
                        </div>
                    </a>
                </div>
            </li>
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <img src="images/faces/face28.jpg" alt="profile" style="width: 30px; height: 30px;" />
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#profileModal"
                        onclick="showSection('myProfileContent', this)">
                        <i class="fa-solid fa-user text-primary"></i> My Profiles
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa-solid fa-chart-line text-primary"></i> Activity
                    </a>
                    <a class="dropdown-item" href="{{url('logout')}}">
                        <i class="ti-power-off text-primary"></i>
                        Logout
                    </a>
                </div>
            </li>
            <!-- <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            <img src="images/faces/face28.jpg" alt="profile"/>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item">

              My Profile
            </a>
            <a class="dropdown-item">

            Activity
            </a>
            <a class="dropdown-item">
              <i class="ti-power-off text-primary"></i>
              Logout
            </a>
          </div>
        </li> -->
            <li class="nav-item nav-settings d-none d-lg-flex">
                <a class="nav-link" href="#">
                    <i class="icon-ellipsis"></i>
                </a>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>

    </div>
</nav>
  <!-- Profile Modal -->
  <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel"
  aria-hidden="true">
  <div class="modal-dialog " role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="profileModalLabel">Profile</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <ul class="nav nav-tabs">
                  <li class="nav-item">
                      <a class="nav-link active" href="#"
                          onclick="showSection('myProfileContent', this)" style="padding: 10px;">My
                          Profile</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#" onclick="showSection('securityContent', this)"
                          style="padding: 10px;">Security</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#"
                          onclick="showSection('changePasswordContent', this)" style="padding: 10px;">Change
                          Password</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#" onclick="showSection('twofactorContent', this)"
                          style="padding: 10px;">Verification</a>
                  </li>
              </ul>
              <!-- my profile -->
              <div class="tab-content p-3 border">
                  <div id="myProfileContent" class="section-content" style="display: block;">
                      <div class="conatiner">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="col-md-12 my-2">
                                      <h5 for="profileName"> Full Name :</h5>
                                      <span>{{ user()->name }}</span>
                                  </div>
                                  <div class="col-md-12 my-2">
                                      <h5 for="profileName"> Email Id :</h5>
                                      <span>{{ user()->email }}</span>
                                  </div>
                                  <div class="col-md-12 my-2">
                                      <h5 for="profileMobileno">Mobile Nmber</h5>
                                      <span>{{ user()->mobile }}</span>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="col-md-12 my-2">
                                      <h5 for="profileName"> Date of Birth :</h5>
                                      <span>{{ user()->dob ? user()->dob : 'no data' }}</span>
                                  </div>
                                  <div class="col-md-12 my-2">
                                      <h5 for="profileName"> Shop Name :</h5>
                                      <span>{{ user()->shopname ? user()->shopname : 'no data' }}</span>
                                  </div>
                                  <div class="col-md-12 my-2">
                                      <h5>Designation:</h5>
                                      <span>{{ user()->designation ? user()->designation : 'no data' }}</span>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <a href="{{ url('member/editdetails') }}/{{ user()->id }}"
                                      class="btn btn-primary" style="float: right">Edit Profile</a>
                              </div>
                          </div>
                      </div>

                  </div>
                  <div id="securityContent" class="section-content" style="display: none;">
                      <h5> General Security Option</h5>
                      <div class="custom-control custom-switch mb-3">
                          <input type="checkbox" class="custom-control-input" id="saveActivityLog">
                          <label class="custom-control-label" for="saveActivityLog">Save Activity
                              Log</label>
                      </div>
                      <div class="custom-control custom-switch mb-3">
                          <input type="checkbox" class="custom-control-input" id="alertByEmail">
                          <label class="custom-control-label" for="alertByEmail">Alert by Email for unusual
                              activity</label>
                      </div>
                      <h5>Manage Notification</h5>
                      <div class="custom-control custom-switch mt-3 mb-3">

                          <input type="checkbox" class="custom-control-input"
                              id="getNotificationForPurchase">
                          <label class="custom-control-label" for="getNotificationForPurchase">Get
                              Notification
                              for
                              Purchase</label>
                      </div>
                  </div>
                  <div id="changePasswordContent" class="section-content" style="display: none;">
                      <form action="{{ url('member/resetpasswords') }}" onsubmit="resetformsubmit(event)"
                          method="POST" id="passwordresetform">
                          @csrf
                          <div class="modal-body">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Verify Password</label>
                                  <input type="password" class="form-control" id="verifypassword"
                                      name="verifypassword">
                                  <small class="form-text text-muted">We'll never share your email with
                                      anyone
                                      else.</small>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Your Password</label>
                                  <input type="password" class="form-control" id="password"
                                      name="password">
                                  <small class="form-text text-muted">We'll never share your email with
                                      anyone
                                      else.</small>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Confirm Password</label>
                                  <input type="password" class="form-control" id="confirmpassword"
                                      name="confirmpassword">
                                  <small id="confirmpassword" class="form-text text-muted">We'll never share
                                      your email with anyone else.</small>
                              </div>
                          </div>
                          <input type="hidden" class="form-control" name="id"
                              value="{{ user()->id }}">
                          <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                      </form>
                  </div>
                  <div id="twofactorContent" class="section-content" style="display: none;">
                      <p>Two-factor authentication is a method for protection your web account. When it is
                          activated
                          you need to enter not only your password, but also a special code. You can receive
                          this
                          code
                          by in mobile app. Even if third person will find your password, then can't access
                          with
                          that
                          code.</p>
                      <button type="submit" class="btn btn-primary">Enable 2FA</button>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>
