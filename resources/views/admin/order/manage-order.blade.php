@extends('layouts.layout-admin')
@section('main')
<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i>Order Table</h4>
                            @if(Session::has('sucess'))
                            <div class="alert alert-success">
                                <i><p>{{ Session::get('sucess')}}</p></i>
                            </div>
                            @endif
                            {!! Form::open(['method'=>'GET','url'=>'admin/order']) !!}
                                {!! Form::text('keyword',null,['placeholder'=>'Search order name....','class'=>'form-control']) !!}
                                {!! Form::submit('Search',['class'=>'btn btn-primary']) !!}
                            {!! Form::close()!!}
                            <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> ID</th>
                                  <th><i class="fa fa-bullhorn"></i> Name</th>
                                  <th><i class="fa fa-bullhorn"></i> Phone</th>
                                  <th><i class="fa fa-bullhorn"></i> Email</th>
                                  <th><i class="fa fa-bullhorn"></i> Address</th>
                                  <th><i class="fa fa-bullhorn"></i> Date_order</th>
                                  <th><i class="fa fa-bullhorn"></i> Payment</th>
                                  <th><i class="fa fa-bullhorn"></i> Total</th>
                                  <th><i class="fa fa-bullhorn"></i> Status</th>
                                  <th><i class="fa fa-bullhorn"></i> Delivered</th>
                                  <th><i class="fa fa-bullhorn"></i> Delivering</th>

                                  <th colspan="3"><i class="fa fa-bullhorn">Action</i></th>
                                                                    <!-- <th class="hidden-phone"><i class="fa fa-question-circle"></i> Descrition</th>
                                  <th><i class="fa fa-bookmark"></i> Profit</th>
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th></th> -->
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($order as $item)
                              <tr>
                                  <td><a href="basic_table.html#">{{ $item->id }}</a></td>
                                  <td class="hidden-phone">{{ $item->name }}</td>
                                  <td>{{ $item->phone }} </td>
                                  <td>{{ $item->email }} </td>
                                  <td>{{ $item->address }}%</td>
                                  <td>{{ $item->date_order }} </td>
                                  
                                  <td>{{ $item->payment }}</td>
                                  <td class="hidden-phone">{{ $item->total }} </td>
                                  <td class="hidden-phone">{{ $item->note }} </td>
                                  {!! Form::open( [ 'method' => 'POST' , 'url' => ['admin/order/deliveried',$item->id] ]) !!}
                                      <td>
                                        {!! Form::submit('Delivered', ['class' => 'btn btn-success']) !!}
                                      </td>
                                  {!! Form::close() !!}

                                  {!! Form::open( ['method' => 'POST', 'url' => ['admin/order/delivering',$item->id] ]) !!}
                                      <td>
                                        {!! Form::submit('Delivering', ['class' => 'btn btn-success']) !!}
                                      </td>
                                  {!! Form::close() !!}

                                  <td>
                                      <button>
                                          <a href="{{ url('admin/order/detail/'.$item->id) }}" style="color:black" >Detail</a>
                                      </button>
                                  </td>
                                  <td>
                                      <button class="btn btn-primary btn-xs" >
                                        <a href="{{ url('admin/order/'.$item->id.'/edit') }}" style="color:white" class="fa fa-pencil"></a>
                                      </button>
                                  </td>
                                  <td>
                                      {!! Form::open(['method'=>'delete','url'=>['admin/order',$item->id]]) !!}
                                        <button class="btn btn-danger btn-xs" href="{{ url('admin/order') }}" onclick="return confirm('Bạn chắc chắn xóa không?')">
                                          <i class="fa fa-trash-o "></i>
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