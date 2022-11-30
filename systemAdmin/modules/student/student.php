<div class="scroll page-header p-3">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-between">
              <div class="col-sm-6">
                <h4 class="m-0">Student </h4>
              </div>
              <!-- /.col -->
              <div class="col-sm-3">
                <ol class="breadcrumb float-sm-right bg-color-background shadow-none">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">Student</li>
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
        <button type="button" onclick="hideShowSingle('addNew')" class="btn btn-success btn-sm mx-2 my-2"><i class="fa fa-plus"></i> Add student</button>
      </div>
      <div class="card m-3 card-border rounded show-hide" id="addNew">
          <!-- Small boxes (Stat box) -->
        <div class="card-header bg-color-third ">
            <h6 class="text-white">Add Student</h6>
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
                        <input type="text" placeholder="Last Name" class="form-control" id="last-name">
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
                        <label for="permanent-address" class="form-label"> Permanent Address :</label>
                        <input type="text" class="form-control" placeholder="Permanent Address:" id="permanent-address">
                    </div>
                </div>

                <div class="form-group col-md-6 py-2">
                    <div class="col-12">
                        <label for="temporary Address" class="form-label">Temporary Address</label>
                        <input type="text" class="form-control" placeholder="Temporary Address" id="temporary Address">
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
                        <label for="class-name" class="form-label">Class :</label>
                        <select class="form-select" name="" id="">
                            <option selected>Select class</option>
                            <option value="class1">Class 1</option>
                            <option value="class2">Class 2</option>
                            <option value="class3">Class 3</option>
                            <option value="class4">Class 4</option>
                            <option value="class5">Class 5</option>
                            <option value="class6">Class 6</option>
                            <option value="class7">Class 7</option>
                            <option value="class8">Class 8</option>
                            <option value="class9">Class 9</option>
                            <option value="class10">Class 10</option>
                        </select>
                        <!-- <input type="text" class="form-control" placeholder="Father Name" id="father-name"> -->
                    </div>
                </div>

                <div class="form-group col-md-6 py-2">
                    <div class="col-12">
                        <label for="section" class="form-label">Section :</label>
                        <select class="form-select" name="" id="">
                            <option >Select Option</option>
                            <option value="section-a">Section A</option>
                            <option value="section-b">Section B</option>
                            <option value="section-c">Section C</option>
                        </select>
                    </div>
                </div>

                <div class="form-group col-md-6 py-2">
                    <div class="col-12">
                        <label for="father-name" class="form-label">Father Name :</label>
                        <input type="text" class="form-control" placeholder="Father Name" id="father-name">
                    </div>
                </div>
                
                <div class="form-group col-md-6 py-2">
                    <div class="col-12">
                        <label for="mother-name" class="form-label">Mother Name :</label>
                        <input type="text" class="form-control" placeholder="Mother Name" id="mother-name">
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
                        <label for="parent-number" class="form-label">Parent Number :</label>
                        <input type="text" class="form-control" placeholder="Parent Number" id="parent-name">
                    </div>
                </div>  
                <div class="form-group col-md-6 py-2">
                    <div class="col-12">
                        <label for="photo" class="form-label">Upload a Photo :</label>
                        <input type="file" class="form-control" placeholder="Parent Number" id="photo">
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
                    <th>Student Details</th>
                    <th>Parent Details</th>
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
