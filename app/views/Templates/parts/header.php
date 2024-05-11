<header> 
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="float-left d-none d-sm-block">
                        <ul class="header-top-links-left">
                            <li>
                                <a href="#">
                                    <i class="fa fa-phone"></i>
                                    {{site_contact_phone}} 
                                </a>
                            </li>
                            <li>
                                <a href="mailto:{{site_email}}" style="padding-left: 18px;">
                                    <i class="fa fa-envelope"></i>
                                    {{site_email}}
                                </a>
                            </li>
                        </ul>
                    </div>

                    {%- if (!isset($_SESSION['user-token'])) { -%}
                        <div class="float-right">
                            <ul class="header-top-links">
                                <li><button id="myBtn"><i class="fa fa-lock"></i>  Se connecter</button></li>
                                <li><span> |</span></li>
                                <li><button id="myBtn1"><i class="fa fa-user"></i>  S'enregistrer</button></li>
                            </ul>
                        </div>
                    {%- }-%}
                    {%- if (isset($_SESSION['username'])) { -%}
                        <div class="float-right">
                            <ul class="header-top-links"> 
                                <li><i class="fa fa-user"></i> {%- echo htmlspecialchars($_SESSION['username']) ;-%}</li>
                            </ul>
                        </div>
                    {%- }-%}

                </div>           
            </div>
        </div>
    </div> 
    <!-- Conteneur du logo du site , recherche , categories et compte -->
    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="header-logo">
                        <a class="logo" href="#">
                            {{app_name}} 
                        </a>
                        <div class="header-search">
                            <form class="d-none d-sm-block">
                                <select class="input search-categories">
                                    <option value="default"> Toutes les catégories</option>
                                    {% for shop_main_categories %}
                                        <option value="{{id}}">{{title}}</option> 
                                    {% endfor %}  
                                </select>
                                <input class="input search-input" type="text" name="search-products" placeholder="Recherchez un produit" maxlength="100">
                                <button class="search-btn"><i class="fa fa-search" style="color: white;"></i> </button>
                            </form>
                        </div>
                    </div> 
                </div>

                <div class="col-sm-4">
                    <div class="row mt-3">
                        <div class="col-sm-6 ">
                            {%- if (isset($_SESSION['user-token'])) { -%}    
                                <div class="my-account">
                                    <ul>
                                        <li class="dropdown-account"><a><span class="fa fa-user"></span> <strong>MON COMPTE</strong> <i class="fa fa-caret-down"></i></a>
                                        <div class="dropdown-account-content">
                                                <a href="/profil"><i class="fa fa-user" style="padding-right: 14px;"></i>Mon Profil</a>
                                                <a href="/panier"><i class="fa fa-cart-arrow-down" style="padding-right: 11px;"></i>Mon Panier</a>
                                                <a href="/suivre"><i class="fa fa-map-marker" style="padding-right: 5px;"></i>Suivre ma commande</a> 
                                                <a href="/deconnect"><i class="fa fa-sign-out-alt" style="padding-right: 8px;"></i>Deconnexion</a>
                                        </div>
                                        </li>
                                    </ul>		
                                </div> 
                            {%- }-%}
                        </div>
                        <div class="col-sm-6">
                            <div class="my-cart"> 
                                <a href="/panier" class="panier"><span class="fa fa-cart-arrow-down"></span> MON PANIER </a>	
                                <span class="panier-number invisible">+1</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</header>
 
 
<nav class="navbar navbar-expand-lg p-0 navbar-light bg-white"> 
    <div class="row">      
        <div class="col-sm-3 offset-1"> 
            <a href="/filter"><div class="category-header" style="background: rgb(14,140,228);">Categories  <i class="fa fa-list"></i></div></a>
        </div>
        <div class="col-sm-8 mt-1">
             <ul class="navbar-nav">
                  {% for app_main_menu %}
                     <li class="nav-item">
                         <a class="nav-link" href="{{link}}">
                             {{title}}
                         </a>
                     </li> 
                  {% endfor %}  
              </ul>
        </div>
    </div>
</nav>
