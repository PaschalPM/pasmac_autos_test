<form  action="/cars/{{ $id }}" method="POST" class="d-inline delete">
    @csrf
    @method("DELETE")
    <button class="btn btn-outline-danger">
        delete                                
    </button>
</form>
