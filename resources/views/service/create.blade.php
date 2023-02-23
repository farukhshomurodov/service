@extends("layouts.app", ['class' => 'bg-default'])

@section('content')
    <div class="header pb-8 pt-5 pt-md-8"></div>

    <div class="container-fluid d-flex align-items-center justify-content-center">
        <div class="card w-50">
            <div class="card-body">
                <form action="{{route('service.store')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="number" name="price" placeholder="price" class="form-control"/>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <select name="client_id" id="" class="form-control">
                                @foreach ($clients as $client)
                                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <select name="car_id" id="" class="form-control">
                                @foreach ($cars as $car)
                                    <option value="{{ $car->id }}">{{ $car->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="datetime-local" name="deatline" class="form-control" />
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
