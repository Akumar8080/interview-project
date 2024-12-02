@extends('layouts.app')

@section('content')
    <h1>Create User</h1>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="mb-3">
            <label for="reg_number" class="form-label">Registration Number</label>
            <input type="text" class="form-control" name="reg_number" id="reg_number" required>
        </div>

        <div class="mb-3">
            <label for="date_of_registration" class="form-label">Date of Registration</label>
            <input type="date" class="form-control" name="date_of_registration" id="date_of_registration" required>
        </div>

        <div class="mb-3">
            <label for="allergy_information" class="form-label">Allergy Information</label>
            <textarea class="form-control" name="allergy_information" id="allergy_information"></textarea>
        </div>

        <div class="mb-3">
            <label for="additional_information" class="form-label">Additional Information</label>
            <textarea class="form-control" name="additional_information" id="additional_information"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save User</button>
    </form>
@endsection
