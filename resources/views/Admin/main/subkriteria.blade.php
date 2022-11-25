
         @extends('admin.layout.layout')

         @section('content')    
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Sub Kriteria</h3>
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
                                    <li class="breadcrumb-item"><a href="index.html">Subkriteria</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">

                    <div class="card">
                        <div class="card-header">
                             <h4>Tinggi genangan</h4>

                              <button type="button" class="mr-3  btn btn-outline-primary d-block justify-content-end"
                                data-bs-toggle="modal" data-bs-target="#tambah_tinggi_genangan">
                                &nbsp;Tambah Data
                                </button>
                        </div>

                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kriteria</th>
                                        <th>Nama Sub Kriteria</th>
                                        <th>Nilai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($tinggi_genangan as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->tb_data_kriteria->nama_kriteria }}</td>
                                        <td>{{ $item->nama_sub_kriteria }}</td>   
                                        <td>{{ $item->nilai }}</td>
                                        <td> 
                                         <a class="badge bg-warning"   data-bs-toggle="modal" data-bs-target="#edit_data{{ $item->id_tinggi_genangan }}">  <i class="fa fa-edit"> </i>  </a>
                                        
                                        <form action="{{ route('data-sub-kriteria.destroy', $item->id_tinggi_genangan) }}" method="POST" class="d-inline">
                                            {{ csrf_field() }}  {{ method_field("DELETE") }}
                                            <button class="badge bg-danger border-0" onclick="return confirm('Yakin , ingin menghapus data ?')" >  <i class="fa fa-trash"> </i>
                                            </button>
                                        </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                             <h4>Luas genangan</h4>
                             <button type="button" class="mr-3  btn btn-outline-primary d-block justify-content-end"
                                 data-bs-toggle="modal" data-bs-target="#tambah_luas_genangan">
                                 &nbsp;Tambah Data
                                 </button>
                        </div>

                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kriteria</th>
                                        <th>Nama Sub Kriteria</th>
                                        <th>Nilai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($luas_genangan as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                         <td>{{ $item->tb_data_kriteria->nama_kriteria }}</td>
                                        <td>{{ $item->nama_sub_kriteria }}</td>   
                                        <td>{{ $item->nilai }}</td>
                                        <td>
                                            <a class="badge bg-warning"   data-bs-toggle="modal" data-bs-target="#edit_data_luas_genangan{{ $item->id_luas_genangan }}">  <i class="fa fa-edit"> </i>  </a>                                      
                                            
                                            <form action="{{ route('data-luas-genangan.destroy', $item->id_luas_genangan) }}" method="POST" class="d-inline">
                                                {{ csrf_field() }}  {{ method_field("DELETE") }}
                                                <button class="badge bg-danger border-0" onclick="return confirm('Yakin , ingin menghapus data ?')" >  <i class="fa fa-trash"> </i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                             <h4>Lamanya genangan</h4>
                             <button type="button" class="mr-3  btn btn-outline-primary d-block justify-content-end"
                                 data-bs-toggle="modal" data-bs-target="#tambah_lamanya_genangan">
                                 &nbsp;Tambah Data
                                 </button>
                        </div>

                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kriteria</th>
                                        <th>Nama Sub Kriteria</th>
                                        <th>Nilai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($lamanya_genangan as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->tb_data_kriteria->nama_kriteria }}</td>
                                        <td>{{ $item->nama_sub_kriteria }}</td>   
                                        <td>{{ $item->nilai }}</td>
                                        <td>
                                            <a class="badge bg-warning"   data-bs-toggle="modal" data-bs-target="#edit_data_lamanya_genangan{{ $item->id_lamanya_genangan }}">  <i class="fa fa-edit"> </i>  </a>                                      
                                            
                                            <form action="{{ route('data-lamanya-genangan.destroy', $item->id_lamanya_genangan) }}" method="POST" class="d-inline">
                                                {{ csrf_field() }}  {{ method_field("DELETE") }}
                                                <button class="badge bg-danger border-0" onclick="return confirm('Yakin , ingin menghapus data ?')" >  <i class="fa fa-trash"> </i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>  

