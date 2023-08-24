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
        <form action="{{route('project_category.update',$project_category->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
        <div class="box-body">
          <!-- row start -->
          <div class="row">
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for="name">Name <span class="text text-red">*</span></label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="name" value="{{$project_category->name}}">
                  </div>

                  <div class="form-group">
                    <label for="slug">Slug <span class="text text-red">*</span></label>
                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug" value="{{$project_category->slug}}">
                  </div>

                  <div class="form-group">
                      <label for="status">Status <span class="text text-red">*</span></label>
                      <input type="status" name="status" class="form-control" id="status" placeholder="Status" value="{{$project_category->status}}">
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