
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
            Create <strong>ROOT OPD</strong>
          </div>
          <div class="card-body">

            <form action="{{route('storeRoot')}}" method="post">
              <div class="form-group">
                <label for="company">Kode Unit Kerja</label>
                <input type="text" name="kunker" class="form-control" id="kunker" placeholder="Enter Kode Unit Kerja">
              </div>

              <div class="form-group">
                <label for="name">Nama Unit Kerja</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Nama Unit Kerja">
              </div>

              <div class="form-group">
                <label for="levelunker">Level Unit Kerja</label>
                <select id="levelunker" name="levelunker" class="form-control form-control-lg">
                  <option value="0">Please select</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>

              <div class="form-group">
                <label for="njab">Nama Jabatan</label>
                <input type="text" name="njab" class="form-control" id="njab" placeholder="Enter Nama Unit Kerja">
              </div>

              <div class="form-group">
                <label for="npej">Nama Pejabat</label>
                <input type="text" name="npej" class="form-control" id="npej" placeholder="Enter Nama Unit Kerja">
              </div>

              <div class="form-group">
                <label for="kunker_simral">Kode Unit Kerja Simral</label>
                <input type="text" name="kunker_simral" class="form-control" id="kunker_simral" placeholder="Enter Nama Unit Kerja">
              </div>


              <div class="form-group">
                <label for="kunker_simral">Kode Unit Kerja Sinjab</label>
                <input type="text" name="kunker_sinjab" class="form-control" id="kunker_sinjab" placeholder="Enter Kode Unit Kerja">
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
