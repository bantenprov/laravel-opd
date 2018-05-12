@extends('master')
@section('content')

<div class="container-fluid">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-8">
        <h1>Add New OPD</h1>
        <hr>
        <div class="card">
          <div class="card-header">
            Create <strong>Child OPD</strong>
        </div>
        <div class="card-body">

            <form action="{{route('opd.store.child',$unit_kerja->id)}}" method="post">

              <div class="form-group">
                <label for="name">Induk Unit Kerja</label>
                {{ $unit_kerja->kunker }} - {{ $unit_kerja->name }}
                <input type="hidden" name="root" value="{{ $unit_kerja->id }}" >
            </div>

            <div class="form-group">
                <label for="c_kunker">Kode Unit Kerja</label>
                <input type="text" name="c_kunker" class="form-control" id="c_kunker" placeholder="Enter Kode Unit Kerja">
            </div>

            <div class="form-group">
                <label for="c_name">Nama Unit Kerja</label>
                <input type="text" name="c_name" class="form-control" id="c_name" placeholder="Enter Nama Unit Kerja">
            </div>

            <div class="form-group">
              <label for="c_levelunker">Level Unit Kerja</label>
              <select id="c_levelunker" name="c_levelunker" class="form-control form-control-lg">
                <option value="0">Please select</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>

            <div class="form-group">
              <label for="c_njab">Nama Jabatan</label>
              <input type="text" name="c_njab" class="form-control" id="c_njab" placeholder="Enter Nama Unit Kerja">
            </div>

            <div class="form-group">
              <label for="c_npej">Nama Pejabat</label>
              <input type="text" name="c_npej" class="form-control" id="c_npej" placeholder="Enter Nama Pejabat">
            </div>

            <div class="form-group">
              <label for="c_kunker_simral">Kode Unit Kerja Simral</label>
              <input type="text" name="c_kunker_simral" class="form-control" id="c_kunker_simral" placeholder="Enter Kode Unit Kerja Simral">
            </div>

            <div class="form-group">
              <label for="c_kunker_sinjab">Kode Unit Kerja Simral</label>
              <input type="text" name="c_kunker_sinjab" class="form-control" id="c_kunker_sinjab" placeholder="Enter Kode Unit Kerja Sinjab">
            </div>

            <hr />
            <button type="submit" class="btn btn-primary">Submit</button>
            {{ csrf_field() }}

        </form>
    </div>
</div>
</div>
</div>
</div>
</div>

@endsection
