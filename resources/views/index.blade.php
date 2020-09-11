<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Required meta tags always come first  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap Template</title>
    <!--  Font Awesome  -->
   <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.7.0/css/all.css')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <!-- Custom styles -->
    <style>
      .side-nav .logo-sn {
      padding-bottom: 1rem;
      padding-top: 1rem;
    }

    .side-nav .logo-sn img {
      height: 38px;
    }

    .side-nav .search-form input[type=text] {
      margin-top: 0;
      padding-top: 12px;
      padding-bottom: 12px;
      border-top: 1px solid rgba(255, 255, 255, 0.3);
      border-bottom: 1px solid rgba(255, 255, 255, 0.3);
    }

    body {
      background-color: #eee;
    }

    .accordion .card {
      margin-bottom: 1.2rem;
      box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    }

    .accordion .card .card-body {
      border-top: 1px solid #eee;
    }
    
    </style>
</head>
<body>

    <!--Main Navigation-->
    <header>

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar double-nav">

            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse">
                    <i class="fa fa-bars"></i>
                </a>
            </div>

            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p>Material Design for Bootstrap</p>
            </div>

            <!-- Links -->
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="fa fa-envelope"></i>
                        <span class="clearfix d-none d-sm-inline-block">Contact</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">
                        <i class="fa fa-gear"></i>
                        <span class="clearfix d-none d-sm-inline-block">Settings</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i>
                        <span class="clearfix d-none d-sm-inline-block">Account</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>

        </nav>
        <!--/.Navbar-->

        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav fixed sn-bg-4">
            <ul class="custom-scrollbar">
                <!-- Logo -->
                <li class="logo-sn waves-effect">
                    <div class=" text-center">
                        <a href="#" class="pl-0">
                            <img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class="">
                        </a>
                    </div>
                </li>
                <!--/. Logo -->
                <!--Search Form-->
                <li>
                    <form class="search-form" role="search">
                        <div class="form-group md-form mt-0 pt-1 waves-light">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                </li>
                <!--/.Search Form-->
                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-right"></i>
                                Submit blog<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="#" class="waves-effect">Submit listing</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">Registration form</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-hand-pointer-o"></i>
                                Instruction<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="#" class="waves-effect">For bloggers</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">For authors</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-eye"></i> About<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="#" class="waves-effect">Introduction</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">Monthly meetings</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-envelope-o"></i> Contact
                                me<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="#" class="waves-effect">FAQ</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">Write a message</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">FAQ</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">Write a message</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">FAQ</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">Write a message</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">FAQ</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">Write a message</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <!--/. Side navigation links -->
            </ul>
            <div class="sidenav-bg rgba-blue-strong"></div>
        </div>
        <!--/. Sidebar navigation -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main>
        <div class="container-fluid">

            <!--Section: Modals-->
            <section>



            </section>
            <!--Section: Modals-->

            <!--Section: Main panel-->
            <section class="card card-cascade narrower mb-5">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-5">

                        <!--Panel Header-->
                        <div class="view view-cascade py-3 gradient-card-header info-color-dark">
                            <h5 class="mb-0">Sales</h5>
                        </div>
                        <!--/Panel Header-->

                        <!--Panel content-->
                        <div class="card-body">

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-6 mb-4">

                                    <!--Date select-->
                                    <p class="lead">
                                        <span class="badge info-color-dark p-2">Date range</span>
                                    </p>
                                    <select class="mdb-select colorful-select dropdown-info">
                                        <option value="" disabled>Choose time period</option>
                                        <option value="1">Today</option>
                                        <option value="2">Yesterday</option>
                                        <option value="3">Last 7 days</option>
                                        <option value="3">Last 30 days</option>
                                        <option value="3">Last week</option>
                                        <option value="3">Last month</option>
                                    </select>

                                    <!--Date pickers-->
                                    <p class="lead my-4">
                                        <span class="badge info-color-dark p-2">Custom date</span>
                                    </p>
                                    <div class="md-form">
                                        <input placeholder="Selected date" type="text" id="from" class="form-control datepicker">
                                        <label for="date-picker-example">From</label>
                                    </div>
                                    <div class="md-form">
                                        <input placeholder="Selected date" type="text" id="to" class="form-control datepicker">
                                        <label for="date-picker-example">To</label>
                                    </div>

                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-6 mb-4 text-center">

                                    <!--Summary-->
                                    <p>Total sales:
                                        <strong>2000$</strong>
                                        <button type="button" class="btn btn-info btn-sm p-2" data-toggle="tooltip"
                                            data-placement="top" title="Total sales in the given period">
                                            <i class="fa fa-question"></i>
                                        </button>
                                    </p>
                                    <p>Average sales:
                                        <strong>100$</strong>
                                        <button type="button" class="btn btn-info btn-sm p-2" data-toggle="tooltip"
                                            data-placement="top" title="Average daily sales in the given period">
                                            <i class="fa fa-question"></i>
                                        </button>
                                    </p>

                                    <!--Change chart-->
                                    <span class="min-chart my-4" id="chart-sales" data-percent="76">
                                        <span class="percent"></span>
                                    </span>
                                    <h5>
                                        <span class="badge green p-2">Change
                                            <i class="fa fa-arrow-circle-up ml-1"></i>
                                        </span>
                                        <button type="button" class="btn btn-info btn-sm p-2" data-toggle="tooltip"
                                            data-placement="top" title="Percentage change compared to the same period in the past">
                                            <i class="fa fa-question"></i>
                                        </button>
                                    </h5>

                                </div>
                                <!--Grid column-->

                            </div>
                            <!--Grid row-->

                        </div>
                        <!--Panel content-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-7">

                        <!--Panel Header-->
                        <div class="view view-cascade py-3 gradient-card-header info-color-dark mb-4">

                            <canvas id="lineChart"></canvas>

                        </div>
                        <!--/Card image-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Main panel-->

            <!--Section: Table-->
            <section class="mb-5">

                <!--Top Table UI-->
                <div class="card p-2 mb-5">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-12">

                            <!--Name-->
                            <select class="mdb-select colorful-select dropdown-primary mx-2">
                                <option value="" disabled selected>Bulk actions</option>
                                <option value="1">Delate</option>
                                <option value="2">Export</option>
                                <option value="3">Change segment</option>
                            </select>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6">

                            <!--Blue select-->
                            <select class="mdb-select colorful-select dropdown-primary mx-2">
                                <option value="" disabled selected>Show only</option>
                                <option value="1">All
                                    <span> (2000)</span>
                                </option>
                                <option value="2">Never opened
                                    <span> (200)</span>
                                </option>
                                <option value="3">Opened but unanswered
                                    <span> (1800)</span>
                                </option>
                                <option value="4">Answered
                                    <span> (200)</span>
                                </option>
                                <option value="5">Unsunscribed
                                    <span> (50)</span>
                                </option>
                            </select>
                            <!--/Blue select-->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6">

                            <!--Blue select-->
                            <select class="mdb-select colorful-select dropdown-primary mx-2">
                                <option value="" disabled selected>Filter segments</option>
                                <option value="1">Contacts in no segments
                                    <span> (100)</span>
                                </option>
                                <option value="1">Segment 1
                                    <span> (2000)</span>
                                </option>
                                <option value="2">Segment 2
                                    <span> (1000)</span>
                                </option>
                                <option value="3">Segment 3
                                    <span> (4000)</span>
                                </option>
                            </select>
                            <!--/Blue select-->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6">

                            <form class="form-inline mt-2 ml-2">
                                <input class="form-control my-0 py-0" type="text" placeholder="Search" style="max-width: 150px;">
                                <button class="btn btn-sm btn-info ml-2 px-2">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </div>
                <!--Top Table UI-->

                <!--Card-->
                <div class="card card-cascade narrower">

                    <!--Card header-->
                    <div class="view view-cascade py-3 gradient-card-header info-color-dark mx-4 d-flex justify-content-between align-items-center">

                        <div>
                            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                                <i class="fa fa-th-large mt-0"></i>
                            </button>
                            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                                <i class="fa fa-columns mt-0"></i>
                            </button>
                        </div>

                        <a href="" class="white-text mx-3">Table name</a>

                        <div>
                            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                                                                <i class="fas fa-pencil-alt mt-0"></i>                            </button>
                            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                                <i class="fas fa-times mt-0"></i>
                            </button>
                            <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                                <i class="fa fa-info-circle mt-0"></i>
                            </button>
                        </div>

                    </div>
                    <!--/Card header-->

                    <!--Card content-->
                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First column</th>
                                        <th>Second column</th>
                                        <th>Third column</th>
                                        <th>Fourth column</th>
                                        <th>Fifth column</th>
                                        <th>Sixth column</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach($users as $user)
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem Ipsum</td>
                                        <td>Lorem Ipsum</td>
                                        <td> <div>
                            <button type="button" class="btn btn-outline-black btn-rounded btn-sm px-2">
                                                                <i class="fas fa-pencil-alt mt-0"></i>                            </button>
                            <button type="button" class="btn btn-outline-black btn-rounded btn-sm px-2">
                                <i class="fas fa-times mt-0"></i>
                            </button>
                            <button type="button" class="btn btn-outline-black btn-rounded btn-sm px-2">
                                <i class="fa fa-info-circle mt-0"></i>
                            </button>
                        </div>
