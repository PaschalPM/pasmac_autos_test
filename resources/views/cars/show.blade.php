@extends("inc.layout")
@section('main')
    
    <h2 class="mt-4">
        {{ $car->name }}
    </h2>
    <p class="card-text  ">
        <span class="text-secondary"> Founded: </span> {{ $car->founded }} <br>
        <span class="text-secondary"> Head-Quarters: </span> {{ $car->hq }}
    </p>
   
    <p class="text-justify">
        Weiten alten mich sang geneigt was zu. Mich unbekannten schwebet euch wiederholt herauf, schauer lebens guten der geneigt lebt mögt,  die zerstreuet freundliche jenem wahn. Trüben träne weich guten macht seh selbst ihr. Busen sich und ich sehnen gestalten längst erste noch mir. Ihr mich naht naht hören es.
    </p>
    <div >
        <a href="/cars/{{ $car->id }}/edit" class="btn btn-outline-success">
            edit
        </a >
        <x-delete-btn id="{{ $car->id }}"/>
    </div>

    <small class="float-end">created {{ $car->createdAt }}</small>




@endsection
