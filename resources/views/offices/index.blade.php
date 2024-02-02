@extends('welcome')
@section('body')
    <div class="container">
        <div class="body">
            <h1>Page is offices</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">All Offices.</p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">cpontry</th>
                                    <th scope="col">amounts</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($offices as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->country }}</td>
                                        <td>{{ $item->amount }} $</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection
