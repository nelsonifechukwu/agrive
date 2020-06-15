<?php
require_once('../backend/header-client.php');
require_once('../backend/sensor_values.php');
$page = $_SERVER['PHP_SELF'];
?>

<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<!-- THIS IS THE CLIENT DASHBOARD. THE USER SHOUDLNT BE ABLE TO SEE THE GRAPHS YET UNTIL HE HAS REGISTERED A FARM. THE REGISTER FARM PAGE WILL BE PART OF SIDE NAVBAR MENU.  -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv='refresh' content='15' URL='<?php echo $page; ?>'>

  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="../assets/img/agrive-favicon.svg" />
  <title>
    Agrive | Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="white-body white-content">
  <div class="wrapper">
    <div class="sidebar" data="green">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">

          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            <img src="../assets/img/agrive-logo-light.svg" alt="logo">
          </a>
        </div>
        <ul class="nav">
          <li class="active">
            <a href="./client-dashboard.php">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
							<a href="./add-farm.php">
								<i class="tim-icons icon-atom"></i>
								<p>
                  Add Farm
                </p>
							</a>
						</li>
           <li>
                <a href="./user.html">
                  <i class="tim-icons icon-single-02"></i>
                  <p>User Profile</p>
                </a>
            </li>
						<!-- <li>
							<a href="./map.html">
								<i class="tim-icons icon-pin"></i>
								<p>Maps</p>
							</a>
						</li> -->
          <!-- <li> 
							<a href="./notifications.html">
								<i class="tim-icons icon-bell-55"></i>
								<p>Notifications</p>
							</a>
						</li> -->
          <!-- <li>
							<a href="./typography.html">
								<i class="tim-icons icon-align-center"></i>
								<p>Typography</p>
							</a>
						</li>
						<li>
							<a href="./rtl.html">
								<i class="tim-icons icon-world"></i>
								<p>RTL Support</p>
							</a>
						</li>
						<li class="active-pro">
							<a href="./upgrade.html">
								<i class="tim-icons icon-spaceship"></i>
								<p>Upgrade to PRO</p>
							</a>
						</li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel" data="green">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal">
                  <i class="tim-icons icon-zoom-split"></i>
                  <span class="d-lg-none d-md-block">Search</span>
                </button>
              </li>
              <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="tim-icons icon-sound-wave"></i>
                  <p class="d-lg-none">
                    Notifications
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                  <li class="nav-link">
                    <a href="#" class="nav-item dropdown-item">Mike John responded to your email</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="../assets/img/anime3.png" alt="Profile Photo" />
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a></li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link"><a href="../backend/logout.php" class="nav-item dropdown-item">Log out</a></li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH" />
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Temperature</h5>
                <div class="row container">
                  <h2 class="card-title text-danger font-weight-bold">
                    <span id="tempValue"><?php echo $current_temperature; ?></span>&#176;C</h2> <!--THIS H TAG WILL SHOW THE MOST CURRENT VALUE OF THE TEMPERATURE GRAPH-->
                  <h4 class="ml-auto text-muted">Status: <span id="temperatureStatus" class = "<?php echo $temperature_class; ?>"><?php echo $temperature_status; ?></span></h4>
                </div>
                <div class="row container">
                  <h4 class="text-danger">Normal range: 
                      <span id="tempMinValue"><?php echo $min_temperature; ?></span>&#176;C - 
                      <span id="tempMaxValue"><?php echo $max_temperature; ?></span>&#176;C
                  </h4>
                </div>
                  <!-- <div class="col-sm-6">
                    <!-- <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
												<label class="btn btn-sm btn-primary btn-simple active" id="0">
													<input type="radio" name="options" checked />
													<span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Accounts</span>
													<span class="d-block d-sm-none">
														<i class="tim-icons icon-single-02"></i>
													</span>
												</label>
												<label class="btn btn-sm btn-primary btn-simple" id="1">
													<input type="radio" class="d-none d-sm-none" name="options" />
													<span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Purchases</span>
													<span class="d-block d-sm-none">
														<i class="tim-icons icon-gift-2"></i>
													</span>
												</label>
												<label class="btn btn-sm btn-primary btn-simple" id="2">
													<input type="radio" class="d-none" name="options" />
													<span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Sessions</span>
													<span class="d-block d-sm-none">
														<i class="tim-icons icon-tap-02"></i>
													</span>
												</label>
											</div>
                  </div> -->
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="temperatureChart"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Humidity</h5>
                <div class="row container">
                  <h3 class="card-title text-info font-weight-bold"><span id="humidityValue"><?php echo $current_humidity; ?></span>%</h3>  <!--THIS H TAG WILL SHOW THE MOST CURRENT VALUE OF THE HUMIDITY GRAPH-->
                  <h4 class="ml-auto text-muted">Status: <span id="humidityStatus" class="<?php echo $humidity_class; ?>"><?php echo $humidity_status; ?></span></h4>
                  <!-- The above h4 tag is the status tag. Depending on the current value and its comparison with the set ones, there will nbe three states.
                    # Good- give the h4 a class of "text-success" and change the text accordingly
                    #Too low - give the h4 a class of "text-danger" and change the text accordingly
                    #Too High - also give the h4 a class of "text-danger" and change the text accordingly
                    
                   The same applies to other graphs 
                  -->
                </div>
                <div class="row container">
                  <h4 class="text-info">Normal range: <span id="humidityMinValue"><?php echo $min_humidity; ?></span>% - <span id="humidityMaxValue"><?php echo $max_humidity; ?></span>%
                  </h4>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="humidityChart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Light Intensity</h5>
                <div class="row container">
                  <h3 class="card-title text-warning font-weight-bold"><span id="lightIntensityValue"><?php echo $current_light_intensity; ?></span>cd</h3> <!--THIS H TAG WILL SHOW THE MOST CURRENT VALUE OF THE LIGHT INTENSITY GRAPH-->
                  <h4 class="ml-auto text-muted">Status: <span id="lightIntensityStatus" class="<?php echo $light_intensity_class; ?>"><?php echo $light_intensity_status; ?></span></h4>
                </div>
                <div class="row container">
                  <h4 class="text-warning">Normal range: <span id="lightIntesityMinValue"><?php echo $min_light_intensity; ?></span>cd - <span id="lightIntesityMaxValue"><?php echo $max_light_intensity; ?></span>cd
                  </h4>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="lightIntensityChart"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Soil Moisture</h5>
                <div class="row container">
                  <h3 class="card-title text-primary font-weight-bold"><span id="soilMoistureValue"><?php echo $current_soil_moisture; ?></span>%</h3><!--THIS H TAG WILL SHOW THE MOST CURRENT VALUE OF THE SOIL MOISTURE GRAPH-->
                  <h4 class="ml-auto text-muted">Status: <span id="soilMoistureStatus" class="<?php echo $soil_moisture_class; ?>"><?php echo $soil_moisture_status; ?></span></h4>
                </div>
                <div class="row container">
                  <h4 class="text-primary">Normal range: <span id="soilMoistureMinValue"><?php echo $min_soil_moisture; ?></span>% - <span id="soilMoistureMaxValue"><?php echo $max_soil_moisture; ?></span>%
                  </h4>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="soilMoistureChart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Pressure</h5>
                <div class="row container">
                  <h3 class="card-title text-default font-weight-bold"><span id="pressureValue"><?php echo $current_pressure ?></span>Pa</h3><!--THIS H TAG WILL SHOW THE MOST CURRENT VALUE OF THE PRESSURE GRAPH-->
                  <h4 class="ml-auto text-muted">Status: <span id="pressureStatus" class="<?php echo $pressure_class; ?>"><?php echo $pressure_status; ?></span></h4>
                </div>
                <div class="row container">
                  <h4 class="text-default">Normal range: <span id="pressureMinValue"><?php echo $min_pressure; ?></span>Pa - <span id="pressureMaxValue"><?php echo $max_pressure; ?></span>Pa
                  </h4>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="pressureChart"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card card-tasks">
								<div class="card-header">
									<h6 class="title d-inline">Tasks(5)</h6>
									<p class="card-category d-inline">today</p>
									<div class="dropdown">
										<button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
											<i class="tim-icons icon-settings-gear-63"></i>
										</button>
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
											<a class="dropdown-item" href="#pablo">Action</a>
											<a class="dropdown-item" href="#pablo">Another action</a>
											<a class="dropdown-item" href="#pablo">Something else</a>
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="table-full-width table-responsive">
										<table class="table">
											<tbody>
												<tr>
													<td>
														<div class="form-check">
															<label class="form-check-label">
																<input class="form-check-input" type="checkbox" value="" />
																<span class="form-check-sign">
																	<span class="check"></span>
																</span>
															</label>
														</div>
													</td>
													<td>
														<p class="title">Update the Documentation</p>
														<p class="text-muted">Dwuamish Head, Seattle, WA 8:47 AM</p>
													</td>
													<td class="td-actions text-right">
														<button
															type="button"
															rel="tooltip"
															title=""
															class="btn btn-link"
															data-original-title="Edit Task"
														>
															<i class="tim-icons icon-pencil"></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check">
															<label class="form-check-label">
																<input class="form-check-input" type="checkbox" value="" checked="" />
																<span class="form-check-sign">
																	<span class="check"></span>
																</span>
															</label>
														</div>
													</td>
													<td>
														<p class="title">GDPR Compliance</p>
														<p class="text-muted">
															The GDPR is a regulation that requires businesses to protect the personal data and privacy
															of Europe citizens for transactions that occur within EU member states.
														</p>
													</td>
													<td class="td-actions text-right">
														<button
															type="button"
															rel="tooltip"
															title=""
															class="btn btn-link"
															data-original-title="Edit Task"
														>
															<i class="tim-icons icon-pencil"></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check">
															<label class="form-check-label">
																<input class="form-check-input" type="checkbox" value="" />
																<span class="form-check-sign">
																	<span class="check"></span>
																</span>
															</label>
														</div>
													</td>
													<td>
														<p class="title">Solve the issues</p>
														<p class="text-muted">
															Fifty percent of all respondents said they would be more likely to shop at a company
														</p>
													</td>
													<td class="td-actions text-right">
														<button
															type="button"
															rel="tooltip"
															title=""
															class="btn btn-link"
															data-original-title="Edit Task"
														>
															<i class="tim-icons icon-pencil"></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check">
															<label class="form-check-label">
																<input class="form-check-input" type="checkbox" value="" />
																<span class="form-check-sign">
																	<span class="check"></span>
																</span>
															</label>
														</div>
													</td>
													<td>
														<p class="title">Release v2.0.0</p>
														<p class="text-muted">Ra Ave SW, Seattle, WA 98116, SUA 11:19 AM</p>
													</td>
													<td class="td-actions text-right">
														<button
															type="button"
															rel="tooltip"
															title=""
															class="btn btn-link"
															data-original-title="Edit Task"
														>
															<i class="tim-icons icon-pencil"></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check">
															<label class="form-check-label">
																<input class="form-check-input" type="checkbox" value="" />
																<span class="form-check-sign">
																	<span class="check"></span>
																</span>
															</label>
														</div>
													</td>
													<td>
														<p class="title">Export the processed files</p>
														<p class="text-muted">
															The report also shows that consumers will not easily forgive a company once a breach
															exposing their personal data occurs.
														</p>
													</td>
													<td class="td-actions text-right">
														<button
															type="button"
															rel="tooltip"
															title=""
															class="btn btn-link"
															data-original-title="Edit Task"
														>
															<i class="tim-icons icon-pencil"></i>
														</button>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check">
															<label class="form-check-label">
																<input class="form-check-input" type="checkbox" value="" />
																<span class="form-check-sign">
																	<span class="check"></span>
																</span>
															</label>
														</div>
													</td>
													<td>
														<p class="title">Arival at export process</p>
														<p class="text-muted">Capitol Hill, Seattle, WA 12:34 AM</p>
													</td>
													<td class="td-actions text-right">
														<button
															type="button"
															rel="tooltip"
															title=""
															class="btn btn-link"
															data-original-title="Edit Task"
														>
															<i class="tim-icons icon-pencil"></i>
														</button>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Simple Table</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table tablesorter" id="">
											<thead class="text-primary">
												<tr>
													<th>
														Name
													</th>
													<th>
														Country
													</th>
													<th>
														City
													</th>
													<th class="text-center">
														Salary
													</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														Dakota Rice
													</td>
													<td>
														Niger
													</td>
													<td>
														Oud-Turnhout
													</td>
													<td class="text-center">
														$36,738
													</td>
												</tr>
												<tr>
													<td>
														Minerva Hooper
													</td>
													<td>
														Curaçao
													</td>
													<td>
														Sinaai-Waas
													</td>
													<td class="text-center">
														$23,789
													</td>
												</tr>
												<tr>
													<td>
														Sage Rodriguez
													</td>
													<td>
														Netherlands
													</td>
													<td>
														Baileux
													</td>
													<td class="text-center">
														$56,142
													</td>
												</tr>
												<tr>
													<td>
														Philip Chaney
													</td>
													<td>
														Korea, South
													</td>
													<td>
														Overland Park
													</td>
													<td class="text-center">
														$38,735
													</td>
												</tr>
												<tr>
													<td>
														Doris Greene
													</td>
													<td>
														Malawi
													</td>
													<td>
														Feldkirchen in Kärnten
													</td>
													<td class="text-center">
														$63,542
													</td>
												</tr>
												<tr>
													<td>
														Mason Porter
													</td>
													<td>
														Chile
													</td>
													<td>
														Gloucester
													</td>
													<td class="text-center">
														$78,615
													</td>
												</tr>
												<tr>
													<td>
														Jon Porter
													</td>
													<td>
														Portugal
													</td>
													<td>
														Gloucester
													</td>
													<td class="text-center">
														$98,615
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
        <footer class="footer">
          <div class="container-fluid">
            <!-- <ul class="nav">
							<li class="nav-item">
								<a href="javascript:void(0)" class="nav-link">
									Creative Tim
								</a>
							</li>
							<li class="nav-item">
								<a href="javascript:void(0)" class="nav-link">
									About Us
								</a>
							</li>
							<li class="nav-item">
								<a href="javascript:void(0)" class="nav-link">
									Blog
								</a>
							</li>
						</ul> -->
            <div class="copyright">
              ©
              <script>
                document.write(new Date().getFullYear());
              </script>
               made with <i class="tim-icons icon-heart-2"></i> by the
              <a href="javascript:void(0)" target="_blank">WeSolve</a> team for a better world.
            </div>
          </div>
        </footer>
      </div>
    </div>
    <div class="fixed-plugin">
      <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
          <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
          <li class="header-title">Sidebar Background</li>
          <li class="adjustments-line">
            <a href="javascript:void(0)" class="switch-trigger background-color">
              <div class="badge-colors text-center">
                <span class="badge filter badge-primary active" data-color="primary"></span>
                <span class="badge filter badge-info" data-color="blue"></span>
                <span class="badge filter badge-success" data-color="green"></span>
              </div>
              <div class="clearfix"></div>
            </a>
          </li>
          <li class="adjustments-line text-center color-change">
            <span class="color-label">LIGHT MODE</span>
            <span class="badge light-badge mr-2"></span>
            <span class="badge dark-badge ml-2"></span>
            <span class="color-label">DARK MODE</span>
          </li>
          
        </ul>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <!-- Place this tag in your head or just before your close body tag. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
    <script>
      $(document).ready(function () {
        $().ready(function () {
          $sidebar = $('.sidebar');
          $navbar = $('.navbar');
          $main_panel = $('.main-panel');

          $full_page = $('.full-page');

          $sidebar_responsive = $('body > .navbar-collapse');
          sidebar_mini_active = true;
          white_color = false;

          window_width = $(window).width();

          fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

          $('.fixed-plugin a').click(function (event) {
            if ($(this).hasClass('switch-trigger')) {
              if (event.stopPropagation) {
                event.stopPropagation();
              } else if (window.event) {
                window.event.cancelBubble = true;
              }
            }
          });

          $('.fixed-plugin .background-color span').click(function () {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('color');

            if ($sidebar.length != 0) {
              $sidebar.attr('data', new_color);
            }

            if ($main_panel.length != 0) {
              $main_panel.attr('data', new_color);
            }

            if ($full_page.length != 0) {
              $full_page.attr('filter-color', new_color);
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.attr('data', new_color);
            }
          });

          $('.switch-sidebar-mini input').on('switchChange.bootstrapSwitch', function () {
            var $btn = $(this);

            if (sidebar_mini_active == true) {
              $('body').removeClass('sidebar-mini');
              sidebar_mini_active = false;
              blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
            } else {
              $('body').addClass('sidebar-mini');
              sidebar_mini_active = true;
              blackDashboard.showSidebarMessage('Sidebar mini activated...');
            }

            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function () {
              window.dispatchEvent(new Event('resize'));
            }, 180);

            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function () {
              clearInterval(simulateWindowResize);
            }, 1000);
          });

          $('.switch-change-color input').on('switchChange.bootstrapSwitch', function () {
            var $btn = $(this);

            if (white_color == true) {
              $('body').addClass('change-background');
              setTimeout(function () {
                $('body').removeClass('change-background');
                $('body').removeClass('white-content');
              }, 900);
              white_color = false;
            } else {
              $('body').addClass('change-background');
              setTimeout(function () {
                $('body').removeClass('change-background');
                $('body').addClass('white-content');
              }, 900);

              white_color = true;
            }
          });

          $('.light-badge').click(function () {
            $('body').addClass('white-content');
          });

          $('.dark-badge').click(function () {
            $('body').removeClass('white-content');
          });
        });
      });
    </script>
    <script>
      $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
      });
    </script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
      window.TrackJS &&
        TrackJS.install({
          token: 'ee6fab19c5a04ac1a32a645abde4613a',
          application: 'black-dashboard-free',
        });
    </script>

    <!----------------------------------- CHART SCRIPT ------------------------------------->
    <script>
      demo.initDashboardPageCharts = function () {

          gradientChartOptionsConfigurationWithTooltipBlue = { //this specifies a format of the chart. You dont really need to be bothered about this though.
            maintainAspectRatio: false,
            legend: {
              display: false
            },

            tooltips: {
              backgroundColor: '#f5f5f5',
              titleFontColor: '#333',
              bodyFontColor: '#666',
              bodySpacing: 4,
              xPadding: 12,
              mode: "nearest",
              intersect: 0,
              position: "nearest"
            },
            responsive: true,
            scales: {
              yAxes: [{
                barPercentage: 1.6,
                gridLines: {
                  drawBorder: false,
                  color: 'rgba(29,140,248,0.0)',
                  zeroLineColor: "transparent",
                },
                ticks: {
                  suggestedMin: 60,
                  suggestedMax: 125,
                  padding: 20,
                  fontColor: "#2380f7"
                }
              }],

              xAxes: [{
                barPercentage: 1.6,
                gridLines: {
                  drawBorder: false,
                  color: 'rgba(29,140,248,0.1)',
                  zeroLineColor: "transparent",
                },
                ticks: {
                  padding: 20,
                  fontColor: "#2380f7"
                }
              }]
            }
          };

          gradientChartOptionsConfigurationWithTooltipPurple = { //this specifies a format of the chart
            maintainAspectRatio: false,
            legend: {
              display: false
            },

            tooltips: {
              backgroundColor: '#f5f5f5',
              titleFontColor: '#333',
              bodyFontColor: '#666',
              bodySpacing: 4,
              xPadding: 12,
              mode: "nearest",
              intersect: 0,
              position: "nearest"
            },
            responsive: true,
            scales: {
              yAxes: [{
                barPercentage: 1.6,
                gridLines: {
                  drawBorder: false,
                  color: 'rgba(29,140,248,0.0)',
                  zeroLineColor: "transparent",
                },
                ticks: {
                  suggestedMin: 0, //this specifies the minimun value on the Y axis for this particular format of the chart
                  suggestedMax: 50, //this specifies the maximum value on the Y axis for this particular format of the chart
                  padding: 20,
                  fontColor: "#9a9a9a"
                }
              }],

              xAxes: [{
                barPercentage: 1.6,
                gridLines: {
                  drawBorder: false,
                  color: 'rgba(225,78,202,0.1)',
                  zeroLineColor: "transparent",
                },
                ticks: {
                  padding: 20,
                  fontColor: "#9a9a9a"
                }
              }]
            }
          };

          gradientChartOptionsConfigurationWithTooltipOrange = {
            maintainAspectRatio: false,
            legend: {
              display: false
            },

            tooltips: {
              backgroundColor: '#f5f5f5',
              titleFontColor: '#333',
              bodyFontColor: '#666',
              bodySpacing: 4,
              xPadding: 12,
              mode: "nearest",
              intersect: 0,
              position: "nearest"
            },
            responsive: true,
            scales: {
              yAxes: [{
                barPercentage: 1.6,
                gridLines: {
                  drawBorder: false,
                  color: 'rgba(29,140,248,0.0)',
                  zeroLineColor: "transparent",
                },
                ticks: {
                  suggestedMin: 50, //minimum value for the Y axis of this format of the chart
                  suggestedMax: 110, //maximum value for the Y axis of this format of the chart
                  padding: 20,
                  fontColor: "#ff8a76"
                }
              }],

              xAxes: [{
                barPercentage: 1.6,
                gridLines: {
                  drawBorder: false,
                  color: 'rgba(220,53,69,0.1)',
                  zeroLineColor: "transparent",
                },
                ticks: {
                  padding: 20,
                  fontColor: "#ff8a76"
                }
              }]
            }
          };

          gradientChartOptionsConfigurationWithTooltipGreen = {
            maintainAspectRatio: false,
            legend: {
              display: false
            },

            tooltips: {
              backgroundColor: '#f5f5f5',
              titleFontColor: '#333',
              bodyFontColor: '#666',
              bodySpacing: 4,
              xPadding: 12,
              mode: "nearest",
              intersect: 0,
              position: "nearest"
            },
            responsive: true,
            scales: {
              yAxes: [{
                barPercentage: 1.6,
                gridLines: {
                  drawBorder: false,
                  color: 'rgba(29,140,248,0.0)',
                  zeroLineColor: "transparent",
                },
                ticks: {
                  suggestedMin: 50, //minimum value for the Y axis of this format of the chart
                  suggestedMax: 125, //maximum value for the Y axis of this format of the chart
                  padding: 20,
                  fontColor: "#9e9e9e"
                }
              }],

              xAxes: [{
                barPercentage: 1.6,
                gridLines: {
                  drawBorder: false,
                  color: 'rgba(0,242,195,0.1)',
                  zeroLineColor: "transparent",
                },
                ticks: {
                  padding: 20,
                  fontColor: "#9e9e9e"
                }
              }]
            }
          };


        //  gradientBarChartConfiguration = {
        //     maintainAspectRatio: false,
        //     legend: {
        //       display: false
        //     },

        //     tooltips: {
        //       backgroundColor: '#f5f5f5',
        //       titleFontColor: '#333',
        //       bodyFontColor: '#666',
        //       bodySpacing: 4,
        //       xPadding: 12,
        //       mode: "nearest",
        //       intersect: 0,
        //       position: "nearest"
        //     },
        //     responsive: true,
        //     scales: {
        //       yAxes: [{

        //         gridLines: {
        //           drawBorder: false,
        //           color: 'rgba(29,140,248,0.1)',
        //           zeroLineColor: "transparent",
        //         },
        //         ticks: {
        //           suggestedMin: 60,
        //           suggestedMax: 120,
        //           padding: 20,
        //           fontColor: "#9e9e9e"
        //         }
        //       }], 

        //       xAxes: [{

        //         gridLines: {
        //           drawBorder: false,
        //           color: 'rgba(29,140,248,0.1)',
        //           zeroLineColor: "transparent",
        //         },
        //         ticks: {
        //           padding: 20,
        //           fontColor: "#9e9e9e"
        //         }
        //       }]
        //     }
        //   };




        //THIS IS THE BEGINNING OF THE CHART GRAPH VALUES

        //HUMIDITY CHART
          var ctx = document.getElementById("humidityChart").getContext("2d");

          var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);

          gradientStroke.addColorStop(1, 'rgba(0, 131, 245,0.2)');
          gradientStroke.addColorStop(0.2, 'rgba(0, 131, 245,0.0)');
          gradientStroke.addColorStop(0, 'rgba(0, 131, 245,0)'); //purple colors

          var data = {
            labels: <?php echo $reading_time; ?>, //THE X AXES LABELS. I THINK THIS SHOULD BE HOURLY OR EVERY 6 HOURS DEPENDING ON HOW YOURE COLLECTING THE DATA
            datasets: [{
              label: "Data",
              fill: true,
              backgroundColor: gradientStroke,
              borderColor: '#0083F5',
              borderWidth: 2,
              borderDash: [],
              borderDashOffset: 0.0,
              pointBackgroundColor: '#0083F5',
              pointBorderColor: 'rgba(255,255,255,0)',
              pointHoverBackgroundColor: '#d048b6',
              pointBorderWidth: 20,
              pointHoverRadius: 4,
              pointHoverBorderWidth: 15,
              pointRadius: 4,
              data: <?php echo $humidity; ?>, //THESE ARE THE GRAPH VALUES
            }]
          };

          var myChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: gradientChartOptionsConfigurationWithTooltipPurple //THIS IS THE CHART FORMAT. THAT MEANS IF YOU WANT TO ADJUST THE MINIMUM OR MAXIMUM VALUE OF THE Y AXES OF ANY CHART, JUST LOOK FOR THIS SPECIFIC OBJECT AND CHANGE THE VALUES
          });



          //PRESSURE CHART
          var ctx = document.getElementById("pressureChart").getContext("2d");

          var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);

          gradientStroke.addColorStop(1, 'rgba(38, 49, 72,0.2)');
          gradientStroke.addColorStop(0.2, 'rgba(38, 49, 72,0.0)');
          gradientStroke.addColorStop(0, 'rgba(38, 49, 72,0)'); //purple colors

          var data = {
            labels: <?php echo $reading_time; ?>, //LABELS
            datasets: [{
              label: "Data",
              fill: true,
              backgroundColor: gradientStroke,
              borderColor: '#263148',
              borderWidth: 2,
              borderDash: [],
              borderDashOffset: 0.0,
              pointBackgroundColor: '#263148',
              pointBorderColor: 'rgba(255,255,255,0)',
              pointHoverBackgroundColor: '#d048b6',
              pointBorderWidth: 20,
              pointHoverRadius: 4,
              pointHoverBorderWidth: 15,
              pointRadius: 4,
              data: <?php echo $pressure; ?>, //CHART DATA
            }]
          };

          var myChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: gradientChartOptionsConfigurationWithTooltipPurple //CHART FORMAT
          });



          //LIGHT INTENSITY CHART
          var ctx = document.getElementById("lightIntensityChart").getContext("2d");

          var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);

          gradientStroke.addColorStop(1, 'rgba(255, 100, 145,0.2)');
          gradientStroke.addColorStop(0.2, 'rgba(255, 100, 145,0.0)');
          gradientStroke.addColorStop(0, 'rgba(255, 100, 145,0)'); //purple colors

          var data = {
            labels: <?php echo $reading_time; ?>, //LABELS
            datasets: [{
              label: "Data",
              fill: true,
              backgroundColor: gradientStroke,
              borderColor: '#ff8d72',
              borderWidth: 2,
              borderDash: [],
              borderDashOffset: 0.0,
              pointBackgroundColor: '#ff8d72',
              pointBorderColor: 'rgba(255,255,255,0)',
              pointHoverBackgroundColor: '#d048b6',
              pointBorderWidth: 20,
              pointHoverRadius: 4,
              pointHoverBorderWidth: 15,
              pointRadius: 4,
              data: <?php echo $light_intensity; ?>, //CHART DATA
            }]
          };

          var myChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: gradientChartOptionsConfigurationWithTooltipOrange //CHART FORMAT
          });



          //SOIL MOISTURE CHART
          var ctxGreen = document.getElementById("soilMoistureChart").getContext("2d");

          var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);

          gradientStroke.addColorStop(1, 'rgba(66,134,121,0.15)');
          gradientStroke.addColorStop(0.4, 'rgba(66,134,121,0.0)'); //green colors
          gradientStroke.addColorStop(0, 'rgba(66,134,121,0)'); //green colors

          var data = {
            labels: <?php echo $reading_time; ?>, //LABEL
            datasets: [{
              label: "My First dataset",
              fill: true,
              backgroundColor: gradientStroke,
              borderColor: '#00d6b4',
              borderWidth: 2,
              borderDash: [],
              borderDashOffset: 0.0,
              pointBackgroundColor: '#00d6b4',
              pointBorderColor: 'rgba(255,255,255,0)',
              pointHoverBackgroundColor: '#00d6b4',
              pointBorderWidth: 20,
              pointHoverRadius: 4,
              pointHoverBorderWidth: 15,
              pointRadius: 4,
              data: <?php echo $soil_moisture; ?>, //CHART DATA
            }]
          };

          var myChart = new Chart(ctxGreen, {
            type: 'line',
            data: data,
            options: gradientChartOptionsConfigurationWithTooltipGreen //CHART FORMAT

          });



          //TEMPERATURE CHART

          var chart_labels = <?php echo $reading_time; ?> //['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC']; //LABELS
          var chart_data = <?php echo $temperature; ?>// [23, 26, 31, 29, 28, 32, 25, 24, 25, 28, 30, 35]; //CHART DATA


          var ctx = document.getElementById("temperatureChart").getContext('2d');

          var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);

          gradientStroke.addColorStop(1, 'rgba(236, 37, 13,0.3)');
          gradientStroke.addColorStop(0.4, 'rgba(72,72,176,0.0)');
          gradientStroke.addColorStop(0, 'rgba(119,52,169,0)'); //purple colors
          var config = {
            type: 'line',
            data: {
              labels: chart_labels,
              datasets: [
                {
                  label: 'My First dataset',
                  fill: true,
                  backgroundColor: gradientStroke,
                  borderColor: '#ec250d',
                  borderWidth: 2,
                  borderDash: [],
                  borderDashOffset: 0.0,
                  pointBackgroundColor: '#ec250d',
                  pointBorderColor: 'rgba(255,255,255,0)',
                  pointHoverBackgroundColor: '#d346b1',
                  pointBorderWidth: 20,
                  pointHoverRadius: 4,
                  pointHoverBorderWidth: 15,
                  pointRadius: 4,
                  data: chart_data,
                },
              ],
            },
            options: gradientChartOptionsConfigurationWithTooltipPurple, //CHART FORMAT
          };
          var myChartData = new Chart(ctx, config);
          $("#0").click(function () {
            var data = myChartData.config.data;
            data.datasets[0].data = chart_data;
            data.labels = chart_labels;
            myChartData.update();
          });
          // $("#1").click(function() {
          //   var chart_data = [80, 120, 105, 110, 95, 105, 90, 100, 80, 95, 70, 120];
          //   var data = myChartData.config.data;
          //   data.datasets[0].data = chart_data;
          //   data.labels = chart_labels;
          //   myChartData.update();
          // });

          // $("#2").click(function() {
          //   var chart_data = [60, 80, 65, 130, 80, 105, 90, 130, 70, 115, 60, 130];
          //   var data = myChartData.config.data;
          //   data.datasets[0].data = chart_data;
          //   data.labels = chart_labels;
          //   myChartData.update();
          // });


        };
    </script>


</body>

</html>