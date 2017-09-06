@extends('layouts.app-admin')

   
    @section('title')
    Ajouter un Abonnement
    @endsection

    @section('content')
      

                         <div class="col-lg-12"> 
                          
                              <section class="panel panel-default">
                                  @include('partials.error')
                             
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
                                                 <input class="form-control" type="number" id="number" name="order">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="image" >Image</label>
                                                 <input class="form-control" type="file" id="image" name="image">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="categorie" >Catégorie</label>
                                                 <select class="form-control" id="categorie" name="categorie">
                                                  <option value="géneral">General</option>
                                                 </select>
                                              </div>
                                              
                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="tags" >Tags</label>
                                                 <select class="form-control" id="tags" name="tags">
                                                  <option value="géneral">General</option>
                                                 </select>
                                              </div>
                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="currency" >Currency</label>
                                                 <select class="form-control" id="currency" name="currency">
                                                  <option value="Euros">Euros</option>
                                                  <option value="Dollars">Dollars</option>
                                                  <option value="Pounds">Pounds</option>
                                                 </select>
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="number">PrixOffert </label>
                                                 <input class="form-control" type="text" id="number" name="order">
                                              </div>
                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="number">DerniérèPrix</label>
                                                 <input class="form-control" type="text" id="number" name="order">
                                              </div>


                                              <div class="col-sm-10">
                                                  <label class="control-label col-sm-1">TEXTE</label>
                                                  <textarea class="form-control" name="description" rows="6"></textarea>
                                                  <input class="hidden" type="file" id="upload" name="image">
                                                  <input class="hidden" type="file" id="upload" name="media">
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
