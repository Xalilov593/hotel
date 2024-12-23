

@extends('components.layouts.frontend')
@section('main')

<main>
    <div class="pattern-square"></div>
    <!--Pageheader start-->
    <section class="py-10 py-lg-8">
        <div class="container">
            <div class="row mt-8">
                <div class="col-lg-6 offset-lg-1 col-md-12 col-12">
                    <h1 class="mb-3">{{$about->title}}</h1>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="text-center mb-8">
                        <p class="mb-0 px-lg-6">{!! $about->description !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                @foreach($aboutImages as $image)
                <div class="col-lg-4 col-md-4 col-12">
                    <a href="#"
                       class="glightbox rounded-3">
                        <div class="rounded-3 card-lift"
                             style="background-image: url('{{$image->getUrl()}}'); background-repeat: no-repeat; height: 350px; background-size: cover">
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>



    <!--Expert team start-->
    <section class="mt-2">
        <div class="container" data-cue="fadeIn">
            <div class="row border-top border-bottom">
                <div class="col-md-4 border-end-md border-bottom border-bottom-md-0" data-cue="zoomIn">
                    <div class="text-center py-lg-5 p-4">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                 class="bi bi-people-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"></path>
                            </svg>
                        </div>

                        <h4>Expert team</h4>
                        <p class="mb-0">Vivamus eget neque lacus. Pellentesque egauris ex.</p>
                    </div>
                </div>
                <div class="col-md-4 border-end-md border-bottom border-bottom-md-0" data-cue="zoomIn">
                    <div class="text-center py-lg-5 p-4">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                 class="bi bi-trophy-fill text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z"></path>
                            </svg>
                        </div>

                        <h4>Award winning agency</h4>
                        <p class="mb-0">Lorem ipsum, dolor sit amet consectetur elitorceat .</p>
                    </div>
                </div>
                <div class="col-md-4" data-cue="zoomIn">
                    <div class="text-center py-lg-5 p-4">
                        <div class="mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                 class="bi bi-stars text-primary" viewbox="0 0 16 16">
                                <path
                                    d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"></path>
                            </svg>
                        </div>

                        <h4>10 Year Exp.</h4>
                        <p class="mb-0">Pellen tesque eget, mauris lorem iupsum neque lacus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Expert team end-->

</main>


@endsection
