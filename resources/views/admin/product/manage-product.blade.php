@extends('layouts.layout-admin')
@section('main')
<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            
	                  	  	  <h4><i class="fa fa-angle-right"></i>Product Table</h4>
                            {!! Form::open(['method'=>'GET','url'=>'admin/product']) !!}
                                {!! Form::text('keyword',null,['placeholder'=>'Search name ....','class'=>'form-control']) !!}
                                {!! Form::submit('Search',['class'=>'btn btn-primary']) !!}
                            {!! Form::close()!!}
                            @if(Session::has('sucess'))
                            <div class="alert alert-success">
                                <i><p>{{ Session::get('sucess')}}</p></i>
                            </div>
                            @endif
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> ID</th>
                                  <th><i class="fa fa-bullhorn"></i> Name</th>
                                  <th><i class="fa fa-bullhorn"></i> Slug</th>
                                  <th><i class="fa fa-bullhorn"></i> Price</th>
                                  <th><i class="fa fa-bullhorn"></i> Count</th>
                                  <th><i class="fa fa-bullhorn"></i> Discount</th>
                                  <th><i class="fa fa-bullhorn"></i> Status</th>
                                  <th><i class="fa fa-bullhorn"></i> Thumbnail</th>
                                  <th><i class="fa fa-bullhorn"></i> Category</th>
                                  <th><i class="fa fa-bullhorn"></i> Config</th>
                                  <th colspan="2"><i class="fa fa-bullhorn">Action</i></th>
                                                                    <!-- <th class="hidden-phone"><i class="fa fa-question-circle"></i> Descrition</th>
                                  <th><i class="fa fa-bookmark"></i> Profit</th>
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th></th> -->
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($product as $item)
                              <tr>
                                  <td>{{ $item->id }}</td>
                                  <td class="hidden-phone">{{ $item->name }}</td>
                                  <td class="hidden-phone">{{ $item->slug }}</td>
                                  <td>{{ number_format($item->price,0,',','.') }} </td>
                                  <td>{{ $item->count }} </td>
                                  <td><span class="label label-info label-mini">{{ $item->discount }}%</span></td>
                                  <td><span class="label label-info label-mini">{{ $item->status }} </span></td>
                                  
                                  <td>
                                    <img src="{{ asset('uploads/product/'.$item->thumbnail) }}" height="50px" width="50px">
                                  </td>
                                  <td class="hidden-phone">
                                      @foreach($category as $temp) 
                                        @if($item->category_id == $temp->id)
                                            {{ $temp->name }}
                                        @endif
                                      @endforeach
                                  </td>
                                  <td class="hidden-phone"> 
                                      @foreach($category as $temp) 
                                        @if($item->config_id == $temp->id)
                                            {{ $temp->name }}
                                        @endif
                                      @endforeach
                                  </td>
                                  <td>
                                    
                                      <button class="btn btn-primary btn-xs">
                                         <a href="{{ url('admin/product/'.$item->id.'/edit') }}" style="color:white" class="fa fa-pencil"></a>
                                      </button>
                                   </td>
                                   <td> 
                                      
                                  
                                      {!! Form::open(['method'=>'delete','url'=>['admin/product',$item->id]]) !!}
                                      <button class="btn btn-danger btn-xs" onclick="return confirm('Bạn chắc chắn xóa không?')" href="{{ url('admin/product') }}" >
                                          <i class="fa fa-trash-o"></i>
                                      </button>
                                      {!! Form::close() !!}
                                  </td>
                                </tr>
                              @endforeach
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
@endsection