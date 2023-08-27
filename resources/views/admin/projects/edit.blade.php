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
        <form action="{{route('project.update',$project->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
        <div class="box-body">
          <!-- row start -->
          <div class="row">
                <div class="col-xs-6">
                  <div class="form-group">
                    <label for="title">Title <span class="text text-red">*</span></label>
                      <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$project->title}}">
                  </div>

                  <div class="form-group">
                    <label for="slug">Slug <span class="text text-red">*</span></label>
                    <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug" value="{{$project->slug}}">
                  </div>

                  <div class="form-group">
                      <label for="status">Status <span class="text text-red">*</span></label>
                      <input type="status" name="status" class="form-control" id="status" placeholder="Status" value="{{$project->status}}">
                  </div>

                  <div class="form-group">
                      <label for="project_category_id">Project Category Id <span class="text text-red">*</span></label>
                      <input type="text" name="project_category_id" class="form-control" id="project_category_id" placeholder="Project Category Id" value="{{$project->project_category_id}}">
                    </div>

                  <div>
                    <h3>Image Preview</h3>
                    <img src="{{asset('uploads/').'/'.$project->image}}" alt="" height='150' weight='150'>

                  </div>

                </div>

                  <div class="col-xs-6">
                    <div class="form-group">
                      <label for="image">Image <span class="text text-red">*</span></label>
                      <input type="file" name="image" class="form-control" id="Image" value="{{$project->image}}">
                    </div>

                    <div class="form-group">
                        <label>Github Link</label>
                        <input type="text" name="github_link" class="form-control" id="github_link" placeholder="Github Link" value="{{$project->github_link}}">
                    </div>

                    <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" id="description" class="form-control" rows="5" placeholder="Description" >{{$project->description}}</textarea>
                    </div>

                  </div>
            </div>

        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
          </div>
        </form>
      </div>
      <!-- /.box -->
      <!-- form end -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
