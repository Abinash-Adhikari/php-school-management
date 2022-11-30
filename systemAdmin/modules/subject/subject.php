<div class="scroll page-header p-3">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-between">
              <div class="col-sm-6">
                <h2 class="m-0">Subject </h2>
              </div>
              <!-- /.col -->
              <div class="col-sm-3">
                <ol class="breadcrumb float-sm-right bg-color-background">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">Subject</li>
                </ol>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
          <!-- /.container-fluid -->
    </div>
    <div class="dashboard-body card bg-white p-2 m-1">
      <div class="add-subject">
        <button type="button" onclick="hideShowSingle('add-subject-cart')" class="btn btn-success btn-sm mx-2 my-2"> <i class="fa fa-plus" aria-hidden="true"></i> Add Subject</button>
      </div>
      <div class="card m-2 col-md-10 card-border show-hide" id="add-subject-cart">
          <!-- Small boxes (Stat box) -->
        <div class="card-header bg-color-third">
            <h5 class="text-white">  Add Subject</h5>
        </div>
        <div class="card-body mx-2">
          <form class="form" >
            <div class="row">
              <div class=" form-group col-md-6 my-3 row">
                <div class="col-auto">
                  <label for="class" class="col-form-label">Class :</label>
                </div>
                <div class="col-md-8">
                  <select class="form-select" id="class">
                    <option selected>Select Class</option>
                    <option value="1">Class One</option>
                    <option value="2">Class Two</option>
                    <option value="3">Class Three</option>
                    <option value="3">Class Four</option>
                    <option value="3">Class Five</option>
                    <option value="3">Class Six</option>
                    <option value="3">Class Seven</option>
                    <option value="3">Class Eight</option>
                    <option value="3">Class Nine</option>
                    <option value="3">Class Ten</option>
                  </select>
                </div>
              </div>
              <div class="form-group col-md-6 my-3 row">
                <div class="col-auto float-end">
                  <label for="section" class="col-form-label">Section :</label>
                </div>
                <div class="col-md-8">
                  <select class="form-select" id="section">
                    <option selected>Select Section</option>
                    <option value="1">Section A</option>
                    <option value="2">Section B</option>
                    <option value="3">Section C</option>
                    <option value="4">Section D</option>
                    </select>
                </div>
              </div>
              <div class="form-group my-3 row">
                <div class="table-responsive">
                  <table class="table table-hover table-bordered">
                      <thead>
                        <tr>
                            <th>SUBJECT</th>
                            <th>FM</th>
                            <th>PM</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="add-subject">
                        <tr>
                          <td><input type="text" class="form-control" name=""></td>
                          <td><input type="text" min="0" max="100" class="form-control" name=""></td>
                          <td><input type="text" min="0" max="100" class="form-control" name=""></td>
                          <td></td>
                        </tr>
                      </tbody>
                  </table>
                </div>
                <!-- <div class="form-group col-md-6 row">
                  <div class="col-auto float-end">
                    <label for="subject" class="col-form-label">Subject</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="" id="subject">
                  </div>
                </div>
                <div class="form-group col-md-6 row">
                  <div class="form-group col-md-6 row">
                    <div class="col-auto float-end">
                      <label for="fm" class="col-form-label">F.M</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" class="form-control" name="" id="fm">
                    </div>
                  </div>
                  <div class="form-group col-md-6 row">
                    <div class="col-auto float-end">
                      <label for="pm" class="col-form-label">P.M</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" class="form-control" name="" id="pm">
                    </div>
                  </div>
                </div> -->
              </div>
              <div class="plus-btn">
                <button class="btn-success btn-sm" type="button" onclick="addNewRow('add-subject')"> <i class="fa fa-plus" aria-hidden="true"></i></button>
              </div>
              <div class="form-group col-md-12 mt-4 text-end">
                <!-- <hr> -->
                  <button type="submit" class="btn btn-success">Save </button>

                      <button type="button" class="btn  btn-danger" onclick="Javascript: hideShowSingle('add-subject-cart')">Close </button>
              </div>
            </div>
          </form>
        </div>
        <!-- <div class="card bg-success m-3">
          <table class="table table-striped text-center">
            <thead>
              <tr>
                <th scope="col">SN.</th>
                <th scope="col">Subject</th>
                <th scope="col">Full Marks</th>
                <th scope="col">Pass Marks</th>
              </tr>
            </thead>
          </table>
        </div> -->
      </div>

      <div class="display-all-data m-2">
        <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>SNO.</th>
                <th>Class</th>
                <th>Subject</th>
                <th >Subject</th>
              </tr>
            </thead>

          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  var num =1;
  function addNewRow(data){
    const divId = document.getElementById(data);
    var html = '<tr id="tr-'+num+'"><td><input type="text" class="form-control" name=""></td>'
    html +='<td><input type="text" min="0" max="100" class="form-control" name=""></td>'
    html +='<td><input type="text" min="0" max="100" class="form-control" name=""></td>'
    html +='<td><button class="btn-danger btn-sm" type="button" onclick="removeNewRow(\''+num+'\')"> <i class="fa fa-minus" aria-hidden="true"></i></button></td></tr>'
    $("#"+data).append(html);
    num++;
  }
  function removeNewRow(id){
    $("#tr-"+id).remove();
  }
</script>

