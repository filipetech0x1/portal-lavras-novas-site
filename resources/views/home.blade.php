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
    background:#D6D58E;
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
        height: 230px;
        background:rgb(230, 230, 230);
        top: 50px;
    }
    .serv-encontra{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        position: relative;
        vertical-align: middle;
        text-align: center;
        top: 50px;
        position: relative;
        justify-content: space-around;
        display: flex;
    }
    .serv-encontra li{
        list-style: none;
        top: 50px;
        padding: 10px;
        
    }
    .serv-nao-encontra{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-align: center;
        position: relative;
        top: 150px;
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
        top: 30px;
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
        height: 300px;
    }
    </style>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Portal Lavras Novas</title>
</head>
<body>
    <header>
        <nav>
        
            <a class="logo" href="">
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
                        <img id="pousada"src="https://media-public.canva.com/oPtBg/MAA9p8oPtBg/4/t.png" alt="">
                        <h3>POUSADAS</h3>
                    </li>
                    <li>
                        <svg id="restaurante" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" version="1.0" viewBox="83.5 94.0 258.1 225.8" zoomAndPan="magnify" style="fill: rgb(0, 0, 0);" role="img" aria-label="Dish Fork and Knife Restaurant Travel"><g id="__id12_sg7ng2xese" style="fill: rgb(13, 13, 13);"><path d="M217.65,121.86c-54.55,0-98.77,44.22-98.77,98.77s44.22,98.77,98.77,98.77s98.77-44.22,98.77-98.77 S272.19,121.86,217.65,121.86z M217.65,298.92c-43.24,0-78.3-35.06-78.3-78.3s35.06-78.3,78.3-78.3c43.24,0,78.3,35.06,78.3,78.3 S260.89,298.92,217.65,298.92z" style="fill: inherit;"></path><circle cx="217.65" cy="220.62" r="69.15" style="fill: inherit;"></circle><path d="M329.89,115.23c-12.36,22.2-12.07,44.03-2.95,72.22c0,0,4.08,13.31,1.06,24.47 c-0.77,2.84-1.06,5.79-1.06,8.73l-0.01,91.37c0,4.3,3.74,7.78,8.13,7.33c3.82-0.39,6.61-3.84,6.61-7.68l0-73.35l0.01-23.12 l-0.01-99.96C341.69,115.23,341.69,94.04,329.89,115.23z" style="fill: inherit;"></path><path d="M115.43,116.14h-0.41c-1.91,0-3.45,39.67-3.45,39.67c0,1.66-1.22,3.07-2.86,3.31 c-2.01,0.29-3.82-1.27-3.82-3.31c0,0-1.55-39.67-3.45-39.67h-0.46c-1.91,0-3.45,39.7-3.45,39.7c0,2.02-1.79,3.58-3.79,3.31 l-0.41-0.06c-1.65-0.23-2.89-1.64-2.89-3.31c0,0-1.55-39.65-3.45-39.65c-1.91,0-3.45,43.25-3.45,43.25 c0,5.4,1.19,13.72,7.05,18.55c3.49,2.88,4.3,6.02,4.37,7.33v126.74c0,4.05,3.32,7.37,7.37,7.37c4.05,0,7.37-3.32,7.37-7.37V185.81 h0.01c-0.02-0.28,0-0.53-0.01-0.8v-0.9c0.17-3.56,1.63-5.58,3.22-6.91c6-5,6-12.82,6-17.76 C118.88,159.44,117.34,116.14,115.43,116.14z" style="fill: inherit;"></path></g></svg>
                        <h3>RESTAURANTES</h3>
                    </li>
                    <li>
                        <img id="restaurante" src="https://media-public.canva.com/6bFs4/MAEF3a6bFs4/1/t.png" alt="">
                        <h3>BARES</h3>
                    </li>
                    <li>
                        <img id="restaurante" src="https://media-public.canva.com/LWFps/MAEGudLWFps/1/t.png" alt="">
                        <h3>PASSEIOS OFF-ROAD</h3>
                    </li>
                    <li>
                        <img id="restaurante" src="https://media-public.canva.com/IiaZY/MAD2UQIiaZY/1/t.png" alt="">
                        <h3>TIROLESA</h3>
                    </li>
                    <li>
                        <img id="restaurante" src="https://media-public.canva.com/V-ItE/MAEqn2V-ItE/1/t.png" alt="">
                        <h3>GUIA TURÍSTICO</h3>
                    </li>
                    <li>
                        <img id="restaurante" src="https://media-public.canva.com/MAeWQ/MAEjsMMAeWQ/2/t.png" alt="">
                        <h3>ECOTURISMO</h3>
                    </li>
                    
                   
                </ul>

                <ul class="serv-nao-encontra">
                    
                </ul>
            </div>

            

        <footer>
                <div class="rodape">
                    
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
    
    
    <footer>

    </footer>
</body>
</html>