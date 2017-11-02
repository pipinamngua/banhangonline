@extends('layouts.layout-admin')
@section('main')
<div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table>
                              <tr>
                                  <th>INFORMATION</th>
                                  <th>
                                      <img src="{{ asset('uploads/users/'.Auth::user()->avatar) }}" height="200px" width="200px">
                                  </th>
                              </tr>
                              <tr>
                                  <td>Name:</td>
                                  <td>{{ $order->name }}</td>
                              </tr>
                              <tr>
                                <td>Phone</td>
                                <td>{{ $order->phone }}</td>
                              </tr>

                              <tr>
                                <td>Address</td>
                                <td>{{ $order->address}}</td>
                              </tr>

                              <tr>
                                <td>Email</td>
                                <td>{{ $order->email }}</td>
                              </tr>
                          </table>
                      </div>
                      <div class="content-panel">
                          <a href="{{ url('admin/order') }}" class="btn btn-primary">Back</a>
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i>Order Table</h4>
                            @if(Session::has('sucess'))
                            <div class="alert alert-success">
                                <i><p>{{ Session::get('sucess')}}</p></i>
                            </div>
                            @endif
                            
                            <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> #</th>
                                  <th><i class="fa fa-bullhorn"></i> Product Name</th>
                                  <th><i class="fa fa-bullhorn"></i> Quantity</th>
                                  <th><i class="fa fa-bullhorn"></i> Product Price</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                                <?php $total = 0 ?>
                                  @foreach($order->order_detail as $key => $item)
                                  <tr>
                                      <td><a href="basic_table.html#">{{ $key+1 }}</a></td>
                                      <td class="hidden-phone">{{ $item->product_name }}</td>
                                      <td>{{ $item->quantity }} </td>
                                      <td>{{ number_format($item->price,0,',','.') }} </td>
                                      <?php $total += $item->price ?>
                                  </tr>
                                  @endforeach

                                  <td colspan="3"></td>
                                  <td><label>Total: </label>{{ number_format($total,0,',','.') }}</td>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
@endsection