{{-- tinggi genangan --}}
    <div class="modal fade" id="tambah_tinggi_genangan" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle"> Tambah Data Tinggi Genangan
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <form action="{{ route('data-sub-kriteria.store') }}" method="POST">
                        @csrf 

                            <div class="modal-body">
                                    <div class="form-group">
                                        <label for="nama_kriteria">Nama Sub Kriteria</label>
                                        <input type="text" name="nama_kriteria_tinggi_genangan"  class="form-control"  >
                                        {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="bobot_kriteria">Nilai</label>
                                        <input type="text" name="nilai_tinggi_genangan" maxlength="1" onkeypress="return hanyaAngka(event)"  class="form-control"  >
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
@foreach ($tinggi_genangan as $item1)
            <div class="modal fade" id="edit_data{{ $item1->id_tinggi_genangan  }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                    role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle"> Edit Data
                            </h5>
                            <button type="button" class="close" data-bs-dismiss="modal"
                                aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <form action="{{ route('data-sub-kriteria.update', $item1->id_tinggi_genangan) }}" method="POST">
                            @csrf  @method('patch')
                            
                             <div class="modal-body">
                                <div class="form-group">
                                    <label for="nama_kriteria">Nama Kriteria</label>
                                    <input type="text" name="nama_kriteria_tinggi_genangan" value="{{  old('nama_sub_kriteria', $item1->nama_sub_kriteria)  }}" class="form-control"  >
                                    {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                                </div>
                                <div class="form-group">
                                    <label for="bobot_kriteria">Bobot Kriteria</label>
                                    <input type="text" name="nilai_tinggi_genangan" maxlength="1" onkeypress="return hanyaAngka(event)" value="{{  old('nilai', $item1->nilai)  }}" class="form-control"  >
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
{{-- tutup genangan --}}



{{-- luas genangan --}}
<div class="modal fade" id="tambah_luas_genangan" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
    role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle"> Tambah Data Luas Genangan
            </h5>
            <button type="button" class="close" data-bs-dismiss="modal"
                aria-label="Close">
                <i data-feather="x"></i>
            </button>
        </div>
        <form action="{{ route('data-luas-genangan.store') }}" method="POST">
            @csrf 

                    <div class="modal-body">
                            <div class="form-group">
                                <label for="nama_kriteria">Nama Sub Kriteria</label>
                                <input type="text" name="nama_kriteria_luas_genangan"  class="form-control"  >
                                {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                            </div>
                            <div class="form-group">
                                <label for="bobot_kriteria">Nilai</label>
                                <input type="text" name="nilai_luas_genangan" maxlength="1" onkeypress="return hanyaAngka(event)"  class="form-control"  >
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
@foreach ($luas_genangan as $item1)
    <div class="modal fade" id="edit_data_luas_genangan{{ $item1->id_luas_genangan  }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
            role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"> Edit Data
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="{{ route('data-luas-genangan.update', $item1->id_luas_genangan) }}" method="POST">
                    @csrf  @method('patch')
                     <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_kriteria">Nama Kriteria</label>
                            <input type="text" name="nama_kriteria_luas_genangan" value="{{  old('nama_sub_kriteria', $item1->nama_sub_kriteria)  }}" class="form-control"  >
                            {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                        </div>
                        <div class="form-group">
                            <label for="bobot_kriteria">Bobot Kriteria</label>
                            <input type="text" name="nilai_luas_genangan" maxlength="1" onkeypress="return hanyaAngka(event)" value="{{  old('nilai', $item1->nilai)  }}" class="form-control"  >
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
{{-- tutup luas genangan --}}


{{-- lamanya genangan --}}
<div class="modal fade" id="tambah_lamanya_genangan" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
    role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle"> Tambah Data Lamanya Genangan
            </h5>
            <button type="button" class="close" data-bs-dismiss="modal"
                aria-label="Close">
                <i data-feather="x"></i>
            </button>
        </div>
        <form action="{{ route('data-lamanya-genangan.store') }}" method="POST">
            @csrf 

                    <div class="modal-body">
                            <div class="form-group">
                                <label for="nama_kriteria">Nama Sub Kriteria</label>
                                <input type="text" name="nama_kriteria_lamanya_genangan"  class="form-control"  >
                                {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                            </div>
                            <div class="form-group">
                                <label for="bobot_kriteria">Nilai</label>
                                <input type="text" name="nilai_lamanya_genangan" maxlength="1" onkeypress="return hanyaAngka(event)"  class="form-control"  >
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
@foreach ($lamanya_genangan as $item1)
    <div class="modal fade" id="edit_data_lamanya_genangan{{ $item1->id_lamanya_genangan  }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
            role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle"> Edit Data
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="{{ route('data-lamanya-genangan.update', $item1->id_lamanya_genangan) }}" method="POST">
                    @csrf  @method('patch')
                     <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_kriteria">Nama Kriteria</label>
                            <input type="text" name="nama_kriteria_lamanya_genangan" value="{{  old('nama_sub_kriteria', $item1->nama_sub_kriteria)  }}" class="form-control"  >
                            {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                        </div>
                        <div class="form-group">
                            <label for="bobot_kriteria">Bobot Kriteria</label>
                            <input type="text" name="nilai_lamanya_genangan" maxlength="1" onkeypress="return hanyaAngka(event)" value="{{  old('nilai', $item1->nilai)  }}" class="form-control"  >
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
{{-- tutup lamanya genangan --}}



@endsection
        @push('addon-script')
        <script>
                function hanyaAngka(evt) {
                  var charCode = (evt.which) ? evt.which : event.keyCode
                   if (charCode > 31 && (charCode < 48 || charCode > 57))
         
                    return false;
                  return true;
                }
            </script>
        
        @endpush
           
