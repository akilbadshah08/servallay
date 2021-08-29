@extends('layouts.main')

@section('content')



    <div class="container product_section_container" style="padding: 30px;">

        <div class="row" style="margin-bottom: 30px;">

            <div class="col-md-12">
            </div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <table class="table table-hover">

                    <thead>

                    <tr>

                        <th>ID</th>

                        <th>Image</th>

                        <th>Name</th>

                        <th>Category</th>

                        <th>Sub Category</th>

                        <th>Type</th>

                        <th>Created At</th>

                        <th>#</th>



                    </tr>

                    </thead>

                    <tbody>

                    @foreach($providers as $provider)

                        <tr>

                            <td>{{ $provider->id }}</td>

                            <td>

                                <img width="50" src="../../uploads/{{ $provider->logo_image }}">

                                </td>

                            <td> {{  $provider->name }}  </td>

                            <td> {{  $provider->category_name }}  </td>

                            <td> {{  $provider->sub_category_name }}  </td>

                            <td> {{  $provider->provider_type }}  </td>

                            <td>{{ $provider->created_at }}</td>

                            <td>


                                <form action="{{ route('admin-providers.destroy', $provider->id) }}" method="POST">

                                    {{ method_field('DELETE') }}

                                    {{ csrf_field() }}

                                    <button><i class="fa fa-trash"></i></button>

                                </form>

                            </td>

                        </tr>

                    @endforeach

                    </tbody>

                </table>

                <div class="row">

                    <div class="col-md-12">

                        {!! $providers->links() !!}

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection



@section('js')

    <script src="{{asset("js/laravel-delete.js")}}"></script>

@endsection



