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
        <form action="{{route('service.update',$service->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
        <div class="box-body">
          <!-- row start -->
          <div class="row">
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for="title">Title <span class="text text-red">*</span></label>
                      <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$service->title}}">
                  </div>

                  <div class="form-group">
                    <label for="slug">Slug <span class="text text-red">*</span></label>
                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug" value="{{$service->slug}}">
                  </div>

                  <div class="form-group">
                      <label for="work_done">Work done</label>
                      <input type="text" name="work_done" class="form-control" id="work_done" placeholder="Work Done" value="{{$service->work_done}}">
                  </div>

                  <div class="form-group">
                      <label for="status">Status <span class="text text-red">*</span></label>
                      <input type="status" name="status" class="form-control" id="status" placeholder="Status" value="{{$service->status}}">
                  </div>

                  <div>
                    <h3>Image Preview</h3>
                    <img src="{{asset('uploads/').'/'.$service->image}}" alt="" height='150' weight='150'>

                  </div>

                </div>

                  <div class="col-xs-6">
                    <div class="form-group">
                      <label for="image">Image <span class="text text-red">*</span></label>
                      <input type="file" name="image" class="form-control" id="Image" value="{{$service->image}}">
                    </div>

                    <div class="form-group">
                      <label for="short_description">Short Description <span class="text text-red">*</span></label>
                      <input type="text" name="short_description" class="form-control" id="short_description" placeholder="Short Description" value="{{$service->short_description}}">
                    </div>

                    <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" id="description" class="form-control" rows="5" placeholder="Description" >{{$service->description}}</textarea>
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