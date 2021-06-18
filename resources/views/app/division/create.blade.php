

<h2 class="bg-primary text-white  text-center" >Ajouter une division</h2>
<form action="/division" method="POST">
    @csrf 
 <div class="mb-3">
     <label for=""  class="form-label">Nom Divison :</label>
     <input id="Ndiv" name="nomDivision" type="text" class="form-control" tabindex="1">
 </div>

 <a href="/division" class="btn btn-secondary" tabindex="5">close</a>
 <button type="submit"  class="btn btn-primary"  tabindex="4">save</button>
 


</form>  