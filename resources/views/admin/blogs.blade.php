@extends('layouts.main')
@section('content')

    <div class="container product_section_container" style="padding: 30px;">
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-md-12">
                <a href="{{ url('admin-blogs/create') }} " class="btn btn-danger">
                    <i class="fa fa-plus"></i>
                    Add a New Blog
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Blog Name</th>
                        <th>Blog Detail</th>
                        <th>Created At</th>
                        <th>#</th>

                    </tr>
                    </thead>
                    <tbody>
                        <?php //print_r($mdata); ?>
                    @foreach($mdata as $module)
                        <tr>
                            <td>{{ $module->id }}</td>
                            <td>{!! $module->thumbs !!}</td>
                            <td>{{ $module->blog_name }}</td>
                            <td>{!! str_limit(strip_tags($module->blog_detail), 30) !!}</td>
                            <td>{{ $module->created_at }}</td>
                            <td>
                                <a href="{{ url('admin-blogs/'.$module->id) }}/edit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                                <form action="{{ route('admin-blogs.destroy', $module->id) }}" method="POST">
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
                        {!! $mdata->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset("js/laravel-delete.js")}}"></script>
@endsection

