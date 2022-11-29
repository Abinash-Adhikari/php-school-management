<div class="scroll page-header p-3">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-between">
              <div class="col-sm-6">
                <h2 class="m-0">Dashboard </h2>
              </div>
              <!-- /.col -->
              <div class="col-sm-3">
                <ol class="breadcrumb float-sm-right bg-color-background">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
          <!-- /.container-fluid -->
    </div>
    <div class="dashboard-body card bg-white mx-2">
        <div class="card-body ">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info " style="border-radius:10px;">
                 <div class="row justify-content-center align-items-center">
                    <div class="col-4 pl-4" style="font-size:40px;">
                      <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <div class="col-8 pt-3 px-3 text-center">
                      <div class="inner">
                        <h3>150</h3>
                      </div>
                      <h5 class="text-center pb-2">New Orders</h5>
                    </div>
                 </div>
                    
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success" style="border-radius:10px;">
                  <div class="row justify-content-center align-items-center">
                    <div class="col-3 pl-4 " style="font-size:40px;">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <div class="col-8 pt-3 px-3 text-center">
                      <div class="inner">
                        <h3>50%</h3>
                      </div>
                      <h5 class="text-center pb-2">Bounce Rate</h5>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning" style="border-radius:10px;">
                  <div class="row justify-content-center align-items-center">
                    <div class="col-3 pl-4" style="font-size:40px;">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <div class="col-9 pt-3 px-3 text-center">
                      <div class="inner">
                        <h3>44</h3>
                      </div>
                      <h5 class="text-center pb-2">User Registrations</h5>
                    </div>                  
                  </div>
                  <!-- <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div> -->
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger" style="border-radius:10px;">
                <div class="row justify-content-center align-items-center">
                  <div class="col-3 pl-4" style="font-size:40px;">
                    <i class="fa-solid fa-chalkboard-user"></i>
                  </div>
                  <div class="col-9 pt-3 px-3 text-center ">
                    <div class="inner">
                      <h3>65</h3>
                    </div>
                    <h5 class="text-center pb-2">Unique Visitors</h5>
                  </div>
                  <!-- <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>     -->
                </div>
              </div>
              <!-- ./col -->
            </div>

            <!-- /.row -->
            <?php if(1==2) { ?>
              <div class="row my-2">
                <div class="col-md-4">
                    <div class="hamro-patro">
                        <p class="h3 m-2 text-center">Nepali Calendar</p>
                        <iframe src="https://www.hamropatro.com/widgets/calender-medium.php" 
                            frameborder="0" scrolling="no" marginwidth="0" marginheight="0" 
                            style="margin-left:2.5rem; border:none; overflow:hidden; width:395px; height:385px;" 
                            allowtransparency="true"></iframe>
                    </div>
                </div>  
                <div class="col-md-8">
                    <p class="h3 m-2 text-center">Today Checkin Details</p>
                    <div class="table-responsive table-fixed">
                        <table class="table table-border table-hover">
                            <thead>
                                <tr>
                                    <th>SNO.</th>
                                    <th>Staff Name</th>
                                    <th>Designation</th>
                                    <th>Check In</th>
                                    <th>Check Out</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Abinash Adhikari</td>
                                    <td>Teacher</td>
                                    <td><?php echo date('h:m:s') ?></td>
                                    <td><?php echo date('h:m:s') ?></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Abinash Adhikari</td>
                                    <td>Teacher</td>
                                    <td><?php echo date('h:m:s') ?></td>
                                    <td><?php echo date('h:m:s') ?></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Abinash Adhikari</td>
                                    <td>Teacher</td>
                                    <td><?php echo date('h:m:s') ?></td>
                                    <td><?php echo date('h:m:s') ?></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Abinash Adhikari</td>
                                    <td>Teacher</td>
                                    <td><?php echo date('h:m:s') ?></td>
                                    <td><?php echo date('h:m:s') ?></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Abinash Adhikari</td>
                                    <td>Teacher</td>
                                    <td><?php echo date('h:m:s') ?></td>
                                    <td><?php echo date('h:m:s') ?></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Abinash Adhikari</td>
                                    <td>Teacher</td>
                                    <td><?php echo date('h:m:s') ?></td>
                                    <td><?php echo date('h:m:s') ?></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Abinash Adhikari</td>
                                    <td>Teacher</td>
                                    <td><?php echo date('h:m:s') ?></td>
                                    <td><?php echo date('h:m:s') ?></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Abinash Adhikari</td>
                                    <td>Teacher</td>
                                    <td><?php echo date('h:m:s') ?></td>
                                    <td><?php echo date('h:m:s') ?></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Abinash Adhikari</td>
                                    <td>Teacher</td>
                                    <td><?php echo date('h:m:s') ?></td>
                                    <td><?php echo date('h:m:s') ?></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Abinash Adhikari</td>
                                    <td>Teacher</td>
                                    <td><?php echo date('h:m:s') ?></td>
                                    <td><?php echo date('h:m:s') ?></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Abinash Adhikari</td>
                                    <td>Teacher</td>
                                    <td><?php echo date('h:m:s') ?></td>
                                    <td><?php echo date('h:m:s') ?></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
