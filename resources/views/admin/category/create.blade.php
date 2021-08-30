@extends('layouts.dashboard.main')

@section('content')


 <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Add Category</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Category</a></li>
                            <li class="breadcrumb-item">Add</li>
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
                        <h5>Add Category</h5>
                    </div>
                    <div class="card-body">
                        
                        {!!Form::open(["url" => "/admin-category",'files' => 'true','id' => "validation-form123", "method" => "post"]) !!}

                        {!! Form::bsFile("img[]","Image") !!}

                        {!! Form::bsText("name","Category Name") !!}

                        @if(isset($_GET['child']))
                            {!! Form::bsSelect("parent_id","parent",null,$categories,"Please select a category") !!}
                        @endif


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

        // [ Initialize validation ]
        $('#validation-form123').validate({
            ignore: '.ignore, .select2-input',
            focusInvalid: false,
            rules: {
                'name': {
                    required: true
                },
                'img[]': {
                    required: true
                },
            },

        });
    });
});

</script>


@endsection

