<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

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
    letter-spacing: 4px;
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
    height: 10vh;
}
html{
    overflow-y: hidden;
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
    data-side: "left";
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

        width: 100%;
    }
    .serv-encontra{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        list-style: none;
        padding: 5px;
        margin-left: -15px;
        margin-bottom: -33px;
    }
    .links-menu-list{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        list-style: none;
        margin: 10px;
        padding: 0;
    }
    @media screen and (max-width: 767px) {
    .links-menu-list  h2 {
        grid-template-columns: 3fr 1fr;}
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
        padding: 10px;
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
        height: 20px;
        text-align: center;
        margin-top: 50px;
        
    }
    #serv-title2{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
       
    }
    serv-title2-class{
        display: flex;
        justify-content: space-around;
    }
    .historia{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        left: 30px;
        top: 30px;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),url(BW-foto.png);
        height: 481px;   
    }
    @media screen and (max-width: 580px){
        .historia{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        left: 30px;
        top: 30px;
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),url(BW-foto.png);

        }
    }
    #apresentacao{
    font-size: 19px;
    line-height: 20px;
    padding: 15px;
    color: #ffffff;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-rendering: optimizeLegibility;
    margin: 15px 0;
    margin-bottom: 0.9rem;
    text-align: center;
    top: 150px;
    position: relative;
    }

    @media screen and (max-width: 580px){
        #apresentacao{
            top: -5px;
        }
    }

    #title-apresentacao{
        padding: 20px;
        position: relative;
        top: 20px;
    }
    #title-lavras-hoje{
        padding: 10px;
        position: relative;
        top: 10px;
        color: #fff;
        text-align: center;
    }
    @media screen and (min-width: 580px){
        #title-lavras-hoje{
           text-align: center;
           width: 100%;
        }
    }
    .lavras-hoje{
    color: #000000;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-rendering: optimizeLegibility;
    width: 100%;
    height: 280px;
    background:#054030;
    color: #fff;
    }
    
    .rodape{
        background: #000000;
        width: 100%;
        height: 440px;
        
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
        top:  155px;
        position: relative;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-rendering: optimizeLegibility;
   
    

    }
    #text-rod1{
        color: #fff;
        font-size: 18px;
        line-height: 34px;
        padding: 5px;
        top:  155px;
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
        top: 155px;
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
        position: absolute;
        justify-content: space-around;
        left: 80px;
        margin-top: -165px;
        
        
    }
    .cachu-top{
        

    }
    .cachu-top-text{
        
    }
    .cachu-top-flex{
    display: flex;
    justify-content: center;
    bottom: -250px;
    position: relative;
    }
    .cachu-img{
        display:flex;
        width:50%;
        justify-content:space-between;
        height: 500px;
    }
    #cachu-top-text{
        color: #fff;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 50px;
        
    }
    .gradiente{
        background: url() linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
    }
    .bloco-1{
        height: 500px;
        background: #054030;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .bloco-1 h1{
        color: #fff;
        display: block;
        text-align: center;
        padding: 25px;

    }
   
    .bloco-2,.bloco-3,.bloco-4{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        background: #2e5739;
        color: #ffffff;
        padding: 10px;
        text-align: left;
    }
  
    #trespingos-img{
        width: 250px;
    }
    #rapel-img{
        width: 250px;
    }
    #namorados-img{
        width: 250px;
    }
    #bacia-img{
        width: 250px;
    }
    .border-cachu{
        border-width: 4px;
        border-style: solid;
        border-color: #ffffff;
        position: relative;
        border-bot: ridge;
        width: 15.7rem;
        height: 19.5rem;
        box-shadow: 5px 5px rgb(0 0 0 / 20%);
    }
    .border-cachu-rapel{
        border-width: 4px;
        border-style: solid;
        border-color: #ffffff;
        position: relative;
        border-bot: ridge;
        width: 15.7rem;
        height: 19.5rem;
        box-shadow: 5px 5px rgb(0 0 0 / 20%);
    }
    .border-bacia-custodio{
        border-width: 4px;
        border-style: solid;
        border-color: #ffffff;
        position: relative;
        border-bot: ridge;
        width: 15.7rem;
        height: 19.5rem;
        box-shadow: 5px 5px rgb(0 0 0 / 20%);
    }
    .trespingos-texto{
        position: relative;
        text-align: left;
        padding: 20px;
        color: #ffffff
        
    }
    .trespingos-flex{
        display:flex;
        padding: 20px;
    }
    
    #texto-cachu{
        text-rendering: optimizeLegibility;
        line-height: 21px;
    }

  
