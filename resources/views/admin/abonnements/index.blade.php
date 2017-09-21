@extends('layouts.app-admin')

    @section('title')
    Liste des Abonnements
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
                          <b>Liste des Abonnement </b>

                          </header>   
                          <table class="table table-striped table-advance table-hover">
                           
                              <thead>


                                 <th><i class=""></i>N°</th>
                                 <th><i class="icon_image"></i> Image</th>
                                 <th><i class="icon_document_alt"></i> Titre</th>
                                 <th><i class="icon_document_alt"></i> Prix</th>
                                 <th><i class="icon_tag"></i> Catégorie</th>
                                 <th><i class="icon_tags"></i> Étiquettes</th>
                                 <th><i class="icon_calendar"></i> Créé le</th>
                                 <th></th>
                                 
                              </thead>
                              <tbody>
                              
                                @foreach($abonnements as $abon)

                              <tr>
                                 
                                 <td>{{$abon->number}}</td>
                                 <td><a href="{{route('abonnement.show',['id'=>$abon->id])}}"><img src="/{{$abon->featured}}" width="90px" height="90px"/></a></td>
                                 
                                 <td>{{$abon->title}}</td>
                                 <td>{{$abon->pricenew}}</td>
                                 <td>{{$abon->category->name}}</td>
                                 <td> 
                                  @foreach($abon->tags as $tango)
                                  {{$tango->name}}</br>
                                  @endforeach
                                 </td>
                                 <td>{{$abon->created_at->format('F d,Y')}}</td>
                                 <td></td>
                                 
                              </tr>
                             
                              @endforeach
                                            
                           </tbody>
                        </table>

                      </section>
                      {{ $abonnements->links() }}
                  </div>
              </div>
              
    @endsection
    @section('scripts')
      @include('partials.admin.scripts')
    @endsection