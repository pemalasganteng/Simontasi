@extends('layouts.admin')

@section('content')

<div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Daftar Bimbingan<button type="button" style="margin-left:60%" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Bimbingan</button></h4>
                               
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="{{route('bimbingan_up')}}" method="POST" enctype="multipart/form-data">
                                            {{csrf_field()}}
                <fieldset disabled="">
                    <div class="form-group">
                                <label for="disabledTextInput">NIM</label>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{Auth::user()->nim}}">
                            </div>
                    <div class="form-group">
                                <label for="disabledTextInput">Nama</label>
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{Auth::user()->name}}">
                            </div>        
                </fieldset>
                <div class="custom-file">
                    <input name="file" type="file" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-dark">
                                                <tr class="text-white">
                                                    <th scope="col">ke-</th>
                                                    <th scope="col">Tgl Bimbingan</th>
                                                    <th scope="col">Revisi</th>
                                                    <th scope="col">Tgl ACC</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $datas)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>  
                                                    <td>{{$datas->created_at}}</td>
                                                    <td>
                                                    @if(isset($datas->ket_revisi ) == null)
                                                        <i class="fa fa-minus"></i>
                                                    @else
                                                        {{$datas->ket_revisi}}
                                                    @endif
                                                    </td>
                                                   
                                                    <td>
                                                     @if(isset($datas->ket_revisi ) == null)
                                                        <i class="fa fa-minus"></i>
                                                    @else
                                                        {{$datas->updated_at}}
                                                    @endif
                                                    </td>
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