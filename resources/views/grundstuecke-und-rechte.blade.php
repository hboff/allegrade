@extends('layout')
@section('content')
    <section>
        <div data-bss-parallax-bg="true" style="height: 600px;background: url(/img/allegra.jpg)) center / cover;">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-md-6 text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-start justify-content-xxl-start align-items-xxl-center">
                        <div style="max-width: 350px;">
                            <h1 class="fw-semibold me-0" style="color: var(--bs-white);">Grundstücke &amp; Rechte</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Sanierungsgebiete</h2>
                <p class="d-xxl-flex justify-content-xxl-start align-items-xxl-start mt-3 pt-0">Sanierungsgebiete sind festgelegte Bereiche, in denen eine gemeinde städtebauliche Sanierungsmaßnahmen durchführen möchte.<br>Dies erfolgt im Regelfall, da diese Bereiche funktionale Schwächen aufweisen. Die Sanierungsmaßnahmen haben das Ziel bauliches Erbe zu sichern aber gleichzeitig die Wohn- und Arbeitsbedingungen zu verbessern. Außerdem soll das Gebiet an den wirtschaftlichen Wandel angepasst werden.</p>
            </div>
            <div class="col-md-6 d-flex d-sm-flex d-md-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-start justify-content-xl-center align-items-xl-start justify-content-xxl-center align-items-xxl-center"><img data-aos="zoom-in-left" data-aos-duration="750" data-aos-delay="200" data-aos-once="true" src="/img/wohnimobilien.jpg" style="width: 300px;box-shadow: 16px 16px 20px var(--bs-gray-500);"></div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 d-flex d-sm-flex d-md-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-start justify-content-xl-center align-items-xl-start justify-content-xxl-center align-items-xxl-center"><img data-aos="zoom-in-right" data-aos-duration="750" data-aos-delay="200" data-aos-once="true" src="/img/wohnimobilien.jpg" style="width: 300px;box-shadow: 16px 16px 20px var(--bs-gray-500);"></div>
            <div class="col-md-6">
                <h2 class="mt-5 mt-md-0">Baulasten</h2>
                <p class="d-xxl-flex justify-content-xxl-start align-items-xxl-start mt-3"><span style="color: rgb(63, 71, 80); background-color: rgb(250, 254, 255);">Baulasten regeln Verpflichtungen, die der Grundstückseigentümer gegenüber der Baubehörde hat, aber auch Dinge, die dieser erfüllen muss, zu unterlassen hat oder dulden muss. Die Baulasten eines Grundstücks lassen sich im Baulastenverzeichnis der Baubehörde finde. Die häufigsten Baulasten sind Erschließungsbaulasten und Abstandflächenbaulasten. Bei diesen müssen bestimmte Bereiche des Grundstücks freigehalten werden, damit ein anderes Grundstück erschlossen werden kann oder die Mindestabstände zu anderen Gebäuden eingehalten werden können.</span></p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Nießbrauchrecht</h2>
                <p class="d-xxl-flex justify-content-xxl-start align-items-xxl-start mt-3"><span style="color: rgb(63, 71, 80); background-color: rgb(250, 254, 255);">Durch das Nießbrauchrecht überträgt der Eigentümer einer Immobilie seine Rechte bezüglich des Bewohnens und der wirtschaftlichen Nutzung auf eine andere Person. Diese darf die Immobilie nutzen oder die Miete daraus erhalten, ohne dass sie selbst Eigentümer ist. Das Recht eines Nutznießers ist nicht vererbbar.</span></p>
            </div>
            <div class="col-md-6 d-flex d-md-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-md-center align-items-md-start justify-content-xl-center align-items-xl-start justify-content-xxl-center align-items-xxl-center"><img data-aos="zoom-in-left" data-aos-duration="750" data-aos-delay="200" data-aos-once="true" src="/img/wohnimobilien.jpg" style="width: 300px;box-shadow: 16px 16px 20px var(--bs-gray-500);"></div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 d-flex d-md-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-md-center align-items-md-start justify-content-xl-center align-items-xl-start justify-content-xxl-center align-items-xxl-center"><img data-aos="zoom-in-right" data-aos-duration="750" data-aos-delay="200" data-aos-once="true" src="/img/wohnimobilien.jpg" style="width: 300px;box-shadow: 16px 16px 20px var(--bs-gray-500);"></div>
            <div class="col-md-6">
                <h2 class="mt-5 mt-md-0">Erbbaurecht</h2>
                <p class="d-xxl-flex justify-content-xxl-start align-items-xxl-start mt-3"><span style="color: rgb(63, 71, 80); background-color: rgb(250, 254, 255);">Das Gebäude gehört dem Erbbauberechtigten, während das Grundstück beim Eigentümer bleibt.</span></p>
            </div>
        </div>
    </div>
    @endsection