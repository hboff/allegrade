<footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content grid">
                    <div class="footer__data">
                        <h3 class="footer__title">Allegra Immobilienbewertung</h3>
                        <p class="footer__description">Wenn es um die Bewertung von Immobilien geht, ist Qualität der Schlüssel.
                        </p>
                        <img src="/img/logo.svg" alt="Allegra" style="    vertical-align: middle;
width: 75%;

    object-fit: cover;
object-position: center;">
                        <div>
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                                <i class="ri-facebook-box-fill"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="footer__social">
                                <i class="ri-twitter-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                                <i class="ri-instagram-fill"></i>
                            </a>
                            <a href="https://www.youtube.com/" target="_blank" class="footer__social">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </div>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">Kontakt</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">Telefon:05722-913804</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">E-Mail: info@allegra-immobilienbewertung.de</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Adresse: Waltherstraße 18, <br> 80337 München</a>
                            </li>
                        </ul>
                    </div>
    
                    
                    <div class="footer__data">
                        
    @foreach($regions as $region)
    @if ($region->Country == 'Germany')
    <a class="footer__link" href="/immobilienbewertungen/{{$region->Region_Umlaut}}">Immobilienbewertung {{$region->Region}}</a><br>
    @endif

    @endforeach

                        
                    </div>
                
                    <div class="footer__data">
@isset($ortsname)
@isset ($nearestCities)
@foreach ($nearestCities as $city)
@if($ortsname == $city->ort_umlaut)
@else
<a  class="footer__link" href="/immobilienbewertung/{{$city->ort_umlaut}}" >Immobilienbewertung {{$city->ort}}</a>
@endif
@endforeach
@endisset  
@endisset 
                    </div>
                </div>

                <div class="footer__rights">
                    
                    <div class="footer__terms">
                        <a href="impressum" class="footer__terms-link">Impressum</a>
                        <a href="datenschutzerklaerung" class="footer__terms-link">Datenschutzerklärung</a>
                    </div>
                </div>
            </div>
        </footer>