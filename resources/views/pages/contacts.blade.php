@extends('layouts.master')
@section('page-content')
<main id="page-content">
{{--
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs__title">Contacts</div>
                    <div class="breadcrumbs__items">
                        <div class="breadcrumbs__wrap">
                            <div class="breadcrumbs__item">
                                <a href="index.html" class="breadcrumbs__item-link">Home</a> <span>/</span> <a href="contacts.html" class="breadcrumbs__item-link">Contacts</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
--}}
    <!-- // Breadcrumbs  -->
    <div style="margin: auto; width:50%; padding-bottom: 30px; text-align: center">
        <img src="/images/logo/logo-no-bg-new.png" alt="logo">
    </div>
    <section class="contact-map">
        <div class="contact-info-block" style="position:static !important; width:50%; margin:auto">

            <div class="contact-info" style="text-align: center">
                <p>
                    <span class="phone_number"><i class="icon-telephone"></i>+382-67-485-442</span>
                </p>
                <p>
                    <span class="location_info">
                        <i class="icon-placeholder-for-map"></i>
                        <em>
                            <strong>ProAuto</strong> Rent a car Montenegro,</em>
                        <em>4. Jul TS-2 , Podgorica</em>
                        <br>
                        <strong>{{"proauto1@mail.com"}}</strong>
                    </span>
                </p>
            </div>
            <div class="social-list" style="text-align: center;">
                <ul class="social-list__icons">
                    <li><a target="_blank" href="https://www.facebook.com/proauto.rentacar.5" title="Facebook"><i class="icon-facebook-logo"></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/pro_auto_rent/?hl=en" title="Instagram"><i class="icon-linkedin-logo"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="wrap-form">
                    <h1>Leave a Message</h1>
                    <form id="contactform" class="contact-form comment-form" name="contactform" method="post" novalidate>
                        @csrf
                        <div id="success">
                            <p>Your message was sent successfully!</p>
                        </div>
                        <div id="error">
                            <p>Something went wrong, try refreshing and submitting the form again.</p>
                        </div>
                        <div class="input-wrapper first-child">
                            <input type="text" class="input-custom input-full" name="name" placeholder="Your name">
                        </div>
                        <div class="input-wrapper last-child">
                            <input type="text" class="input-custom input-full" name="email" placeholder="E-mail">
                        </div>
                        <div class="textarea-wrapper">
                            <textarea class="textarea-custom input-full" name="Comment" placeholder="Comment"></textarea>
                        </div>
                        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                        <div class="btn-wrapper">
                            <button type="submit" id="submit" class="btn btn-form" >Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
