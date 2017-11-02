@extends('layouts.layout-admin')
@section('content')
<section id="main-content">
  <section class="wrapper site-min-height">
   <h3><i class="fa fa-angle-right"></i> User</h3>
   <div class="row">

     <div class="col-md-12">
      <div class="content-panel">
       <h4><i class="fa fa-angle-right"></i> Danh sách users</h4>
       @if(Session::has('success'))
          <h3 style="color:red">{{Session::get('success')}}</h3>
       @endif
       @if(Session::has('up-failed'))
          <h3 style="color:red">{{Session::get('up-failed')}}</h3>
       @endif
       @if(Session::has('down-failed'))
          <h3 style="color:red">{{Session::get('down-failed')}}</h3>
       @endif
       {!! Form::open(['method' => 'GET', 'url' => 'admin/user/show']) !!}
          {!! Form::text('keyword', null, ['id' => 'keyword',
                                          'placeholder' => 'Enter a keyword',
                                          'class' => 'form-control']) !!}
          {!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
       {!! Form::close() !!}
       <table class="table table-striped table-advance table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Email</th>
            <th>DoB</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Job</th>
            <th>Avatar</th>
            <th>Upgrade</th>
            <th>Downgrade</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach($users as $key => $value)
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->gender }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->dob }}</td>
                <td>{{ $value->address }}</td>
                <td>{{ $value->phone }}</td>
                <td>
                  <?php 
                  if($value->group_id == 1) {
                      echo "admin";
                    } else if($value->group_id == 2) {
                      echo "manager";
                    } else {
                      echo "user";
                    }
                  ?>
                </td>
                <td>
                  <img src="{{ asset('uploads/users/'.$value->avatar) }}" width="50px" height="50px">
                </td>
                {!! Form::open(['method' => 'POST', 'url' => 'admin/user/upgrade/' . $value->id]) !!}
                  <td>
                    {!! Form::submit('Upgrade', ['class' => 'btn btn-success']) !!}
                  </td>
                {!! Form::close() !!}
                {!! Form::open(['method' => 'POST', 'url' => 'admin/user/downgrade/' . $value->id]) !!}
                  <td>
                    {!! Form::submit('Downgrade', ['class' => 'btn btn-warning']) !!}
                  </td>
                {!! Form::close() !!}
                <td>
                  <button>
                    <a href="{{ url('admin/user/'.$value->id.'/edit') }}">Edit</a>
                  </button>
                </td>
                <td>
                  {!! Form::open(['url' => ['admin/user/delete',$value->id],'method' => 'DELETE']) !!}
                    <input type="submit" name="delete" value="Delete" id="delete" onclick="return confirm('Are you sure ?')">
                  {!! Form::close() !!}
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
    </div><! --/content-panel -->
  </div><!-- /col-md-12 -->
</section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
@stop