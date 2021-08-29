@extends('layouts.main')



@section('content')

    <div class="container product_section_container" style="padding: 30px;">

        <div class="row">



            <div class="col-md-12">

                <h3>User list</h3>
                <table class="table table-hover">

                    <thead>

                    <tr>

                        <th>ID</th>

                        <th>Name</th>

                        <th>E-Mail</th>

                        <th>Created At</th>

                        <th>#</th>



                    </tr>

                    </thead>

                    <tbody>

                    @foreach($users as $user)

                        <tr>

                            <td>{{ $user->id }}</td>

                            <td>{{ $user->first_name.' '.$user->last_name }}</td>

                            <td>{{ $user->email }}</td>

                            <td>{{ $user->created_at }}</td>

                            <td>

                               

                            </td>

                        </tr>

                    @endforeach

                    </tbody>

                </table>

                <div class="row">

                    <div class="col-md-12">

                        {!! $users->links() !!}

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection



@section('js')

    <script src="{{asset("js/laravel-delete.js")}}"></script>

@endsection



