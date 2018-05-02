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
        <a href="<?php echo e(route('datacomplaint')); ?>">
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
      <li><a href="#" data-toggle="modal" data-target="#addData"><span class="fa fa-plus-circle"></span> Add Data</a></li>
    </ul>
  </div>
</div>

<!-- Modal Add Data-->
<div id="addData" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><span class="fa fa-user-plus"></span> Add Data</h4>
      </div>
      <div class="modal-body">
        <form action="data-complaint" method="post">
          <div class="form-group">
            <label for="no_ktp" class="form-control-label">NIK</label>
            <!-- <input type="text" name="no_ktp" class="form-control" required /> -->
            <select class="form-control">
              <?php $__currentLoopData = $dataUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($data->no_ktp); ?>"><?php echo e($data->no_ktp); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="form-group">
            <label for="id_trash" class="form-control-label">Id Trash</label>
            <!-- <input type="text" name="id_trash" class="form-control" required /> -->
            <select class="form-control">
              <?php $__currentLoopData = $dataTrash; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($data->id_trash); ?>"><?php echo e($data->id_trash); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="form-group">
            <label for="desc_complaint" class="form-control-label">Desc Complaint</label>
            <textarea name="desc_complaint" class="form-control" required></textarea>
          </div>
          <div class="form-group">
            <label for="photo_complaint" class="form-control-label">Upload Photo</label>
            <input type="file" name="photo" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="location" class="form-control-label">Location</label>
            <input type="text" name="location" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="date_complaint" class="form-control-label">Date Complaint</label>
            <input type="date" name="data_complaint" class="form-control" required />
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success"><span class="fa fa-plus-circle"></span> Submit</button>
        <button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> Close</button>
      </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal EDit Data-->
<!-- <div id="editData" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Data</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="no_ktp" class="form-control-label">Nomer KTP</label>
            <input type="text" name="no_ktp" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="id_trash" class="form-control-label">Id Trash</label>
            <input type="text" name="id_trash" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="desc_complaint" class="form-control-label">Complaint</label>
            <input type="text" name="desc_complaint" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="photo_complaint" class="form-control-label">Upload Photo</label>
            <input type="file" name="photo_complaint" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="location" class="form-control-label">Location</label>
            <input type="text" name="location" class="form-control" required />
          </div>
          <div class="form-group">
            <label for="date_complaint" class="form-control-label">Date Complaint</label>
            <input type="date" name="data_complaint" class="form-control" required />
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <input type="submit" name="send" class="btn btn-primary" value="Submit">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->

<!-- Modal Delete Data-->
<div id="deleteData" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center"><span class="fa fa-check">  </span> Delete Confirmation</h4>
      </div>
        <form id="modal-form-delete" method="post" action="<?php echo e(route('data-complaint.destroy','test')); ?>">
            <?php echo e(method_field('delete')); ?>

            <?php echo e(csrf_field()); ?>

      <div class="modal-body">
            <input type="hidden" name="id_complaint" id="cat_id" value="">
            <p><center>Are you sure you want to delete this ?</center></p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" id="btnDelete"><span class="fa fa-trash"></span> Yes, Delete</button>
        <button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> No, Cancel</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Detail Data-->
