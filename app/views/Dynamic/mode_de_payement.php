 <div class="page-illustration">
    <div class="mt-5 pt-3" style="position: absolute;">
        <h2 class="mt-5">Mode de Payement de Votre Facture</h2>
    </div>
    <img src="{{ROOT}}/files/img/page_illust.jpg"/>
</div>
<div class="row mt-0 p-4" style="background: #F5F5F5;">
    <div class="col-sm-9">
        <div class="row-section">
            <div class="col-sm-6 bg-white mr-3 pt-4 pb-4" style="border-radius: 10px;">
                <input type="radio" name="" value="ON" checked="checked" /> <b>CARTE DE CREDIT/ CARTE BANCAIRE</b>
                <hr class="bg-primary" />
                <img src="{{ROOT}}/files/core/master_card.png" alt=""/>
                <img src="{{ROOT}}/files/core/visa.png" alt=""/>
                <img src="{{ROOT}}/files/core/amex.png" alt=""/>
            </div>
             <div class="col-sm-6 bg-white mr-3 pt-4 pb-4" style="border-radius: 10px;">
                <input type="radio" name="" value="OFF"  /> <b>PAYMENT MOBILE</b>
                <hr class="bg-primary" />
                <img src="{{ROOT}}/files/core/m-pesa-logo.png" style="height: 73px;" alt=""/>
                <img src="{{ROOT}}/files/core/airtel-money.png" style="height: 73px;"  alt=""/>
                <img src="{{ROOT}}/files/core/orange-money.jpg" style="height: 73px;"  alt=""/>
            </div>
        </div>

        <div class="row-section">
            <div class="col-sm-6 mr-3 pt-4 pb-4 bg-white">
                <form class="mlr-3" method="POST" action="{{ROOT}}/update_profil">                   
                    <div class="form-group">
                        <label class="bold" for="inputCard">Numéro de la Carte <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="inputCard">
                    </div>
                    
                    <div class="form-row">
                      <div class="form-group col-md-3">
                          <label for="inputDate" class="bold">Date d'expiration<span class="text-danger">*</span></label>
                          <select id="inputDate" class="form-control">  
                              <option selected="">Mois</option>
                             {% include ../app/views/Templates/parts/months.php %}
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                          <label for="inputYear" class="bold"><br /><br /> </label>
                            <select id="inputYear" class="form-control">
                                <option selected="">Année <option>
                               {% include ../app/views/Templates/parts/annees.php %}
                            </select>
                      </div>
                      <div class="form-group col-md-5">
                        <label for="inputCVC" class="bold"> Code de sécurité de la carte (CV2)<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="inputCVC">
                      </div>
                    </div> 
                    <div class="form-group">
                      <label class="bold" for="inputCardName">Nom figurant sur la carte <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="inputCardName" >
                    </div>
                    <a href="{{ROOT}}/mode-de-payements" type="submit" class="btn btn-primary">Payer</a>
                  </form> 
            </div>
            <div class="col-sm-6 mr-3 pt-4 pb-4 bg-white">
                <form class="mlr-3" method="POST" action="{{ROOT}}/update_profil">                   
                    <div class="form-group">
                        <label class="bold" for="inputCard">Numéro de téléphone <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="inputCard">
                    </div>
                    <div class="form-group">
                        <label class="bold" for="inputCard">Pin de sécurité <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="inputCard">
                    </div>
                     
                    <a href="{{ROOT}}/mode-de-payements" type="submit" class="btn btn-primary">Payer</a>
                  </form> 
            </div>
        </div>

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