@media screen and (min-width: 770px){
    #cachu-3pingos-2{
        padding: 10px;
        margin-left: 287px;
        text-align: left;
    }
    #cachu-rapel-2{
    padding: 10px;
    margin-left: 287px;
    text-align: left;
    }
    #bacia-custodio-2{
    padding: 10px;
    margin-left: 287px;
    text-align: left;
    }
    .detalhe{
        display: none;
    }
    .bloco-1{
    height: 200px;
    padding: 25px;
    background: #054030;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .cachu-list{
    color: #fff;
    position: relative;
    text-align: center;
    display: grid;
    grid-column-gap: 40px;
    grid-row-gap: 25px;
    justify-items: center;
    grid-template-columns: repeat(4,auto);
    font-size: 20px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    padding: 10px;
    }
    .cachu-list-debaixo{
    color: #fff;
    position: relative;
    text-align: center;
    display: grid;
    grid-row-gap: 25px;
    margin: 10px;
    margin-left: 8%;
    justify-items: center;
    grid-template-columns: repeat(4,auto);
    font-size: 20px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    padding: 10px;
    }
    .cachu-list li{
        text-align: center;
        color: #fff;
    }

#back-to-top {
text-decoration: none;
color: white;
background-color: #0c1d11;
padding: 10px;
position: fixed;
right: 25px;
bottom: 10px;
box-shadow: 3px 3px 10px #333;
}
    
}

@media screen and (max-width: 770px){

#back-to-top {
text-decoration: none;
color: white;
background-color: #0c1d11;
padding: 10px;
position: fixed;
right: 10px;
bottom: 10px;
box-shadow: 3px 3px 10px #333;
}