</td>
                                    </tr>
             @endforeach                      
                                   
                                </tbody>
                            </table>

            </div>
            <hr class="my-0">

            <!--Bottom Table UI-->
            <div class="d-flex justify-content-between">

              <!--Name-->
              <div class="wrap">
                <select class="mdb-select colorful-select dropdown-primary mt-2">
                  <option value="" disabled>Rows number</option>
                  <option value="1" selected>10 rows</option>
                  <option value="2">25 rows</option>
                  <option value="3">50 rows</option>
                  <option value="4">100 rows</option>
                </select>
              </div>
              <!--Pagination -->
              <nav class="mt-4">
                <ul class="pagination pagination-circle pg-blue mb-0">

                  <!--First-->
                  <li class="page-item disabled">
                    <a class="page-link">First</a>
                  </li>

                  <!--Arrow left-->
                  <li class="page-item disabled">
                    <a class="page-link" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>

                  <!--Numbers-->
                  <li class="page-item active">
                    <a class="page-link">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link">4</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link">5</a>
                  </li>

                  <!--Arrow right-->
                  <li class="page-item">
                    <a class="page-link" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>

                  <!--First-->
                  <li class="page-item">
                    <a class="page-link">Last</a>
                  </li>

                </ul>
              </nav>
              <!--/Pagination -->
            </div>
            <!--Bottom Table UI-->
          </div>
          <!--/.Card content-->

        </div>
        <!--/.Card-->
      </section>
      <!--Section: Table-->

      <!--Section: Accordion-->
      <section class="mb-5">

        <!--Accordion wrapper-->
        <div class="md-accordion accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

          <!-- Accordion card -->
          <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingOne">

              <!--Options-->
              <div class="dropdown float-left">
                <button class="btn btn-info btn-sm m-0 mr-3 p-2 dropdown-toggle" type="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-pencil-alt"></i>
                </button>
                <div class="dropdown-menu dropdown-info">
                  <a class="dropdown-item" href="#">Add new</a>
                  <a class="dropdown-item" href="#">Rename folder</a>
                  <a class="dropdown-item" href="#">Delete folder</a>
                </div>
              </div>

              <!-- Heading -->
              <a id="folder-1" data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                <h5 class="mt-1 mb-0">
                  <span>Folder 1</span>
                  <i class="fas fa-angle-down rotate-icon"></i>
                </h5>
              </a>

            </div>

            <!-- Card body -->
            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                squid. 3 wolf moon officia aute,
                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                accusamus
                labore sustainable VHS.
              </div>
            </div>
          </div>
          <!-- Accordion card -->

          <!-- Accordion card -->
          <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingTwo">

              <!--Options-->
              <div class="dropdown float-left">
                <button class="btn btn-info btn-sm m-0 mr-3 p-2 dropdown-toggle" type="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-pencil-alt"></i>
                </button>
                <div class="dropdown-menu dropdown-info">
                  <a class="dropdown-item" href="#">Add new</a>
                  <a class="dropdown-item" href="#">Rename folder</a>
                  <a class="dropdown-item" href="#">Delete folder</a>
                </div>
              </div>

              <!-- Heading -->
              <a id="folder-2" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <h5 class="mt-1 mb-0">
                  <span>Folder 2</span>
                  <i class="fas fa-angle-down rotate-icon"></i>
                </h5>
              </a>

            </div>

            <!-- Card body -->
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                squid. 3 wolf moon officia aute,
                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                accusamus
                labore sustainable VHS.
              </div>
            </div>
          </div>
          <!-- Accordion card -->

          <!-- Accordion card -->
          <div class="card">

            <!-- Card header -->
            <div class="card-header" role="tab" id="headingThree">

              <!--Options-->
              <div class="dropdown float-left">
                <button class="btn btn-info btn-sm m-0 mr-3 p-2 dropdown-toggle" type="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-pencil-alt"></i>
                </button>
                <div class="dropdown-menu dropdown-info">
                  <a class="dropdown-item" href="#">Add new</a>
                  <a class="dropdown-item" href="#">Rename folder</a>
                  <a class="dropdown-item" href="#">Delete folder</a>
                </div>
              </div>

              <!-- Heading -->
              <a id="folder-3" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree"
                aria-expanded="true" aria-controls="collapseThree">
                <h5 class="mt-1 mb-0">
                  <span>Folder 3</span>
                  <i class="fas fa-angle-down rotate-icon"></i>
                </h5>
              </a>
            </div>

            <!-- Card body -->
            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                squid. 3 wolf moon officia aute,
                non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch
                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                accusamus
                labore sustainable VHS.
              </div>
            </div>
          </div>
          <!-- Accordion card -->
        </div>
        <!--/.Accordion wrapper-->

      </section>
      <!--Section: Accordion-->

    </div>
  </main>
  <!--Main layout-->

  <!-- Footer -->
  <footer class="page-footer font-small">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

   

    <!--  SCRIPTS  -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
    <script>
        new WOW().init();

        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("../mdb-addons/mdb-lightbox-ui.html");
        });

        $(document).ready(function() {
  // SideNav Button Initialization
    $(".button-collapse").sideNav();
    // SideNav Scrollbar Initialization
    var sideNavScrollbar = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(sideNavScrollbar);
})
    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
    });
    // Data Picker Initialization
    $('.datepicker').pickadate();
    // Tooltip Initialization
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
    // Minimalist chart
    $(function () {
      $('.min-chart#chart-sales').easyPieChart({
        barColor: "#4caf50",
        onStep: function (from, to, percent) {
          $(this.el).find('.percent').text(Math.round(percent));
        }
      });
    });
    // Main chart
    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
      type: 'line',
      data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
          label: "My First dataset",
          fillColor: "#fff",
          backgroundColor: 'rgba(255, 255, 255, .3)',
          borderColor: 'rgba(255, 255, 255)',
          data: [0, 10, 5, 2, 20, 30, 45],
        }]
      },
      options: {
        legend: {
          labels: {
            fontColor: "#fff",
          }
        },
        scales: {
          xAxes: [{
            gridLines: {
              display: true,
              color: "rgba(255,255,255,.25)"
            },
            ticks: {
              fontColor: "#fff",
            },
          }],
          yAxes: [{
            display: true,
            gridLines: {
              display: true,
              color: "rgba(255,255,255,.25)"
            },
            ticks: {
              fontColor: "#fff",
            },
          }],
        }
      }
    });
    $(function () {
      $('#folder-1').click(function () {
        toastr.error("Folder 1 has been clicked!", "Folder 1", {
          "positionClass": "md-toast-top-right",
        });
      });
      $('#folder-2').click(function () {
        // make it not dissappear
        toastr.info("Folder 2 has been clicked!", "Folder 2", );
      });
      $('#folder-3').click(function () {
        // make it not dissappear
        toastr.info("Folder 3 has been clicked!", "Folder 3", );
      });
    });

    </script>


</body>
</html>