@extends('layout')
@section('body')
    <section class="content">
        <div class="content__item">
            <div class="content__item__text">
                <div class="content__item__text__intro">Hello, I am</div>
                <div class="content__item__text__name">Carlos Pineda</div>
                <div class="content__item__text__description-1">Software Developer | Node.js, Java, Spring Boot, PHP,
                    Laravel
                </div>
                <div class="content__item__text__description-2">I am Software Developer with a primary focus on back-end
                    development
                </div>
            </div>
        </div>
        <div class="content__item">
            <div class="content__item__projects">
                <div class="content__item__projects__navbar__container">
                    <div class="content__item__projects__navbar">
                        <button type="button"
                                class="content__item__projects__navbar__button content__item__projects__navbar__button__active"></button>
                        <button type="button" class="content__item__projects__navbar__button"></button>
                        <button type="button" class="content__item__projects__navbar__button"></button>
                    </div>
                </div>
                <div class="content__item__projects__project">
                    <div class="content__item__projects__project__container"><span
                            class="content__item__projects__project__title">_gofood</span> <span
                            class="content__item__projects__project__date">Sep 2023 - Current Working</span></div>
                    <div style="background-image: url('{{asset("images/gofoodproject.png")}}')"
                         class="content__item__projects__project__image">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
