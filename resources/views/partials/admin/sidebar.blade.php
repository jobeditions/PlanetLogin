<!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  
                  <li class="active">
                      <a class="" href="{{action('HomeController@index')}}">
                          <i class="icon_house_alt"></i>
                          <span>Page d'Accueil</span>
                      </a>
                  </li>
				       
                <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Abonnements</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                      <li><a class="" href="{{action('AbonnementController@index')}}">Liste des Abonnements</a></li>
                       
                          <li><a href="{{action('AbonnementController@create')}}" class="">Ajouter un Abonnement</a></li>                          
                          <li><a class="" href="{{action('AbonnementController@index_modify')}}">Modifier - Abonnement</a></li>
                          <li><a class="" href="{{action('AbonnementController@trash')}}">Corbeille</a></li>
                        
                      </ul>
                  </li>  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_tags"></i>
                          <span>Announces</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                           <li><a class="" href="{{action('AnnounceController@index')}}">Liste des Announces</a></li>
                          <li><a class="{{action('AbonnementController@create')}}" href="/commentaires">Ajouter un Announce</a></li>
                          <li><a class="" href="">Modifier un Announce</a></li>
                          
                        
                          <li><a class="" href=""> Corbeille</a></li>
                        
                      </ul>
                  


                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_tag"></i>
                          <span>Catégories</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          
                          <li><a class="" href="{{action('CategoryController@index')}}">Ajouter une catégorie</a></li>
                         
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_tags"></i>
                          <span>Étiquettes</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          
                          <li><a class="" href="/tags">Ajouter une Étiquette</a></li>
                        
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_profile"></i>
                          <span>Utilisateurs</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>

                      <ul class="sub">
                          <li><a class="" href=""> Liste des Utilisateurs</a></li>
                        
                          <li><a class="" href=""> Ajouter un Utilisateur</a></li>
                          <li><a class="" href=""> Modifier un Utilisateur</a></li>
                         
                          <li><a class="" href="/profile"> Profile</a></li>
                          
                      </ul>
                  </li>
                   
                    
                     
                    <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_cogs"></i>
                          <span>Paramètres</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                        
                          <li><a class="" href=""> Page d'Accueil</a></li>
                          <li><a class="" href=""> À propos </a></li>
                          <li><a class="" href=""> Page de Contact </a></li>
                          
                      </ul>                  
                    
                   </li> 
                  
              

              </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->