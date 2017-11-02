@extends('layouts.layout-admin')
@section('main')
<div class="row mt">
          		<div class="col-lg-6">
                   <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>Edit Order</h4>
                  
                      {!!  Form::model($order,['method'=>'PATCH','url'=>['admin/order',$order['id']],'class'=>'form-horizontal style-form','files'=>true])  !!}
                      		<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Order_name</label>
                              <div class="col-sm-10">
                                  {!!  Form::text('name',$order->name,['class'=>'form-control'])  !!}
									                 {!! $errors->first('name','<p style="color:red">:message</p>') !!}
                              </div>
                               
                              
                          	</div>
                  
                          	<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Phone</label>
                              <div class="col-sm-10">
                                  {!!  Form::text('phone',$order->phone,['class'=>'form-control'])  !!}
                              </div>
                              {!!  $errors->first('phone','<p style="color:red">:message</p>') !!}
                          	</div>
                  
                          	<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                  {!!  Form::email('email',$order->email,['class'=>'form-control'])  !!}
                              </div>
                              {!!  $errors->first('email','<p style="color:red">:message</p>') !!}
                          	</div>
                  
                          	<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Address</label>
                              <div class="col-sm-10">
                                  {!!  Form::text('address',$order->address,['class'=>'form-control'])  !!}
                              </div>
                              {!!  $errors->first('address','<p style="color:red">:message</p>') !!}
                          	</div>
                  
                          	<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Date_order</label>
                              <div class="col-sm-10">
                                  {!!  Form::date('date',$order->date_order,['class'=>'form-control'])  !!}
                              </div>
                              {!!  $errors->first('date','<p style="color:red">:message</p>') !!}
                          	</div>
                  
                          	<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Content</label>
                              <div class="col-sm-10">
                                  {!!  Form::text('payment',$order->payment,['class'=>'form-control'])  !!}
                              </div>
                              {!!  $errors->first('payment','<p style="color:red">:message</p>') !!}
                          	</div>

                          	

                          	<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Total</label>
                              <div class="col-sm-10">
                                  {!!  Form::text('total',$order->total,['class'=>'form-control'])  !!}
                              </div>
                              {!!  $errors->first('total','<p style="color:red">:message</p>') !!}
                          	</div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Note</label>
                              <div class="col-sm-10">
                                  {!!  Form::text('note',$order->note,['class'=>'form-control'])  !!}
                              </div>
                              {!!  $errors->first('note','<p style="color:red">:message</p>') !!}
                            </div>

                          	
                        <div class="form-group">
                              {!!  Form::submit('Update',['class'=>'btn btn-primary']) !!}
                        </div>
                      		
                      {!!  Form::close()  !!}
                  </div> 
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
@endsection