@extends('layouts.template')

@section('content')
@foreach ($productos as $producto)                               
			   		
				
				
                
            <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal{{ $producto->id }}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <!--<img class="img-fluid" src="{{ $producto->imagen }}" alt="..." />-->
                                <img class="img-fluid" src="{{ asset('storage').'/'.$producto->imagen }}" width="500" alt="">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"> {{ $producto->nombre }}</div>
                                <div class="portfolio-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>

                            <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal{{ $producto->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">{{ $producto->nombre }}</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid" src="{{ asset('storage').'/'.$producto->imagen }}" width="500" alt="">
                                    <p>{{ $producto->descripcion }}</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Precio:</strong>
                                            {{ $producto->precioU }}
                                        </li>
                                        <li>
                                            <strong>Existencia:</strong>
                                            {{ $producto->existencia }}
                                        </li>
                                        <li>
                                            <strong>Linea:</strong>
                                            {{ $producto->linea }}
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Comprar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                    @endforeach
@endsection