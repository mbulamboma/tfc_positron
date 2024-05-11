<div class="container m-0 pl-0">
    <div class="col-sm-3" style="margin-left:7.4%; position: absolute; z-index: 1;">
         <ul class="category-list">
            {% for shop_main_categories %}
               <li><a href="#">{{title}} <i class="fa fa-angle-right"></i></a></li> 
            {% endfor %}  
         </ul>
    </div>
    <!-- Caroussel page d'accueil --> 
    <div class="col-sm-12 pl-0">
        <div class="slideshow-container ml-0 pl-0">
            <!--  Full-width images -->
            <div class="mySlides" style="animation: fadeInRight 0.5s;"> 
                <div class="slide-content">
                    <h1 class="slide-title">Nous sommes le Meuilleur distributeur de Quits Electronique en RD.Congo</h1>
                    <p class="slide-description">Avec plus de 100000 ventes par jours et plus de 1500 entreprise en RDC. 
                                                  Nous affirmons avec modestie que nous somme le meuilleur ici en RDC.
                                                Vous trouverez nos points de distribution partout en RDC et surtout ici à Kinshasa</p>
                    <button type="submit" class="btn btn-primary pl-3"> Commencer à Commamder</button>
                </div>
                <img src="./files/img/slide-1.jpg"  alt=""/>
            </div>
            <div class="mySlides" style="animation: fadeInLeft 0.5s;" />
                <div class="slide-content">
                    <h1 class="slide-title">Avec plus de 5000 points de ventes et 450 contrats avec des Fabricants</h1>
                    <p class="slide-description">Avec plus de 100000 ventes par jours et plus de 1500 entreprise en RDC. 
                                                  Nous affirmons avec modestie que nous somme le meuilleur ici en RDC.
                                                Vous trouverez nos points de distribution partout en RDC et surtout ici à Kinshasa</p>
                    <button type="submit" class="btn btn-primary pl-3"> Commencer à Commamder</button>
                </div>
              <img src="./files/img/slide-2.jpg"  />
            </div>
            <div class="mySlides" style="animation: fadeInTop 0.5s;" />
            <div class="slide-content">
                <h1 class="slide-title">Recevez vous produits dans les 24heurs qui suivent vos commandes chez Positron</h1>
                <p class="slide-description">Avec plus de 100000 ventes par jours et plus de 1500 entreprise en RDC. 
                                              Nous affirmons avec modestie que nous somme le meuilleur ici en RDC.
                                            Vous trouverez nos points de distribution partout en RDC et surtout ici à Kinshasa</p>
                <button type="submit" class="btn btn-primary pl-3"> Commencer à Commamder</button>
            </div>
              <img src="./files/img/img (16).jpg" />
            </div>
            <!--  Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>
</div>
 

<!-- Section Image New Collection  -->
<div class="section-title"> 
    <h3>OFFRES SPÉCIALES </h3>
    <div class="underline"></div>
</div>
<div class="section">
    <div class="row mt-5" >
        <div class="col-sm-3">
            <div class="shop-img">
                <img src="./files/img/img (2).jpg" />
            </div>
            <div class="shopbefore"> </div>
            <div class="shop-body pl-3">
                <h5>Arduino<br>Collection</h5>
                <a href="#" class="cta-btn">Acheter <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="shop-img">
                <img src="./files/img/img (27).jpg" />
            </div>
            <div class="shopbefore"></div>
            <div class="shop-body pl-3">
                <h5>Mesure<br>Collection</h5>
                <a href="#" class="cta-btn">Acheter <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="shop-img">
                <img src="./files/img/img (22).jpg" />
            </div>

            <div class="shopbefore">
            </div>
            <div class="shop-body pl-3">
                <h5>Processeur<br>Collection</h5>
                <a href="#" class="cta-btn">Acheter <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="shop-img">
                <img src="./files/img/img (30).jpg" />
            </div>
            <div class="shopbefore">
            </div>
            <div class="shop-body pl-3">
                <h5>Controller<br>Collection</h5>
                <a href="#" class="cta-btn">Acheter <i class="fa fa-arrow-circle-right"></i></a>
            </div>

        </div> 
    </div> 
</div>

<!-- Section Image New Collection  -->
<div class="section-title"> 
    <h3>MEILLEURES VENTES </h3>
    <div class="underline"></div>
</div>

<div class="section">
    <div class="col-sm-3 p-0 m-0">
        <img src="files/img/best_sale.jpg">
    </div>
    <div class="col-sm-9"> 
        <div class="col-sm-4">
            <div class="article-one">
                <span class="price-reduction">{{reduction_rate}}%</span>
                    <img class="imag" src="{{image}}">
                    <h3><a href="{{ROOT}}/voir/{{id}}">{{model}}</a></h3>
                    <a href="{{ROOT}}/voir/{{id}}">{{short_desc}}</a>
                    <a href="{{ROOT}}/voir/{{id}}"><h4>{{real_price}} <del>{{ads_price}}</del></h4></a>
                    <br />
                    <hr>
                    <div class="article-tool">
                        <a href="{{ROOT}}/voir/{{id}}" id="add-eye"><i class="fa fa-eye"></i><span class="title-eye">Apercu du produit</span></a>
                    </div>
            </div>
        </div>
    </div>
</div>

<div class="row-section">
    <a class="btn btn-primary" href="{{ROOT}}/filter">VOIR PLUS</a>
</div>

<!-- Section Image New Collection  -->
<div class="section-title"> 
    <h3>NOUVEAUX PRODUITS </h3>
    <div class="underline"></div>
</div>

<div class="section">
    <div class="col-sm-9 p-0 m-0">
        <div class="col-sm-4 m-0">
           
            <div class="article-one">
                <span class="price-reduction">{{reduction_rate}}%</span>
                    <img class="imag" src="{{image}}">
                    <h3><a href="{{ROOT}}/voir/{{id}}">{{model}}</a></h3>
                    <a href="{{ROOT}}/voir/{{id}}">{{short_desc}}</a>
                    <a href="{{ROOT}}/voir/{{id}}"><h4>{{real_price}} <del>{{ads_price}}</del></h4></a>
                    <br />
                    <hr>
                    <div class="article-tool">
                        <a href="{{ROOT}}/voir/{{id}}" id="add-eye"><i class="fa fa-eye"></i><span class="title-eye">Apercu du produit</span></a>
                    </div>
            </div>
        </div>
    </div>
    
    <div class="col-sm-3">
        <img src="files/img/new_products.jpg">
    </div>
</div>

<div class="row-section">
    <a class="btn btn-primary" href="{{ROOT}}/filter">VOIR PLUS</a>
</div>
{% include ../app/views/Templates/parts/fabriquants.php %}
<br /><br /><br />
<script src="assets/js/multislider.min.js" type="text/javascript"></script>
		
	
