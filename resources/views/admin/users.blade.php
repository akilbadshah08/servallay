@extends('layouts.dashboard.main')



@section('content')



     <div class="page-header">

      <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">User</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">User</a></li>
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
                        <h5 class="col-sm-6">User List</h5>
                    </div>
                    <div class="card-body">
                       
                 
                        <div class="dt-responsive table-responsive">
                            <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">


                                <thead>

                                    <tr>

                                        <th>ID</th>

                                        <th>Name</th>

                                        <th>Email</th>


                                        <th>Date</th>



                                    </tr>

                                </thead>

                                <tbody>

                                @foreach($users as $user)

                                    <tr>

                                        <td>{{ $user->id }}</td>

                                        <td>{{ $user->first_name.' '.$user->last_name }}</td>

                                        <td>{{ $user->email }}</td>

                                        <td>{{ $user->created_at }}</td>


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



