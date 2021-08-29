@extends('layouts.main')



@section('content')



    <div class="container product_section_container" style="padding: 30px;">

        <div class="row" style="margin-bottom: 30px;">

            <div class="col-md-12">

                <a href="{{ url('/admin-category/create') }} " class="btn btn-danger">

                    <i class="fa fa-plus"></i>

                    Add a New Category

                </a>

            </div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <h3>Category List</h3>

                <table class="table table-hover">

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

                            <td><img style="width: 80px" src="{{ url('uploads/category/'.$category->image) }}"></td>


                            <td>{{ $category->name }}</td>

                            <td>

                                <a href="{{ url('admin-category/'.$category->id.'/edit') }}" class="btn btn-primary"><i

                                            class="fa fa-edit"></i> Edit</a>
                                <form action="{{ route('admin-category.destroy', $category->id) }}" method="POST">

                                    {{ method_field('DELETE') }}

                                    {{ csrf_field() }}

                                    <button onclick='return confirm("Are you sure?")' class="btn btn-danger"><i class="fa fa-trash"></i></button>

                                </form>            
                            </td>

                        </tr>

                    @endforeach

                    </tbody>

                </table>

                <div class="row">

                    <div class="col-md-12">

                        {!! $categories->links() !!}

                    </div>

                </div>

            </div>

        </div>

    </div>







@endsection



@section('js')

    <script src="{{asset("js/laravel-delete.js")}}"></script>

@endsection



