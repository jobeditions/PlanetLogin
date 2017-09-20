@extends('layouts.app-admin')
@section('title')
 Liste des Étiquettes
@endsection

	  @section('content')


              <div class="col-md-11"> 
                
                         
                        <section class="panel panel-default">
                          @include('partials.errors.error')
                             
                          <header class="panel-heading">
                          <b>Ajouter une étiquette </b>
                          

                           <a class="btn btn-primary btn-s pull-right" data-toggle="modal" data-target="#myModal" ><i class="icon_plus_alt2"></i>  Ajouter</a>
                          </header>   
                      </section>

              </div>
    
                 
	             <div class="row">
                  <div class="col-md-11">
                      <section class="panel">
                          <header class="panel-heading">
                              Liste des Étiquettes
                              
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           
                              <thead>

                                 <th><i class=""></i></th>
                                 <th><i class=""></i> Ordre</th>
                                 <th><i class="icon_tag"></i> Étiquette</th>
                                 <th><i class="icon_tags"></i> Slug</th>
                                 <th><i class="icon_calendar"></i> Créé le</th>
                                 
                                 
                                 <th><i class="icon_cogs"></i> Action</a></th>
                              </thead>
                              <tbody>
                                
                                @foreach($tags as $tagging)

                              <tr>
                                 
                                 <td>
                                 </td>
                                 <td>{{$tagging->order}}</td>
                                 <td>{{$tagging->name}}</td>
                                 <td>{{$tagging->slug}}</td>
                                 <td>{{$tagging->created_at}}</td>
                                  
                                 
                                 <td>
                                 @if($tagging->id==1)
                                 <div class="btn-group"></div>
                                 @else
                                  <div class="btn-group">
                                  <div class="btn-group">
                                      <a class="btn btn-primary btn-s" href="{{action('TagController@edit',['id'=>$tagging->id])}}"><i class="icon_plus_alt2"></i>  Modifier</a>
                                      

                                      <form  class="form-group pull-left" action="{{action('TagController@destroy',['id'=>$tagging->id])}}" method="POST">
                                      {{csrf_field()}}
                                      {{method_field('DELETE')}}
                                      <button class="btn btn-danger" type="submit"><i class="icon_close_alt2"></i>  Supprimer</button>
                                      </form>
                                  </div>
                                  @endif
                                  </td>
                              </tr>
                              
                              @endforeach
                                                 
                           </tbody>
                        </table>
                        {{$tags->links()}}

                      </section>
                  </div>
              </div>
              @include('admin.tags.modals.modalcreate')
              @endsection