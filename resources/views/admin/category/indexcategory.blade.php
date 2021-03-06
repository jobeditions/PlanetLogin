@extends('layouts.app-admin')
    @section('title')
      Liste des Categories
    @endsection

   @section('links')
     @include('partials.admin.links')
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   @endsection

   @section('content')


              <div class="col-md-11"> 
                
                         
                        <section class="panel panel-default">
                          @include('partials.errors.error')
                             
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
                                 @if($categ->id==1)
                                 <div class="btn-group"></div>
                                 @else
                                  <div class="btn-group">
                                  <div class="btn-group">
                                      <a class="btn btn-primary btn-s" href="{{action('CategoryController@edit',['id'=>$categ->id])}}"><i class="icon_plus_alt2"></i>  Modifier</a>
                                      

                                      <form  class="form-group pull-left" action="{{action('CategoryController@destroy',['id'=>$categ->id])}}" method="POST">
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
                        {{$cat->links()}}

                      </section>
                  </div>
              </div>
              @include('admin.category.modals.modalcreate')
      @endsection

      @section('scripts')
         <script src="/js/jquery.js"></script>
         @include('partials.admin.scripts')
      @endsection
