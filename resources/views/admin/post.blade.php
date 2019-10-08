@extends("layouts.app")
@section('title','Blog Post')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Blog Post
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-success">
          <div class="box-body">
            <a href="{{ url('new-post') }}" class="btn btn-primary" >Add New</a>
            <table class="table">
              <thead>
                <th>No</th>
                <th>Title</th>
                <th>Category</th>
                <th></th>
              </thead>
              <tbody>
                @foreach ($post as $index => $row)
                  <tr>
                    <td><input type="checkbox"></td>
                    <td>{{$row->post_title}}</td>
                    <td>{{$row->post_category}}</td>
                    <td></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <div class="text-right">
              {{ $post->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
@endsection
