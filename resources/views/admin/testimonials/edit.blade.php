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
        <form action="{{route('testimonials.update',$testimonial->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
        <div class="box-body">
          <!-- row start -->
          <div class="row">
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for="fullname">Fullname <span class="text text-red">*</span></label>
                      <input type="text" name="fullname" class="form-control" id="fullname" placeholder="fullname" value="{{$testimonial->fullname}}">
                  </div>

                  <div class="form-group">
                    <label for="designation">Designation <span class="text text-red">*</span></label>
                    <input type="text" name="designation" class="form-control" id="designation" placeholder="designation" value="{{$testimonial->designation}}">
                  </div>

                  <div class="form-group">
                      <label for="status">Status <span class="text text-red">*</span></label>
                      <input type="status" name="status" class="form-control" id="status" placeholder="Status" value="{{$testimonial->status}}">
                  </div>

                  <div>
                    <h3>Image Preview</h3>
                    <img src="{{asset('uploads/').'/'.$testimonial->image}}" alt="" height='150' weight='150'>

                  </div>

                </div>

                  <div class="col-xs-6">
                    <div class="form-group">
                      <label for="image">Image <span class="text text-red">*</span></label>
                      <input type="file" name="image" class="form-control" id="Image" value="{{$testimonial->image}}">
                    </div>

                    <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" id="description" class="form-control" rows="5" placeholder="Description" >{{$testimonial->description}}</textarea>
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