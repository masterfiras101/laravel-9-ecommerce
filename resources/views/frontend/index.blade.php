@extends('layouts.app')

@section('title','الصفحة الرئيسية')
{{-- @section('go_to','Welcom in the Main Page') --}}

@section('content')



        <main class="l-main">

            <!--===== HOME =====-->

            <section class="home bd-grid" id="home">

                <div class="home__data">

                    <h1 class="home__title">Hi,<br>I'am <span class="home__title-color">Firas Muhammed </span><br> Websites and Webapps  Developer </h1>



                    <a href="#" class="button">Contact</a>

                </div>



                <div class="home__social">

                    <a href="" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>

                    <a href="" class="home__social-icon"><i class='bx bxl-behance' ></i></a>

                    <a href="" class="home__social-icon"><i class='bx bxl-github' ></i></a>

                </div>





            </section>












            <!--===== CONTACT =====-->

            {{-- <section class="contact section" id="contact">

                <h2 class="section-title">Contact</h2>



                <div class="contact__container bd-grid">

                    <form action="" class="contact__form">

                        <input type="text" placeholder="Name" class="contact__input">

                        <input type="mail" placeholder="Email" class="contact__input">

                        <textarea name="" id="" cols="0" rows="10" class="contact__input"></textarea>

                        <input type="button" value="Send" class="contact__button button">

                    </form>

                </div>

            </section> --}}

        </main>



        <!--===== FOOTER =====-->

        <footer class="footer">

            <p class="footer__title">Master Firas 😉</p>

            <div class="footer__social">

                <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>

                <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>

                <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>

            </div>

            <p class="footer__copy">&#169; masterfiras101. All rigths reserved</p>

        </footer>


@endsection
