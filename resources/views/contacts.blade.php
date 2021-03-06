<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">

    <title>Kontakti un atrašanās vietas</title>
</head>

<body>
    <a href="https://www.eglitetev.lv">
        <img class="banner" src="{{URL::asset('christmas-stuff-header.jpg')}}" alt="img" />
    </a>
    <!-- Main navigation panel component -->
    @component('components/nav')
    @endcomponent
    <header>
    <h1>KONTAKTI</h1>
    <hr>
    </header>

    <div class="container">
        <div class="dole">
            <h3> Tirdzniecības centrs “Dole” </h3>
            <div class="adrese-dole">
                <p> Adrese: Maskavas iela 357, Rīga, LV-1063 </p>
            </div>
            <img src="https://eglitetev.lv/egles/dole-adrese.png" class="image-link-dole">
            <div class="darba-laiki-dole">
                <p> Darba laiki: </p>
                <p> P-Pk: 10:00 - 22:00 </p>
                <p> S-Sv: 10:00 - 22:00 </p>
            </div>
        </div>
        <div class="mols">
            <h3> Tirdzniecības centrs "Mols" </h3>
            <div class="adrese-mols">
                <p> Adrese: Krasta iela 46, Rīga LV-1003 </p>
            </div>
            <img src="https://eglitetev.lv/egles/mols-adrese.png" class="image-link-mols">
            <div class="darba-laiki-mols">
                <p> Darba laiki: </p>
                <p> P-Pk: 10:00 -22:00 </p>
                <p> S-Sv: 10:00 - 22:00 </p>
            </div>
        </div>
    </div>
    <div class="maltas">
        <h3>Maltas iela 49, Latgales priekšpilsēta, Rīga, LV-1057</h3>
        <div class="adrese-mols">
            <p> Adrese: Maltas iela 49, Latgales priekšpilsēta, Rīga, LV-1057 </p>
        </div>
        <img src="https://eglitetev.lv/egles/maltas_iela.png" class="image-link-maltas">
        <div class="darba-laiki-mols">
            <p> Darba laiki: </p>
            <p> P-Pk: 10:00 -22:00 </p>
            <p> S-Sv: 10:00 - 22:00 </p>
        </div>
    </div>
    <!-- Footer component -->
    @component('components/footer')
    @endcomponent
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Magnific Popup core JS file -->
    <script src="{{URL::asset('js/jquery.magnific-popup.js')}}"></script>
    <script>
        $('.image-link-mols').magnificPopup({
            items: {
                src: 'https://eglitetev.lv/egles/mols-adrese.png'
            },
            type: 'image' // this is default type
        });
        $('.image-link-dole').magnificPopup({
            items: {
                src: 'https://eglitetev.lv/egles/dole-adrese.png'
            },
            type: 'image' // this is default type
        });

        $('.image-link-maltas').magnificPopup({
            items: {
                src: 'https://eglitetev.lv/egles/maltas_iela.png'
            },
            type: 'image' // this is default type
        });
    </script>
</body>

</html>