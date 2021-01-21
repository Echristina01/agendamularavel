@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <h3>Event Index</h3>
                        </div>
                        <div class="col-md-2 float-right">
                            <a class="btn btn-primary float-right" href="{{ URL::to('event/create') }}" role="button">New Event</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Title</td>
                                <td>Location</td>
                                <td>Guest</td>
                                <td>Date Time</td>
                                <td>Duration</td>
                                <td>Person in Charge</td>
                                <td>Notes</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $key => $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->title }}</td>
                                    <td>{{ $value->location }}</td>
                                    <td>{{ $value->guest }}</td>
                                    <td>{{ $value->dateTime }}</td>
                                    <td>{{ $value->duration }}</td>
                                    <td>{{ $value->picId }}</td>
                                    <td>{{ $value->notes }}</td>

                                    <!-- we will also add show, edit, and delete buttons -->
                                    <td>

                                        <!-- delete the shark (uses the destroy method DESTROY /sharks/{id} -->
                                        <!-- we will add this later since its a little more complicated than the other two buttons -->

                                        <!-- show the shark (uses the show method found at GET /sharks/{id} -->
                                        {{-- <a class="btn btn-small btn-success" href="{{ URL::to('sharks/' . $value->id) }}">Show
                                        this shark</a> --}}

                                        <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                                        <a class="btn btn-small btn-info"
                                            href="{{ URL::to('event/' . $value->id . '/edit') }}">Edit</a>
                                        <a class="btn btn-small btn-danger"
                                            href="{{ URL::to('event/' . $value->id . '/delete') }}">Delete</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
