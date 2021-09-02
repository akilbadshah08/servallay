@extends('layouts.dashboard.main')

@section('content')


 <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="py-3">
                            
                    </div>
                 
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit Category</h5>
                        </div>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="{{ url('admin-dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('admin-category') }}">Category</a></li>
                            <li class="breadcrumb-item">Edit</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Form Validation ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Category</h5>
                    </div>
                    <div class="card-body row">
                        <div class="py-3 col-sm-12">
                        @if(isset($category->parent_id) && $category->parent_id!=0)
                         <a class="col-sm-3 btn btn-info" href="{{ url('admin-category/'.$category->parent_id .'/edit') }}">Back</a>
                        @else
                        <a class="col-sm-3 btn btn-info" href="{{ url('admin-category') }}">Back</a>
                        @endif
                        <a class="col-sm-3 btn btn-info" href="{{ url('admin-category') }}/create?parent_id={{ $category->id }}">Add Child Category</a>

                       
                    </div>
                           
               <div class="col-sm-4">
                    <img style="width: 300px; margin-bottom: 10px" src="{{ asset('uploads/category/'.$category->image)  }}">

               </div>
                <div class="col-sm-8">
                {!!Form::model($category, ['route' => ['admin-category.update', $category->id], "method" =>  "put",'id' => "validation-form123","files" => true])!!}

                {!! Form::bsFile("img[]","Image","validation-file form-control") !!}

                {!! Form::bsText("name","Category Name") !!}

                <input type="hidden" name="parent_id" value="{{ $category->parent_id }}">
            </div>


                {!! Form::bsSubmit("Save") !!}


                    </div>
                </div>
            </div>
            <!-- [ Form Validation ] end -->
        </div>

        <div class="row">
            <!-- [ Form Validation ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header row">
                        <h5 class="col-sm-6">Child Category List</h5>
                    </div>
                    <div class="card-body">
                       
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

                                    @foreach($sub_categories as $sub_category)

                                        <tr>

                                            <td>{{ $sub_category->id }}</td>

                                            <td><img style="width: 30px" src="{{ url('uploads/category/'.$sub_category->image) }}"></td>


                                            <td>{{ $sub_category->name }}</td>

                                            <td>

                                                <a href="{{ url('admin-category/'.$sub_category->id.'/edit') }}" class="ed"><i class="fa fa-edit"></i> Edit</a>

                                                <form style="display: inline" action="{{ route('admin-category.destroy', $sub_category->id) }}" method="POST">

                                                    {{ method_field('DELETE') }}

                                                    {{ csrf_field() }}

                                                    <button style="border: 0;" onclick='return confirm("Are you sure?")' class=""><i class="fa fa-trash"></i> Delete</button>

                                                </form>            
                                            </td>

                                        </tr>

                                    @endforeach
                                    <tr>
                                        <td></td> <td></td> <td></td> <td></td>
                                    </tr>

                                </tbody>

                            </table>
                    
                        </div>
                    </div>
                </div>
            </div>    
        </div>


    <div class="container product_section_container" style="padding: 30px;">

        <div class="row">

            <div class="col-md-12">


            </div>

        </div>

    </div>

@endsection


@section('css')
    <link rel="stylesheet" href="{{ asset('../') }}/assets/css/plugins/dataTables.bootstrap4.min.css">
@endsection    

@section('js')

    <!-- jquery-validation Js -->
<script src="{{ asset('../') }}/assets/js/plugins/jquery.dataTables.min.js"></script>
<script src="{{ asset('../') }}/assets/js/plugins/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('../') }}/assets/js/pages/data-basic-custom.js"></script>


<script src="{{ asset('../') }}/assets/js/plugins/jquery.validate.min.js"></script>
<!-- form-picker-custom Js -->
<script type="text/javascript">
    $(document).ready(function() {
    $(function() {
        // [ Add phone validator ]
        @if(isset($_GET['success']))
         Swal.fire({
            icon: "success",
            title: 'Category {{ $_GET["success"] }} Successfully',
        })
        @endif


        @if(isset($_GET['success']))
         Swal.fire({
            icon: "success",
            title: 'Category {{ $_GET["success"] }} Successfully',
        })
        @endif

        // [ Initialize validation ]
        $('#validation-form123').validate({
            ignore: '.ignore, .select2-input',
            focusInvalid: false,
            rules: {
                'name': {
                    required: true
                },
                'parent_id': {
                    required: true
                }
            },

        });
    });
});

</script>


@endsection

