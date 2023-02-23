@extends("layouts.app", ['class' => 'bg-default'])

@section('content')
    <div class="header pb-8 pt-5 pt-md-8"></div>

    <div class="container-fluid d-flex align-items-center justify-content-center">
        <div class="card w-50">
        <div class="card-body">
            <form action="{{route('service.update', $obj->id)}}" method="POST">
            @csrf
            @method('PUT')
                @php
	                $newDate = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $obj->deatline)->format('d.m.Y H:i');
                @endphp
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value={{$obj->name}}>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="number" name="price" value={{$obj->price}} class="form-control"/>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">

                        <select name="client_id" id="" class="form-control">
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}" {{ ($client->id == $obj->client_id) ? "selected" : "" }}>{{ $client->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="number" name="car_id" value={{$obj->client_id}} class="form-control" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="datetime-local" name="deatline" value="{{$newDate}}" class="form-control" />
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>

            </form>
        </div>
    </div>
    </div>
    @include('layouts.footers.auth')

@endsection
