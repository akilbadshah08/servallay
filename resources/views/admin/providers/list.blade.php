@extends('layouts.dashboard.main')



@section('content')



     <div class="page-header">

      <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Service List</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Service</a></li>
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
                        <h5 class="col-sm-6">Service List</h5>
                    </div>
                    <div class="card-body">
                       
                 
                        <div class="dt-responsive table-responsive">
                            <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">


                                <thead>

                                    <tr>

                                        <th>ID</th>

                                        <th>Logo</th>
                                        <th>Name</th>

                                        <th>Category</th>

                                        <th>Sub Category</th>

                                        <th>Type</th>

                                        <th>Date</th>

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



