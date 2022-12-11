<div class="scroll page-header p-3">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 justify-content-between">
              <div class="col-sm-6">
                <h4 class="m-0">Academics </h4>
              </div>
              <!-- /.col -->
              <div class="col-sm-3">
                <ol class="breadcrumb float-sm-right bg-color-background shadow-none">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">academics</li>
                  <li class="breadcrumb-item active"> Class</li>
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
        <button type="button" onclick="hideShowSingle('add-subject-cart')" class="btn btn-success btn-sm mx-2 my-2"> <i class="fa fa-plus" aria-hidden="true"></i> Add Class</button>
      </div>
      <div class="card m-2 col-md-7 border-primary rounded show-hide" id="add-subject-cart">
          <!-- Small boxes (Stat box) -->
        <div class="card-header bg-color-third">
            <h5 class="text-white">  Add Class</h5>
        </div>
        <div class="card-body mx-2 border-primary" width="15 rem">
          <form class="form" >
            <div class="row">
              <div class="form-group my-3 row">
                <div class="table-responsive">
                  <table class="table table-hover table-bordered">
                      <thead>
                        <tr>
                            <th>Class</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="add-section">
                        <tr>
                          <td><input type="text" class="form-control" name=""></td>
                          <td></td>
                        </tr>
                      </tbody>
                  </table>
                </div>
              </div>
              <div class="plus-btn">
                <button class="btn-success btn-sm" type="button" onclick="addNewRow('add-section')"> <i class="fa fa-plus" aria-hidden="true"></i></button>
              </div>


              <div class="form-group col-md-12 mt-4 d-flex justify-content-end">
                <!-- <hr> -->
                <div class="button">
                    <button type="submit" class="btn btn-success ">Save </button>
                    <button type="button" class="btn  btn-danger float-end" onclick="Javascript: hideShowSingle('add-subject-cart')">Close </button>
                </div>

              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="display-all-data m-2">
        <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>SNO.</th>
                <th>Section</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td>1</td>
                  <td>A</td>
                  <td >
                    <button class="btn btn-primary ml-3">edit</button>
                    <button class="btn btn-secondary">Delete</button>
                  </td>
                </tr>
            </tbody>

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
    html +='<td><button class="btn-danger btn-sm" type="button" onclick="removeNewRow(\''+num+'\')"> <i class="fa fa-minus" aria-hidden="true"></i></button></td></tr>'
    $("#"+data).append(html);
    num++;
  }
  function removeNewRow(id){
    $("#tr-"+id).remove();
  }
</script>

