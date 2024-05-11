 <div class="page-illustration">
    <div class="mt-5 pt-3" style="position: absolute;">
        <h2 class="mt-5">Profil de {{username}}</h2>
    </div>
    <img src="{{ROOT}}/files/img/page_illust.jpg"/>
</div>
<div class="row-section">
    <div class="col-sm-9"> 
        <form class="mlr-3" method="POST" action="{{ROOT}}/update_profil">
            <div class="form-row">
              <div class="form-group col-md-2">
                <label for="exampleFormControlSelect1">Titre</label>
                <select name="titre" class="form-control" id="exampleFormControlSelect1">
                  <option>Mr.</option>
                  <option>Mdm.</option>
                  <option>Mlle</option> 
                </select>
              </div>
              <div class="form-group col-md-5">
                <label for="inputPassword4">Nom</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Nom">
              </div>
              <div class="form-group col-md-5">
                <label for="inputPassword5">Post-nom</label>
                <input type="text" class="form-control" id="inputPassword5" placeholder="Post-nom">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Addresse principale</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="25 av Mobenga, Q masiala , c. Limete">
            </div>
            <div class="form-group">
              <label for="inputAddress2">Address 2</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartement, studio, ou Etage">
            </div>
            <div class="form-row">
              <div class="form-group col-md-5">
                <label for="inputCity">Ville</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">Province</label>
                <select id="inputState" class="form-control">
                    {% for countries %}
                        <option>{{province}}</option>  
                    {% endfor %}  
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="inputZip">Téléphone</label>
                <input type="phone" class="form-control" placeholder="+243..." id="inputZip">
              </div>
            </div> 
            <button  type="submit" class="btn btn-primary">Mettre à jour</button>
          </form> 
    </div>
    <div class="col-sm-3 mt-2 " style="background: #FFF; border: 1px solid #d8d8d8;">
        <h5 class="mt-3 text-center bold" style="font-weight: bolder;">Facture de la commande </h5>
        <hr>
        <div class="row-section">
            <div class="col-sm-6 bold">Sous-total des marchandises: </div><div class="col-sm-6 bold">0,00$</div>
        </div>
        <div class="row-section mt-3">
            <div class="col-sm-6">livraison: </div><div class="col-sm-6 small">0,00$</div>
        </div>
        <div class="row-section mt-3">
            <div class="col-sm-6">TVA: </div><div class="col-sm-6 small">0,00$</div>
        </div>
        
        <div class="row-section mt-4">
            <div class="col-sm-6 bold">TOTAL: </div><div class="col-sm-6 bold">0,00$</div>
        </div>
        <br />  
    </div>
</div>
 

{% include ../app/views/Templates/parts/fabriquants.php %}

<br /><br /><br /><br />
