@extends("inc.layout")
@section("main")

    <a href="{{ route('cars.create') }}" class="btn btn-success mb-2 mx-auto d-block w-25">
        add car +
    </a>
    @php
        echo route('cars.create');
    @endphp
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
                                <a href="{{ route('cars.edit',$car->id) }}" class="btn btn-outline-success">
                                    edit
                                </a>
                                <x-delete-btn id="{{ $car->id }}"/>
                            </div>
                        </div>
                       
                        <a href="{{ route('cars.show', $car->id)}}" style="font-size: .85em" class=" float-start text-decoration-none">read more</a>
                        <small class="float-end" style="font-size: .85em">created {{ $car->createdAt }}</small>

                    </div>
                </div>
            </div>
        @empty
            <div style="font-size:1.5em; margin-top:25vh" class="text-center">
                No record found... <small><a href="{{ route('cars.create') }}">add record</a></small>
            </div>
        @endforelse
    </div>
@endsection


    
