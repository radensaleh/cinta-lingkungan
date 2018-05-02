<!DOCTYPE html>
<html>
<head>

  <link rel="icon" type="image/png "href="<?php echo e(URL::asset('images/031-recycling-bin.png')); ?>">
  <title>Data Trash</title>

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
      <li class="active">
        <a href="<?php echo e(route('typetrash')); ?>">
          <div class="icon">
            <i class="fa fa-trash" aria-hidden="true"></i>
          </div>
          <div class="title">Type Trash</div>
        </a>
      </li>
      <li>
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
        <li class="navbar-title">Data Trash</li>
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
      <li><a id="addDataLink" data-toggle="modal" data-target="#addData"><span class="fa fa-plus-circle"></span> Add Data</a></li>
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
        <form id="modal-form-add" action="<?php echo e(route('type-trash.store', 'tes')); ?>" method="post" role="form">
          <?php echo e(csrf_field()); ?>

          <div class="form-group has-success">
            <label for="id_trash" class="form-control-label">Id Trash</label>
            <input type="text" id="inputIdTrash" name="id_trash" class="form-control" required/>
            <span class="text-warning" ></span>
          </div>
          <div class="form-group has-success">
            <label for="type" class="form-control-label">Type Trash</label>
            <input type="text" id="inputTypeTrash" name="type" class="form-control" required />
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class=" btn btn-success"><span class="fa fa-plus-circle"></span> Submit</button>
        <button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> Close</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Delete Data-->
<div id="deleteData" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center"><span class="fa fa-check"></span> Delete Confirmation</h4>
      </div>
        <form id="modal-form-delete" method="post" action="<?php echo e(route('type-trash.destroy','test')); ?>">
            <?php echo e(method_field('delete')); ?>

            <?php echo e(csrf_field()); ?>

      <div class="modal-body">
            <input type="hidden" name="id_trash" id="cat_id" value="">
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
        Data Trash
      </div>
      <div class="card-body no-padding">
        <table class="datatable table table-striped primary" cellspacing="0" width="100%">
  <thead>
      <tr>
        <th>No</th>
        <th>Id Trash</th>
        <th>Type Trash</th>
        <th width ="250px">Actions</th>
      </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $trash; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$key); ?></td>
            <td><?php echo e($data->id_trash); ?></td>
            <td><?php echo e($data->type); ?></td>
            <td>
               <!-- <button class="btn btn-xs btn-info editmodal" value="<?php echo e($data->id); ?>">Edit</button> -->
               <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editData" data-id_trash = "<?php echo e($data->id_trash); ?>" data-type_trash="<?php echo e($data->type); ?>">
                 <span class="fa fa-edit"></span> Edit
               </button>
               <!-- <a class="btn btn-xs btn-danger" href="#">Hapus</a> -->
               <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteData" data-id_trash = "<?php echo e($data->id_trash); ?>">
                 <span class="fa fa-trash"></span> Delete
               </button>
            </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
      </div>
    </div>
  </div>

  <!-- Modal Edit Data-->
  <div id="editData" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-edit"></span> Edit Data</h4>
        </div>
          <form id="modal-form-edit" method="post" action="<?php echo e(route('type-trash.update','test')); ?>">
              <?php echo e(method_field('patch')); ?>

              <?php echo e(csrf_field()); ?>

        <div class="modal-body">
              <input type="hidden" name="id_trash" id="cat_id" value="">
            <div class="form-group has-warning">
              <label for="id_trash" class="form-control-label">Id Trash</label>
              <input type="text" id="id_trash" name="id_trash" class="form-control"  required />
            </div>
            <div class="form-group has-warning">
              <label for="type" class="form-control-label">Type Trash</label>
              <input type="text" id="type_trash" name="type" class="form-control"  required />
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-warning" id="btnEdit"><span class="fa fa-edit"></span> Edit</button>
          <button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> Close</button>
        </div>
        </form>
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

          $('#editData').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget) // Button that triggered the modal
            var id_trash = button.data('id_trash') // Extract info from data-* attributes
            var type_trash = button.data('type_trash')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-body #id_trash').val(id_trash)
            modal.find('.modal-body #type_trash').val(type_trash)
            modal.find('.modal-body #cat_id').val(id_trash)
            $("#id_trash").prop('disabled', true);
          });

          $('#deleteData').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id_trash = button.data('id_trash')
            var modal = $(this)
            modal.find('.modal-body #cat_id').val(id_trash)
          });

          // $("#submitAdd").attr("disabled", true);
          //
          // $( "#inputIdTrash" ).keyup(function() {
          //   $( "#inputTypeTrash" ).keyup(function() {
          //         $("#submitAdd").prop("disabled", !this.value);
          //   });
          // });
          //
          // $("#submitAdd").click(function(e){
          // 		e.preventDefault()
          // 		$.ajax({
          // 			method: 'POST',
          // 			url: '/type-trash-api',
          // 			data: $('#modalFormData').serialize(),
          // 			success: function( res ){
          // 				console.log(res)
          // 				if( res.error == 0 ){
          //           $('#addData').modal('hide');
          // 					swal(
          // 					  'Success',
          // 					  res.message,
          // 					  'success'
          // 					).then(OK => {
          //             if(OK){
          //               window.location.href = "<?php echo e(route('typetrash')); ?>";
          //             }
          //           });
          // 				} else{
          //           $('#addData').modal('hide');
          // 					swal(
          // 					  'Fail',
          // 					  res.message,
          // 					  'error'
          // 					)
          // 				}
          // 			}
          // 		})
          // });

          var formAdd    = $('#modal-form-add');
          var formEdit   = $('#modal-form-edit');
          var formDelete = $('#modal-form-delete');

          formAdd.submit(function (e) {
              e.preventDefault();

              $.ajax({
                  url: formAdd.attr('action'),
                  type: "POST",
                  data: formAdd.serialize(),
                  dataType: "json",
                  success: function( res ){
                    console.log(res)
                    if( res.error == 0 ){
                      $('#addData').modal('hide');
                      swal(
                        'Success',
                        res.message,
                            'success'
                        ).then(OK => {
                          if(OK){
                            window.location.href = "<?php echo e(route('typetrash')); ?>";
                          }
                        });
                    } else{
                        $('#addData').modal('hide');
                        swal(
                          'Fail',
                          res.message,
                          'error'
                        )
                      }
                    }
                })
            });

          formEdit.submit(function (e) {
              e.preventDefault();

              $.ajax({
                  url: formEdit.attr('action'),
                  type: "POST",
                  data: formEdit.serialize(),
                  dataType: "json",
                  success: function( res ){
            				console.log(res)
            				if( res.error == 0 ){
                      $('#editData').modal('hide');
            					swal(
            					  'Success',
            					  res.message,
                					  'success'
              					).then(OK => {
                          if(OK){
                            window.location.href = "<?php echo e(route('typetrash')); ?>";
                          }
                        });
                		} else{
                        $('#editData').modal('hide');
                				swal(
                				  'Fail',
              					  res.message,
              					  'error'
              					)
              				}
              			}
                })
            });

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
                              window.location.href = "<?php echo e(route('typetrash')); ?>";
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
