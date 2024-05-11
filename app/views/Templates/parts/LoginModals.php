
<!--Modal Login--> 
<div id="myModal" class="modal">
    <div class="modal-content"> 
        <span class="close">&times;</span>
        <div>
            <form class="login">
                <span class="login-title">Se connecter</span> 
                <div class="login-content">

                    <span class="bg-danger error-msg"></span>
                    <div class="username-form">
                        <span >Email </span><br>
                        <div class="user-title">
                            <span class="fa fa-user"></span>
                            <input id="username" type="text" name="id" placeholder="Saisissez l'Email ici" required maxlength="100">
                        </div>
                    </div>
                    <div class="username-form-password">
                        <span >Mot de passe </span><br>
                        <div class="user-title"><span class="fa fa-lock"></span> <input id="password" type="password" name="password" placeholder="Saisissez votre mot de passe" required maxlength="100"></div>
                    </div>
                    <input type="hidden" name="form_id" value="{{form_id}}" /> 
                    <a href="#" class="forgot-password btn-forgot-password">Mot de passe oublié ?</a> 
                    <div class="loader"></div>                
                    <div class="btn-login" id="connect-button"><button type="submit" > Connexion</button></div>
                    <div class="another-signup">
                        <p>ou connectez-vous en utilisant</p>

                        <div class="facebook" style="padding: 4px 4px 4px 4px; width: 270px; text-align: center; font-weight: bold; border-radius: 20px;display: block; margin-top: 20px">
                            <a href="{{facebook_auth_callback_link}}" style="color: white"> 
                                <i class="fa fa-facebook"></i>
                                connexion avec Facebook 
                            </a>
                        </div>	
                    </div>
                </div>
                
            </form>
        </div>
        <div class="login-inscription">
            <span>Vous n'avez pas de compte?</span> <a href="#" class="sendToRegister"> Cliquez ici</a>
        </div>
    </div>
</div>

<script src="{{ROOT}}/assets/ajax/login.js"></script>