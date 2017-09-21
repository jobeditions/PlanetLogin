 @extends('layouts.app-admin')
    @section('title')
       Corbeille
    @endsection


    @section('links')
     @include('partials.admin.links')
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    @endsection

	  @section('content')

	             <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Liste des Catégories
                              
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           
                              <thead>

                                 <th><i class=""></i></th>
                                 <th><i class="icon_image"></i> Image</th>
                                 <th><i class="icon_document_alt"></i> Titre</th>
                                 <th><i class="icon_tag"></i> Catégorie</th>
                                 <th><i class="icon_tag"></i> Prix</th>
                                 <th><i class="icon_calendar"></i> Supprimé le</th>
                                 <th></th>
                                 <th><i class="icon_cogs"></i> Action</a></th>
                                 <th><i class="icon_cogs"></i> Action</a></th>
                              </thead>
                              <tbody>
                                
                                @foreach($abonnements as $abon)

                              <tr>
                                 
                                 <td>
                                 </td>
                                 <td><img src="/{{$abon->image}}" width="90px" height="90px"/></td>
                                 <td>{{$abon->title}}</td>
                                 <td>{{$abon->categorie}}</td>
                                 <td>{{$abon->pricenew}}</td>
                                 <td>{{$abon->deleted_at}}</td>
                                 
                                  
                                 <td></td>
                                 <td>
                                  <!--<div class="btn-group">-->
                                      <form  class="form-group " action="{{action('AbonnementController@restoretrash',['id'=>$abon->id])}}" method="POST">
                                      {{csrf_field()}}
                                      {{method_field('DELETE')}}
                                      <button class="btn btn-success" type="submit"><i class="icon_check"></i> Restaurer</button>
                                      </form>
                                  </td>
                                  <td>
                                      <!--<a class="btn btn-success btn-s" href="#"><i class="icon_check_alt2"></i></a>-->
                                      <form  class="form-group" action="{{action('AbonnementController@kill',['id'=>$abon->id])}}" method="POST">
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
    @section('scripts')
      @include('partials.admin.scripts')
    @endsection