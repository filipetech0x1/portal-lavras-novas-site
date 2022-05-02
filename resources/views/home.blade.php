<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    
    <style>
*{
    margin: 0;
    padding: 0;
}
a{
    color: #fff;
    text-decoration: none;
}
a:hover{
    opacity: 0.7;
}
.logo{
    display: flex;
    position: absolute;
    font-size: 20px;
    /*text-transform: uppercase;*/
    /*letter-spacing: 4px;*/
    align-items: center;
    justify-content: space-around;
}
#logotipo{
    display: flex;
    justify-content: space-around;
   
}
nav{
    display: flex;
    justify-content: space-around;
    align-items: center;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    background: #054030;
    height: 8vh;
    
}

main{
    overflow-y: scroll;
    background-size: cover;
    height:92vh;
    scroll-behavior: smooth;
    overflow-x: hidden;
    
}
.nav-list{
    list-style: none;
    display: flex;
}
.nav-list{
    letter-spacing: 3px;
    margin-left: 0px;
    
}
.mobile-menu{
    display: none;
    cursor: pointer;
}

.mobile-menu div{
    width:32px;
    height: 2px;
    background:#fff;
    margin:8px;
    transition: 0.3s;
}
    
    body{
        overflow-x: hidden;
    }
    .nav-list{
        position: absolute;
        width: 250px;
        top: 8vh;
        left:0;
        width: 250px;
        height: 92vh;
        background:#054030;
        z-index: 1111;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;
        transition: transform 0.3s ease-in-out;
        transform: translateX(-250px);
    }
    
    .nav-list li{
        margin-left: 0;
    }
    .mobile-menu{
        display: block;
        position: absolute;
        left: 0;      
        data-side:"left";
        padding: 0;
        border: 0;
        outline: none;
        padding-top: 0;
        padding-left: 0;
        padding-right: 0;
        
    font-weight: 400;
    color: #343a40;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: .9375rem;
    line-height: 1.5;
    border-radius: 0;
    -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    -o-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        
    }
    .nav-list.active {
        transform: translateX(0);
    }

    @keyframes navLinkFade {
        from{
            opacity: 0;
            transform: translateX(50px);
        }
        to{
            opacity: 1;
            transform: translateX(0);
        }
    }
    .line1{

    }
    .line2{

    }
    .line3{

    }
    #checkbox-menu{
  position: absolute;
  opacity: 0;
    }
    label{
  cursor: pointer;
  display: block;
  height: 22px;
  width: 30px;
}
label span{
  position: absolute;
  display: block;
  height: 5px;
  width: 100%;
  border-radius: 30px;
  background: #ffffff;
  transition: 0.25s ease-in-out;
}

label span:nth-child(1){
  top: 0;
}

label span:nth-child(2){
  top: 8px;
}

label span:nth-child(3){
  top: 16px;
}

#checkbox-menu:checked + label span:nth-child(1){
  transform: rotate(-45deg);
  top: 8px;
}

#checkbox-menu:checked + label span:nth-child(2){
  opacity: 0;
}

