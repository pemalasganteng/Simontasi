@extends('layouts.admin')

@section('content')

<div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Pengajuan Seminar Proposal</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-dark">
                                                <tr class="text-white">
                                                    <th scope="col">Tahap ke-</th>
                                                    <th scope="col">Tahapan</th>
                                                    <th scope="col">Keterangan</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                          
                                                <tr>
                                                   
                                                    <td>1</td>
                                                    <td>Pengajuan Proposal Tugas Akhir / Skripsi</td>
                                                    <td>Tahap dimana Anda sudah mengajukan judul kepada calon dosen pembimbing dan mendapatkan persetujuan  </td>  
                                                    <td>
                                                        @if(isset($tahap[0]->status_pengajuansempro ) == null)
                                                        <i class="fa fa-minus"></i>
                                                        @elseif(isset($tahap[0]->status_pengajuansempro ) == "Disetujui")
                                                        <i class="fa fa-check"></i>
                                                        @elseif(isset($tahap[0]->status_pengajuansempro ) == "Ditolak")
                                                        <i class="fa fa-close"></i>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Seminar Proposal Tugas Akhir / Skripsi Terjadwal    </td>
                                                    <td>Tahap Proposal Tugas Akhir sudah di setujui oleh pembimbing untuk didaftarkan pada seminar proposal.     </td>  
                                                    <td>
                                                        <i class="fa fa-minus"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Revisi Hasil Seminar Proposal Tugas Akhir / Skripsi </td>
                                                    <td>Tahap revisi hasil seminar proposal diberikan waktu 3 bulan setelah tanggal seminar.    </td>  
                                                    <td>
                                                        <i class="fa fa-minus"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Proses Penelitian Tugas Akhir / Skripsi </td>
                                                    <td>Tahap Laporan Tugas Akhir / Skripsi OK sudah di setujui oleh pembimbing untuk didaftarkan pada sidang ujian Tugas Akhir / Skripsi, dengan syarat minimal 12x pembimbingan    </td>  
                                                    <td>
                                                        <i class="fa fa-minus"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Pendaftaran Ujian Sidang Tugas Akhir / Skripsi  </td>
                                                    <td>Tahap ujian sidang Tugas Akhir/Skripsi sudah didaftarkan.   </td>  
                                                    <td>
                                                        <i class="fa fa-minus"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Ujian Sidang Tugas Akhir / Skripsi Terjadwal    </td>
                                                    <td>Tahap ujian sidang Tugas Akhir/Skripsi sudah dijadwalkan.   </td>  
                                                    <td>
                                                        <i class="fa fa-minus"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Revisi Hasil Ujian Sidang Tugas Akhir / Skripsi    </td>
                                                    <td>Tahap revisi hasil ujian sidang Tugas Akhir / Skripsi.  </td>  
                                                    <td>
                                                        <i class="fa fa-minus"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Laporan Tugas Akhir / Skripsi Selesai   </td>
                                                    <td>Tahap laporan Tugas Akhir/Skripsi sudah disetujui oleh pembimbing.  </td>  
                                                    <td>
                                                        <i class="fa fa-minus"></i>
                                                    </td>
                                                    
                                                </tr>
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