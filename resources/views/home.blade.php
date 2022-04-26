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
    font-size: 24px;
    text-transform: uppercase;
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
    height: 8vh;
    
}

main{
    background: url() no repeat center center;
    background-size: cover;
    height:92vh;
    
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
    .mobile-menu.active .line1 {
        transform: rotate(-45deg) translate(-8px, 8px);
    }
    .mobile-menu.active .line2 {
        opacity: 0;
    }
    .mobile-menu.active .line3 {
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
   #img1{
        width:303.33px;
        height: 303.33px;
    }
    .flex-img-background-2{
        list-style: none;
        display: flex;
        justify-content: space-around;
    }
    .instagram2{
        list-style: none;
        position: relative;
        display: flex;
        top: 30px; 
        vertical-align: middle;
        justify-content: space-around;
        padding: 10px;
    }
    #insta{
        width: 150px;

    }
    #insta-texto{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        height: 25px;
        justify-content: space-around;
        position: relative;
    }
    .servicos{
        position: relative;
        vertical-align: middle;
        justify-content: space-around;
        width: 100%;
        height: 600px;
        top: 50px;
    }
    .serv-encontra{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        position: relative;
        vertical-align: middle;
        text-align: center;
        top: 50px;
        justify-content: space-around;
        display: flex;
    }
    .serv-encontra li{
        list-style: none;
        top: 50px;
        padding: 10px;
        
    }
    .serv-nao-encontra li{
        list-style: none;
        top: 50px;
        padding: 10px;
        
    }
    .serv-nao-encontra{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        position: relative;
        top: 150px;
        vertical-align: middle;
        text-align: center;
        justify-content: space-around;
        display: flex;
        
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
        vertical-align: middle;
        text-align: center;
        
    }
    #serv-title2{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        position: relative;
        vertical-align: middle;
        text-align: center;
        top: 100px;
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
        width: 100%;
        
    }
    .redes-rodape {
        display:flex;
        position: relative;
        justify-content: space-between;
        
    }
    #text-rod{
        color: #fff;
        font-size: 18px;
        line-height: 34px;
        padding: 5px;
        top: 100px;
        text-align: center;
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
        justify-content: space-around;
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
        justify-content: space-around;
        max-width: none;
        box-sizing: space;
        box-align: center;
    }
    </style>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Portal Lavras Novas</title>
</head>
<body>

    <header>
            <nav>
        
            <a class="logo" href="{{ route('home')}}">
                <img id="logotipo" src="favicon.ico" alt="logotipo">
                 Portal Lavras Novas</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
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
            <div class="flex-img-background">
                <ul class="flex-img-background-2">
                    <li>
                        <img id="img1"src="274680083_327214869453138_9109901798273709052_n.webp" alt="img1">
                    </li>

                    <li>
                        <img id="img1" src="83538188_262236941788814_6189941727305750453_n.jpg"  alt="img2">
                    </li>

                    <li>
                        <img id="img1" src="118969382_2413339495633369_8304343864662400586_n.jpg"  alt="img2">
                    </li>
                </ul>                          
            </div>

            <div class="instagram">
                <ul class="instagram2">
                    <li>
                        <h4 id="insta-texto">Siga nosso Instagram</h4>
                        <a href="https://www.instagram.com/portalavrasnovas/" target="_blank">
                            <img id="insta" src="https://img.shields.io/badge/Instagram-E4405F?style=for-the-badge&logo=instagram&logoColor=white
                            " target="_blank">
                        </a>
                    </li>
                </ul> 
            </div>

            <div class="historia">
                <h2 id="title-apresentacao">Lavras Novas</h2>
                <p id="apresentacao">Lavras Novas distrito de Ouro Preto - MG e a 120 km da capital mineira Belo Horizonte possui casas antigas e coloridas, igrejas coloniais e restaurantes. É cercada de montanhas de uma vegetação incrível, que dão um charme especial.É um lugar muito gostoso e acolhedor com seus visitantes, de culinária local e muita história envolvida em todos detalhes, lugar de natureza exuberante, você pode fazer passeio off-road, caminhar na natueza, renovar as energias em suas cachoeiras maravilhosas, escutar uma boa música ao vivo tomando uma cerveja e comendo uma comida típica, em Lavras Novas temos opções para todos os gostos.</p>
            </div>

            <div class="lavras-hoje">
                <h2 id="title-lavras-hoje">Lavras Novas hoje</h2>

            </div>

            <div class="servicos">
                <h2 id="serv-title">Serviços em Lavras Novas</h2> 
                <ul class="serv-encontra"> 
                    <li>
                       
                        <h3>POUSADAS</h3>
                    </li>
                    <li>
                        
                        <h3>RESTAURANTES</h3>
                    </li>
                    <li>
                        
                        <h3>BARES</h3>
                    </li>
                    <li>
                        
                        <h3>PASSEIOS OFF-ROAD</h3>
                    </li>
                    <li>
                        
                        <h3>TIROLESA</h3>
                    </li>
                    <li>
                        
                        <h3>GUIA TURÍSTICO</h3>
                    </li>
                    <li>
                       
                        <h3>ECOTURISMO</h3>
                    </li>
                    
                   
                </ul>
                <h2 id="serv-title2">Não possui</h2> 
                <ul class="serv-nao-encontra">
                    
                    <li>
                        <h3> DROGARIA</h3>
                    </li>

                    <li>
                        <h3> POSTO </h3>
                    </li>

                    <li>
                        <h3> HOSPITAL </h3>
                    </li>

                    <li>
                        <h3> TAXI </h3>
                    </li>
                </ul>
            </div>

            

       <footer>
        <div class="rodape">
            <h3 id="text-rod">Portal Lavras Novas</h3>

            <ul class="rodape2">
                <h4 id="text-rod">Assuntos relacionados ao site</h4>
              
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
                <li><p id="text-rod">Idealizador - joaopedroartes07@gmail.com <br>Desenvolvido por filipetech01 - filipetech01@gmail.com</p></li>
                

            </ul>
       </div>  
       </footer>
         
    
            
    </main>
    

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