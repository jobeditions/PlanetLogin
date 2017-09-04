@extends('layouts.app-admin')

    @section('title')
    Liste des Announces
    @endsection

	  @section('content')

	             <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Liste des Announces
                              
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
                              
                                @foreach($announce as $anon)

                              <tr>
                                 
                                 <td>{{$anon->number}}</td>
                                 <td><a href="{{route('announces.show',['id'=>$anon->id])}}"><img src="/{{$anon->image}}" width="90px" height="90px"/></a></td>
                                 
                                 <td>{{$anon->title}}</td>
                                  <td>{{$anon->pricenew}}</td>
                                 <td>{{$anon->categorie}}</td>
                                 <td>{{$anon->tags}}</td>
                                 <td>{{$anon->created_at->format('F d,Y')}}</td>
                                 <td></td>
                                 
                              </tr>
                             
                              @endforeach
                                            
                           </tbody>
                        </table>

                      </section>
                      
                  </div>
              </div>
              @endsection
