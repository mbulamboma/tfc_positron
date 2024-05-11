
    <!-- Footer -->	
    <footer id="footer" class="mt-3"> 
        <div class="footer_container pt-2"> 
            <div class="container">
                <div class="row">
                    <div class="col-sm-3"> 
                        <h5> A propos de nous</h5>
                        <div class="about">
                            {{app_about}}
                        </div>			
                        <ul class="footer-social">
                            {% for app_social_link %}
                                <li><a href="{{url}}"><i class="{{title}}"></i></a></li>
                            {% endfor %}  
                        </ul>
                    </div>

                    <div class="col-sm-3" >
                        <h5> Services </h5>
                        <ul class="liste_service">
                            {% for site_services %}
                                <li><a href="{{url}}"> {{title}}</a></li>
                            {% endfor %} 
                        </ul>
                    </div>

                    <div class="col-sm-3">
                        <h5> Informations</h5>
                        <ul class="liste_service">
                            {% for site_map %}
                                <li><a href="{{link}}"> {{title}}</a></li>
                            {% endfor %}  
                        </ul>
                    </div>

                    <div class="col-sm-3">

                        <h5> Newsletter</h5> 
                        <form method="POST">
                            <div class="form-group">
                                <input class="input_mail" type="email" placeholder="Entrez votre adresse mail" maxlength="30" />
                                <input type="hidden" name="form_key" value="{{form_id}}"  />
                            </div>
                            <button class="primary-btn" >Envoyer </button>
                        </form>
                    </div>
                </div>
            </div>

            <hr style="width: 1160px; margin-top: 35px;">
            <div class="logos ml-sm-auto">
                <ul class="logos_list"> 
       
                    <li><a href="#"><img src="{{ROOT}}/files/core/master_card.png" height="23" alt=""></a></li>
                    <li><a href="#"><img src="{{ROOT}}/files/core/visa.png" height="23" alt=""></a></li>
                    <li><a href="#"><img src="{{ROOT}}/files/core/amex.png" height="23" alt=""></a></li>
                    <li><a href="#"><img src="{{ROOT}}/files/core/m-pesa-logo.png" height="23" alt=""></a></li>
                    <li><a href="#"><img src="{{ROOT}}/files/core/airtel-money.png" height="23" alt=""></a></li>
                    <li><a href="#"><img src="{{ROOT}}/files/core/orange-money.jpg" height="23" alt=""></a></li>
                </ul>
            </div>
            <a href="#" class="footer-copyright">{{app_copyright}}</a>
        </div>
    </footer>    