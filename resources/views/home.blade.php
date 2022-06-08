@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <p>You will be redirected in <span id="counter">5</span> second(s).</p>
                    <script type="text/javascript">
                        function countdown() {
                            var i = document.getElementById('counter');
                            if (parseInt(i.innerHTML)<=0) {
                                location.href = 'http://localhost:8000/';
                            }
                            if (parseInt(i.innerHTML)!=0) {
                                i.innerHTML = parseInt(i.innerHTML)-1;
                            }
                        }
                        setInterval(function(){ countdown(); },1000);
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
