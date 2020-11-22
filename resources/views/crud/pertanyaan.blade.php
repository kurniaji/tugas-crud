@extends('admin.layout.master')

@section('content')
    <div class="ml-3 mt-3 mr-2">
    <div class="card card-primary">
            <div class="card-header with-border">
              <h3 class="card-title">Pertanyaan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/pertanyaan" methods="GET">
              <div class="card-body">
                <div class="form-group">
                  <label for="title">tittle</label>
                  <input type="text" class="form-control" id="tittle" placeholder="Enter tittle">
                </div>

                <div class="form-group">
                  <label for="content">Isi</label>
                  <input type="text" class="form-control" id="content" placeholder="Pertanyaan">
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </div>

@endsection