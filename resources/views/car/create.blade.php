@extends("layouts.app", ['class' => 'bg-default'])

@section('content')
    <div class="header pb-8 pt-5 pt-md-8"></div>

    <div class="container-fluid d-flex align-items-center justify-content-center">
        <div class="card w-50">
        <div class="card-body">
            <form action="{{route('car.store')}}" method="POST">
            @csrf
            @method('PUT')
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="module" class="form-control" id="exampleFormControlInput1" placeholder="module">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="datetime-local" name="produce_date" placeholder="produce_date" class="form-control"/>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <input type="number" name="number" placeholder="number" class="form-control" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="colour" placeholder="colour" class="form-control" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="class" placeholder="class" class="form-control" />
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
