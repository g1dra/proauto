<!DOCTYPE html>
<html lang="en">

@include('layouts.header', ['cities' => ["Airport Podgorica","Airport Tivat","Podgorica", "Nikšić","Pljevlja",
            "BijeloPolje", "Cetinje",
            "HercegNovi", "Berane",
            "Budva", "Ulcinj", "Tivat",
            "Rožaje", "Kotor", "Danilovgrad",
            "Mojkovac", "Plav", "Kolašin",
            "Žabljak","Plužine","Andrijevica","Šavnik"
        ]])

<body class="page__home">
{{--<div class="tools">
    <span class="toggle"><img src="/images/color-icon.png" class="img-responsive" alt=""></span>
    <a href="#" class="color-blue">Blue</a>
    <a href="#" class="color-yellow">Yellow</a>
    <a href="#" class="color-turquoise">Turquoise</a>
    <a href="#" class="color-orange">Orange</a>
    <a href="#" class="color-orange-sec">Orange-second</a>
    <a href="#" class="color-lightblue">Lightblue</a>
    <a href="#" class="color-pink">Pink</a>
</div>--}}
<!-- Loader -->
@include('layouts.loader')
<!-- //Loader -->

<!-- Content  -->
@yield('page-content')

<!-- // Content  -->
<!-- Footer -->
@include('layouts.footer')

@include('layouts.booking-form')

<!-- //Footer -->
<!-- Google map -->
@include('layouts.footer-scripts')
</body>

</html>