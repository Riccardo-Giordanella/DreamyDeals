<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-4 mb-5">
                    {{__("ui.register")}}
                </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center height-custom">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('register')}}" class="backgrounddark textred shadow rounded p-5 mb-5">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">{{__("ui.name")}}</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
                        @error('name')
                        @foreach ($errors->get('name') as $error)
                        <div class="alert alert-danger my-2">{{ $error }}</div>
                        @endforeach
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">E-mail</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="loginEmail" name="email" value="{{old('email')}}">
                        @error('email')
                        @foreach ($errors->get('email') as $error)
                        <div class="alert alert-danger my-2">{{ $error }}</div>
                        @endforeach
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                        @error('password')
                        @foreach ($errors->get('password') as $error)
                        <div class="alert alert-danger my-2">{{ $error }}</div>
                        @endforeach
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">{{__("ui.confirm")}} password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success">{{__("ui.register")}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>