@extends('layouts.front')

@section('content')
<div class="page-wrapper">
    <div class="project-carousel owl-carousel">
        @foreach($works as $work)
            <div class="project-carousel-item" style="background:url({{ asset('images/works/' . $work->image) }});">
                <div>
                    <div class="inner-content">
                        <div class="container">
                            <div class="row">
                                <div class="project-detail-info col-md-6">
                                    <div class="project-detail-content">
                                        <h3 class="project-detail-title">{{ app()->getLocale() == 'en' ? $work->project_name : $work->project_name_ar }}</h3>
                                        <p class="project-detail-text">{{ app()->getLocale() == 'en' ? $work->description : $work->description_ar }}</p>
                                        <ul class="project-detail-list text-dark">
                                            <li>
                                                <span class="left">Category:</span>
                                                <span class="right">{{ app()->getLocale() == 'en' ? $work->category->name : $work->category->name_ar }}</span>
                                            </li>
                                            <li>
                                                <span class="left">Order:</span>
                                                <span class="right">{{ $work->order }}</span>
                                            </li>
                                        </ul>
                                        <div class="project-detail-meta">
                                            <span class="left text-dark hidden-xs pull-sm-left">Share:</span>
                                            <div class="social-list pull-sm-right">
                                                @if(isset($contact->twitter))
                                                    <a href="{{ $contact->twitter }}" class="icon ion-social-twitter" target="_blank"></a>
                                                @endif
                                                @if(isset($contact->facebook))
                                                    <a href="{{ $contact->facebook }}" class="icon ion-social-facebook" target="_blank"></a>
                                                @endif
                                                @if(isset($contact->google))
                                                    <a href="mailto:{{ $contact->google }}" class="icon ion-email"></a>
                                                @endif
                                                @if(isset($contact->linkedin))
                                                    <a href="{{ $contact->linkedin }}" class="icon ion-social-linkedin" target="_blank"></a>
                                                @endif
                                                @if(isset($contact->instagram))
                                                    <a href="{{ $contact->instagram }}" class="fa fa-instagram"></a>
                                                @endif
                                                @if(isset($contact->phone))
                                                    <a href="tel:{{ $contact->phone }}" class="fa fa-mobile-phone" target="_blank"></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