#rodape-logo3{         
width: 190px;
margin-left: -625px;
top: -68px;
}
.rodape h3{
color:#000000;
}
        
    #cachu-3pingos-2 {
    padding: 10px;
    text-align: left; 
    }
    .nav-list{
        width: 165px;
        height: 55vh;
    }
    #cachu-namorados-2{
    padding: 10px;
    text-align: left; 
    }
    #cachu-rapel-2{
    padding: 10px;
    text-align: left;
    }
    #bacia-custodio-2{
    padding: 10px;
    text-align: left;
    }
    .trespingos-texto{
        display: none;
    }
    .sumario{
        width: 39%;
        font-size: 18px;
    }
    .dicas h1{
        color: #fff;
        display: block;
        text-align: center;
        padding: 15px;
    }
    .dicas-list{
    color: #fff;
    position: relative;
    text-align: center;
    white-space: pre-wrap;
    font-size: 20px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    padding: 10px;
    }
    .cachu-list {
    color: #fff;
    position: relative;
    text-align: center;
    line-height: 55px;
    font-size: 20px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .cachu-list-debaixo {
    color: #fff;
    position: relative;
    text-align: center;
    line-height: 55px;
    font-size: 20px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
    .cachu-list li{
        text-align: center;
        color: #fff;
    }
}
.dicas{
    background:#054030;
}
.dicas h1{
        color: #fff;
        display: block;
        text-align: center;
        padding: 25px;
}
.dicas-list{
    color: #fff;
    position: relative;
    text-align: center;
    white-space: pre-wrap;
    font-size: 20px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    padding: 10px;
    }

.container-teste {
    display: none;
}
.butao-foto{
    display: flex;
    justify-content: space-between;
    height: 0;
}
.button-right{
    height: 520px;
    top: -520px;
    color: #fff;
    transition: all .25s ease-in;
    opacity: 0.6;
    filter: alpha(opacity=40);
    position: relative;
    z-index: 2;
    background: #fafafa00;
    border: 0;
    font-size: 32px;
    cursor: pointer;
    padding: 5px;
}
.button-left{
    height: 520px;
    top: -520px;
    color: #fff;
    transition: all .25s ease-in;
    opacity: 0.6; 
    filter: alpha(opacity=40);
    position: relative;
    z-index: 2;
    background: #fafafa00;
    border: 0;
    font-size: 32px;
    cursor: pointer;
    padding: 5px;
    left: 0;
}

    
    </style>
    <title>Cachoeiras</title>
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
                <!--<li><a href="{{ route('loja')}}">Loja</a></li>-->
            </ul>

        </nav>
    
    </header>
    <main>
        <div class="cachu-top">
            <div class="gradiente">

                <div class="cachu-top-flex">
                    
                </div>
            
                <div class="cachu-img">
                    <img class="mySlides" src="cachu-1.png">
                    <img class="mySlides" src="cachu-4.png">
                    <img class="mySlides" src="cachu-2.png">
                    <img class="mySlides" src="cachu-3.png">
                    <img class="mySlides" src="cachu-5.png">

                </div>

                <div class="butao-foto">
                    <button class="button-left" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="button-right" onclick="plusDivs(+1)">&#10095;</button>
               </div>

             </div>
        </div>

    <div class="bloco-1">
        <h1 id="ir-para">Ir para</h1>
        <div class="cachu-list">
            <li id="cachu-3pingos"><a href="#cachu-3pingos-2">Cachoeira três pingos</a></li>
            <li id="cachu-rapel"><a href="#cachu-rapel-2">Cachoeira do rapel</a></li>
            <li id="bacia-custodio"><a href="#bacia-custodio-2">Bacia do custódio</a></li>
            <li id="bacia-custodio"><a href="#namorados-cachu">Cachoeira dos namorados</a></li>
        </div>
        <div class="cachu-list-debaixo">
            <li id="bacia-custodio"><a href="#cachu-pocinho">Cachoeira do pocinho</a></li>
            <li id="bacia-custodio"><a href="#cachu-prazeres">Cachoeira dos prazeres</a></li>
            <li id="bacia-custodio"><a href="#cachu-castelinho">Cachoeira do castelinho</a></li>
        </div>
    </div>
        <div class="dicas">
            <h1>Dicas</h1>
            <ul class="dicas-list">
                <li>Recolha todo seu lixo. Se possível traga de volta também o de pessoas menos cuidadosas</li>
                <li>Evite cortar lenha para fogueira. Use só os galhos caídos e apague as cinzas</li>
                <li>Evite usar sabão nas fontes, riachos e lagos</li>
                <li>Evite música alta e jogos ruidosos, as pessoas ao seu redor podem estar em busca de silêncio</li>
                <li>Evite os atalhos nas trilhas que podem provocar erosão</li>
                <li>Não maltrate as plantas e nem os animais</li>
                
            </ul>
        </div>
        <a id="back-to-top" href="#ir-para">&#9650;</a>
    <div class="bloco-2">
        <h1 id="cachu-3pingos-2">Cachoeira três pingos</h1>
        <div class="trespingos-flex">
            <div class="border-cachu">
             <img id="trespingos-img" src="3pingos.jpg" alt="">
            </div>
            
            <div class="trespingos-texto">
                <p id="texto-cachu"><span id="saiba-mais"><br>Está localizada a 4,1 km de Lavras Novas, formada por uma queda d’água de aproximadamente 12 metros e que, ao atingir um degrau se divide formando outras três quedas menores propícias para banho. Por não possuir poço fundo, pode ser indicada para levar crianças. Pode-se ir a pé, de bike, a cavalo ou de carro. Fica na mesma direção da Cachoeira dos Namorados e da Represa do Custódio. <br><br> <b>De carro: </b>a partir da Igreja de Nossa Senhora dos Prazeres, em Lavras Novas, percorrer cerca de 4 Km até o primeiro entroncamento, virar à esquerda, à esquerda novamente e depois à direita. É possível estacionar o carro a cerca de 150m da cachoeira. Devido às condições da estrada, é recomendável fazer esse trajeto em veículos 4x4.<br><br> <b> A pé: </b>o início da caminhada começa após o término da Rua Principal (abaixo da Pousada Kokopelli); ao todo é 1h de caminhada. </span></p>
            </div>
        </div>
        <details class="detalhe">
            <summary class="sumario">Saiba mais</summary>
            <p id="texto-cachu"><span id="saiba-mais"><br>Está localizada a 4,1 km de Lavras Novas, formada por uma queda d’água de aproximadamente 12 metros e que, ao atingir um degrau se divide formando outras três quedas menores propícias para banho. Por não possuir poço fundo, pode ser indicada para levar crianças. Pode-se ir a pé, de bike, a cavalo ou de carro. Fica na mesma direção da Cachoeira dos Namorados e da Represa do Custódio. <br><br> <b>De carro: </b>a partir da Igreja de Nossa Senhora dos Prazeres, em Lavras Novas, percorrer cerca de 4 Km até o primeiro entroncamento, virar à esquerda, à esquerda novamente e depois à direita. É possível estacionar o carro a cerca de 150m da cachoeira. Devido às condições da estrada, é recomendável fazer esse trajeto em veículos 4x4.<br><br> <b> A pé: </b>o início da caminhada começa após o término da Rua Principal (abaixo da Pousada Kokopelli); ao todo é 1h de caminhada. </span></p>
        </details>
    </div>
    
    <div class="bloco-3">
        <h1 id="cachu-rapel-2">Cachoeira do rapel</h1>
        <div class="trespingos-flex">
            <div class="border-cachu-rapel">
                <img id="rapel-img" src="cachurapel.jpg" alt="">
            </div>
            
            <div class="trespingos-texto">
                <p><span id="saiba-mais"><br>Está é uma belíssima cachoeira. Mas é muito importante avisar que só é possível chegar nela com a ajuda de um guia experiente já que o acesso é difícil na hora de descer as pedras. Uma queda não seria nada legal e não recomendamos a sua visitação por conta própia. Por isso foi batizada como cachoeira do rapel, os primeiros visitantes desciam com equipamento de rapel, cordas etc.  Outra coisa: não beba se está indo para cachoeira. As duas coisas não combinam. No mais, o lugar é lindo e vale a pena conhecer se seguir as normas de segurança. Para chegar até a cachoeira do rapel se passa pela trilha dos pocinhos.
                São cerca de 500 metros depois da Cachoeira dos Pocinhos. <br><br> <b>Como chegar:</b> Para chegar até os Pocinhos deve-se ir até o final da Rua do Chá, a entrada para a trilha situa-se no final do calçamento(há sinalização). Deve-se seguir a trilha até chegar em um ambiente de campo aberto e a partir daí seguir sempre em frente/direita até chegar próximo ao curso de água. Esta trilha é possível de ser feita sem a necessidade de um guia, entretanto pode ser confusa devido a várias bifurcações ao longo do caminho.</span></p>
            </div>

        </div> 
        <details class="detalhe">
            <summary class="sumario">Saiba mais</summary>
            <p><span id="saiba-mais"><br>Está é uma belíssima cachoeira. Mas é muito importante avisar que só é possível chegar nela com a ajuda de um guia experiente já que o acesso é difícil na hora de descer as pedras. Uma queda não seria nada legal e não recomendamos a sua visitação por conta própia. Por isso foi batizada como cachoeira do rapel, os primeiros visitantes desciam com equipamento de rapel, cordas etc.  Outra coisa: não beba se está indo para cachoeira. As duas coisas não combinam. No mais, o lugar é lindo e vale a pena conhecer se seguir as normas de segurança. Para chegar até a cachoeira do rapel se passa pela trilha dos pocinhos.
                São cerca de 500 metros depois da Cachoeira dos Pocinhos. <br><br> <b>Como chegar:</b> Para chegar até os Pocinhos deve-se ir até o final da Rua do Chá, a entrada para a trilha situa-se no final do calçamento(há sinalização). Deve-se seguir a trilha até chegar em um ambiente de campo aberto e a partir daí seguir sempre em frente/direita até chegar próximo ao curso de água. Esta trilha é possível de ser feita sem a necessidade de um guia, entretanto pode ser confusa devido a várias bifurcações ao longo do caminho.</span></p>
        </details>
    </div>

    <div class="bloco-4">
         <h1 id="bacia-custodio-2">Bacia do custódio</h1>
        <div class="trespingos-flex">
            <div  class="border-bacia-custodio">
                <img id="bacia-img"src="bacia.jpg" alt="">
            </div>
           
            <div class="trespingos-texto">
                <p><span id="saiba-mais"><br>Localizada a 5,7 Km do centrinho de Lavras Novas, essa represa pode ser alcançada de diferentes maneiras – a pé, de bicicleta ou de carro. No entanto, boa parte dos visitantes opta por chegar de quadriciclo, dada as condições difíceis da estrada. A paisagem bucólica, assim como a possibilidade de nadar na represa, compensam o deslocamento. Quem visita a represa pode passar antes pela Cachoeira Três Pingos. já que essa está no caminho. Nas imediações está também a Cachoeira dos Namorados. <br><br><b>A pé:</b> o início da caminhada começa após o término da Rua Principal (abaixo da Pousada Kokopelli). Ao todo são 1h30 de caminhada.<br><br><b>De carro:</b> saindo da Igreja Nossa Senhora dos Prazeres, em Lavras Novas, sentido entrada do distrito, virar a primeira rua à esquerda, primeira a esquerda novamente e depois a primeira a direita. Da Igreja, contar cerca de 4 km até chegar no primeiro entroncamento, virar à esquerda e seguir mais 1,7 km. Devido às condições da estrada, é recomendável fazer esse trajeto em veículos 4x4.<br><br>
                - Não é permitida a prática de esportes náuticos.
                <br>
                - Não é permitida a prática de esportes náuticos a motor.
                <br> 
                - Ideal para quem quer descansar e curtir a natureza.
                </span></p>
            </div>

        </div>
        <details class="detalhe">
            <summary class="sumario">Saiba mais</summary>
            <p><span id="saiba-mais"><br>Localizada a 5,7 Km do centrinho de Lavras Novas, essa represa pode ser alcançada de diferentes maneiras – a pé, de bicicleta ou de carro. No entanto, boa parte dos visitantes opta por chegar de quadriciclo, dada as condições difíceis da estrada. A paisagem bucólica, assim como a possibilidade de nadar na represa, compensam o deslocamento. Quem visita a represa pode passar antes pela Cachoeira Três Pingos. já que essa está no caminho. Nas imediações está também a Cachoeira dos Namorados. <br><br><b>A pé:</b> o início da caminhada começa após o término da Rua Principal (abaixo da Pousada Kokopelli). Ao todo são 1h30 de caminhada.<br><br><b>De carro:</b> saindo da Igreja Nossa Senhora dos Prazeres, em Lavras Novas, sentido entrada do distrito, virar a primeira rua à esquerda, primeira a esquerda novamente e depois a primeira a direita. Da Igreja, contar cerca de 4 km até chegar no primeiro entroncamento, virar à esquerda e seguir mais 1,7 km. Devido às condições da estrada, é recomendável fazer esse trajeto em veículos 4x4.<br><br>
                - Não é permitida a prática de esportes náuticos.
                <br>
                - Não é permitida a prática de esportes náuticos a motor.
                <br> 
                - Ideal para quem quer descansar e curtir a natureza.
                </span></p>
        </details>
    </div>

    <div class="bloco-3">
        <p id="namorados-cachu">
            <h1 id="cachu-rapel-2">Cachoeira dos namorados</h1>
        </p>
        <div class="trespingos-flex">
            <div class="border-cachu-rapel">
                <img id="namorados-img" src="cachu-namorados.jpg" alt="foto-cachu">
            </div>
            
            <div class="trespingos-texto">
                <p><span id="saiba-mais"><br>A Cachoeira dos Namorados, localizada em Lavras Novas, possui pequenos e rasos poços convidativos para banho. Está cercada pela Mata Atlântica e possui pedras debaixo da queda que propiciam descanso. Essa queda d’água está a 2 Km da Cachoeira Três Pingos e 3,5 Km da Represa do Custódio. <br><br><b>De carro: </b>a partir da Igreja de Nossa Senhora dos Prazeres, em Lavras Novas, percorrer cerca de 4 Km até o primeiro entroncamento, virar à direita e seguir por cerca de mais 1,5 Km. É possível estacionar o carro ao lado da cerca que marca a propriedade particular e a trilha de acesso. Devido às condições da estrada, é recomendável fazer esse trajeto em veículos 4x4. <br><br> <b>A pé: </b>o início da caminhada começa após o término da Rua Principal (abaixo da Pousada Kokopelli); leva-se 1h30 para ir e pelo menos 2h para voltar.</p>
            </div>
    
        </div> 
        <details class="detalhe">
            <summary class="sumario">Saiba mais</summary>
            <p><span id="saiba-mais"><br>A Cachoeira dos Namorados, localizada em Lavras Novas, possui pequenos e rasos poços convidativos para banho. Está cercada pela Mata Atlântica e possui pedras debaixo da queda que propiciam descanso. Essa queda d’água está a 2 Km da Cachoeira Três Pingos e 3,5 Km da Represa do Custódio. <br><br><b>De carro: </b>a partir da Igreja de Nossa Senhora dos Prazeres, em Lavras Novas, percorrer cerca de 4 Km até o primeiro entroncamento, virar à direita e seguir por cerca de mais 1,5 Km. É possível estacionar o carro ao lado da cerca que marca a propriedade particular e a trilha de acesso. Devido às condições da estrada, é recomendável fazer esse trajeto em veículos 4x4. <br><br> <b>A pé: </b>o início da caminhada começa após o término da Rua Principal (abaixo da Pousada Kokopelli); leva-se 1h30 para ir e pelo menos 2h para voltar.</p>
        </details>
    </div>

    <div class="bloco-3">
        <p id="cachu-pocinho">
            <h1 id="cachu-rapel-2">Cachoeira do pocinho</h1>
        </p>
        <div class="trespingos-flex">
            <div class="border-cachu-rapel">
                <img id="rapel-img" src="cachu-pocinhos.jpg" alt="foto-cachu">
            </div>
            
            <div class="trespingos-texto">
                <p><span id="saiba-mais"><br>São dois pocinhos com cascatas, onde é possível mergulhar nas piscinas naturais e se refrescar ou mesmo sentar nas pedras para receber a hidromassagem natural. Existe também outros poços, sem queda e com água cristalina. <br><br> <b>A pé: </b>caminhada de aproximadamente 15 minutos com belas paisagens. Percurso feito por trilhas de fácil acesso. O início da caminhada começa na porteira que fica ao lado da Pousada Palavras Novas. Descer a trilha e virar no 3º poste de madeira à esquerda. Deste ponto em diante são aproximadamente 15 minutos de caminhada. Boa parte do percurso é feito beirando os vários pocinhos que completam um lindo cenário natural.</p>
            </div>
    
        </div> 
        <details class="detalhe">
            <summary class="sumario">Saiba mais</summary>
            <p><span id="saiba-mais"><br>São dois pocinhos com cascatas, onde é possível mergulhar nas piscinas naturais e se refrescar ou mesmo sentar nas pedras para receber a hidromassagem natural. Existe também outros poços, sem queda e com água cristalina. <br><br><b>A pé: </b>caminhada de aproximadamente 15 minutos com belas paisagens. Percurso feito por trilhas de fácil acesso. O início da caminhada começa na porteira que fica ao lado da Pousada Palavras Novas. Descer a trilha e virar no 3º poste de madeira à esquerda. Deste ponto em diante são aproximadamente 15 minutos de caminhada. Boa parte do percurso é feito beirando os vários pocinhos que completam um lindo cenário natural.</p>
        </details>
    </div>

    <div class="bloco-3">
        <p id="cachu-prazeres">
            <h1 id="cachu-rapel-2">Cachoeira dos prazeres </h1>
        </p>
        <div class="trespingos-flex">
            <div class="border-cachu-rapel">
                <img id="rapel-img" src="cachu-prazeres.png" alt="foto-cachu">
            </div>
            
            <div class="trespingos-texto">
                <p><span id="saiba-mais"><br>A Cachoeira dos Prazeres tem uma visão privilegiada do Parque Estadual do Itacolomi. Relevo acidentado com desnível considerável e percurso por áreas de campo de altitude e mata atlântica o caminho existe água para hidratação, mas não é aconselhado o consumo das nascentes sem tratamento prévio. Em finais de semana e feriados ter atenção com o trânsito de motos e quadriciclos. <br><br><b>Como ir: </b> Para se chegar à cachoeira recomendamos um Guia local. Pode-se ir pela Represa do Custódio, andando às margens da mesma. Existe um caminho mais curto, mas o acesso é difícil e só com o conhecimento dos GUIAS se consegue chegar até ela.</p>
            </div>
    
        </div> 
        <details class="detalhe">
            <summary class="sumario">Saiba mais</summary>
            <p><span id="saiba-mais"><br>A Cachoeira dos Prazeres tem uma visão privilegiada do Parque Estadual do Itacolomi. Relevo acidentado com desnível considerável e percurso por áreas de campo de altitude e mata atlântica o caminho existe água para hidratação, mas não é aconselhado o consumo das nascentes sem tratamento prévio. Em finais de semana e feriados ter atenção com o trânsito de motos e quadriciclos. <br><br><b>Como ir: </b> Para se chegar à cachoeira recomendamos um Guia local. Pode-se ir pela Represa do Custódio, andando às margens da mesma. Existe um caminho mais curto, mas o acesso é difícil e só com o conhecimento dos GUIAS se consegue chegar até ela</p>
        </details>
    </div>

    <div class="bloco-3">
        <p id="cachu-castelinho">
            <h1 id="cachu-rapel-2">Cachoeira do castelinho</h1>
        </p>
        
        <div class="trespingos-flex">
            <div class="border-cachu-rapel">
                <img id="rapel-img" src="cachu-castelinho.jpg" alt="foto-cachu">
            </div>
            
            <div class="trespingos-texto">
                <p><span id="saiba-mais"><br>Situada a 9 Km de Lavras Novas, no subdistrito da Chapada, é conhecida também como Cachoeira do Castelinho ou da Chapada. A trilha que dá acesso à queda d'água é de grau de dificuldade médio, especialmente em função de alguns trechos bastante íngremes. Dada a boa área no entorno coberta por pedras e o grande poço, é uma ótima opção de lazer pra quem visita o bucólico vilarejo. <br><br><b>De carro: </b> saindo de Lavras Novas sentido Ouro Preto, virar à esquerda no primeiro entroncamento. Deste entroncamento são mais 4km até chegar ao vilarejo da Chapada. O acesso até a cachoeira é ruim, recomenda-se estacionar o carro na vila e seguir a pé.<br><br><b>A pé, bike ou cavalo: </b>recomendável para todos que curtem um belo passeio. As paisagens são maravilhosas, o caminho é de médio acesso e muito agradável. O percurso de pouco mais de 1 Km  dura cerca de 1h na ida e 1h30 na volta, dependendo do ritmo da pessoa. </p>
            </div>
    
        </div> 
        <details class="detalhe">
            <summary class="sumario">Saiba mais</summary>
            <p><span id="saiba-mais"><br>Situada a 9 Km de Lavras Novas, no subdistrito da Chapada, é conhecida também como Cachoeira do Castelinho ou da Chapada. A trilha que dá acesso à queda d'água é de grau de dificuldade médio, especialmente em função de alguns trechos bastante íngremes. Dada a boa área no entorno coberta por pedras e o grande poço, é uma ótima opção de lazer pra quem visita o bucólico vilarejo. <br><br><b>De carro: </b> saindo de Lavras Novas sentido Ouro Preto, virar à esquerda no primeiro entroncamento. Deste entroncamento são mais 4km até chegar ao vilarejo da Chapada. O acesso até a cachoeira é ruim, recomenda-se estacionar o carro na vila e seguir a pé.<br><br><b>A pé, bike ou cavalo: </b>recomendável para todos que curtem um belo passeio. As paisagens são maravilhosas, o caminho é de médio acesso e muito agradável. O percurso de pouco mais de 1 Km  dura cerca de 1h na ida e 1h30 na volta, dependendo do ritmo da pessoa.</p>
        </details>
    </div>

<!----------------Molde das cachoeiras------------------------------------------------------
<div class="bloco-3">
    <h1 id="cachu-rapel-2">Nome da Cachoeira</h1>
    <div class="trespingos-flex">
        <div class="border-cachu-rapel">
            <img id="rapel-img" src=".jpg" alt="foto-cachu">
        </div>
        
        <div class="trespingos-texto">
            <p><span id="saiba-mais"><br>texto(PC)</p>
        </div>

    </div> 
    <details class="detalhe">
        <summary class="sumario">Saiba mais</summary>
        <p><span id="saiba-mais"><br>texto(mobile)</p>
    </details>
</div>
-------------------------------------------------------------------------------------------->
        
    </main>
    <script>
        //SlideBotao
        var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
    showDivs(slideIndex += n);
    }

    function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
    </script>

    <script type="text/javascript">
    //SlideShow
    var slideIndex = 0;
    carousel();

    function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1}
        x[slideIndex-1].style.display = "block";
        setTimeout(carousel,2500); // Change image every second
    }

    </script>


    <script type="text/javascript">
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