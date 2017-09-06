<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ajouter une Catégorie</h4>
      </div>

       <div class="modal-body">
        <form action="{{action('CategoryController@store')}}" method="POST" class="form-horizontal" >
           {{csrf_field()}}
           <div class="col-sm-12">
           <label class="control-label col-sm-1" for="name">Catégorie</label>
           <input class="form-control" type="text" id="name" name="name">
           </div>

           <div class="col-sm-12">
           <label class="control-label col-sm-1" for="order">Ordre</label>
           <input class="form-control" type="number" id="order" name="order">
           </br></br>
           </div>
            
           <div class="form-group">
           <button type="submit" class="btn btn-primary pull-right">Soumettre</button>
           </div>

       </form>
       
       
     </div><!--modal-body-->

    </div><!--modal-content-->
  </div><!--modal-dialog-->
</div><!--modal-fade>