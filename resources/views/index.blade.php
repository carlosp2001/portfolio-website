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
                        @foreach($projects as $project)
                            <button type="button"
                                    class="content__item__projects__navbar__button {{$loop->first ? 'content__item__projects__navbar__button__active' : ''}}"></button>
                        @endforeach
                    </div>
                </div>
                <div class="content__item__projects__container">
                    @foreach($projects as $project)
                        <div class="content__item__projects__project {{$loop->first ? 'content__item__projects__project__active' : ''}}">
                            <div class="content__item__projects__project__container"><span
                                        class="content__item__projects__project__title">{{"_" . strtolower($project->projectName)}}</span>
                                <span
                                        class="content__item__projects__project__date">{{$project->startDate . " - " . $project->endDate}}</span>
                            </div>
                            <div style="background-image: url('{{asset("images/{$project->projectImage}")}}')"
                                 class="content__item__projects__project__image">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
