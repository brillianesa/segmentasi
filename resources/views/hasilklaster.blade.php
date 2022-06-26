@extends('template')
@section('content')
    <div class="content">
        <title>Segmentasi Pelanggan</title>

        <div>
            <h2>Hasil Cluster Model RFM</h2>
            <table id="myTable" class="table table-stripped">
                <thead>
                    <tr>
                        <th>Nama Pelanggan</th>
                        <th>Klaster</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($segmentasipelanggan as $user)
                        <tr>
                            <td>{{ $user->customer }}</td>
                            <td>{{ $user->Cluster }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <div>
            <h2>Hasil Cluster Model LRFM</h2>
            <table class="table table-stripped myTable">
                <thead>
                    <tr>
                        <th>Nama Pelanggan</th>
                        <th>Klaster</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($segmentasilrfm as $user)
                        <tr>
                            <td>{{ $user->customer }}</td>
                            <td>{{ $user->Cluster }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
