<div class="scroll page-header p-3">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-between">
              <div class="col-sm-6">
                <h4 class="m-0">Teacher </h4>
              </div>
              <!-- /.col -->
              <div class="col-sm-3">
                <ol class="breadcrumb float-sm-right bg-color-background shadow-none">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">Teacher</li>
                </ol>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
          <!-- /.container-fluid -->
    </div>
    <div class="dashboard-body card bg-white mx-2">
      <div class="add-subject">
        <button type="button" onclick="hideShowSingle('addNew')" class="btn btn-success btn-sm mx-2 my-2"><i class="fa fa-plus"></i> Add Teacher</button>
      </div>
      <div class="card m-3 card-border rounded show-hide" id="addNew">
          <!-- Small boxes (Stat box) -->
        <div class="card-header bg-color-third ">
            <h6 class="text-white">Add Teacher</h6>
        </div>
        <div class="card-body">
          <form class="form" >
            <div class="row m-3 py-2">
                <div class="form-group col-md-4 py-2">
                    <div class="col-12">
                        <label for="first-name" class="form-label">First Name :</label>
                        <input type="text" class="form-control" placeholder="First Name" id="first-name">
                    </div>
                </div>

                <div class="form-group col-md-4 py-2">
                    <div class="col-12">
                        <label for="middle-name" class="form-label">Middle Name :</label>
                        <input type="text" placeholder="Middle Name" class="form-control" id="last-name">
                    </div>
                </div>
                <div class="form-group col-md-4 py-2">
                    <div class="col-12">
                        <label for="last-name" class="form-label">Last Name :</label>
                        <input type="text" placeholder="Last Name" class="form-control" id="last-name">
                    </div>
                </div>

                <div class="form-group col-md-6 py-2">
                    <div class="col-12">
                        <label for="address" class="form-label">  Address :</label>
                        <input type="text" class="form-control" placeholder="Address:" id="address">
                    </div>
                </div>

                <div class="form-group col-md-6 py-2">
                    <div class="col-12">
                        <label for=" Address" class="form-label"> Email</label>
                        <input type="email" class="form-control" placeholder="Your Email ID" id="email">
                    </div>
                </div>

                <div class="form-group col-md-6 py-2">
                    <div class="col-12">
                        <label for="date-of-birth" class="form-label">Date Of Birth :</label>
                        <input type="date" class="form-control" id="date-of-birth">
                    </div>
                </div>

                <div class="form-group col-md-6 py-2">
     
                    <div class="col-md-6">
                        <label for="first-name" class="form-label col-auto ">Gender :</label>
                    </div>
                    <div class="row ">
                        <div class="col-auto ">
                            <input type="radio" name="gender" class="form-check" id="first-name">
                        </div>
                        <label for="first-name" class="form-label col-auto ">Male</label>
                        <div class="col-auto">
                            <input type="radio" name="gender" class="form-check" id="first-name">
                        </div>
                        <label for="first-name" class="form-label col-auto ">Female</label>
                        <div class="col-auto">
                            <input type="radio" name="gender" class="form-check" id="first-name">
                        </div>
                        <label for="first-name" class="form-label col-auto ">Other</label>
                    </div>
                </div>

                <div class="form-group col-md-6 py-2">
                    <div class="col-12">
                        <label for="degree" class="form-label">Degree:</label>
                        <input type="text" class="form-control" placeholder=" Degree" id="degree">
                    </div>
                </div>
                
                <div class="form-group col-md-6 py-2">
                    <div class="col-12">
                        <label for="designation" class="form-label">Designation:</label>
                        <input type="text" class="form-control" placeholder="Mother Name" id="designation">
                    </div>
                </div>

                <div class="form-group col-md-6 py-2">
                    <div class="col-12">
                        <label for="phone-name" class="form-label">Phone Number :</label>
                        <input type="text" class="form-control" placeholder="Phone Number" id="phone-name">
                    </div>
                </div>
                <div class="form-group col-md-6 py-2">
                    <div class="col-12">
                        <label for="photo" class="form-label">Upload a Photo :</label>
                        <input type="file" class="form-control" placeholder="Parent Number" id="photo">
                    </div>
                </div> 
                
                <div class="form-group col-md-6 py-2">
                    <div class="col-12">
                        <label for="abouty-our-self" class="form-label"> About your self in 2 sentence:</label>
                        <textarea name="about-your-self" id="abouty-our-self" cols="50" rows="5"></textarea>
                    </div>
                </div>  
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <button type="reset" onclick="hideShowSingle('addNew')" class="btn btn-danger">Cancel</button>
          </form>
        </div>
      </div>

      <div class="container">
          <table class="table table-bordered">
            <thead>
                <tr>
                    <th>SNo.</th>
                    <th>Teacher Details</th>
                    <th>Contact Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>Shiva</td>
                    <td>Ram</td>
                    <td><select><option value="1">select</option></select></td>
                </tr>
            </tbody>
          </table>
      </div>

    </div>
  </div>
</div>
