@extends('layouts.main')
@push('title')
    <title>LaravelCRUD</title>
@endpush
@section('main.section')
    {{-- <div class="btn-register my-4">

        <a href="register" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Register</a>
    </div> --}}



    <div class="container my-3">

        <h4>Laravel CRUd
            <a href="{{ url('add-student') }}" class="btn btn-primary float-right">Add Student</a>
        </h4>
    </div>

    <div class="display my-4">


        <table class="table table-bordered table-striped">
            <thead>
                <tr>

                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Fav_Sport</th>
                    <th>Country</th>
                    <th>State</th>
                    <th>Address</th>
                    <th>Image</th>
                    <th>Hobby</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $item)
                    <tr>

                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->gender }}</td>
                        <td>{{ $item->dob }}</td>
                        <td>{{ $item->fav_sport }}</td>
                        <td>{{ $item->country }}</td>
                        <td>{{ $item->state }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            <img src="{{ asset('uploads/cover/' . $item->image) }}" width="70px" height="70px"
                                alt="Image">
                        </td>
                        <td>{{ $item->hobby }}</td>
                        <td class="action">
                            <a href="{{ url('edit-student/' . $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ url('delete-student/' . $item->id) }}" class="btn btn-danger btn-sm"
                                onclick="comfirm('are you sure?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
