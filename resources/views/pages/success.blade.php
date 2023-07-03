@extends('layouts.book')
@section('title', 'Success')

@section('content')

<div id="myModal" style="margin-top: 10rem;">
    <div class="modal-dialog modal-confirm shadow">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                    <i class="fas fa-check"></i>
                </div>
                <h4 class="modal-title w-100">Awesome!</h4>
            </div>
            <div class="modal-body">
                <p class="text-center">Your booking has been confirmed. Check your email for detials.</p>
            </div>
            <div style="width: 100%; bottom: 0; display: block;">

                <div class="modal-content container d-grid">
                    <a href="{{route('product')}}" class="btn btn-success text-white" data-dismiss="modal">OK</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
