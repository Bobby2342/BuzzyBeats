@extends('admin.layout.layout')
@section('content')



<form action="{{ isset($studio) ? route('studio.update', $studio->id) : route('studio.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @if(isset($studio))
        @method('PUT')
    @endif



<div class="container mt-5" style="align-content: center">

    <div class="mb-3">
        <label for="" class="form-label">Studio Name</label>
        <input
            type="text"
            name="name"
            id=""
            class="form-control"
            placeholder="Type your studio name"
            aria-describedby="helpId"
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Studio Email</label>
        <input
            type="text"
            name="email"
            id=""
            class="form-control"
            placeholder="Type your studio email"
            aria-describedby="helpId"
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Studio Address</label>
        <input
            type="text"
            name="address"
            id=""
            class="form-control"
            placeholder="Type your studio Address"
            aria-describedby="helpId"
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Studio Phone</label>
        <input
            type="number"
            name="phone"
            id=""
            class="form-control"
            placeholder="Type your studio phone number"
            aria-describedby="helpId"
            value=" {{ old('phone') }}"
        />
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Studio Logo</label>
        <input
            type="file"
            name="logo"
            id=""
            class="form-control"
            placeholder="add your studio logo"
            aria-describedby="helpId"
        />
    </div>


    <div class="mb-3">
        <button type="submit" class="btn btn-primary">{{ isset($studio) ? 'Update' : 'Submit' }}</button>
    </form>



    </div>




</div>

</form>



@endsection



