<div class="page-illustration">
    <div class="mt-5 pt-3" style="position: absolute;">
        <h2 class="mt-5">Contactez-nous</h2>
    </div>
    <img src="{{ROOT}}/files/img/page_illust.jpg"/>
</div>

<div class="row-section contact-table mt-5 mlr-5">
    <div class="col-sm-4">
        <div class="row-section">
            <div class="col-sm-2 p-0"> 
                <i class="fa mt-4 text-center fa-phone fa-3x text-primary"></i> 
            </div>
            <div class="col-sm-10">
                <p class="mt-3">Téléphone</p>
                <p style="color: gray">{{site_contact_phone}}</p>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="row-section">
            <div class="col-sm-2 p-0"> 
                <i class="fa mt-4 text-center fa-envelope fa-3x text-primary"></i> 
            </div>
            <div class="col-sm-10">
                <p class="mt-3">Adresse Email</p>
                <p style="color: gray">{{site_email}}</p>
            </div>
        </div></div>
    <div class="col-sm-4">
         <div class="row-section">
            <div class="col-sm-2 p-0 mb-0"> 
                <i class="fa mt-4 text-center fa-location-arrow fa-3x text-primary"></i> 
            </div>
            <div class="col-sm-10 pt-0 mt-0">
                <p class="mt-3 mb-0">Adresse Physique</p>
                <p style="color: gray">{{site_adresse}}</p>
            </div>
        </div>
    </div>
</div>

<div class="mlr-5 mt-5 pt-5">
    <h3 class="ml-4">Envoyez-nous un Message</h3>
    <div class="row-section contact-form mt-5 p-0">
        <div class="col-sm-4">
            <input type="text" name="nom" placeholder="Votre nom" class="input" required=""/>
        </div>
        <div class="col-sm-4">
            <input type="email" name="email" placeholder="Votre email" class="input" required=""/>
        </div>
        <div class="col-sm-4">
            <input type="text" name="phone" placeholder="Votre phone" class="input" />
        </div> 
    </div>
    <input type="text" name="message" placeholder="Message" style="height: 100px;" class="input ml-4 mr-5 mt-5" />
    
    <button class="btn btn-primary mt-5 ml-4">Envoyer Message</button>
</div>