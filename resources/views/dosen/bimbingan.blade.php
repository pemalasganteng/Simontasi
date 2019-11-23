@extends('layouts.admin')

@section('content')

<div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Data Bimbingan</h4>
                               
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-dark">
                                                <tr class="text-white">
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Nim</th>
                                                    <th scope="col">Judul</th>
                                                    <th scope="col">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $datas)
                                                <tr>
                                                    <td>{{$loop->iteration}} </td>
                                                    <td>{{$datas->name}} </td>
                                                    <td>{{$datas->nim}} </td>
                                                    <td>{{$datas->judul}} </td>
                                                    <td><a href="{{route ('bimbingan_id', $datas->id_user)}} "><button type="button" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="ti-pencil"></i>Aksi</button></a></td>
                                                </tr>
                                                
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <div class="alert alert-primary" role="alert">
                                            <h4 class="alert-heading"><i class="fa fa-info"></i> Informasi!</h4>
                                            <p><i class="fa fa-minus"> Belum Disetujui Pembimbing</i></p>
                                            <p><i class="fa fa-check"> Disetujui Pembimbing</i></p>
                                            <p><i class="fa fa-close"> Ditolak Pembimbing</i></p>
                                            <hr>
                                            <p class="mb-0">Jika ada kesulitan hubungi <code>Administrator.</code></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
</div>

@endsection