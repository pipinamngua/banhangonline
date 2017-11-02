@extends('layouts.layout-admin')
@section('main')
<div class="row mt">
          		<div class="col-lg-6">
                   <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Tạo Mới Sản Phẩm</h4>
                  
                      {!!  Form::model($product,['method'=>'PATCH','url'=>['admin/product',$product->id],'class'=>'form-horizontal style-form','files'=>true])  !!}
                      		<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Name</label>
                              <div class="col-sm-10">
                                  {!!  Form::text('name',$product->name,['class'=>'form-control'])  !!}
									                 {!! $errors->first('name','<p style="color:red">:message</p>') !!}
                              </div>
                               
                              
                          	</div>
                  
                          	<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Price</label>
                              <div class="col-sm-10">
                                  {!!  Form::text('price',$product->price,['class'=>'form-control'])  !!}
                              </div>
                              {!!  $errors->first('price','<p style="color:red">:message</p>') !!}
                          	</div>
                  
                          	<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Discount</label>
                              <div class="col-sm-10">
                                  {!!  Form::text('discount',$product->discount,['class'=>'form-control'])  !!}
                              </div>
                              {!!  $errors->first('discount','<p style="color:red">:message</p>') !!}
                          	</div>
                  
                          	<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Count</label>
                              <div class="col-sm-10">
                                  {!!  Form::text('count',$product->count,['class'=>'form-control'])  !!}
                              </div>
                              {!!  $errors->first('count','<p style="color:red">:message</p>') !!}
                          	</div>
                  
                          	<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Description</label>
                              <div class="col-sm-10">
                                  {!!  Form::textarea('description',$product->description,['class'=>'form-control','style'=>'height:100px'])  !!}
                              </div>
                              {!!  $errors->first('description','<p style="color:red">:message</p>') !!}
                          	</div>
                  
                          	<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Content</label>
                              <div class="col-sm-10">
                                  {!!  Form::textarea('content',$product->content,['class'=>'form-control','style'=>'height:100px'])  !!}
                              </div>
                              {!!  $errors->first('content','<p style="color:red">:message</p>') !!}
                          	</div>

                          	<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Trạng thái sản phẩm</label>
                              <div class="col-sm-10">
                                  {!! Form::select('status',['0'=>'Yes','1'=>'No'],$product->status, ['placeholder' => 'Pick a status...']) !!}
                              </div>
                              {!!  $errors->first('status','<p style="color:red">:message</p>') !!}
                          	</div>

                          	<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Thumbnail</label>
                              <div class="col-sm-10">
                                  {!!  Form::file('thumbnail',['class'=>'form-control'])  !!}
                              </div>
                              {!!  $errors->first('thumbnail','<p style="color:red">:message</p>') !!}
                          	</div>
                  
                          	<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Category_id</label>
                              <div class="col-sm-10">
                                  {!! Form::select('categoryId',['1'=>'Phone','2'=>'Laptop','3'=>'TV'],$product->category_id, ['placeholder' => 'Pick a category_id...']) !!}
                              </div>
                              {!!  $errors->first('categoryId','<p style="color:red">:message</p>') !!}
                          	</div>
                  
                          	<div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Config_id</label>
                              <div class="col-sm-10">
                                  {!! Form::select('configId',['1'=>'Phone','2'=>'Laptop','3'=>'TV'],$product->config_id, ['placeholder' => 'Pick a config_id...']) !!}
                              </div>
                              {!!  $errors->first('configId','<p style="color:red">:message</p>') !!}
                          	</div>

                        <div class="form-group">
                              {!!  Form::submit('Update',['class'=>'btn btn-primary']) !!}
                              {!!  Form::reset('Reset',['class'=>'btn btn-primary']) !!}
                        </div>
                      		
                      {!!  Form::close()  !!}
                  </div> 
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
@endsection