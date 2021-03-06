<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    scroll-behavior: smooth;
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
        height: 500px;
        
    }
    .rodape li{
        background: #000000;
    }
    .redes-rodape {
        display:flex;
        position: relative;
        
        
    }
    @media screen and (max-width: 770px){
        #rodape-logo3{
           
    width: 190px;
    margin-left: -625px;
    top: -68px;
}
        }
        
    }
    @media screen and (max-width: 770px){
        .rodape h3{
            color:#000000;
        }
        
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
    display: flex;
    justify-content: center;
    align-items: center;
    /* height: 10%; */
    margin-top: 13%;
    margin-left: 44%;
    /* position: relative; */
    width: 12vw;
    justify-content: space-around;
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
    #icone-servico{
        width: 100px;
        height: 80px;
    }
    .card-border{
        border-width: 3px;
        border-style: solid;
        border-color: #ffffff;
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
        height: 390px;
        width: 100%;
        position: relative;
        top: 60px;
        color:#fff;
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
    margin: -6px;
}

.card1 {
  border-radius: 5px;
  box-shadow: 7px 7px 0px rgba(50, 50, 50, 0.22);
  margin: 20px;
  width: 380px;
  transition: all 0.3s ease-out;
  padding: 5px;
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
.descubra{
    background:#054030;
   
    width:100%;
    margin-top: -7px;

}
#temperatura-icone{
    display: relative;
    width: 60px;
}
#menu-imagem{
width: 560px;
margin-top: -518px;
margin-left: 450px;
margin-bottom: 75px;
}
.servicos-encontra-1{
    display: grid;
    list-style: none;
    grid: repeat(4, 140px) / auto-flow 190px;
    justify-items: center;
    align-items: center;
    text-align: center;
}
.serv-encontra-1 li > h3 {
  text-overflow: ellipsis;
  white-space: pre-wrap;
  overflow:visible;
}
.servicos-nao-encontra-1{
    display: grid;
    list-style: none;
    grid: repeat(2, 140px) / auto-flow 190px;
    justify-items: center;
    align-items: center;
    text-align: center;
}
#serv-possui-1{
   
    display: inline-block;
    width: 50%;
    margin-top: 30px;
    color: #fff;
    text-align: center;
}
#serv-possui-2{

    width: 50%;
    float: left;
    margin-top: 30px;
    color: #fff;
    text-align: center;
}
.serv-possui1{
    width: 100%;
    width: 100%;
    margin: auto;
    max-width: 450px;
    flex-flow: row wrap;
    justify-content: space-between;
}
.serv-possui-01{
    display: inline-block;
    width: 50%;
    margin-top: 30px;
    
}
.serv-possui-02{
    display: inline-block;
    width: 50%;
    float: left;
    margin-top: 30px;
    
}
.serv-possui-001{
    width: 100%;
    height: 400px;
    margin: auto;
    max-width: 450px;
    flex-flow: row wrap;
    justify-content: space-between;
}
#linha-vertical {
    height: 207px;
    border-right: 1px solid white;
    width: 50%;
    margin-top: -217px;
    margin-bottom: 10px;
    background: #054030;
}
@media screen and (max-width: 580px){
    #linha-vertical{
        width: 215px;
        margin-top: -220px;
    }

}
#texto-serviicos{
    position: relative;
    left: 50px;
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
.butao-foto{
    display: flex;
    justify-content: space-between;
    height: 0;
}
.critica-sugestao{
    width:100%;
    height: 280px;
    background: #054030;
}
.board-principal-cs{
    height: 160px;
    background:#f0f0f0;
}
@media screen and (min-width: 770px){
.portal-texto-rod-2{
    margin-left: 55%;
    padding: 2% 6% 2% 6%;
    right: 27%;
    position: relative;
    color: white;
}    
#portal-texto-rod-p{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-rendering: optimizeLegibility;
    text-align: center;
}    
.rodape-desenvolvido-filipe{
    margin-top: -2%;
    position: relative;
    text-align: center;
}
.rodape-logo-transparente{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 10%;
}
#logo-rodape{
    width: 20%;
    margin-top: 150px;
}
#desenvolvido-filipe {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 15px;
    color: rgb(116 116 116);
    top: 20px;
    padding: 10px;
    text-align: center;
    position: relative;
}
#text-rod1{
    color: #fff;
    font-size: 18px;
    padding: 2% 6% 2% 6%;
    top: 25px;
    position: relative;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-rendering: optimizeLegibility;
   
    

}
.mapa-div{
    position: relative;
    top: -345px;
    left: 50%;
}

