@extends('layouts.app-admin')
@section('title')
 Liste des Categories
@endsection

	  @section('content')


              <div class="col-md-11"> 
                
                         
                        <section class="panel panel-default">

                             
                          <header class="panel-heading">
                          <b>Ajouter une catégorie </b>
                          

                           <a class="btn btn-primary btn-s pull-right" data-toggle="modal" data-target="#myModal" ><i class="icon_plus_alt2"></i>  Ajouter</a>
                          </header>   
                      </section>

              </div>
    
                 
	             <div class="row">
                  <div class="col-md-11">
                      <section class="panel">
                          <header class="panel-heading">
                              Liste des Catégories
                              
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           
                              <thead>

                                 <th><i class=""></i></th>
                                 <th><i class=""></i> Ordre</th>
                                 <th><i class="icon_tag"></i> Catégorie</th>
                                 <th><i class="icon_tags"></i> Slug</th>
                                 <th><i class="icon_calendar"></i> Créé le</th>
                                 
                                 
                                 <th><i class="icon_cogs"></i> Action</a></th>
                              </thead>
                              <tbody>
                                
                                @foreach($cat as $categ)

                              <tr>
                                 
                                 <td>
                                 </td>
                                 <td>{{$categ->order}}</td>
                                 <td>{{$categ->name}}</td>
                                 <td>{{$categ->slug}}</td>
                                 <td>{{$categ->created_at}}</td>
                                  
                                 
                                 <td>
                                      <form  class="form-group " action="{{action('CategoryController@restoretrash',['id'=>$categ->id])}}" method="POST">
                                      {{csrf_field()}}
                                      {{method_field('DELETE')}}
                                      <button class="btn btn-success" type="submit"><i class="icon_check"></i> Restaurer</button>
                                      </form>
                                      <!--<a class="btn btn-success btn-s" href="#"><i class="icon_check_alt2"></i></a>-->
                                      <form  class="form-group" action="{{action('CategoryController@kill',['id'=>$categ->id])}}" method="POST">
                                      {{csrf_field()}}
                                      {{method_field('DELETE')}}
                                      <button class="btn btn-danger" type="submit"><i class="icon_trash"></i> Supprimer</button>
                                      </form>
                                  <!--</div>-->
                                 
                                 </td>
                              </tr>
                             
                              @endforeach
                                                     
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
            
              @endsection
