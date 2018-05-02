<!DOCTYPE html>
<html>
<head>

  <link rel="icon" type="image/png "href="<?php echo e(URL::asset('images/026-warning.png')); ?>">
  <title>Data Complaints</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/flat-admin/vendor.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/flat-admin/flat-admin.css')); ?>">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/flat-admin/theme/blue-sky.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/flat-admin/theme/blue.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/flat-admin/theme/red.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('css/flat-admin/theme/yellow.css')); ?>">

  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
  <div class="app app-default">

<aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
    <a class="sidebar-brand" href="<?php echo e(route('index')); ?>"><span class="highlight">Cinta</span> Lingkungan</a>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
      <li>
        <a href="<?php echo e(route('index')); ?>">
          <div class="icon">
            <i class="fa fa-tasks" aria-hidden="true"></i>
          </div>
          <div class="title">Dashboard</div>
        </a>
      </li>
      <li>
        <a href="<?php echo e(route('datausers')); ?>">
          <div class="icon">
            <i class="fa fa-users" aria-hidden="true"></i>
          </div>
          <div class="title">Data Users</div>
        </a>
      </li>
      <li>
        <a href="<?php echo e(route('typetrash')); ?>">
          <div class="icon">
            <i class="fa fa-trash" aria-hidden="true"></i>
          </div>
          <div class="title">Type Trash</div>
        </a>
      </li>
      <li class="active">
        <a href="<?php echo e(route('datareport')); ?>">
          <div class="icon">
            <i class="fa fa-exclamation" aria-hidden="true"></i>
          </div>
          <div class="title">Complaints</div>
        </a>
      </li>
      <!-- <li class="dropdown ">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-cube" aria-hidden="true"></i>
          </div>
          <div class="title">UI Kits</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> UI Kits</li>
            <li><a href="./uikits/customize.html">Customize</a></li>
            <li><a href="./uikits/components.html">Components</a></li>
            <li><a href="./uikits/card.html">Card</a></li>
            <li><a href="./uikits/form.html">Form</a></li>
            <li><a href="./uikits/table.html">Table</a></li>
            <li><a href="./uikits/icons.html">Icons</a></li>
            <li class="line"></li>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Advanced Components</li>
            <li><a href="./uikits/pricing-table.html">Pricing Table</a></li>
            <li><a href="./uikits/timeline.html">Timeline</a></li>
            <li><a href="./uikits/chart.html">Chart</a></li>
          </ul>
        </div>
      </li> -->
      <!-- <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-file-o" aria-hidden="true"></i>
          </div>
          <div class="title">Pages</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Admin</li>
            <li><a href="./pages/form.html">Form</a></li>
            <li><a href="./pages/profile.html">Profile</a></li>
            <li><a href="./pages/search.html">Search</a></li>
            <li class="line"></li>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Landing</li>
            <li><a href="./pages/landing.html">Landing</a></li>
            <li><a href="./pages/login.html">Login</a></li>
            <li><a href="./pages/register.html">Register</a></li>
            <li><a href="./pages/404.html">404</a></li>
          </ul>
        </div>
      </li> -->
    </ul>
  </div>
  <!-- <div class="sidebar-footer">
    <ul class="menu">
      <li>
        <a href="/" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-cogs" aria-hidden="true"></i>
        </a>
      </li>
      <li><a href="#"><span class="flag-icon flag-icon-th flag-icon-squared"></span></a></li>
    </ul>
  </div> -->
</aside>

<script type="text/ng-template" id="sidebar-dropdown.tpl.html">
  <div class="dropdown-background">
    <div class="bg"></div>
  </div>
  <div class="dropdown-container">
  </div>