#checkbox-menu:checked + label span:nth-child(3){
  transform: rotate(45deg);
  top:8px;
}
    .mobile-menu.active  {
        transform: rotate(-45deg) translate(-8px, 8px);
    }
    .mobile-menu.active  {
        opacity: 0;
    }
    .mobile-menu.active  {
        transform: rotate(45deg) translate(-5px, -7px);
    }
    .flex-img-background img{
        position: relative;
        justify-content: space-around;
        width: 100%;
        top: 20px;
        max-width: none;
        box-sizing: space;
        box-align: center;

    }
   
    .instagram2{
        list-style: none;
        position: relative;
        display: flex;
        top: 30px; 
        vertical-align: middle;
        justify-content: space-around;
        padding: 40px;
    }
    .instagram{
        position: relative;
        display: flex;
        vertical-align: middle;
        justify-content: space-around;
    }
    #insta{
        width: 150px;

    }
    #insta-texto{
        font-family:sans-serif;
        height: 30px;
        justify-content: space-around;
        position: relative;
        font-size: 20px;
        align-items: center;
        left: 395px;
        top: 70px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
       
    }
    .servicos{
        position: relative;
        vertical-align: middle;
        justify-content: space-around;
        width: 100%;
        height: 1565px;
        top: 50px;
    }
    .serv-encontra{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        list-style: none;
        margin: 10px;
        padding: 0;
    }
    .links-menu-list{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        list-style: none;
        margin: 10px;
        padding: 0;
    }
    @media screen and (max-width: 767px) {
    .links-menu-list  h2 {
        grid-template-columns: 3fr 1fr;
    }

    .links-menu-list h2 > p:nth-child(1) { order: 1; }
    .links-menu-list h2 > p:nth-child(2) { order: 3; }
    .links-menu-list h2 > p:nth-child(3) { order: 2; text-align: right; }
    .links-menu-list h2 > p:nth-child(4) { order: 4; }
}
    .serv-encontra li > h3:last-child {
    text-align: right;
}
    .serv-nao-encontra li > h3:last-child {
    text-align: right;
}
@media screen and (max-width: 767px) {
    .serv-encontra  li {
        grid-template-columns: 3fr 1fr;
    }

    .serv-encontra li > h3:nth-child(1) { order: 1; }
    .serv-encontra li > h3:nth-child(2) { order: 3; }
    .serv-encontra li > h3:nth-child(3) { order: 2; text-align: right; }
    .serv-encontra li > h3:nth-child(4) { order: 4; }
}
@media screen and (max-width: 767px) {
    .serv-nao-encontra  li {
        grid-template-columns: 3fr 1fr;
    }

    .serv-nao-encontra li > h3:nth-child(1) { order: 1; }
    .serv-nao-encontra li > h3:nth-child(2) { order: 3; }
    .serv-nao-encontra li > h3:nth-child(3) { order: 2; text-align: right; }
    .serv-nao-encontra li > h3:nth-child(4) { order: 4; }
}
.serv-encontra li > h3 {
  text-overflow: ellipsis;
  white-space: pre-wrap;
  overflow:visible;
}
.serv-nao-encontra li > h3 {
  text-overflow: ellipsis;
  white-space: pre-wrap;
  overflow:visible;
}
    .serv-encontra li{
        list-style: none;
        top: 50px;
        display: grid;
        grid-template-columns: 3fr 3fr 2fr 1fr;
        background: #ffffff;
        border-radius: 3px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
        margin: 8px 0;
        padding: 15px;
        grid-gap: 2px 8px;
        transition: all .1s;
    }
    .serv-nao-encontra li{
        list-style: none;
        top: 50px;
        display: grid;
        grid-template-columns: 3fr 3fr 2fr 1fr;
        background: #ffffff;
        border-radius: 3px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
        margin: 8px 0;
        padding: 15px;
        grid-gap: 2px 8px;
        transition: all .1s;
        
        
    }
    .serv-nao-encontra{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        list-style: none;
        margin: 10px;
        padding: 0;
        
    }    
    #pousada{
        
        width:100px;
        height:80px;
    }
    #restaurante{
        width:80px;
        height:80px;
    }
    #serv-title{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        position: relative;
        padding: 35px;
        
    }
    #serv-title2{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        position: relative;
        padding: 35px;
    }
    
    .historia{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        
        left: 30px;
        top: 30px;
    }
    #apresentacao{
    font-size: 18px;
    line-height: 34px;
    padding: 20px;
    color: #000000;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-rendering: optimizeLegibility;
    margin: 15px 0;
    margin-bottom: 0.9rem;
    }
    #title-apresentacao{
        padding: 20px;
        position: relative;
        top: 20px;
    }
    #title-lavras-hoje{
        padding: 20px;
        position: relative;
        top: 40px;
    }
    .lavras-hoje{
    color: #000000;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-rendering: optimizeLegibility;
    width: 100%;
    height: 400px;

    }
    
    .rodape{
        background: #000000;
        width: 100%;
        height: 400px;
        
    }
    .rodape li{
        background: #000000;
    }
    .redes-rodape {
        display:flex;
        position: relative;
        
        
    }
    #text-rod{
        color: #fff;
        font-size: 18px;
        line-height: 34px;
        padding: 5px;
        top: 100px;
        position: relative;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-rendering: optimizeLegibility;
   
    

    }
    #text-rod2{
        line-height: 34px;
        padding: 1px;
        display: flex;
        align-items: center;
        text-align: center;
        position: relative;
        max-width: none;
        box-sizing: space;
        box-align: center;
        
    }
    .footer{
        
        position: relative;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 18px;
        line-height: 34px;
        padding: 20px;
    }
    #li-rod{
     
        padding: 10px;
        top: 100px;
        display: flex;
        align-items: center;
        text-align: center;
        position: relative;
        max-width: none;
        box-sizing: space;
        box-align: center;
        
        
    }
    .rodape3{
        display: flex;
        
    }
    .rodape-logo{
        position: relative;
        left: 550px;
        padding: 5px;
        display: flex;
        
       
    }
    .rodape-logo2 li{
        list-style: none;
       
    }   
    #rodape-logo3{
        height: 400px;
        position: absolute;
        justify-content: space-around;
        left: 80px;
        margin-top: -221px;
        
        
    }
    #icone-servico{
        width: 100px;
        height: 80px;
    }
    .card-border{
        border-width: 2px;
        border-style: solid;
        border-color: #000000;
        width: 15rem;
        height: 12rem;
        padding: 30px;
        box-shadow: 5px 5px rgba(0, 0, 0, .2);
}
       
    }
    .card-header-border{
        border-bottom-width: 2px;
        border-bottom-height:2px;
        border-bottom-style:solid;
        padding: 10px;
        box-sizing: border-box;
        align-content: flex-start;
        align-items: flex-start;
        display: flex;
    }
    .card-footer-border{
        border-top-width: 2px;
        border-top-height:2px;
        border-top-style:solid;
        padding: 10px;
        text-align: center;
        box-sizing: border-box;
    }
    .temperature-description{
        padding: 5px;
        
    }
    .container-fluid{
       
        display:flex; 
        justify-content: center;
        text-align: center;
        height: 300px;
        width: 100%;
        position: relative;
        top: 60px;
        max-width: 400px;
        align-content: flex-start;
        align-items: flex-start;
        display: flex;
    }
    .card-body-text{
        text-align: center;
    }

    .city, .temperature{
    
    width: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
    text-align: center;
    padding: 5px;
    align-content: flex-start;
    align-items: flex-start;
    

}



