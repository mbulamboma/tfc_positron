
<!--Modal Reset Password--> 
<div id="myModal2" class="modal" >
    <div class="modal-content" style="height: 50%;"> 
        <span class="close2">&times;</span>
        <div>
            <form class="reset">
                <span class="login-title">Mot de Pass Oublié? </span> 
                <div class="login-content" >
                    <span class="bg-success reset-msg" style="margin-top: 25px;"></span>
                    <div class="username-form"> 
                        <div class="user-title">
                            <span class="fa fa-user"></span>
                            <input id="resetemail" type="text" name="email" placeholder="Saisissez votre email" required maxlength="100">
                        </div>
                    </div> 
                    <input type="hidden" name="form_id" value="{{form_id}}" />  
                    <div class="loader"></div>                
                    <div class="btn-reset" id="connect-button"><button type="submit" > Envoyer</button></div>
                </div>
            </form>
        </div> 
    </div>
</div>

<script src="{{ROOT}}/assets/ajax/reset.js"></script>