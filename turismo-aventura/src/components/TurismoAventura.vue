<script>
export default {
  name: 'TurismoAventura',
};
</script>

<template>
    <header>
    <nav class="container-fluid navbar navbar-expand-lg auto d-flex justify-content-center align-items-center" style="margin: 0 auto">
        <div class="">
            <a class="navbar-brand" href="#" style="color: white">Turismo de Aventura - Nome da Empresa Aqui</a>
        </div>
    </nav>
    </header>
    
    <main>
    <h2 id="exemplos">Admira Estrelas no Cabo Espichel</h2>
    
    <img src="../assets/cabo-estrelas.png" alt="Cabo Espichel Imagens" srcset="../assets/cabo-estrelas.png 480w,
                                                                            ../assets/cabo-estrelas.png 768w,
                                                                            ../assets/cabo-estrelas.png 1080w"
                                                                        sizes="(max-width: 480px) 100vw, 
                                                                                (max-width: 768px) 50vw, 
                                                                                33vw">
        
    <ul class="text-center " style="list-style: none; padding: 0 15px;">
        <li><i class="fa-solid fa-check"></i> Venha se fascinar com os mistérios e belezas do céu noturno em um ambiente de extrema beleza natural e importância histórica que é o Cabo Espichel.</li>
        <br>
        <h3>Programa:</h3>
        <br>
        <li><i class="fa-solid fa-check"></i> O ponto de partida se dará no estacionamento do Santuário do Cabo Espichel, uma hora antes de o sol se pôr (por volta das 16:30). A partir daí, faremos uma caminhada pelos arredores do Santuário do Cabo Espichel e nos arredores do farol (construção pombalina de 1790). </li>
        <li><i class="fa-solid fa-check"></i> O guia ainda fará a condução da visita, apresentando todos os processos históricos da construção do santuário, bem como dos aspectos religiosos baseados na lenda da “Pedra da Mua” e das posteriores descobertas das pegadas de dinossauros que tanto maravilharam cientistas ao redor do mundo e pessoas em geral.</li>
        <li><i class="fa-solid fa-check"></i> Para acompanhar a visita, será servido aos clientes uma espécie de “welcome drink” (um espumante da região ou até mesmo o famoso moscatel de Setúbal, junto com com produtos alimentares consagrados da região como os queijos de cabra de Azóia e a farinha torrada de Sesimbra.</li>
        <li><i class="fa-solid fa-check"></i> Na sequência, faremos uma explanação recreativa sobre os aspectos celestes, conduzindo o cliente a apreciar e entender melhor os principais astros visíveis a olho nu. Lembrando que se trata de uma observação recreativa do céu noturno, não tendo portanto, a pretensão de se aprofundar muito tecnicamente nos meandros da astronomia ou astrofísica. No entanto, o carácter lúdico do projeto pretende ampliar as possibilidades de observação do céu noturno para o público leigo. Nesse sentido, faremos uso de binóculos e possivelmente telescópio, além do aplicativo Sky View.</li>
        <li><i class="fa-solid fa-check"></i> O programa tem como previsão de duração 3 horas, finalizando portanto por volta das 19:30. O retorno e o acesso ao local ficam por conta dos clientes.</li>
        <img src="../assets/pessoas.png" alt="Pessoas se divertindo com céu bonito ao fundo estrelado" srcset="../assets/pessoas.png 480w,
                                                                            ../assets/pessoas.png 768w,
                                                                            ../assets/pessoas.png 1080w"
                                                                        sizes="(max-width: 480px) 100vw, 
                                                                                (max-width: 768px) 50vw, 
                                                                                33vw">
    </ul>
    </main>
    
    <section class="text-center" style="margin: 50px 0;">
    <h2 >
        Valores:
    </h2>
    
    <ul>
        <li>20 € por Pessoa.</li>
    </ul>
    </section>
    
    <section class="text-center" style="margin-bottom: 50px;">
    <h1>Contato:</h1>
    <h3 id="contato">
        WhatsApp!
    </h3>
    <div class="d-flex justify-content-center align-items-center">
        <a href="https://wa.me/351968932772">
            <img src="./whats.png" alt="" style="width:100px ; height: 100px;">
        </a>
    </div>
    
    
    <h2 style="margin: 15px;">
        Ligue Para:
    </h2>
    
        <a href="tel:+351968932772">+351 968 932 772 - Eduardo Steinmetz</a>
    </section>
    
    
    <div id="footy">
        <a class="d-flex justify-content-center align-items-center" href="#" style="color: black; padding: 40px 0;">www.SiteBlog.com</a>
    </div>
    
    
    </template>
    
    
    <style scoped>
    :root,
    html,
    body {
        scroll-behavior: smooth;
    }
    
    p {
        font-family: 'Roboto Slab';
    
        span {
            font-family: inherit;
        }
    }
    
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }
    
    * {
        margin: 0;
        padding: 0;
    }
    
    body {
        line-height: 1.5;
        -webkit-font-smoothing: antialiased;
    }
    
    img,
    picture,
    video,
    canvas,
    svg {
        display: block;
        width: 100%;
    }
    
    input,
    button,
    textarea,
    select {
        font: inherit;
    }
    
    p,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        overflow-wrap: break-word;
        hyphens: auto;
    }
    
    #root,
    #__next {
        isolation: isolate;
    }
    
    li,
    ul {
        list-style: none;
    }
    
    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed,
    figure, figcaption, footer, header, hgroup,
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
        margin: 0;
        padding: 0;
        border: 0;
    }
    
    header, footer {
        background: #006699 !important;
    }
    
    header {
        margin-bottom: 50px;
    }
    
    li {
        font-size: 18px;
    }
    
    li + li {
        margin-bottom: 20px;
    }
    
    .fa-check {
        margin-right: 5px;
    }
    .footy {
    background: #006699 !important;
    }
    #contato {
        margin-top: 2%;
    }
    #exemplos {
        margin-bottom: 2%;
    }
    </style>