@extends('admin.layout.master')
  @section('main-content')
   <!-- Main content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create Services
        <small>All * field required</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <!-- form start -->
      <div class="box box-primary">
        <!-- /.box-header -->
        <form action="{{route('service.store')}}" method="post">
        <div class="box-body">
          <!-- row start -->
            <div class="row">
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for="title">Title <span class="text text-red">*</span></label>
                      <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                  </div>

                  <div class="form-group">
                    <label for="slug">Slug <span class="text text-red">*</span></label>
                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug">
                  </div>

                  <div class="form-group">
                      <label for="work_done">Work done</label>
                      <input type="text" name="work_done" class="form-control" id="work_done" placeholder="Work Done">
                  </div>

                  <div class="form-group">
                      <label for="status">Status <span class="text text-red">*</span></label>
                      <input type="status" name="status" class="form-control" id="status" placeholder="Status">
                  </div>

                </div>

                  <div class="col-xs-6">
                    <div class="form-group">
                      <label for="image">Image <span class="text text-red">*</span></label>
                      <input type="file" name="image" class="form-control" id="Image">
                    </div>

                    <div class="form-group">
                      <label for="short_description">Short Description <span class="text text-red">*</span></label>
                      <input type="text" name="short_description" class="form-control" id="short_description" placeholder="Short Description">
                    </div>

                    <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" id="description" class="form-control" rows="5" placeholder="Description"></textarea>
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
