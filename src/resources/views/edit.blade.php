@extends('master')
@section('content')

@if (Session::has('message'))
  <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <i class="fa fa-align-justify"></i> Edit OPD
            <a href="{{ route('opd.create.root') }}" class="float-right">
              <button type="button" class="btn btn-warning">Show</button>
            </a>&nbsp;
          </div>
          <div class="card-body">
            <form action="{{route('opd.update', $opd->id)}}" method="POST">
              <input type="hidden" name="_method" value="PUT">
              <div class="form-group">
                <label for="company">Kode Unit Kerja</label>
                <input type="text" name="kunker" class="form-control" id="kunker" placeholder="Enter Kode Unit Kerja" value="{{$opd->kunker}}">
              </div>

              <div class="form-group">
                <label for="name">Nama Unit Kerja</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Nama Unit Kerja" value="{{$opd->name}}">
              </div>

              <div class="form-group">
                <label for="levelunker">Level Unit Kerja</label>
                <select id="levelunker" name="levelunker" class="form-control form-control-lg">
                  <option value="0">Please select</option>
                  <option value="1" {{ ($opd->levelunker == 1) ? 'selected' : '' }}>1</option>
                  <option value="2" {{ ($opd->levelunker == 2) ? 'selected' : '' }}>2</option>
                  <option value="3" {{ ($opd->levelunker == 3) ? 'selected' : '' }}>3</option>
                  <option value="4" {{ ($opd->levelunker == 4) ? 'selected' : '' }}>4</option>
                  <option value="5" {{ ($opd->levelunker == 5) ? 'selected' : '' }}>5</option>
                </select>
              </div>

              <div class="form-group">
                <label for="njab">Nama Jabatan</label>
                <input type="text" name="njab" class="form-control" id="njab" placeholder="Enter Nama Unit Kerja" value="{{$opd->njab}}">
              </div>

              <div class="form-group">
                <label for="npej">Nama Pejabat</label>
                <input type="text" name="npej" class="form-control" id="npej" placeholder="Enter Nama Unit Kerja" value="{{$opd->npej}}">
              </div>

              <div class="form-group">
                <label for="kunker_simral">Kode Unit Kerja Simral</label>
                <input type="text" name="kunker_simral" class="form-control" id="kunker_simral" placeholder="Enter Nama Unit Kerja" value="{{$opd->kunker_simral}}">
              </div>


              <div class="form-group">
                <label for="kunker_simral">Kode Unit Kerja Sinjab</label>
                <input type="text" name="kunker_sinjab" class="form-control" id="kunker_sinjab" placeholder="Enter Kode Unit Kerja" value="{{$opd->kunker_sinjab}}">
              </div>

              <hr />
              <button type="submit" class="btn btn-primary">Submit</button>

              {{ csrf_field() }}

            </form>
          </div><!--/.card-header-->
        </div><!--/.card-->
      </div><!--/.col-->
    </div><!--/.row-->
  </div>
</div>
@endsection