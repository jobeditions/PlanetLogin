@extends('layouts.app-admin')
    @section('title')
    Modifier une Étiquette
    @endsection

	  @section('content')

	                       <div class="col-lg-12"> 
                           
                              <section class="panel panel-default">
                                  @include('partials.errors.error')
                             
                                  <header class="panel-heading">
                                     Modifier la Étiquette:{{ $tags->name }}
                                  </header>
                                  

                                  <div class="panel-body">
                                      <div class="form">
                                          <form action="{{action('TagController@update',['id'=>$tags->id])}}" method="POST" class="form-horizontal">
                                          
                                              {{csrf_field()}}
                                              {{method_field('PUT')}}

                                              
                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="name">Étiquette</label>
                                                 <input class="form-control" type="text" id="name" name="name" value="{{$tags->name}}">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="slug">Slug</label>
                                                 <input class="form-control" type="text" id="slug" name="slug" value="{{$tags->slug}}">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="order">Ordre</label>
                                                 <input class="form-control" type="number" id="order" name="order" value="{{$tags->order}}">
                                              </div>



                                              <div class="col-sm-10"><p></p><p></p></div>
                                              
                                              <div class="col-sm-10">
                                                  <button class="btn- btn-primary" type="submit">Soumettre</button>
                                              </div>
                                               


                                          </form>
                                      </div>
                                      
                                  </div>
                              </section>

                              
                          </div>
                      </div>
                  </div>
              </div>
              @endsection
