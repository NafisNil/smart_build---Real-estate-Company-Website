@extends('backend.layout.master')
@section('title')
    Why You Choose Us - Index
@endsection
@section('content')

  <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6 offset-3">
            <h1>Why You Choose Us</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Why You Choose Us</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row offset-1">
          <!-- left column -->
             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Why You Choose Us </h3>
                @if ($chooseCount < 1)
              
                <a href="{{route('choose.create')}}" class="float-right btn btn-outline-dark btn-sm mb-2"><i class="fas fa-plus-square"></i></a>
                      
                @endif
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('backend.sessionMsg')
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                   
                    <th>Description</th>
                 
                    <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                 
                  
                   
                            
                   
                   
                  <tr>
                    <td>#1</td>
                    
                    <td>{!!@$choose->desc!!}</td>
                  
                   <td>
                   @if ($chooseCount > 0)
               
                      <a href="{{route('choose.edit',[$choose])}}"><button class="btn btn-outline-info btn-sm"><i class="fas fa-pen-square"></i></button></a>
                    
                      <form action="{{route('choose.destroy',[$choose])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                         
                         
                    @endif
                    </td>
                   
                  </tr>
                
    

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                 
                    <th>Description</th>
                  
                    <th>Action</th>
                  
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection