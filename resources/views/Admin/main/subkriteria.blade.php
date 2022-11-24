
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
                                        <td>  <a class="badge bg-warning"   data-bs-toggle="modal" data-bs-target="#edit_data">  <i class="fa fa-edit"> </i>  </a>
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
                                            <a class="badge bg-warning"   data-bs-toggle="modal" data-bs-target="#edit_data">  <i class="fa fa-edit"> </i>  </a>                                      
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>  
        @endsection
           
