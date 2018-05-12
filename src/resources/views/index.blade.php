@extends('master')
@section('content')
@if (Session::has('message'))
  <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-align-justify"></i> Daftar OPD
            <a href="{{ route('opd.create.root') }}" class="float-right">
              <button type="button" class="btn btn-warning">Add root</button>
            </a>&nbsp;
          </div>
          <div class="card-body">
            <table class="table table-responsive-sm table-bordered table-striped table-sm">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Kode</th>
                  <th scope="col">Unit Kerja</th>
                  <th scope="col">Level</th>
                  <th scope="col">Created At</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>

              @foreach($opds as $opd)
              <tr>
                <td>{{$opd->id}}</td>
                <td>{{$opd->kunker}}</td>
                <td>{{$opd->name}}</td>
                <td>{{$opd->levelunker}}</td>
                <td>{{$opd->created_at->toFormattedDateString()}}</td>
                <td>
                  <a href="{{ route('opd.create.child',$opd->id) }}">
                    <button type="button" class="btn btn-warning">Add child</button>
                  </a>
                  <a href="{{ route('opd.edit',$opd->id) }}">
                    <button type="button" class="btn btn-success">Edit</button>
                  </a>
                  {{-- <a href="{{ route('opd.create.root',$opd->id) }}">
                    <button type="button" class="btn btn-danger">Delete</button>
                  </a>&nbsp; --}}
                </td>
              </tr>
              @endforeach


            </table>

            <nav>
              <ul class="pagination">
                @if ($opds->onFirstPage())                  
                  <li class="page-item disabled"><a class="page-link" href="#">Prev</a></li>
                @else
                  <li class="page-item"><a class="page-link" href="{{ $opds->previousPageUrl() }}">Prev</a></li>
                @endif                
                {{-- <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li> --}}
                @if ($opds->hasMorePages())
                  <li class="page-item"><a class="page-link" href="{{$opds->nextPageUrl()}}">Next</a></li>
                @else
                  <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
                @endif
                
              </ul>              
            </nav>
          </div><!--/.card-header-->
        </div><!--/.card-->
      </div><!--/.col-->
    </div><!--/.row-->
  </div>
</div>

@endsection
