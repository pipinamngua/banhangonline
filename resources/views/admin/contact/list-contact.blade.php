@extends('layouts.layout-admin')
@section('main')
<script type="text/javascript">
  $(document).ready(function(){
    $('#selectbox').on('change', function(){
    if($('#selectbox').val() == 'all' ) {
      $('.processed').show();
      $('.pending').show();
    } else if($('#selectbox').val() == 'processed') {
        $('.processed').show();
        $('.pending').hide();
    } else {
        $('.processed').hide();
        $('.pending').show();
      }
    });
  });
</script>
<div class="row mt">
  <div class="col-md-12">
    <div class="content-panel site-min-height">
      <table class="table table-striped table-advance table-hover">
        <h4><i class="fa fa-angle-right"></i>List Contact</h4>
        {!! Form::open(['method'=>'GET','url'=>'admin/contact']) !!}
        {!! Form::text('keyword',null,['placeholder'=>'Enter a keyword','class'=>'form-control']) !!}
        {!! Form::submit('Search',['class'=>'btn btn-primary']) !!}
        {!! Form::close()!!}
        <br><br>
        
        <label for="selectbox"><h4 class="fa fa-search"> Status</h4></label>
        <select name="selectbox" id="selectbox" class="form-control">
          <option value="all">All</option>
          <option value="processed">Processed</option>
          <option value="pending">Pending</option>
        </select>
        <hr>
        <thead>
          <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Content</th>
            <th>Phone</th>
            <th>Subject</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($list as $item => $value)
            @if($value->status == 1)
            {!! Form::open(['method' => 'GET', 'url' => 'admin/contact/' . $value->id . '/edit']) !!}
            <tr style="color: blue;" class="processed">
              <td>{{ $item+1 }}</td>
              <td>{{ $value->name }}</td>
              <td>{{ $value->email }}</td>
              <td>{{ $value->phone }}</td>
              <td>{{ $value->subject }}</td>
              <td>Processed</td>
              <td>
                <input class="" type="submit" value="Pending">
              </td>
            </tr>
            {!! Form::close() !!}
            @else
            {!! Form::open(['method' => 'GET', 'url' => 'admin/contact/edit/' . $value->id]) !!}
            <tr style="color: red;" class="pending">
              <td>{{ $item+1 }}</td>
              <td>{{ $value->name }}</td>
              <td>{{ $value->email }}</td>
              <td>{{ $value->phone }}</td>
              <td>{{ $value->subject }}</td>
              <td>Pending</td>
              <td>
                <input class="" type="submit" value="Processed">
              </td>
            </tr>
            {!! Form::close() !!}
            @endif
          @endforeach
        </tbody>
      </table>
    </div><!-- /content-panel -->
  </div><!-- /col-md-12 -->
</div><!-- /row -->
@endsection