.degree-section{
    display: flex;
}

.degree-section span{
    margin: 10px;
    font-size: 30px;
}

.degree-section h2{
    font-size: 40px;
}
.card-icon{
    width: 10px;
    height: 10px;
    position: relative;
    align-items: center;
}
.card-paginas{
    font-family: "Poppins", sans-serif;
    background-color: #fafafa;
}

.card1 {
  border-radius: 5px;
  box-shadow: 7px 7px 0px rgba(50, 50, 50, 0.22);
  margin: 20px;
  width: 380px;
  transition: all 0.3s ease-out;
}

.card1:hover {
  transform: translateY(-5px);
  cursor: pointer;
}
 
.card1 p {
  color: #525252;
  font-size: 16px;
  padding: 15px;
}
 
.image {
  float: right;
  max-width: 64px;
  max-height: 64px;
}
.blue {
  border-left: 3px solid #4895ff;
}
 
.green {
  border-left: 3px solid #3bb54a;
}
 
.red {
  border-left: 3px solid #b3404a;
}
.orange{
    border-left: 3px solid #e66801ea;
}
.fotos-background{
    
}
#temperatura-icone{
    display: relative;
    width: 60px;
}
    </style>
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;1,200;1,400;1,600&display=swap"
    rel="stylesheet" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Portal Lavras Novas</title>
