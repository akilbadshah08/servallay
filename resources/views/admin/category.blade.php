@extends('layouts.dashboard.main')



@section('content')



     <div class="page-header">

      <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Category</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Category</a></li>
                            <li class="breadcrumb-item">List</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      

        <div class="row">
            <!-- [ Form Validation ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header row">
                        <h5 class="col-sm-6">Category List</h5>
                    </div>
                    <div class="card-body">
                       <div class="py-3">
                            <a class="col-sm-3 btn btn-info" href="{{ url('admin-category') }}/create?child=1">Add Child Category</a>
                            <a class="col-sm-3 btn btn-info" href="{{ url('admin-category') }}/create">Add  Category</a>
                           
                       </div>
                 
                        <div class="dt-responsive table-responsive">
                            <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">


                                <thead>

                                    <tr>

                                        <th>ID</th>

                                        <th>Image</th>

                                        <th>name</th>


                                        <th>#</th>



                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach($categories as $category)

                                        <tr>

                                            <td>{{ $category->id }}</td>

                                            <td><img style="width: 30px" src="{{ url('uploads/category/'.$category->image) }}"></td>


                                            <td>{{ $category->name }}</td>

                                            <td>

                                                <a href="{{ url('admin-category/'.$category->id.'/edit') }}" class=""><i

                                                            class="fa fa-edit"></i> Edit</a>
                                                <form style="display: inline" action="{{ route('admin-category.destroy', $category->id) }}" method="POST">

                                                    {{ method_field('DELETE') }}

                                                    {{ csrf_field() }}

                                                    <a onclick='return confirm("Are you sure?")' class=""><i class="fa fa-trash"></i> Delete</a>

                                                </form>            
                                            </td>

                                        </tr>

                                    @endforeach

                                </tbody>

                            </table>
                    
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    





@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('../') }}/assets/css/plugins/dataTables.bootstrap4.min.css">
@endsection    
@section('js')

<script src="{{ asset('../') }}/assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="{{ asset('../') }}/assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('../') }}/assets/js/pages/data-basic-custom.js"></script>


@endsection



