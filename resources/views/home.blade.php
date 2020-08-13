@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Hi {{ Auth::user()->name }}
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@for($i=0;$i<$count;$i++)
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Score</div>
                    <div class="card-body">
                        วิชา {{$data[$i]->SubjectID}}
                        {{$data[$i]->EngName}}<br>
                        {{$data[$i]->StudentID}}
                        {{$data[$i]->Info}}
                        <font color="red">{{$data[$i]->Point}}</font><br>
                        รวม {{$data[$i]->Total}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endfor

@endsection
