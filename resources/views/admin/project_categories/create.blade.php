@extends('admin.layout.master')
  @section('main-content')
   <!-- Main content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create Project Category
        <small>All * field required</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <!-- form start -->
      <div class="box box-primary">
        <!-- /.box-header -->
        <form action="{{route('project_category.store')}}" method="post" enctype="multipart/form-data">
          @csrf
        <div class="box-body">
          <!-- row start -->
          <div class="row">
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for="name">Name <span class="text text-red">*</span></label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                    </div>

                    <div class="form-group">
                    <label for="slug">Slug <span class="text text-red">*</span></label>
                      <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug">
                    </div>
                    
                    <div class="form-group">
                      <label for="status">Status <span class="text text-red">*</span></label>
                      <input type="status" name="status" class="form-control" id="status" placeholder="Status">
                    </div>
                </div>

                <div class="col-xs-6">
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