</head>
<body>

    <header>
            <nav>
        
            <a class="logo" href="{{ route('home')}}">
                <img id="logotipo" src="favicon.ico" alt="logotipo">
                 Portal Lavras Novas</a>

            <div class="container">
                <input type="checkbox" id="checkbox-menu">
                <label for="checkbox-menu">
                <div class="mobile-menu">
                    <span> </span> 
                    <span> </span>
                    <span> </span>
                </div>
                </label>
            </div>
            
                <ul class="nav-list">
                    <li><a href="{{ route('cachoeiras')}}">Cachoeiras</a></li>
                    <li> <a href="{{ route('cultura')}}">Cultura</a></li>
                    <li><a href="{{ route('gastronomia')}}">Gastronomia</a></li>
                    <li> <a href="{{ route('hospedagem')}}">Hospedagem</a></li>
                    <li><a href="{{ route('loja')}}">Loja</a></li>
                </ul>

            </nav>
        
        </header>

    <main>
            

           <div class="fotos-background">
            <img src="" alt="">
           </div>



            <div class="card-paginas">
                
                    <ul class="serv-encontra">

                    
                    <div onclick="navToCachu()" style="cursor: pointer;" class="card1 green">
                    <li>
                      <h2>Cachoeiras</h2> 
                      <p>Confira as melhores cachoeiras</p>
                      <img class="image" src="noun-waterfall-2045578.png" alt="" />
                    </li>
                    </div>
               
                    <div onclick="navToCultura()" style="cursor: pointer;"class="card1 blue">
                    <li>
                      <h2>Cultura</h2>
                      <p>Conheça a cultura local</p>
                      <img class="image" src="noun-building-2872558.png" alt="" />
                    </li>
                    </div>
               
                    <div onclick="navToGastro()" style="cursor: pointer;" class="card1 red">
                    <li>
                        <h2>Gastronomia</h2> 
                        <p>Conheça a gastronomia local</p>
                        <img class="image" src="noun-jar-4782011.png" alt="" />
                    </li>
                    </div>

                    <div onclick="navToHosp()" style="cursor: pointer;" class="card1 orange">
                    <li>
                        <h2>Hospedagem</h2>
                        <p>Confira as opções de hospedagem</p>
                        <img class="image" src="noun-accommodation-4578364.png" alt="" />
                    </li>
                      </div>
                    </ul>
                  </div>
              
            </div>

            <div class="historia">
                <h2 id="title-apresentacao">Lavras Novas</h2>
                <p id="apresentacao">Lavras Novas distrito de Ouro Preto - MG e a 120 km da capital mineira Belo Horizonte possui casas antigas e coloridas, igrejas coloniais e restaurantes. É cercada de montanhas de uma vegetação incrível, que dão um charme especial. É um lugar muito gostoso e acolhedor com seus visitantes, de culinária local e muita história envolvida em todos detalhes, lugar de natureza exuberante, você pode fazer passeio off-road, caminhar na natueza, renovar as energias em suas cachoeiras maravilhosas, escutar uma boa música ao vivo tomando uma cerveja e comendo uma comida típica, em Lavras Novas temos opções para todos os gostos.</p>
            </div>
            
            <div class="lavras-hoje">
                <h2 id="title-lavras-hoje">Lavras Novas hoje</h2>

                <div class="container-fluid">

                    <div class="card-border">
                         <h3 id="title-card-temperatura">TEMPO E TEMPERATURA<br></h3> 

                    <div class="card-body">
                        
                         <div class="display-card">

                            
                            <img id="temperatura-icone" src="pngegg.png" alt="">
                            <div class="city">Lavras Novas - MG</div>
                            <div class="temperature">
                                <div class="degree-section">
                                    <h2 class="temperature-degree"></h2>
                                    <span class="unit"></span><br><br>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="temperature-description"></div>
                    </div>
                 </div>

            </div>
          
            <div class="servicos">
                <h2 id="serv-title">Serviços em Lavras Novas</h2> 
                <ul class="serv-encontra"> 
                    <li>
                       <img id="icone-servico" src="noun-inn-4766543.png" alt="">
                        <h3>POUSADAS</h3>
                    </li>
                    <li>
                        <img id="icone-servico" src="noun-restaurant-3381726.png" alt="">
                        <h3>RESTAURANTES</h3>
                    </li>
                    <li>
                        <img id="icone-servico" src="noun-beers-1159050.png" alt="">
                        <h3>BARES</h3>
                    </li>
                    <li>
                        <img id="icone-servico" src="noun-off-road-3480756.png" alt="">
                        <h3>PASSEIOS OFF-ROAD</h3>
                    </li>
                    <li>
                        <img id="icone-servico" src="noun-zipline-3268401.png" alt="">
                        <h3>TIROLESA</h3>
                    </li>
                    <li>
                        <img id="icone-servico" src="noun-tourist-guide-4249416.png" alt="">
                        <h3>GUIA TURÍSTICO</h3>
                    </li>
                    <li>
                        <img id="icone-servico" src="noun-ecotourism-4441702.png" alt="">
                        <h3>ECOTURISMO</h3>
                    </li>
                    
                   
                </ul>
                <h2 id="serv-title2">Não possui</h2> 
                <ul class="serv-nao-encontra">
                    
                    <li>
                        <img id="icone-servico"  src="noun-drugstore-4786256.png" alt="">
                        <h3> DROGARIA</h3>
                    </li>

                    <li>
                        <img id="icone-servico"  src="noun-gas-station-4780975.png" alt="">
                        <h3> POSTO </h3>
                    </li>

                    <li>
                        <img id="icone-servico"  src="noun-hospital-4787144.png" alt="">
                        <h3> HOSPITAL </h3>
                    </li>

                    <li>
                        <img id="icone-servico" src="noun-taxi-101917.png" alt="">
                        <h3> TAXI </h3>
                    </li>
                </ul>
            </div>

            

       <footer>
        <div class="rodape">
            <h3 id="text-rod">Portal Lavras Novas</h3>
            <h4 id="text-rod">Assuntos relacionados ao site:</h4>
            <ul class="rodape2">
                <ul class="rodape3">
                <li id="li-rod">
                    <a href="mailto:/*emaildoportal*/" target="_blank">
                        <img id="text-rod2" src="https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white" alt="">
                    </a>
                </li>
                <li  id="li-rod">
                    <a href="https://www.instagram.com/portalavrasnovas/" target="_blank">
                        <img id="text-rod2" src="https://img.shields.io/badge/Instagram-E4405F?style=for-the-badge&logo=instagram&logoColor=white
                        " target="_blank">
                    </a>
                </li>
                </ul>
                <li><p id="text-rod">Idealizador - joaopedroartes07@gmail.com <br>Desenvolvido por filipetech01 - filipetech01@gmail.com</p></li>

            </ul>
            <div class="rodape-logo">
                        <img  id="rodape-logo3" src="logo-rodape.png" alt="">
            </div>
       </div> 
         
       </footer>
         
    
            
    </main>

    <script type="text/javascript">
        
        function navToCachu() {
    window.location.href = "{{ route('cachoeiras')}}";
    }

    function navToHosp() {
    window.location.href= "{{ route('hospedagem')}}";
    }

    function navToGastro() {
    window.location.href= "{{ route('gastronomia')}}";
    }

    function navToCultura() {
    window.location.href= "{{ route('cultura')}}";
    }
    </script>

    <script type="text/javascript">
    //Script do TEMṔO E TEMPERATURA//

    //https://api.openweathermap.org/data/2.5/weather?lat=-20.46280125&lon=-43.52637183940418&appid=0259ee4de878b5ef5b8fa1ed05dd3cff&units=metric&lang=pt_br

    //http://apiadvisor.climatempo.com.br/api/v1/weather/locale/3477/current?token=39c87a7e35a6653d2a65b221e7c1d361

    

    window.addEventListener('load', ()=>{
    
    const url = 'http://dataservice.accuweather.com/currentconditions/v1/1339430?apikey=sF4lnGwbs2oSvmJnW6SFUeG9rvGpELdH&language=pt-br';

    
    let response = fetch(url);

    let temperatureDiscription = document.querySelector('.temperature-description')
    let temperatureDegree = document.querySelector('.temperature-degree')
    let temperature = document.querySelector('.temperature')
    let unit = document.querySelector('.unit')
    let icon = document.querySelector('.icon')
   


    fetch(url)
    .then(response => response.json())
    .then(data => {
        const {Temperature, WeatherText} = data[0]
           temperatureDegree.textContent = Temperature.Metric.Value
           unit.innerText = 'ºC'
           temperatureDiscription.innerText = WeatherText })          
    })

    </script>


    <script type="text/javascript">
    //Script do botão HOME//
    class MobileNavbar {

        constructor(mobileMenu, navList, navLinks){
            this.mobileMenu = document.querySelector(mobileMenu);
            this.navList = document.querySelector(navList);
            this.navLinks = document.querySelector(navLinks);
            this.activeClass = "active";

            this.handleClick = this.handleClick.bind(this);
        }
        animateLinks(){
            Array.from(this.navLinks).forEach((link,index) => {
                console.log(index / 7 + 0.3);
                link.style.animation
                ?(link.style.animation = "")
                : (link.style.animation = `navLinkFade 0.5s ease forwards 0.3s`);
            });
            
        }

        handleClick(){
            this.navList.classList.toggle(this.activeClass);  
            this.animateLinks();
        }

        addClickEvent(){
            this.mobileMenu.addEventListener("click", this.handleClick);
        }

        init(){
            if(this.mobileMenu){
                this.addClickEvent();
            }
            return this;
        }
    }
    
    const mobileNavbar = new MobileNavbar(
        ".mobile-menu",
        ".nav-list",
        ".nav-list li",
    );
    mobileNavbar.init();
    </script>
    
    
</body>
</html>