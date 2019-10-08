@extends("layouts.app")
@section('title','New Post')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      New Post
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-success">
          <div class="box-body">
            <form method="POST" action="{{ url("save-post")}}">
            @csrf
            <div class="form-group">
              <label for="">Title</label>
              <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Category</label>
              <select name="category" class="form-control">
                @foreach ($category as $row)
                  <option value="{{$row->category_id}}">{{$row->category_name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="">Content</label>
              <textarea name="content" id="" cols="30" rows="10" class="form-control">

              </textarea>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" value="submit">Save</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
@endsection
