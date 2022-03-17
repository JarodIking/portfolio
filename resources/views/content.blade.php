@extends('layout')

@section('content')
    <!-- Interests-->
    <section class="resume-section" id="interests">
        <div class="resume-section-content">
            <!-- Tab title -->
            <h2 class="mb-5">{{$tabName}}</h2>

            @foreach($content as $card)
                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div class="flex-grow-1">
                        <!-- Content Title -->
                        <h3 class="mb-0">{{$card->title}}</h3>

                        <!-- Content Subtitle -->
                        @if($card->sub_title)
                            <div class="subheading mb-3">{{$card->sub_title}}</div>
                        @endif

                        <!-- Content Description -->
                        @if ($card->description)
                            <p class="mb-0">{{$card->description}}</p>
                        <br>
                        @endif

                        <!-- Content Link -->
                        @if ($card->link)
                            <p class="mb-0">Github link: <a href="{{$card->link}}">{{$card->link}}</a><p>
                            <br>
                        @endif

                        <!-- Social icons / icons-->
                        @if ($card->social)
                            <div class="social-icons">
                                @foreach($card->social as $social)
                                    @if($social->social)
                                            <a class="social-icon" href="{{$social->social}}" target="_blank">
                                                <i class="fab fa-{{$social->icon->icon_html}}"></i>
                                            </a>
                                    @else
                                        <li class="{{$social->icon->icon_html}} fa-5x"></li>
                                    @endif
                                @endforeach
                            </div>
                            <br/>
                        @endif

                        <!-- Content List -->
                        @if ($card->list_title)
                            <p class="mb-0">{{$card->list_title}}</p>
                            <ul class="fa-ul mb-0">
                                @foreach($card->listitem as $item)
                                    <li>{{$item->text}}</li>
                                @endforeach
                            </ul>
                            <br>
                        @else
                            <ul class="fa-ul mb-0">
                                @foreach($card->listitem as $item)
                                    <li>
                                        <span class="{{$item->icon->icon_html}}"></span>
                                        {{$item->text}}
                                    </li>
                                @endforeach
                            </ul>
                            <br>
                        @endif
                    </div>

                    <!-- Content Dates -->
                    @if ($card->from )
                    <div class="flex-shrink-0"><span class="text-primary">{{$card->from}} - {{ ($card->to) ? $card->to : 'present'}}</span></div>
                    @endif
                </div>
            @endforeach

            <p></p>
        </div>
    </section>


@endsection
