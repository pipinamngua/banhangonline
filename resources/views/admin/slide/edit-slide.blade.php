@extends('layouts.layout-admin')
@section('main')
<div class="row mt site-min-height">
              <div class="col-lg-6">
                   <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Edit {!! $slide->title !!}</h4>
                  
                      {!!  Form::model($slide,['method'=>'PATCH','url'=>['admin/slide',$slide->id],'class'=>'form-horizontal style-form','files'=>true]) !!}
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Title</label>
                              <div class="col-sm-10">
                                  {!!  Form::text('title',$slide->title,['class'=>'form-control','placeholder'=>'Input title slide...'])  !!}
                                   {!! $errors->first('title','<p style="color:red">:message</p>') !!}
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Image</label>
                              <div class="col-sm-10">
                                  {!!  Form::file('image',['class'=>'form-control'])  !!}
                              </div>
                              {!!  $errors->first('image','<p style="color:red">:message</p>') !!}
                            </div>
                            

                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Description</label>
                              <div class="col-sm-10">
                                  {!!  Form::textarea('description',$slide->description,['class'=>'form-control','style'=>'height:100px'])  !!}
                              </div>
                              {!!  $errors->first('description','<p style="color:red">:message</p>') !!}
                            </div>

                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Discount</label>
                              <div class="col-sm-10">
                                  {!!  Form::text('discount',$slide->discount,['class'=>'form-control','placeholder'=>'Input discount product ...'])  !!}
                              </div>
                              {!!  $errors->first('discount','<p style="color:red">:message</p>') !!}
                            </div>


                            <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Type</label>
                              <div class="col-sm-10">
                                  {!!  Form::select('link', ['1' => 'Điện thoại', '2' => 'Laptop', '3' => 'Tivi'], null, ['placeholder' => 'Pick a type...',
                                   'required' => true, 'class' => 'form-control'])  !!}
                              </div>
                              {!!  $errors->first('link','<p style="color:red">:message</p>') !!}
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