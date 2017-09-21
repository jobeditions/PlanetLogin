@extends('layouts.app-admin')

   
      @section('title')
        Ajouter un Abonnement
      @endsection

      @section('links')
         @include('partials.admin.links')   
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
           <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
           <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
     
      @endsection

      @section('content')
      

                         <div class="col-lg-12"> 
                          
                              <section class="panel panel-default">
                                  @include('partials.errors.error')
                             
                                  <header class="panel-heading">
                                     Modifier l'abonnement {{$abon->title}} 
                                  </header>


                                  <div class="panel-body">
                                      <div class="form">
                                          <form action="{{action('AbonnementController@store')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                              {{csrf_field()}}
                                              
                                              <div class="col-sm-10">
                                                <label class="control-label col-sm-1" for="title">Titre</label>
                                                <input class="form-control" type="text" id="title" name="title" value={{$abon->title}}>
                                              </div>

                                              <div class="col-sm-10">
                                                <label class="control-label col-sm-1" for="number">Ordre</label>
                                                <input class="form-control" type="number" id="number" name="number" value={{$abon->number}}>
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="image" >Image</label>
                                                 <input class="form-control" type="file" id="image" name="featured" value={{$abon->featured}}>
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
                                                 <label class="control-label col-sm-1" for="currency">Currency </label>
                                                 <input class="form-control" type="text" id="currency" name="currency" value={{$abon->currency}}>
                                              </div>
                                              
                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="pricenew">PrixOffert </label>
                                                 <input class="form-control" type="text" id="pricenew" name="pricenew" value={{$abon->pricenew}}>
                                              </div>
                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="priceold">DerniérèPrix</label>
                                                 <input class="form-control" type="text" id="priceold" name="priceold" value={{$abon->priceold}}>
                                              </div>


                                              <div class="col-sm-10">
                                                  <label class="control-label col-sm-1">TEXTE</label>
                                                  <textarea type="text" class="form-control" name="description" rows="6" value={{$abon->description}}></textarea>
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