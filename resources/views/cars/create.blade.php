@extends("inc.layout")
@section("main")
   <x-alert/>
    <form action="/cars" method="POST">
        @csrf
        <div class="form-group my-4 ">
            <label for="name">
                Car name
            </label>
            <input type="text" placeholder="Enter car name" id="name" name = "name"class="form-control" value="{{ $request->old("name") }}">
        </div>
        <div class="form-group my-4">
            <label for="founded">
                Founded in what year?
            </label>
            <input type="text" placeholder="year" id="founded" name="founded" class="form-control" value="{{ $request->old("founded") }}" maxlength="4">
        </div>
        <div class="form-group my-4">
            <label for="hq">
                Head Quarters?
            </label>
            <input type="text" placeholder="Head Quarters" id="hq" name="hq"
            class="form-control" value="{{ $request->old("hq") }}">
        </div>
        <div class="form-group my-4">
            <x-submit-button>
               submit  
            </x-submit-button>
        </div>
    </form>
@endsection
