     @extends('layouts.app-admin')
              @section('title')
                Modifier une Catégorie
              @endsection

              @section('links')
                @include('partials.admin.links')
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
              @endsection

	            @section('content')

	                       <div class="col-lg-12"> 
                           
                              <section class="panel panel-default">
                                  @include('partials.errors.error')
                             
                                  <header class="panel-heading">
                                     Modifier la catégorie:{{ $cat->name }}
                                  </header>
                                  

                                  <div class="panel-body">
                                      <div class="form">
                                          <form action="/admin/categories/{{$cat->id}}" method="POST" class="form-horizontal">
                                          
                                              {{csrf_field()}}
                                              {{method_field('PUT')}}

                                              
                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="name">Catégorie</label>
                                                 <input class="form-control" type="text" id="name" name="name" value="{{$cat->name}}">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="slug">Slug</label>
                                                 <input class="form-control" type="text" id="slug" name="slug" value="{{$cat->slug}}">
                                              </div>

                                              <div class="col-sm-10">
                                                 <label class="control-label col-sm-1" for="order">Ordre</label>
                                                 <input class="form-control" type="number" id="order" name="order" value="{{$cat->order}}">
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
              <script src="/js/jquery.js"></script>
              @include('partials.admin.scripts')
            @endsection