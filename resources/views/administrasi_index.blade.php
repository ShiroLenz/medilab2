@extends('layouts.sbadmin2')
@section('isinya')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ $judul }}
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tanggal</th>
                                <th>Nama Pasien</th>
                                <th>Nama Dokter</th>
                                <th>Biaya</th>
                                <th>Aksi</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($administrasi as $a)
                            <tr>
                                <td>{{  $a->id }}</td>
                                <td>{{  $a->tanggal}}</td>
                                <td>{{  $a->pasien->nama_pasien }}</td>
                                <td>{{  $a->dokter->nama_dokter}}</td>
                                <td>Rp. {{  number_format($a->biaya) }}</td>                                
                                <td>
                                    <a href="{{ url('administrasi/'.$a->id.'/edit',[]) }}" class="btn btn-primary btn-sm">Edit</a>
                                    Hapus
                                </td>
                                
                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $administrasi->links() }}
                </div>
            </div>
            

        </div>
    </div>
</div>

@endsection