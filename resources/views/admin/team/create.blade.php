@extends('admin.layout.master')
  @section('main-content')
   <!-- Main content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create Team
        <small>All * field required</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <!-- form start -->
      <div class="box box-primary">
        <!-- /.box-header -->
      <form action="{{route('team.store')}}" method="post">
        <div class="box-body">
          <!-- row start -->
          <div class="row">
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for="fullname">Fullname <span class="text text-red">*</span></label>
                      <input type="text" name="fullname" class="form-control" id="fullname" placeholder="fullname">
                    </div>

                    <div class="form-group">
                    <label for="designation">Designation <span class="text text-red">*</span></label>
                      <input type="text" name="designation" class="form-control" id="designation" placeholder="designation">
                    </div>
                    <div class="form-group">
                      <label for="status">Status <span class="text text-red">*</span></label>
                      <input type="text" name="status" class="form-control" id="status" placeholder="status">
                    </div>
                </div>

                <div class="col-xs-6">
                   <div class="form-group">
                      <label for="image">Image <span class="text text-red">*</span></label>
                      <input type="file" name="image" class="form-control" id="image">
                    </div>
                  <div class="form-group">
                      <label for="facebook_id">Facebook ID</label>
                      <input type="text" name="facebook_id" class="form-control" id="facebook_id" placeholder="Facebook ID">
                    </div>

                    <div class="form-group">
                      <label for="twitter_id">Twitter ID</label>
                      <input type="text" name="twitter_id" class="form-control" id="twitter_id" placeholder="Twitter ID">
                    </div>

                    <div class="form-group">
                      <label for="instagram_id">Instagram ID</label>
                      <input type="text" name="instagram_id" class="form-control" id="instagram_id" placeholder="YouTube ID">
                    </div>
                    <div class="form-group">
                      <label for="linkedin_id">Linkedin ID</label>
                      <input type="text" name="linkedin_id" class="form-control" id="linkedin_id" placeholder="linkedin ID">
                    </div>
                </div>
            </div>

              <!-- row end -->

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
          </div>
      </form>
      </div>
      <!-- /.box -->

      <!-- form end -->

    </section>
    <!-- /.content -->
  </div>
    <!-- /.content -->
  @endsection
