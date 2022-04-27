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
            </style>
    <title>Cultura</title>
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