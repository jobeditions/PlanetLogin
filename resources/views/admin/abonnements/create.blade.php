@extends('layouts.app-admin')

    @section('title')
    Ajouter un Abonnement
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
      

                         <div class="col-lg-12"> 
                          
                              <section class="panel panel-default">
                                  @include('partials.errors.error')
                             
                                  <header class="panel-heading">
                                     Écrire un article 
                                  </header>


                                  <div class="panel-body">
                                      <div class="form">
                                          <form action="{{action('AbonnementController@store')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                              {{csrf_field()}}
                                              
                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="title">Titre</label>
                                                 <input class="form-control" type="text" id="title" name="title">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="number">Ordre</label>
                                                 <input class="form-control" type="number" id="number" name="number">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="image" >Image</label>
                                                 <input class="form-control" type="file" id="image" name="featured">
                                              </div>
                                              
                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="category">Category</label>
                                                  <select name="category_id" id="category" class="form-control">
                                                    @foreach($categories as $category)
                                                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                  </select>
                                              </div>

                                              <div class="col-sm-10">
                                                <label class="control-label col-sm-1" for="tags">Select_tags</label>                                     
                                                   <select class="form-control select2multi" name="tags[]" multiple="multiple">
                                                     @foreach($tags as $tag)
                                                     <option value='{{ $tag->id }}'>{{ $tag->name }}</option>
                                                     @endforeach

                                                   </select>
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="currency">Currency </label>
                                                 <label><input class="form-control" type="text" id="currency" name="currency"></label>
                                              </div>
                                              
                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="pricenew">PrixOffert </label>
                                                 <input class="form-control" type="text" id="pricenew" name="pricenew">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="priceold">DerniérèPrix</label>
                                                 <input class="form-control" type="text" id="priceold" name="priceold">
                                              </div>


                                              <div class="col-sm-10">
                                                  <label class="control-label col-sm-1">TEXTE</label>
                                                  <textarea type="text" class="form-control" name="description" rows="6"></textarea>
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
    @section('scripts')
     @include('partials.admin.scripts')

      <script>
        $(document).ready(function() {
        $('.select2multi').select2();
        });
      </script>
    @endsection