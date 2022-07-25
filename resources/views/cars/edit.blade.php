@extends("inc.layout")
@section("main")
   <x-alert/>
    <form action="/cars/{{ $car->id }}" method="POST">
        @csrf
        @method("PUT")
        <div class="form-group my-4 ">
            <label for="name">
                Car name
            </label>
            <input type="text" value="{{ $car->name }}" id="name" name = "name"class="form-control">
        </div>
        <div class="form-group my-4">
            <label for="founded">
                Founded in what year?
            </label>
            <input type="text" value="{{ $car->founded }}" id="founded" name="founded" class="form-control" maxlength="4">
        </div>
        <div class="form-group my-4">
            <label for="hq">
                Head Quarters?
            </label>
            <input type="text" value="{{ $car->hq }}" id="hq" name="hq"
            class="form-control">
        </div>
        <div class="form-group my-4">
            <x-submit-button>
                update
            </x-submit-button>
        </div>
    </form>
@endsection
