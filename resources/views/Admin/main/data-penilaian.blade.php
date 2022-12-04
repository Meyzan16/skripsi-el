
         @extends('admin.layout.layout')

         @section('content')    
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Alternatif</h3>
                        </div>

                        <div class="div">
        @if(session()->has('success'))
        <div class="autohide">
            <div class="alert alert-success autohide" role="alert">
             {{ session('success') }}
            </div>    
        </div>
        @endif
    </div>


                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Data Alternatif</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                       

                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Alternatif</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($proses_kalkulasi as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->tb_data_alternatif->nama_daerah }}</td>
                                        <td>
                                            <a class="badge bg-warning"   data-bs-toggle="modal" data-bs-target="#edit_data{{ $item->id }}">  <i class="fa fa-edit"> </i>  </a>                
                                            <a class="badge bg-primary"   data-bs-toggle="modal" data-bs-target="#show_data{{ $item->id }}">  <i class="fa fa-eye"> </i>  </a>                
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

 @foreach ($proses_kalkulasi as $item1)
<div class="modal fade" id="edit_data{{ $item1->id  }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
        role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"> Input Penilaian {{$item1->id}}
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{ route('data-penilaian.update', $item1->id)}}" method="POST">
                @csrf  @method('patch')
                 <div class="modal-body" style="overflow: scroll; height:500px">

                    <div class="form-group">
                        <label for="nama_kriteria">Tinggi Genangan</label>
                        <select name="id_tinggi_genangan" class="form-control" required >
                            <option value="">--Pilih Data--</option>   
                                @foreach ($tinggi_genangan as $item)
                                      <option value="{{ $item->id_tinggi_genangan }}">{{ $item->nama_sub_kriteria }}</option>    
                                @endforeach
                        </select>
                        {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                    </div>

                    <div class="form-group">
                        <label for="nama_kriteria">Luas Genangan</label>
                        <select name="id_luas_genangan" class="form-control" required >
                            <option value="">--Pilih Data--</option>   
                                @foreach ($luas_genangan as $item)
                                      <option value="{{ $item->id_luas_genangan }}">{{ $item->nama_sub_kriteria }}</option>    
                                @endforeach
                        </select>
                        {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                    </div>

                    <div class="form-group">
                        <label for="nama_kriteria">Lamanya Genangan</label>
                        <select name="id_lamanya_genangan" class="form-control" required >
                            <option value="">--Pilih Data--</option>   
                                @foreach ($lamanya_genangan as $item)
                                      <option value="{{ $item->id_lamanya_genangan }}">{{ $item->nama_sub_kriteria }}</option>    
                                @endforeach
                        </select>
                        {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                    </div>

                    <div class="form-group">
                        <label for="nama_kriteria">Kerugian Ekonomi</label>
                        <select name="id_kerugian_ekonomi" class="form-control" required >
                            <option value="">--Pilih Data--</option>   
                                @foreach ($kerugian_ekonomi as $item)
                                      <option value="{{ $item->id_kerugian_ekonomi }}">{{ $item->nama_sub_kriteria }}</option>    
                                @endforeach
                        </select>
                        {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                    </div>  

                     
                    <div class="form-group">
                        <label for="nama_kriteria">Kerugian Pada Daerah Perumahan</label>
                        <select name="id_kerugian_daerah_perumahan" class="form-control" required >
                            <option value="">--Pilih Data--</option>   
                                @foreach ($kerugian_daerah_perumahan as $item)
                                      <option value="{{ $item->id_kerugian_daerah_perumahan }}">{{ $item->nama_sub_kriteria }}</option>    
                                @endforeach
                        </select>
                        {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                    </div>  

                    <div class="form-group">
                        <label for="nama_kriteria">Frekuensi Genangan</label>
                        <select name="id_frekuensi_genangan" class="form-control" required >
                            <option value="">--Pilih Data--</option>   
                                @foreach ($frekuensi_genangan as $item)
                                      <option value="{{ $item->id_frekuensi_genangan }}">{{ $item->nama_sub_kriteria }}</option>    
                                @endforeach
                        </select>
                        {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                    </div>  

                    <div class="form-group">
                        <label for="nama_kriteria">Kerugian dan Gangguan Transportasi</label>
                        <select name="id_gangguan_transportasi" class="form-control" required >
                            <option value="">--Pilih Data--</option>   
                                @foreach ($gangguan_transportasi as $item)
                                      <option value="{{ $item->id_gangguan_transportasi }}">{{ $item->nama_sub_kriteria }}</option>    
                                @endforeach
                        </select>
                        {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                    </div>
                    
                    <div class="form-group">
                        <label for="nama_kriteria">Kerugian Hak Milik Pribadi</label>
                        <select name="id_hak_milik_pribadi" class="form-control" required >
                            <option value="">--Pilih Data--</option>   
                                @foreach ($hak_milik_pribadi as $item)
                                      <option value="{{ $item->id_hak_milik_pribadi }}">{{ $item->nama_sub_kriteria }}</option>    
                                @endforeach
                        </select>
                        {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                    </div>  

                    <div class="form-group">
                        <label for="nama_kriteria">gangguan sosial dan fasilitas pemerintah </label>
                        <select name="id_gangguan_sosial" class="form-control" required >
                            <option value="">--Pilih Data--</option>   
                                @foreach ($gangguan_sosial as $item)
                                      <option value="{{ $item->id_gangguan_sosial }}">{{ $item->nama_sub_kriteria }}</option>    
                                @endforeach
                        </select>
                        {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                    </div>  

                    

                </div>    
                    
                <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary"
                            data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Kembali</span>
                        </button>
                    
                        <button type="submit" class="btn btn-primary ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Simpan</span>
                        </button>   
                </div>

            </form>
        </div>
    </div>
</div>
@endforeach


@foreach ($proses_kalkulasi as $item1)
<div class="modal fade" id="show_data{{ $item1->id  }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
        role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"> Input Penilaian {{$item1->tb_data_alternatif->nama_daerah}}
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
          
                 <div class="modal-body" style="overflow: scroll; height:600px">

                    <div class="form-group">
                        <label for="nama_kriteria">Tinggi Genangan</label>
                        @if (!empty($item1->id_tinggi_genangan))
                        <input type="text" readonly value="{{ $item1->sub_tinggi_genangan->nama_sub_kriteria }}" class="form-control"  >
                        @else
                        <input type="text" readonly class="form-control"  >
                        @endif
                        {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                    </div>  

                    <div class="form-group">
                        <label for="nama_kriteria">Luas Genangan</label>
                        @if (!empty($item1->id_luas_genangan))
                        <input type="text" readonly value="{{  $item1->sub_luas_genangan->nama_sub_kriteria  }}" class="form-control"  >
                        @else
                        <input type="text" readonly class="form-control"  >
                        @endif
                        {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                    </div>  
                    <div class="form-group">
                        <label for="nama_kriteria">Lamanya Genangan</label>
                        @if (!empty($item1->id_lamanya_genangan))
                        <input type="text" readonly value="{{   $item1->sub_lamanya_genangan->nama_sub_kriteria  }}" class="form-control"  >
                        @else
                        <input type="text" readonly class="form-control"  >
                        @endif
                        {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                    </div>  

                    <div class="form-group">
                        <label for="nama_kriteria">Kerugian Ekonomi</label>
                        @if (!empty($item1->id_kerugian_ekonomi))
                        <input type="text" readonly value="{{   $item1->sub_kerugian_ekonomi->nama_sub_kriteria }}" class="form-control"  >
                        @else
                        <input type="text" readonly class="form-control"  >
                        @endif
                        {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                    </div>  

                    <div class="form-group">
                        <label for="nama_kriteria">Kerugian Pada Daerah Perumahan</label>
                        @if (!empty($item1->id_kerugian_daerah_perumahan))
                        <input type="text" readonly value="{{  $item1->sub_kerugian_daerah_perumahan->nama_sub_kriteria  }}" class="form-control"  >
                        @else
                        <input type="text" readonly class="form-control"  >
                        @endif
                        {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                    </div> 

                    <div class="form-group">
                        <label for="nama_kriteria">Frekuensi Genangan</label>
                        @if (!empty($item1->id_frekuensi_genangan))
                        <input type="text" readonly value="{{   $item1->sub_frekuensi_genangan->nama_sub_kriteria }}" class="form-control"  >
                        @else
                        <input type="text" readonly class="form-control"  >
                        @endif
                        {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                    </div>  

                    <div class="form-group">
                        <label for="nama_kriteria">Kerugian dan Gangguan Transportasi</label>
                        @if (!empty($item1->id_gangguan_transportasi))
                        <input type="text" readonly value="{{  $item1->sub_gangguan_transportasi->nama_sub_kriteria }}" class="form-control"  >
                        @else
                        <input type="text" readonly class="form-control"  >
                        @endif
                        
                        {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                    </div>  
                    
                    <div class="form-group">
                        <label for="nama_kriteria">Kerugian Hak Milik Pribadi</label>
                        @if (!empty($item1->id_hak_milik_pribadi))
                        <input type="text" readonly value="{{  $item1->sub_hak_milik_pribadi->nama_sub_kriteria  }}" class="form-control"  >
                        @else
                        <input type="text" readonly class="form-control"  >
                        @endif
                        {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                    </div>  

                    <div class="form-group">
                        <label for="nama_kriteria">Gangguan sosial dan fasilitas pemerintahi</label>
                        @if (!empty($item1->id_gangguan_sosial))
                        <input type="text" readonly value="{{ $item1->sub_gangguan_sosial->nama_sub_kriteria  }}" class="form-control"  >
                        @else
                        <input type="text" readonly class="form-control"  >
                        @endif
                        {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                    </div>  

                   

                </div>    
        </div>
    </div>
</div>
@endforeach



        
        @endsection
           