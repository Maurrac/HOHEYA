@extends('etudiant.layout.app')

@section('content')
    <div class="container py-5">
        <div class="row text-center text-dark mb-5">
            <div class="col-lg-7 mx-auto">
                <h1 class="display-4">Product List</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <!-- List group-->
                <ul class="list-group shadow">
                    @foreach ($annonces as $annonce)
                        <!-- list group item-->
                        <li class="list-group-item">
                            <!-- Custom content-->
                            <a href="" class="">
                                <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                    <div class="media-body order-2 order-lg-1">
                                        <h5 class="mt-0 font-weight-bold mb-2">{{ $annonce->titre }}</h5>
                                        <p class="font-italic text-muted mb-0 small">
                                            {{ $annonce->description }}</p>
                                        <div class="d-flex align-items-center justify-content-between mt-1">
                                            <h6 class="font-weight-bold my-2">{{ $annonce->prix }} FCFA</h6>
                                            <ul class="list-inline small">
                                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                                </li>
                                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                                </li>
                                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                                </li>
                                                <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i>
                                                </li>
                                                <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                                            </ul>
                                            <span
                                                class="{{ $annonce->status == 'verified' ? 'text-success' : 'text-danger' }}">
                                                {{ $annonce->status }}</span>
                                        </div>
                                    </div>
                                    @php
                                        $files = json_decode($annonce->files);
                                    @endphp
                                    @foreach ($files as $file)
                                        @if ($file && @getimagesize(storage_path('app/public/' . $file)))
                                            <img src="{{ asset('storage/' . $file) }}" alt="Generic placeholder image"
                                                width="200" class="ml-lg-5 order-1 order-lg-2">
                                        @endif
                                    @endforeach

                                </div> <!-- End -->
                            </a>
                        </li> <!-- End -->
                    @endforeach
                </ul> <!-- End -->
            </div>
        </div>
    </div>
@endsection
