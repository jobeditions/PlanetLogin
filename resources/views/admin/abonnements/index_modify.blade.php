@extends('layouts.app-admin')

     @section('title')
       Modifier un Article
     @endsection

     @section('links')
     @include('partials.admin.links')
     
    <!--<link href="/css/select2.css" rel="stylesheet" />
     <script src="/js/select2.js"></script>-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
     
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


                                 <th><i class=""></i>N°</th>
                                 <th><i class="icon_image"></i> Image</th>
                                 <th><i class="icon_document_alt"></i> Titre</th>
                                 <th><i class="icon_tag"></i> Catégorie</th>
                                 <th><i class="icon_tags"></i> Étiquettes</th>
                                 <th><i class="icon_calendar"></i> Créé le</th>
                                 <th></th>
                                 <th><i class="icon_cogs"></i> Action</a></th>
                              </thead>
                              <tbody>
                              
                                @foreach($abonn as $abons)

                              <tr>
                                 
                                 <td>{{$abons->number}}</td>
                                 <td><a href="{{route('abonnement.show',['id'=>$abons->id])}}"><img src="/{{$abons->featured}}" width="90px" height="90px"/></a></td>
                                 
                                 <td>{{$abons->title}}</td>
                                 <td>{{$abons->category->name}}</td>
                                 <td>

                                   @foreach($abons->tags as $tango)
                                  {{$tango->name}}</br>
                                  @endforeach
                                 </td>
                                 <td>{{$abons->created_at->format('F d,Y')}}</td>
                                 <td></td>
                                 <td>
                                  <!--<div class="btn-group">-->
                                      <a class="btn btn-primary btn-s" href="{{action('AbonnementController@edit',['id'=>$abons->id])}}"><i class="icon_plus_alt2"></i>  Modifier</a>
                                      <!--<a class="btn btn-success btn-s" href="#"><i class="icon_check_alt2"></i></a>-->
                                      <form  class="form-group pull-left" action="{{action('AbonnementController@destroy',['id'=>$abons->id])}}" method="POST">
                                      {{csrf_field()}}
                                      {{method_field('DELETE')}}
                                      <button class="btn btn-danger" type="submit"><i class="icon_trash"></i>  Corbeille</button>
                                      </form>
                                  <!--</div>-->
                                  </td>
                              </tr>
                             
                              @endforeach
                                            
                           </tbody>
                        </table>

                      </section>
                      {{ $abonn->links() }}
                  </div>
              </div>
      @endsection

      @section('scripts')
        <script src="/js/jquery.js"></script>
        @include('partials.admin.scripts')

        <script>
          $(document).ready(function() {
          $('.select2multi').select2();
          });
        </script>
      @endsection
