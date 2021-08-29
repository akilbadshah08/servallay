@extends('layouts.main')

@section('content')



    <div class="container product_section_container" style="padding: 30px;">

        <div class="row">

            <div class="col-md-12">

                {!!Form::open(["url" => "/admin-category",'files' => 'true', "method" => "post"]) !!}

                {!! Form::bsFile("img[]","Image") !!}

                {!! Form::bsText("name","Category Name") !!}

                {!! Form::bsSelect("parent_id","parent",null,$categories,"Please select a category") !!}


                {!! Form::bsSubmit("Save") !!}



            </div>

        </div>

    </div>

@endsection



@section('js')

    <script>

        $('.summernote').summernote({

            tabsize: 2,

            height: 100

        });

    </script>

@endsection

