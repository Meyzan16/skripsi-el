
         @extends('admin.layout.layout')

         @section('content')    
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Data Kriteria</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                             
                        </div>

                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kriteria</th>
                                        <th>Nama Kriteria</th>
                                        <th>Bobot Kriteria</th>
                                        <th>Jenis Kriteria</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->kode_kriteria }}</td>
                                        <td>{{ $item->nama_kriteria }}</td>   
                                        <td>{{ $item->bobot_kriteria }}</td>
                                        <td>{{ $item->jenis_kriteria }}</td>
                                        <td>
                                            <a class="badge bg-warning"   data-bs-toggle="modal" data-bs-target="#edit_data{{ $item->kode_kriteria }}">  <i class="fa fa-edit"> </i>  </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>


            @foreach ($data as $item1)
            <div class="modal fade" id="edit_data{{ $item1->kode_kriteria  }}" tabindex="-1" role="dialog"
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
                        <form action="{{ route('data-kriteria.update', $item1->kode_kriteria) }}" method="POST">
                            @csrf  @method('patch')
                            <div class="modal-body">
                                <h6 class="modal-title" id="exampleModalCenterTitle"> Nama  </h6>
                                <input type="text" value="{{  old('nama', $item1->nama_kriteria)  }}" class="form-control" name="nama_kriteria">
                                <input type="text" value="{{  old('nama', $item1->bobot_kriteria)  }}" class="form-control" name="bobot_kriteria">
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
           
 