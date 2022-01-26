@extends('partials.userdashboard_partials')

@section('content')

    {{-- Form Login --}}
    <div style="margin-top: 150px">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">Forgot Password</h1>
                <form action="{{ route('sendlink') }}" method="POST">
                @csrf
                  <div class="form-floating">
                    <input type="email" name="email" class="form-control mb-3" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                  </div>
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
                </form>
            </main>
        </div>
    </div>
    <div class="mb-4"></div>





    </main>

    @endsection
