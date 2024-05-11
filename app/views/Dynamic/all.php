<div class="page-illustration">
    <div class="mt-5 pt-3" style="position: absolute;">
        <h2 class="mt-5">Réaliser Votre Shopping en toute Sécurité</h2>
    </div>
    <img src="{{ROOT}}/files/img/page_illust.jpg"/>
</div>
<div class="row-section">
    <div class="col-sm-2 p-0" style="border: 1px solid #F5F5F5;"> 
        <div class="">
            <div class="card-header bg-success"> 
                <h7 class="text-white bold">Filtrer par prix (en $) </h7>
            </div>
            <div class="card-body">
                <h6>Intervalle de prix entre</h6>
                <div class="row-section mt-4" style="align-items: center;">
                    <div class="col-sm-5 m-0 p-0"><input class="input" type="text" /></div>
                    <div class="col-sm-2 mr-1 text-danger bold"> à </div>
                    <div class="col-sm-5 m-0 p-0"><input class="input" type="text" /></div>
                </div>
                <button class="btn btn-success w-100">filtrer</button>
            </div>
        </div>
        <hr>
        
        <div class="mt-3">
            <div class="card-header bg-primary"> 
                <h7 class="bold text-white">Filtrer par catégorie</h7>
            </div>
            <div class="card-body">
                <ul class="navbar-nav">
                    {% for shop_main_categories %}
                    <li class="nav-item"><a href="#" class="nav-link text-gray">{{title}} <input type="checkbox" class="float-right" value="0" /></a></li> 
                    {% endfor %}  
                 </ul>
            </div>
        </div>
        
    </div>
    <div class="col-sm-10">
        
        <table class="table table-bordered">
            <thead>
              <tr>
                <th>Illustration</th>
                <th>Article</th>
                <th>Description</th>
                <th>Fabricant</th>
                <th>Code Commande</th>
                <th>Ref. Fabricant</th>
                <th>Prix pour</th>
                <th>Prix</th>
                <th>Qté</th> 
                <th>Action</th> 
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> <img src="{{ROOT}}/files/img/img (37).jpg" height="100" class=""></td> 
                <td>VCNL3040 -  Capteur de proximité, I2C, 300 mm, QFN, 8 Broche(s), 2.5 V, 3.6 V</td>
                <td>Description expédiés depuis différents entrepôts. Veuillez consulter les informations de livraison </td>
                <td>AD547ASS2</td>
                <td>REFCOM85</td>
                <td>3584658521</td>
                <td>Pièce</td>
                <td>50$</td>
                <td>55</td>
                <td>
                    <div class="row-section">
                        <div class="mr-0 bolder text-success"> 
                            Qté : <input type="text" class="input bg-white" value="1"  placeholder="Quantité"/>
                        </div>  
                       
                    </div>
                    <div class="section">
                        <div class="ml-0">
                            <button class="btn btn-success " style="color: black">Ajouter</button> 
                       </div>
                    </div>
                </td>
              </tr>
                
            </tbody>
        </table>

    </div>
</div>

<div class="row-section">
    <nav class="offset-lg-1" aria-label="...">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="btn btn-info mr-2 mb-2" href="index.php?act=news&page={%- echo $i++; -%}" tabindex="-1">précedent</a>
            </li> 
            <li class="page-item active">
                <a class="page-link jumbBtn" href="index.php?act=news&page">
                1
                    <span class="sr-only">(current)</span> 
                </a>
            </li> 
            <li class="page-item">
                <a class="page-link jumbBtn" href="index.php?act=news&page">
                2
                    <span class="sr-only">(current)</span> 
                </a>
            </li> 
            <li class="page-item">
              <a class="btn btn-success ml-2 mb-2" href="index.php?act=news&page={%- echo $curr+1; -%}">suivant</a>
            </li>
          </ul>
        </nav>
</div>
<br /><br /><br /><br /><br /><br />

