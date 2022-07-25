@extends("inc.layout")
@section("main")
    <a href="/cars/create" onclick="openAddCarDialog(event)" class="btn btn-success mb-2 mx-auto d-block w-25">
        add car +
    </a>
    <div class="addCarDialog" style="display: none">
        {{-- <x-add-car ></x-add-car> --}}
    </div>  
    <div class="row">
       
        @forelse ($cars as $car)
            <div class=" col-md-6 col-lg-4 my-2" >
                <div class="card shadow">
                    
                    <div class="card-body">
                        <h5 class="card-title text-decoration-none text-dark">
                            {{ $car->name}}
                        </h5>
                        <div class="clearfix mb-sm-2">
                            <p class="card-text float-start float-md-none">
                                <span class="text-secondary"> Founded: </span> {{ $car->founded }} <br>
                                <span class="text-secondary"> Head-Quarters: </span>  {{ $car->hq }}
                            </p>
                            <div class="float-end float-md-none">
                                <a href="/cars/{{ $car->id }}/edit" class="btn btn-outline-success">
                                    edit
                                </a>
                                <x-delete-btn id="{{ $car->id }}"/>
                            </div>
                        </div>
                       
                        <a href="cars/{{ $car->id }}" style="font-size: .85em" class=" float-start text-decoration-none">read more</a>
                        <small class="float-end" style="font-size: .85em">created {{ $car->createdAt }}</small>

                    </div>
                </div>
            </div>
        @empty
            <div style="font-size:1.5em; margin-top:25vh" class="text-center">
                No record found... <small><a href="/cars/create">add record</a></small>
            </div>
        @endforelse
    </div>
@endsection


