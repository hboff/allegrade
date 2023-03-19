@extends('layout')

@section('head')
<title>Immobilienbewertung Duisburg</title>
<meta name="Description" content="Sachverständiger Immobilienbewertung Duisburg ▶ Kostenlose Beratung ✔ TÜV zertifizierte Gutachter ✔ Festpreise  ✔ Kurzfristige Termine ✔ Verkehrswertgutachten ✔">
@endsection

@section('content')

<main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <img src="/img/allegra.jpg" alt="" class="home__img">

                <div class="home__container container grid">
                    <div class="home__data">
                        <h1 class="home__data-title">Immobilienbewertung<br><b>{{$domainort}}</b></h1>
                       

                    </div>

                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>

                   
                </div>
            </section>

            <!--==================== PLACES ====================-->
            <section class="place section" id="place">
                <h2 class="section__title">Wertermittlungen für folgende Immobilienarten</h2>

                <div class="place__container container grid">
                    <!--==================== PLACES CARD 1 ====================-->
                    <div class="place__card">
<a href="#wohnimmobilien">
                        <img src="/img/wohnimmobilien.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                          

                            <div class="place__data">
                                <h3 class="place__title">Wohn-<br>immobilien</h3>
                                
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button></a>
                    </div>

                    <!--==================== PLACES CARD 2 ====================-->
                    <div class="place__card"><a href="#gewerbeimmobilien">
                        <img src="/img/gewerbeimmobilien.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            

                            <div class="place__data">
                                <h3 class="place__title">Gewerbe-<br>immobilien</h3>
                                
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            
			<i class="ri-arrow-right-line"></i>
                        </button></a>
                    </div>

                    <!--==================== PLACES CARD 3 ====================-->
                    <div class="place__card">
<a href="#sonderimmobilien">
                        <img src="/img/sonderimmobilien.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                           

                            <div class="place__data">
                                <h3 class="place__title">Sonder-<br>immobilien</h3>
                                
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            
			<i class="ri-arrow-right-line"></i>
                        </button></a>
                    </div>

                    <!--==================== PLACES CARD 4 ====================-->
                    <div class="place__card">
<a href="#grundstuecke-und-rechte">
                        <img src="/img/grundstueck.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            

                            <div class="place__data">
                                <h3 class="place__title">Grundstücke & Rechte</h3>
                                
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button></a>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                     <div class="place__card">
<a href="#landwirtschaftliche-immobilien">

                        <img src="/img/landwirtschaft.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            

                            <div class="place__data">
                                <h3 class="place__title">Landwirt-<br>schaftliche Immobilien</h3>
                                
                            </div>
                        </div>

                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button></a>
                    </div>

            </section> 
<!--==================== Wohnimmobilien ====================-->
<div style="background-color: #E1E5E6; padding:3%;">
    <section class="container" id="wohnimmobilien" style="display: flex; flex-direction: row; align-items: center;">
        
        <div style="flex: 1;">
            <h3>Wohnimmobilien</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor...</p>
        </div>
        <img src="/img/wohnimmobilien.jpg" alt="Bildbeschreibung hier" style="flex: 1; margin-right: 20px;  width:50%;">
    </section>
</div>

<!--==================== Gewerbeimmobilien ====================-->
<div style="padding:3%;">
    <section class="container" id="gewerbeimmobilien" style="display: flex; flex-direction: row; align-items: center;">
        <img src="/img/gewerbeimmobilien.jpg" alt="Bildbeschreibung hier" style="flex: 1; margin-right: 20px; width:50%;">
        <div style="flex: 2;">
            <h3>Gewerbeimmobilien</h3>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.   

Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet,</p>

        </div>
    </section>
</div>

<!--==================== Sonderimmobilien ====================-->
<div style="background-color: #E1E5E6; padding:3%;">
<section class="container" id="sonderimmobilien">
    <h3>Sonderimmobilien</h3>
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.   

Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet,</p>
</section>
</div>
<!--==================== Grundtsücke und Rechte ====================-->
<div style=" padding:3%;">
<section class="container" id="grundstuecke-und-rechte">
    <h3>Grundstücke und Rechte</h3>
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.   

Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet,</p>
</section>
</div>
<!--==================== Landwirtschaftliche Immobilien ====================-->
<div style="background-color: #E1E5E6; padding:3%;">
<section class="container" id="landwirtschaftliche-immobilien">
    <h3>Landwirtschaftliche Immobilien</h3>
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.   

Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet,</p>
</section>
</div>



<!--==================== Icons Partner ====================-->
            <section class="experience section">
                <h2 class="section__title">Allegra Immobilienbewertung <br> Der Partner für Ihre Immobilien</h2>

                <div class="experience__container container grid">
                    <div class="experience__content grid">
                        <div class="experience__data">
                                <img src="/img/location.svg" alt="Regionale Expertise" style="object-position: center;
width: 100px;
height: 100px;
">
                        <br>

                            <span class="experience__description">Regionale <br/>Expertise</span>
                        </div>

                        <div class="experience__data">
                        <img src="/img/certification.svg" alt="Zertifiziert" style="object-position: center;
width: 100px;
height: 100px;
">
                        <br>

                            <span class="experience__description">Zertifiziert</span>
                        </div>
                        
                        <div class="experience__data">
                        <img src="/img/lock.svg" alt="Unabhängige Gutachter" style="object-position: center;
width: 100px;
height: 100px;
">
                        <br>

                            <span class="experience__description">Unabhängige <br/>Gutachter</span>
                        </div>
                    </div>
</section>

@endsection