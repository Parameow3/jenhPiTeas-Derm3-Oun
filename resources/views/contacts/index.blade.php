@extends('layouts.main')
@section('content')
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-title m-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="m-0">All Contacts</h4>
                                <div class="m-0">
                                    <a href="{{route('contacts.create')}}" class="btn btn-success"><i
                                            class="bi bi-plus-square"></i> Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @include('contacts._filter')
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Company</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($contacts))
                                        @foreach($contacts as $key => $contact)

                                            <tr @if($loop->even) class="table-primary" @endif>
                                                <th scope="row">{{$key}}</th>
                                                <td>{{$contact['firstname']}}</td>
                                                <td>{{$contact['lastname']}}</td>
                                                <td>{{$contact['email']}}</td>
                                                <td>{{$contact['company']}}</td>
                                                <td width="150">
                                                    <a href="{{route('contacts.show',$key)}}"
                                                       class="btn btn-sm btn-circle btn-outline-info" title="Show"><i
                                                            class="bi bi-eye-fill"></i></a>
                                                    <a href="{{route('contacts.create')}}"
                                                       class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i
                                                            class="bi bi-pencil-square"></i></a>
                                                    <a href="#" class="btn btn-sm btn-circle btn-outline-danger"
                                                       title="Delete"
                                                       onclick="confirm('Are you sure?')"><i class="bi bi-x-circle"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <p>No contact found</p>
                                    @endif

                                    </tbody>
                                </table>
                            </div>
                            <nav class="mt-4">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