.mapa-div-border{
    border-width: 4px;
    border-style: solid;
    border-color: #ffffff;
    position: relative;
    border-bot: ridge;
    width: 25rem;
    height: 18.7rem;
    box-shadow: 5px 5px rgb(0 0 0 / 20%);
}
.mapa{
    height: 0;
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
.rodape-logo {

    display: flex;
    justify-content: center;
    align-items: center;
    /* height: 10%; */
    margin-top: 13%;
    margin-left: 44%;
    /* position: relative; */
    width: 12vw;
    justify-content: space-around;
        
}
#portal-texto-rod{
    color: white;
    margin-top: 23%;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-rendering: optimizeLegibility;

}
#portal-texto-rod a{
    top: 8px;
}
}
@media screen and (max-width: 770px){
#portal-texto-rod-p{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-rendering: optimizeLegibility;
    text-align: center;
}    
.portal-texto-rod-2{
    color: white;
    margin-left: 15%;
    margin-top: 1%;
    padding: 3% 4%;
    right: 8%;
    position: relative;
}    
.rodape-logo-transparente{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 10%;
}
#logo-rodape{
    width: 70%;
    margin-top: 150px;
}
#portal-texto-rod{
    color: white;
    margin-top: 65%;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-rendering: optimizeLegibility;
}
.rodape-logo {
    display: flex;
    justify-content: space-around;
    margin-top: 36%;
    margin-left: 29%;
    width: 45vw;
}
.rodape {
    background: #000000;
    width: 100%;
    height: 590px;
}
#text-rod1 {
    color: #fff;
    font-size: 18px;
    padding: 2% 6% 2% 6%;
    top: 25px;
    position: relative;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-rendering: optimizeLegibility;
}
#desenvolvido-filipe {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 15px;
    color: rgb(116 116 116);
    top: 20px;
    padding: 2% 6% 2% 6%;
    text-align: center;
    position: relative;
}
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

