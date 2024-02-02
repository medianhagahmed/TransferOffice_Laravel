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
                                    <th scope="col">المرسل</th>
                                    <th scope="col">المستقبل</th>
                                    <th scope="col">التاريخ</th>
                                    <th scope="col">المبلغ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transfer as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <th scope="row">{{ $item->send_name }}</th>
                                        <th scope="row">{{ $item->receive_name }}</th>
                                        <th scope="row">{{ $item->date }}</th>
                                        <th scope="row">{{ $item->amount }}</th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection
