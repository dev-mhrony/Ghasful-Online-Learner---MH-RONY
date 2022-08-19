<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Ghasful Learner || Online E-Learning</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="A fully featured admin theme which can be used to build CRM, CMS, etc."
      name="description"
    />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />

    <!-- plugins -->
    <link
      href="../../assets/libs/flatpickr/flatpickr.min.css"
      rel="stylesheet"
      type="text/css"
    />

    <!-- App css -->
    <link
      href="../../assets/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="../../assets/css/icons.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="../../assets/css/app.min.css"
      rel="stylesheet"
      type="text/css"
    />
  </head>

  <body>
    <!-- Begin page -->
    <div id="wrapper">
      <!-- Topbar Start -->
      <div class="navbar navbar-expand flex-column flex-md-row navbar-custom">
        <div class="container-fluid">
          <!-- LOGO -->
          <a href="../index.html" class="navbar-brand mr-0 mr-md-2 logo">
            <span class="logo-lg">
              <img src="../../assets/images/logo.png" alt="" height="24" />
              <span class="d-inline h5 ml-1 text-logo">Ghasful Learner</span>
            </span>
            <span class="logo-sm">
              <img src="../../assets/images/logo.png" alt="" height="24" />
            </span>
          </a>

          <ul
            class="navbar-nav bd-navbar-nav flex-row list-unstyled menu-left mb-0"
          >
            <li class="">
              <button class="button-menu-mobile open-left disable-btn">
                <i data-feather="menu" class="menu-icon"></i>
                <i data-feather="x" class="close-icon"></i>
              </button>
            </li>
          </ul>

          <ul
            class="navbar-nav flex-row ml-auto d-flex list-unstyled topnav-menu float-right mb-0"
          >
            <li class="d-none d-sm-block">
              <div class="app-search">
                <form>
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Search..."
                    />
                    <span data-feather="search"></span>
                  </div>
                </form>
              </div>
            </li>

            <li
              class="dropdown d-none d-lg-block"
              data-toggle="tooltip"
              data-placement="left"
              title="Change language"
            >
              <a
                class="nav-link dropdown-toggle mr-0"
                data-toggle="dropdown"
                href="#"
                role="button"
                aria-haspopup="false"
                aria-expanded="false"
              >
                <i data-feather="globe"></i>
              </a>

              <!-- Language Change -->
              <div class="dropdown-menu dropdown-menu-right">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                  <img
                    src="../../assets/images/flags/bd.png"
                    alt="user-image"
                    class="mr-2"
                    height="12"
                  />
                  <span class="align-middle">Bangla</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                  <img
                    src="../../assets/images/flags/us.jpg"
                    alt="user-image"
                    class="mr-2"
                    height="12"
                  />
                  <span class="align-middle">English</span>
                </a>
              </div>
            </li>

            <!-- Notification Menu -->
            <li
              class="dropdown notification-list"
              data-toggle="tooltip"
              data-placement="left"
              title="8 new unread notifications"
            >
              <a
                class="nav-link dropdown-toggle"
                data-toggle="dropdown"
                href="#"
                role="button"
                aria-haspopup="false"
                aria-expanded="false"
              >
                <i data-feather="bell"></i>
                <span class="noti-icon-badge"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                <!-- item-->
                <div class="dropdown-item noti-title border-bottom">
                  <h5 class="m-0 font-size-16">
                    <span class="float-right">
                      <a href="" class="text-dark">
                        <small>Clear All</small>
                      </a> </span
                    >Notification
                  </h5>
                </div>

                <div class="slimscroll noti-scroll">
                  <!-- item-->
                  <a
                    href="javascript:void(0);"
                    class="dropdown-item notify-item border-bottom"
                  >
                    <div class="notify-icon bg-primary">
                      <i class="uil uil-user-plus"></i>
                    </div>
                    <p class="notify-details">
                      New user registered.<small class="text-muted"
                        >5 hours ago</small
                      >
                    </p>
                  </a>

                  <!-- item-->
                  <a
                    href="javascript:void(0);"
                    class="dropdown-item notify-item border-bottom"
                  >
                    <div class="notify-icon">
                      <img
                        src="../../assets/images/users/avatar-1.jpg"
                        class="img-fluid rounded-circle"
                        alt=""
                      />
                    </div>
                    <p class="notify-details">Karen Robinson</p>
                    <p class="text-muted mb-0 user-msg">
                      <small
                        >Wow ! this admin looks good and awesome design</small
                      >
                    </p>
                  </a>

                  <!-- item-->
                  <a
                    href="javascript:void(0);"
                    class="dropdown-item notify-item border-bottom"
                  >
                    <div class="notify-icon">
                      <img
                        src="../../assets/images/users/avatar-2.jpg"
                        class="img-fluid rounded-circle"
                        alt=""
                      />
                    </div>
                    <p class="notify-details">Cristina Pride</p>
                    <p class="text-muted mb-0 user-msg">
                      <small
                        >Hi, How are you? What about our next meeting</small
                      >
                    </p>
                  </a>

                  <!-- item-->
                  <a
                    href="javascript:void(0);"
                    class="dropdown-item notify-item border-bottom active"
                  >
                    <div class="notify-icon bg-success">
                      <i class="uil uil-comment-message"></i>
                    </div>
                    <p class="notify-details">
                      Jaclyn Brunswick commented on Dashboard<small
                        class="text-muted"
                        >1 min ago</small
                      >
                    </p>
                  </a>

                  <!-- item-->
                  <a
                    href="javascript:void(0);"
                    class="dropdown-item notify-item border-bottom"
                  >
                    <div class="notify-icon bg-danger">
                      <i class="uil uil-comment-message"></i>
                    </div>
                    <p class="notify-details">
                      Caleb Flakelar commented on Admin<small class="text-muted"
                        >4 days ago</small
                      >
                    </p>
                  </a>

                  <!-- item-->
                  <a
                    href="javascript:void(0);"
                    class="dropdown-item notify-item"
                  >
                    <div class="notify-icon bg-primary">
                      <i class="uil uil-heart"></i>
                    </div>
                    <p class="notify-details">
                      Carlos Crouch liked
                      <b>Admin</b>
                      <small class="text-muted">13 days ago</small>
                    </p>
                  </a>
                </div>

                <!-- All-->
                <a
                  href="javascript:void(0);"
                  class="dropdown-item text-center text-primary notify-item notify-all border-top"
                >
                  View all
                  <i class="fi-arrow-right"></i>
                </a>
              </div>
            </li>

            <!-- Setting -->
            <li
              class="dropdown notification-list"
              data-toggle="tooltip"
              data-placement="left"
              title="Settings"
            >
              <a href="javascript:void(0);" class="nav-link right-bar-toggle">
                <i data-feather="settings"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- end Topbar -->

      <!-- ========== Left Sidebar Start ========== -->
      <div class="left-side-menu">
        <div class="media user-profile mt-2 mb-2">
          <img
            src="../../assets/images/user.jpg"
            class="avatar-sm rounded-circle mr-2"
            alt="Shreyu"
          />

          <div class="media-body">
            <h6 class="pro-user-name mt-0 mb-0">MH RONY</h6>
            <span class="pro-user-desc">Admin</span>
          </div>
          <div class="dropdown align-self-center profile-dropdown-menu">
            <a
              class="dropdown-toggle mr-0"
              data-toggle="dropdown"
              href="#"
              role="button"
              aria-haspopup="false"
              aria-expanded="false"
            >
              <span data-feather="chevron-down"></span>
            </a>
            <div class="dropdown-menu profile-dropdown">
              <a
                href="../../pages-profile.html"
                class="dropdown-item notify-item"
              >
                <i data-feather="settings" class="icon-dual icon-xs mr-2"></i>
                <span>Manage Account</span>
              </a>

              <div class="dropdown-divider"></div>

              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                <span>Logout</span>
              </a>
            </div>
          </div>
        </div>
        <div class="sidebar-content">
          <!--- Sidemenu -->
          <div id="sidebar-menu" class="slimscroll-menu">
            <ul class="metismenu" id="menu-bar">
              <!-- Deshbord -->
              <li>
                <a href="../index.php">
                  <i data-feather="grid"></i>

                  <span> Dashboard </span>
                </a>
              </li>
              <!-- Total Course -->
              <li class="active">
                <a href="total_course.php">
                  <i data-feather="book"></i>
                  <span>Total Course </span>
                </a>
              </li>
              <!-- Total Teacher -->
              <li>
                <a href="total_teacher.php">
                  <i data-feather="user"></i>
                  <span>Total Teacher </span>
                </a>
              </li>
              <!-- Total Student -->
              <li>
                <a href="total_student.php">
                  <i data-feather="users"></i>
                  <span>Total Student </span>
                </a>
              </li>

              <!-- Assignment -->
              <li>
                <a href="assignment.php">
                  <i data-feather="bookmark"></i>
                  <span> Assignment </span>
                  <span class="badge badge-success float-right">1</span>
                </a>
              </li>

              <!-- Setting -->
              <li>
                <a href="setting.php">
                  <i data-feather="settings"></i>
                  <span> Setting </span>
                </a>
              </li>
            </ul>
          </div>
          <!-- End Sidebar -->

        </div>
        <!-- Sidebar -left -->
      </div>
      <!-- Left Sidebar End -->

      <!-- ============================================================== -->
      <!-- Start Page Content here -->
      <!-- ============================================================== -->


      <div class="content-page">
        <div class="content">
          <div class="container-fluid">
            <div class="row page-title align-items-center">
              <div class="col-sm-4 col-xl-6">
                <h4 class="mb-1 mt-0">Total Course</h4>
              </div>
              <div class="col-sm-8 col-xl-6">
                <form class="form-inline float-sm-right mt-3 mt-sm-0">
                  <div class="btn-group">
                    <button
                      type="button"
                      class="btn btn-primary dropdown-toggle"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="uil uil-file-alt mr-1"></i>Add Course
                      
                    </button>

                  </div>

                  <div class="btn-group" style="margin-left: 10px;">
                    <button
                      type="button"
                      class="btn btn-primary dropdown-toggle"
                      data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="uil uil-check-square mr-1"></i> Manage Course
                    </button>

                  </div>
                </form>
              </div>
            </div>

            <!-- content -->
            <div class="row">
              <div class="col-md-6 col-xl-3">
                <div class="card">
                  <div class="card-body p-0">
                    <div class="media p-3">
                      <div class="media-body">
                        <span
                          class="text-muted text-uppercase font-size-12 font-weight-bold"
                          >Today Teacher</span
                        >
                        <h2 class="mb-0">2100</h2>
                      </div>
                      <div class="align-self-center">
                        <span
                          class="icon-lg icon-dual-primary"
                          data-feather="shopping-bag"
                        ></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-xl-3">
                <div class="card">
                  <div class="card-body p-0">
                    <div class="media p-3">
                      <div class="media-body">
                        <span
                          class="text-muted text-uppercase font-size-12 font-weight-bold"
                          >Total Student</span
                        >
                        <h2 class="mb-0">1065</h2>
                      </div>
                      <div class="align-self-center">
                        <span
                          class="icon-lg icon-dual-warning"
                          data-feather="coffee"
                        ></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-xl-3">
                <div class="card">
                  <div class="card-body p-0">
                    <div class="media p-3">
                      <div class="media-body">
                        <span
                          class="text-muted text-uppercase font-size-12 font-weight-bold"
                          >Total Course</span
                        >
                        <h2 class="mb-0">11</h2>
                      </div>
                      <div class="align-self-center">
                        <span
                          class="icon-lg icon-dual-success"
                          data-feather="users"
                        ></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-xl-3">
                <div class="card">
                  <div class="card-body p-0">
                    <div class="media p-3">
                      <div class="media-body">
                        <span
                          class="text-muted text-uppercase font-size-12 font-weight-bold"
                          >New Visitors</span
                        >
                        <h2 class="mb-0">750</h2>
                      </div>
                      <div class="align-self-center">
                        <span
                          class="icon-lg icon-dual-info"
                          data-feather="file-text"
                        ></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <!-- end row -->
          </div>
        </div>
        <!-- content -->

        <!-- Footer Start -->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                2019 &copy; Ghasful. All Rights Reserved. Crafted with
                <i class="uil uil-heart text-danger font-size-12"></i> by
                <a href="https://developerrony.com" target="_blank">MH RONY</a>
              </div>
            </div>
          </div>
        </footer>
        <!-- end Footer -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page content -->
      <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="../../assets/js/vendor.min.js"></script>

    <!-- optional plugins -->
    <script src="../../assets/libs/moment/moment.min.js"></script>
    <script src="../../assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="../../assets/libs/flatpickr/flatpickr.min.js"></script>

    <!-- page js -->
    <script src="../../assets/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="../../assets/js/app.min.js"></script>
  </body>
</html>