#mapa-iframe{
    width: 100%;
    height: 400px;
}
.nav-list{
    width: 165px;
    height: 55vh;
}
.mapa-div{
    padding: 5px;
    margin-top: -35px;
}
}
#icone-i{
    margin-left: 47%;
    top: -348px;
    height: 0;
    position: relative; 
    display: none;
}
#desenvolvido-filipe{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 15px;
    color: rgb(77, 77, 77);
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
                    <!--<li><a href="{{ route('loja')}}">Loja</a></li>-->
                </ul>

            </nav>
        
        </header>

    <main>

           <div class="fotos-background">
            <p id="fotos-background-id"></p>
            <img class="mySlides" src="foto-background-1.png">
            <img class="mySlides" src="foto-background-2.png">
            <img class="mySlides" src="foto-background-3.png">
            <img class="mySlides" src="foto-background-4.png">

           </div>

           <div class="butao-foto">
                <button class="button-left" onclick="plusDivs(-1)">&#10094;</button>
                <button class="button-right" onclick="plusDivs(+1)">&#10095;</button>
           </div>

            <div class="descubra">

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
           
            <div class="mapa">
                <div class="mapa-div">
                    <div class="mapa-div-border">
                        <iframe id="mapa-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14951.243248504466!2d-43.52565978423481!3d-20.47296217730076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa3f48f3bd35849%3A0x8457381ebd95ba17!2sLavras%20Novas%2C%20Ouro%20Preto%20-%20MG%2C%2035400-000!5e0!3m2!1spt-BR!2sbr!4v1652234265361!5m2!1spt-BR!2sbr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
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
                      <p>Conhe??a a cultura local</p>
                      <img class="image" src="noun-building-2872558.png" alt="" />
                    </li>
                    </div>
               
                    <div onclick="navToGastro()" style="cursor: pointer;" class="card1 red">
                    <li>
                        <h2>Gastronomia</h2> 
                        <p>Conhe??a a gastronomia local</p>
                        <img class="image" src="noun-jar-4782011.png" alt="" />
                    </li>
                    </div>

                    <div onclick="navToHosp()" style="cursor: pointer;" class="card1 orange">
                    <li>
                        <h2>Hospedagem</h2>
                        <p>Confira as op????es de hospedagem</p>
                        <img class="image" src="noun-accommodation-4578364.png" alt="" />
                    </li>
                      </div>
                    </ul>
                  </div>
              
            </div>
            
              <img id="menu-imagem" src="menu-imagem2.png" alt="">

              <div class="historia">
                <p id="apresentacao">Lavras Novas distrito de Ouro Preto - MG e a 120 km da capital mineira Belo Horizonte possui casas antigas e coloridas, igrejas coloniais e restaurantes. Cercada de montanhas com uma vegeta????o incr??vel que d??o um charme especial. <br>Lavras Novas ?? um lugar muito gostoso e acolhedor com seus visitantes, de culin??ria local e muita hist??ria envolvida em todos os cantos e detalhes. Lugar de natureza exuberante, de pessoas hospitaleiras, daquele jeito que faz qualquer  um se sentir em casa!<br>Voc?? pode fazer passeio off-road, caminhar na natureza, renovar as energias em suas cachoeiras maravilhosas. Voc?? pode escutar uma boa m??sica ao vivo tomando uma cervejinha e comendo uma comida t??pica no gramado dos bares.<br>Lavras Novas tem op????es para todos os gostos!</p>
            </div>

           

              <div class="lavras-hoje">
                <h2 id="title-lavras-hoje">Servi??os em Lavras Novas</h2>

                <div class="servicos">
                    <div class="serv-possui1">
                        <div id="serv-possui-1"><b>N??o possui</b></div>
                        <div id="serv-possui-2"><b>Possui</b></div>
                    </div>
                    </div>
                    <div class="serv-possui-001">
        
                        <div class="serv-possui-01">
                            <li id="texto-serviicos">Drogaria</li>
                            <li id="texto-serviicos">Posto</li>
                            <li id="texto-serviicos">Hospital</li>
                            <li id="texto-serviicos">Taxi</li>
                            <li id="texto-serviicos">Banco</li>
                        </div>
                   
                        <div class="serv-possui-02">
                            <li id="texto-serviicos">Pousadas</li>
                            <li id="texto-serviicos">Restaurantes</li>
                            <li id="texto-serviicos">Bares</li>
                            <li id="texto-serviicos">Passeios off-road</li>
                            <li id="texto-serviicos">Tirolesa</li>
                            <li id="texto-serviicos">Ecoturismo</li>
                            <li id="texto-serviicos">Ecoventura</li>
                            
                            
                        </div>
            
                    </div>


            
            </div>
            <div id="linha-vertical"></div>

    </div>
       <footer>
        <div class="rodape">
        <div class="rodape-logo-transparente">
            <img id="logo-rodape" src="logo-transparente.png" alt="">
        </div>
            
            <!--<h3 id="text-rod1">Portal Lavras Novas</h3>-->
            <div class="rodape-logo-transparente">
                <a id="portal-texto-rod" href="">Quem somos n??s</a>
                <a href=""></a>
            </div>
            <div class="rodape-logo">
               <a href="https://www.instagram.com/portalavrasnovas/" target="_blank"><i class="fa fa-instagram" style="font-size:36px; color:white"></i></a>
               <a href="https://youtube.com/channel/UCh5cTvDuy9_9K9lD_9Vuszw" target="_blank"><i class="fa fa-youtube-play" style="font-size:36px; color:white"></i></a>
               <a href="mailto:portalavrasnovas@gmail.com" target="_blank"><i class="material-icons" style="font-size:36px; color:white">email</i></a>
            </div>
            <div class="portal-texto-rod-2">
                <p id="portal-texto-rod-p">O portal Lavras Novas tem o objetivo de mostrar Lavras Novas de uma forma diferente. Transmitir para quem nunca foi ou que j?? foi e admira Lavras Novas, transmitir essa energia e essa vibe ??nica que Lavras Novas tem. Tudo isso de uma forma moderna, profissional e acess??vel para todos.</p>
            </div>
        <div class="rodape-desenvolvido-filipe">
            <p id="desenvolvido-filipe">Desenvolvido por <a href="https://www.instagram.com/filipetech01/" target="_blank" style="color: rgb(77, 77, 77);">filipetech01</a></p>
        </div>
       </div> 
         
       </footer>
         
            
    </main>
<script>
    
  
</script>
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
    
    function navToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        
    }
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
    //Script do TEM???O E TEMPERATURA//
    

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
           unit.innerText = '??C'
           temperatureDiscription.innerText = WeatherText })          
    })

    </script>


    <script type="text/javascript">
    //Script do bot??o HOME//
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