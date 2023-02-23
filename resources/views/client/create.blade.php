@extends("layouts.app", ['class' => 'bg-default'])

@section('content')
    <div class="header pb-8 pt-5 pt-md-8"></div>

    <div class="container-fluid d-flex align-items-center justify-content-center">
        <div class="card w-50">
        <div class="card-body">
            <form action="{{route('client.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @error('car_id')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @method('PUT')
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="surename" placeholder="surename" class="form-control"/>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="lastname" placeholder="lastname" class="form-control" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="datetime-local" name="birth" placeholder="birth" class="form-control" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                            <select name="car_id[]" multiple>
                        @foreach ($obj as $i)
                                <option value="{{$i->id}}">{{$i->module}}</option>
                        @endforeach
                            </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">create</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    @include('layouts.footers.auth')

@endsection
