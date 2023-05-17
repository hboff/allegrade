@extends('layout')
@section('content')
    <section>
        <div data-bss-parallax-bg="true" style="height: 600px;background: url(/img/allegra.jpg) center / cover;">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-md-6 text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-start justify-content-xxl-start align-items-xxl-center">
                        <div style="max-width: 350px;">
                            <h1 class="fw-semibold me-0" style="color: var(--bs-white);">Über Uns</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Allegra</h2>
                <p class="d-xxl-flex justify-content-xxl-start align-items-xxl-start mt-3 pt-0"><span style="color: rgb(63, 71, 80); background-color: rgb(250, 254, 255);">Allegra-Immobilienbewertung wurde von einer Gruppe von Gutachtern gegründet, die den Bedarf an besserer Kommunikation und Zusammenarbeit erkannten. Unser Ziel ist es, unseren Kunden die bestmögliche Qualität bei der Immobilienbewertung zu bieten. Dies erreichen wir durch unser kollaboratives Netzwerk von Gutachtern, das es uns ermöglicht, auf eine Fülle von Wissen und Erfahrung zurückzugreifen. Unser Ziel ist es, unseren Kunden die Informationen zu liefern, die sie benötigen, um fundierte Entscheidungen über ihre Immobilieninvestitionen zu treffen.</span></p>
            </div>
            <div class="col-md-6 d-flex d-sm-flex d-md-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-start justify-content-xl-center align-items-xl-start justify-content-xxl-center align-items-xxl-center"><img data-aos="zoom-in-left" data-aos-duration="750" data-aos-delay="200" data-aos-once="true" src="/img/wohnimobilien.jpg" style="width: 300px;box-shadow: 16px 16px 20px var(--bs-gray-500);"></div>
        </div>
    </div>
 @endsection