 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="add_process.php" method="post" enctype="multipart/form-data">
            <input id="Title" name="Title" type="text" class="input w-100" placeholder="Title" > 
            <div id="TitleError"></div>      
            <input id="Prix" name="Prix" type="number" class="input w-100" placeholder="Prix" >
            <div id="PrixError"></div>      
            <input id="Adresse" name="Adresse" type="text" class="input w-100" placeholder="Adresse" >
            <div id="AdresseError"></div>      
            <input id="Ville" name="Ville" type="text" class="input w-100" placeholder="Ville" >
            <div id="VilleError"></div>      
            <input id="Code_postal" name="Code_postal" type="number" class="input w-100" placeholder="Code postal">
            <div id="Code_postalError"></div>      
            <input id="Description" name="Description" type="text" class="input w-100" placeholder="Description">
            <div id="DescriptionError"></div> 
                

            <div class="d-flex gap-5 mt-4">
              <div>
                <label for="">Categorie</label><br>
                <input checked id="vente" name="Categorie" type="radio" value="vente">
                <label for="vente">vente</label><br>
                <input id="location" name="Categorie" type="radio" value="location">
                <label for="location">location</label><br>
              </div>
              <div class="ms-5 d-flex gap-4">
                <div>
                  <label for="">type</label><br>
                  <input checked id="appartement" name="Type" type="radio" value="appartement">
                  <label for="appartement">appartement</label><br>
                  <input id="maison" name="Type" type="radio" value="maison">
                  <label for="maison">maison</label><br>
                  <input id="villa" name="Type" type="radio" value="villa">
                  <label for="villa">villa</label><br>
                </div>
                <div class="mt-4">
                  <input id="bureau" name="Type" type="radio" value="bureau">
                  <label for="bureau">bureau</label><br>
                  <input name="Type" id="terrain" type="radio" value="terrain">
                  <label for="terrain">terrain</label><br>
                </div>
                
              </div>
            </div>
            <label for="formFile">Image principle</label>
            <input class="form-control mt-3" name="Img_type" id="imgPran" type="file" id="formFile" required> 
            <!-- <div id="errorImgPran"></div> -->
            <label for="formFile">Images secondaires</label>
            <input class="form-control mt-3" name="images[]" id="imgSeco" type="file" id="formFile" multiple required>
            <!-- <div id="errorimgSeco"></div> -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="submit" id="submit"  class="btn btn-primary">Save Add</button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>