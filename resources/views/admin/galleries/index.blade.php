@extends('admin.layout.master')
@section('main-content')
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Manage gallery</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="active">Simple</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- /.row -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            <a class="btn btn-danger btn-xm"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-danger btn-xm"><i class="fa fa-eye-slash"></i></a>
                            <a class="btn btn-danger btn-xm"><i class="fa fa-trash"></i></a>
                            <a class="btn btn-default btn-xm"><i class="fa fa-plus"></i></a>
                        </h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 250px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead style="background-color: #F8F8F8;">
                                <tr>
                                    <th width="4%"><input type="checkbox" name="" id="checkAll"></th>
                                    <th width="20%">Gallery Image</th>
                                    <th width="10%">Status</th>
                                    <th width="10%">Manage</th>
                                </tr>
                            </thead>
                            @foreach($galleries as $gallery)
                              <tr>
                                <td><input type="checkbox" name="" id="" class="checkSingle"></td>
                                <!-- <td>Title</td>
                                <td>Designation</td> -->
                                <td><img src="{{asset('uploads/').'/'.$gallery->image}}" alt="" height='100' weight='100'></td>
                                <td>
                                 @if($gallery->status==0)
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-down"></i></button>
                                    @else
                                    <button class="btn btn-info btn-sm"><i class="fa fa-thumbs-up"></i></button>
                                    @endif 
                                </td>
                                <td>
                                <a href="{{route('gallery.edit', $gallery->id)}}" class="btn btn-info btn-flat btn-sm"> <i class="fa fa-edit"></i></a>
                                    <form action="{{route('gallery.destroy', $gallery->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-flat btn-sm"> <i class="fa fa-trash-o"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <!-- @endforeach -->
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <div class="row">
                            <div class="col-sm-6">
                                <span style="display:block;font-size:15px;line-height:34px;margin:20px 0;">
                                    Showing 100 to 500 of 1000 entries
                                </span>
                            </div>
                        	<div class="col-sm-6 text-right">
                            	<ul class="pagination">
									<li class="paginate_button previous"><a href="#" >Previous</a></li>
									<li class="paginate_button active"><a href="#" >1</a></li>
									<li class="paginate_button "><a href="#">2</a></li>
									<li class="paginate_button "><a href="#" >3</a></li>
									<li class="paginate_button "><a href="#">4</a></li>
									<li class="paginate_button "><a href="#">5</a></li>
									<li class="paginate_button "><a href="#">6</a></li>
									<li class="paginate_button next"><a href="#" >Next</a></li>
								</ul>
                        	</div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
        </div>
        </section>
        <!-- /.content -->
        @endsection