<div id="detailData" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> <span class="fa fa-info-circle">  </span> Detail Data</h4>
      </div>
      <div class="modal-body">
           <table class="table table-striped table-bordered table-hover no-footer">
               <tr>
                   <th>Id Complaint</th>
                   <td id="id_complaint"></td>
               </tr>
               <tr>
                   <th>NIK Pelapor</th>
                   <td id="no_ktp"></td>
               </tr>
               <tr>
                   <th>Id Trash</th>
                   <td id="id_trash"></td>
               </tr>
               <tr>
                   <th>Description</th>
                   <td id="desc_complaint"></td>
               </tr>
               <tr>
                   <th>Image</th>
                   <td id="photo_complaint" ></td>
               </tr>
               <tr>
                   <th>Location</th>
                   <td id="location"></td>
               </tr>
               <tr>
                    <th>Date Complaint</th>
                    <td id="date_complaint"></td>
               </tr>
           </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> Close</button>
      </div>
    </div>
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
        <th>Id Complaint</th>
        <th>NIK Pelapor</th>
        <th>Id Trash</th>
        <!-- <th>Description Complaint</th>
        <th>Photo</th>
        <th>Location</th> -->
        <th>Date Upload</th>
        <th>Actions</th>
      </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $dataComplaint; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($data->id_complaint); ?></td>
            <td><?php echo e($data->no_ktp); ?></td>
            <td><?php echo e($data->id_trash); ?></td>
            <!-- <td><?php echo e($data->desc_complaint); ?></td>
            <td><?php echo e($data->photo_complaint); ?></td>
            <td><?php echo e($data->location); ?></td> -->
            <td><?php echo e($data->date_complaint); ?></td>
            <td>
                <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#detailData" data-id_complaint="<?php echo e($data->id_complaint); ?>" data-no_ktp="<?php echo e($data->no_ktp); ?>" data-id_trash="<?php echo e($data->id_trash); ?>" data-desc_complaint="<?php echo e($data->desc_complaint); ?>" data-photo_complaint="<?php echo e($data->photo_complaint); ?>" data-location="<?php echo e($data->location); ?>" data-date_complaint="<?php echo e($data->date_complaint); ?>">
                  <span class="fa fa-info-circle"></span> Detail
                </button>
                <!-- <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editData" >
                  <span class="fa fa-edit"></span> Edit
                </button> -->
                <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteData" data-id_complaint="<?php echo e($data->id_complaint); ?>" >
                  <span class="fa fa-trash"></span> Hapus
                </button>
            </td>
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('js/flat-admin/vendor.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('js/flat-admin/app.js')); ?>"></script>
  <script src="https://unpkg.com/sweetalert2@7.1.0/dist/sweetalert2.all.js"></script>
  <script type="text/javascript">

      $(document).ready(function(){

        $('#deleteData').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget)
          var id_complaint = button.data('id_complaint')
          var modal = $(this)
          modal.find('.modal-body #cat_id').val(id_complaint)
        });

        $('#detailData').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget) // Button that triggered the modal
            var id_complaint = button.data('id_complaint') // Extract info from data-* attributes
            var no_ktp = button.data('no_ktp')
            var id_trash = button.data('id_trash')
            var desc_c = button.data('desc_complaint')
            var photo = button.data('photo_complaint')
            var location = button.data('location')
            var date = button.data('date_complaint')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-body #id_complaint').text(id_complaint)
            modal.find('.modal-body #no_ktp').text(no_ktp)
            modal.find('.modal-body #id_trash').text(id_trash)
            modal.find('.modal-body #desc_complaint').text(desc_c)
            modal.find('.modal-body #photo_complaint').text(photo)
            modal.find('.modal-body #location').text(location)
            modal.find('.modal-body #date_complaint').text(date)
          });

        var formDelete = $('#modal-form-delete');

        formDelete.submit(function (e) {
            e.preventDefault();

            $.ajax({
                url: formDelete.attr('action'),
                type: "POST",
                data: formDelete.serialize(),
                dataType: "json",
                success: function( res ){
                  console.log(res)
                  if( res.error == 0 ){
                    $('#deleteData').modal('hide');
                    swal(
                      'Success',
                      res.message,
                          'success'
                      ).then(OK => {
                        if(OK){
                          window.location.href = "<?php echo e(route('datacomplaint')); ?>";
                        }
                      });
                  } else{
                      $('#deleteData').modal('hide');
                      swal(
                        'Fail',
                        res.message,
                        'error'
                      )
                    }
                  }
              })
          });


      });

  </script>

</body>
</html>
