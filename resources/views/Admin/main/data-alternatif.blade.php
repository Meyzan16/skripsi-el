
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
                        <div class="card-header">
                            <button type="button" class="mr-3  btn btn-outline-primary d-block justify-content-end"
                            data-bs-toggle="modal" data-bs-target="#tambah_data_alternatif">
                            &nbsp;Tambah Data
                            </button>
                        </div>

                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Daerah</th>
                                        <th>Kecamatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($alternatif as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_daerah }}</td>
                                        <td>{{ $item->kecamatan }}</td>   
                                        <td>
                                            <a class="badge bg-warning"   data-bs-toggle="modal" data-bs-target="#edit_data{{ $item->id }}">  <i class="fa fa-edit"> </i>  </a>
                                            
                                              
                                            <form action="{{ route('data-alternatif.destroy', $item->id) }}" method="POST" class="d-inline">
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


<div class="modal fade" id="tambah_data_alternatif" tabindex="-1" role="dialog"
aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
    role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle"> Tambah Data Alternatif
            </h5>
            <button type="button" class="close" data-bs-dismiss="modal"
                aria-label="Close">
                <i data-feather="x"></i>
            </button>
        </div>
        <form action="{{ route('data-alternatif.store') }}" method="POST">
            @csrf 

                <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_kriteria">Nama Daerah</label>
                            <input type="text" name="nama_daerah"  class="form-control"  >
                            {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                        </div>
                        <div class="form-group">
                            <label for="bobot_kriteria">Kecamatan</label>
                            <input type="text" name="kecamatan" class="form-control"  >
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

@foreach ($alternatif as $item1)
<div class="modal fade" id="edit_data{{ $item1->id  }}" tabindex="-1" role="dialog"
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
            <form action="{{ route('data-alternatif.update', $item1->id) }}" method="POST">
                @csrf  @method('patch')
                
                 <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_kriteria">Nama Daerah</label>
                        <input type="text" name="nama_daerah" value="{{  old('nama_daerah', $item1->nama_daerah)  }}" class="form-control"  >
                        {{-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> --}}
                    </div>
                    <div class="form-group">
                        <label for="bobot_kriteria">Kecamatan</label>
                        <input type="text" name="kecamatan" value="{{  old('kecamatan', $item1->kecamatan)  }}" class="form-control"  >
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

        
        @endsection
           