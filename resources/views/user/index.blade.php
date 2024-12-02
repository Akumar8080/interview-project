@extends('layouts.app')

@section('content')
    <h1>List of Users</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Reg. Number</th>
                <th>Date of Registration</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->reg_number }}</td>
                    <td>{{ $user->date_of_registration }}</td>
                    <td>
                        <!-- Button to print PDF for the user -->
                        <a href="{{ route('user.print', $user->id) }}" class="btn btn-primary">Print PDF</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $users->links() }}
    </div>
@endsection
