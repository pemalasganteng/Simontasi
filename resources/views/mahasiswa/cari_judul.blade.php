@extends('layouts.admin')

@section('content')

<div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                    <div class="search-box pull-right">
                                    <form action="#">
                                        <input type="text" name="search" placeholder="Search..." required>
                                        <i class="ti-search"></i>
                                    </form>
                                </div>      
                               
                                <h4 class="header-title">Pencarian Judul</h4>
                                <br>    
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-dark">
                                                <tr class="text-white">
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Judul</th>
                                                    <th scope="col">NIM</th>
                                                    <th scope="col">Mahasiswa yg Mengajukan</th>
                                                    <th scope="col">Dosen Pembimbing</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($data as $datas)
                                                <tr>    
                                                    <td>{{$loop->iteration}} </td>
                                                    <td>{{$datas->judul}}    </td>
                                                    <td>{{$datas->nim}}    </td>
                                                    <td>{{$datas->name}}    </td>
                                                    <td>{{$datas->namaDosen}}    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                                        {{ $data->links() }}


                        </div>
</div>

@endsection