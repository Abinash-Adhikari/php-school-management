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
    <div class="dashboard-body card bg-white mx-2">
      <div class="add-subject">
        <button type="button" class="btn btn-success btn-sm mx-2 my-2">Add Subject</button>
      </div>
      <div class="card mx-2 my-2 card-border rounded">
          <!-- Small boxes (Stat box) -->
        <div class="card-header bg-color-first ">
            <h5 class="text-white">Add Subject</h5>
        </div>
        <div class="card-body">
          <form class="form" >
            <div class="row">

              <div class=" form-group col-md-6 row">
                <div class="col-auto">
                  <label for="class" class="col-form-label">Class:</label>
                </div>
                <div class="col-md-8">
                  <select class="form-select shadow-none" id="class">
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
              <div class="form-group col-md-6 row">
                <div class="col-auto float-end">
                  <label for="section" class="col-form-label">Section:</label>
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
            </div>
          </form>
        </div>
        <div class="card bg-success m-3">
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
        </div>
      </div>
    </div>
  </div>
</div>
