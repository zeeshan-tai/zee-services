@extends('admin.layout.master')
  @section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Author
        <small>All * field required</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <!-- form start -->
      <div class="box box-primary">
        <!-- /.box-header -->
        <form action="{{route('team.update',$team->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
        <div class="box-body">
          <!-- row start -->
          <div class="row">
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for="fullname">Fullname <span class="text text-red">*</span></label>
                      <input type="text" name="fullname" class="form-control" id="fullname" placeholder="fullname" value="{{$team->fullname}}">
                  </div>

                  <div class="form-group">
                    <label for="designation">Designation <span class="text text-red">*</span></label>
                    <input type="text" name="designation" class="form-control" id="designation" placeholder="designation" value="{{$team->designation}}">
                  </div>


                  <div>
                    <h3>Image Preview</h3>
                    <img src="{{asset('uploads/').'/'.$team->team_img}}" alt="" height='150' weight='150'>

                  </div>

                </div>

                  <div class="col-xs-6">
                    <div class="form-group">
                      <label for="image">Image <span class="text text-red">*</span></label>
                      <input type="file" name="image" class="form-control" id="Image" value="{{$team->team_img}}">
                    </div>

                    <div class="form-group">
                      <label for="facebook_id">Facebook Id</label>
                      <input type="text" name="facebook_id" class="form-control" id="facebook_id" placeholder="Work Done" value="{{$team->facebook_id}}">
                  </div>

                  <div class="form-group">
                      <label for="twitter_id">Twitter Id <span class="text text-red">*</span></label>
                      <input type="twitter_id" name="twitter_id" class="form-control" id="twitter_id" placeholder="twitter_id" value="{{$team->twitter_id}}">
                  </div>

                  <div class="form-group">
                      <label for="instagram_id">Instagram Id <span class="text text-red">*</span></label>
                      <input type="instagram_id" name="instagram_id" class="form-control" id="instagram_id" placeholder="instagram_id" value="{{$team->instagram_id}}">
                  </div>

                  <div class="form-group">
                      <label for="linkedin_id">Linkedin Id <span class="text text-red">*</span></label>
                      <input type="linkedin_id" name="linkedin_id" class="form-control" id="linkedin_id" placeholder="linkedin_id" value="{{$team->linkedin_id}}">
                  </div>

                    
                  </div>
            </div>

        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
          </div>
      </div>
      </form>
      <!-- /.box -->
      <!-- form end -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection