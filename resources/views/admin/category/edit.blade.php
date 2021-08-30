@extends('layouts.dashboard.main')

@section('content')


 <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit Category</h5>
                        </div>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Category</a></li>
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
                        
               <div class="col-sm-4">
                    <img style="width: 300px; margin-bottom: 10px" src="{{ asset('uploads/category/'.$category->image)  }}">

               </div>
                <div class="col-sm-8">
                {!!Form::model($category, ['route' => ['admin-category.update', $category->id], "method" =>  "put",'id' => "validation-form123","files" => true])!!}

                {!! Form::bsFile("img[]","Image","validation-file form-control") !!}

                {!! Form::bsText("name","Category Name") !!}

                @if(isset($category->parent_id) && $category->parent_id!='0')
                    {!! Form::bsSelect("parent_id","parent",null,$categories,"Please select a category") !!}
                @endif
            </div>


                {!! Form::bsSubmit("Save") !!}


                    </div>
                </div>
            </div>
            <!-- [ Form Validation ] end -->
        </div>



    <div class="container product_section_container" style="padding: 30px;">

        <div class="row">

            <div class="col-md-12">


            </div>

        </div>

    </div>

@endsection



@section('js')

    <!-- jquery-validation Js -->
<script src="{{ asset('../') }}/assets/js/plugins/jquery.validate.min.js"></script>
<!-- form-picker-custom Js -->
<script type="text/javascript">
    $(document).ready(function() {
    $(function() {
        // [ Add phone validator ]
        @if(isset($success))
         Swal.fire({
            icon: "success",
            title: 'Category Updated Successfully',
        }).then(function(result){
            window.location.href='{{  url("admin-category") }}'
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

