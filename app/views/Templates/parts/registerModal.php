    <!--Modal Signup--> 
    <div id="myModal1" class=" modal">
        <div class="modal-content"> 
            <span class="close1" style="cursor: pointer;">&times;</span>
            <div>
                <form class="register">
                    <span class="login-title">Inscription</span>
                    <span class="bg-danger error-msg register-msg"></span>
                    <div class="username-form">
                        <span >Nom au Complet </span><br>
                        <div class="user-title"><span class="fa fa-user-o"></span>
                            <input   type="text" name="username" placeholder="exemple: Scoot Bright" maxlength="100" required /></div>
                    </div>
                    <div class="username-form-mail">
                        <span >E-mail </span><br>
                        <div class="user-title"><span class="fa fa-user-o"></span> 
                            <input id="email" type="email" name="email" placeholder="Entrez une adresse mail" minlength="3" maxlength="100"  required /></div>
                    </div>
                    <div class="username-form-password">
                        <span >Mot de passe </span><br>
                        <div class="user-title"><span class="fa fa-lock"></span>
                            <input type="password" name="password" placeholder="Saisissez un mot de passe" minlength="3"  maxlength="100" required>
                        </div>
                    </div>	
                    <div class="loader"></div>
                    <div class="btn-register" id="connect-button"><button type="submit" > Inscription</button></div>
                </form>
            </div>
            <div class="another-signup">
                <p>ou inscrivez-vous en utilisant</p>
                
                <div class="facebook" style="padding: 4px 4px 4px 4px; width: 270px; text-align: center; font-weight: bold; border-radius: 20px;display: block; margin-top: 20px">
                    <a href="{{facebook_auth_callback_link}}" style="color: white"> 
                        <i class="fa fa-facebook"></i>
                        connexion avec Facebook 
                    </a>
                </div>	
            </div>
        </div>
    </div>
    
<script src="{{ROOT}}/assets/ajax/register.js"></script>