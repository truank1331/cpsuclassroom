@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('ส่งอีกครั้งเรียบร้อย กรุณาเช็คที่กล่องจดหมาย.') }}
                        </div>
                    @endif

                    {{ __(' กรุณาเช็ค Email เพื่อรับ verification link. ') }}<br>
                    {{ __(' Email ถูกส่งไปยัง  ') }}{{ __(Auth::user()->email) }} 
                    
                    <a href="{{ route('verification.resend') }}">{{ __(' คลิกที่นี่เพื่อส่งอีกครั้ง') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