</script>
<div class="app-container">

  <nav class="navbar navbar-default" id="navbar">
  <div class="container-fluid">
    <div class="navbar-collapse collapse in">
      <ul class="nav navbar-nav navbar-left">
        <li class="navbar-title">Data Complaints</li>
        <!-- <li class="navbar-search hidden-sm">
          <input id="search" type="text" placeholder="Search..">
          <button class="btn-search"><i class="fa fa-search"></i></button>
        </li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown notification">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></div>
            <div class="title">Delete Complaint</div>
            <div class="count">0</div>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">Delete Complaint</li>
              <li class="dropdown-empty">No Data</li>
              <li class="dropdown-footer">
                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </li>
        <!-- <li class="dropdown notification warning">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon"><i class="fa fa-comments" aria-hidden="true"></i></div>
            <div class="title">Unread Messages</div>
            <div class="count">99</div>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">Message</li>
              <li>
                <a href="#">
                  <span class="badge badge-warning pull-right">10</span>
                  <div class="message">
                    <img class="profile" src="https://placehold.it/100x100">
                    <div class="content">
                      <div class="title">"Payment Confirmation.."</div>
                      <div class="description">Alan Anderson</div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="badge badge-warning pull-right">5</span>
                  <div class="message">
                    <img class="profile" src="https://placehold.it/100x100">
                    <div class="content">
                      <div class="title">"Hello World"</div>
                      <div class="description">Marco  Harmon</div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="badge badge-warning pull-right">2</span>
                  <div class="message">
                    <img class="profile" src="https://placehold.it/100x100">
                    <div class="content">
                      <div class="title">"Order Confirmation.."</div>
                      <div class="description">Brenda Lawson</div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="dropdown-footer">
                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </li> -->
        <li class="dropdown notification danger">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon"><i class="fa fa-bell" aria-hidden="true"></i></div>
            <div class="title">System Notifications</div>
            <div class="count"><?php echo e($countTrash); ?></div>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">Notification Complaint</li>
              <li>
                <a href="#">
                  <span class="badge badge-danger pull-right"><?php echo e($countTrash); ?></span>
                  <div class="message">
                    <div class="content">
                      <div class="title">Complaint Trash</div>
                      <div class="description">All Data Complaint</div>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">0</span>
                  New Complaint
                </a>
              </li>
              <!-- <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">5</span>
                  Issues Report
                </a>
              </li> -->
              <li class="dropdown-footer">
                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="dropdown profile">
          <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
            <img class="profile-img" src="<?php echo e(URL::asset('images/unknow.jpg')); ?>">
            <div class="title">Profile</div>
          </a>
          <div class="dropdown-menu">
            <div class="profile-info">
              <h4 class="username">Admin</h4>
            </div>
            <ul class="action">
              <li>
                <a href="#">
                  Profile
                </a>
              </li>
              <!-- <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">5</span>
                  My Inbox
                </a>
              </li> -->
              <li>
                <a href="#">
                  Setting
                </a>
              </li>
              <li>
                <a href="#">
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <div class="btn-floating" id="help-actions">
  <div class="btn-bg"></div>
  <button type="button" class="btn btn-default btn-toggle" data-toggle="toggle" data-target="#help-actions">
    <i class="icon fa fa-plus"></i>
    <span class="help-text">Shortcut</span>
  </button>
  <div class="toggle-content">
    <ul class="actions">
      <li><a href="#">Add Data</a></li>
      <li><a href="#">Edit Data</a></li>
      <li><a href="#">Delete Data</a></li>
    </ul>
  </div>
</div>

<!-- <div class="row">
  <div class="col-xs-12">
    <div class="card card-banner card-chart card-green no-br">
      <div class="card-header">
        <div class="card-title">
          <div class="title">Top Sale Today</div>
        </div>
        <ul class="card-action">
          <li>
            <a href="/">
              <i class="fa fa-refresh"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <div class="ct-chart-sale"></div>
      </div>
    </div>
  </div>
</div> -->

<div class="row">
  <div class="col-xs-12">
    <div class="card">
      <div class="card-header">
        Data Complaints
      </div>
      <div class="card-body no-padding">
        <table class="datatable table table-striped primary" cellspacing="0" width="100%">
  <thead>
      <tr>
        <th>Id</th>
        <th>KTP</th>
        <th>Id Trash</th>
        <th>Complaint</th>
        <th>Photo</th>
        <th>Location</th>
        <th>Date</th>
      </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $dataReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($data->id_complaint); ?></td>
            <td><?php echo e($data->no_ktp); ?></td>
            <td><?php echo e($data->id_trash); ?></td>
            <td><?php echo e($data->desc_complaint); ?></td>
            <td><?php echo e($data->photo_complaint); ?></td>
            <td><?php echo e($data->location); ?></td>
            <td><?php echo e($data->data_complaint); ?></td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
      </div>
    </div>
  </div>


</div>

  <footer class="app-footer">
  <div class="row">
    <div class="col-xs-12">
      <div class="footer-copyright">
        Copyright © 2018 D4-RPL Polindra
      </div>
    </div>
  </div>
</footer>
</div>

  </div>

  <script type="text/javascript" src="<?php echo e(URL::asset('js/flat-admin/vendor.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('js/flat-admin/app.js')); ?>"></script>

</body>
</html>
