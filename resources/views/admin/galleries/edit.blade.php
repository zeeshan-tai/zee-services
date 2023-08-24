@extends('admin.layout.master')
  @section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Gallery
        <small>All * field required</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <!-- form start -->
      <div class="box box-primary">
        <!-- /.box-header -->
        <form action="{{route('gallery.update',$galleries->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
        <div class="box-body">
          <!-- row start -->
          <div class="row">

                  <div class="col-xs-6">
                    <div class="form-group">
                      <label for="image">Gallery image <span class="text text-red">*</span></label>
                      <input type="file" name="image" class="form-control" id="Image" value="{{$galleries->image}}">
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