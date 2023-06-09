@include('partials.doc_head')

<body>

    @if (session('status'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Félicitations',
                text: '{{ session('status') }}',
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif

    <div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center min-vh-100">
                        <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center mb-5">
                                            <a href="{{ route('welcome') }}"
                                                class="text-dark font-size-22 font-family-secondary">
                                                <i class="mdi mdi-alpha-g-box"></i>
                                                <b>{{ config('app.name', 'Laravel') }}</b>
                                            </a>
                                        </div>
                                        <h1 class="h5 mb-1">Bon retour !</h1> <br>
                                        <form action="{{ route('login') }}" method="POST" class="user">
                                            @csrf
                                            <div class="form-group">
                                                <label for="email">{{ __('Email') }}</label>
                                                <input type="email"
                                                    class="form-control form-control-user @error('email') is-invalid @enderror"
                                                    value="{{ old('email') }}" id="email" name="email"
                                                     required autocomplete="off"
                                                    autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="password">{{ __('Mot de passe') }}</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-success" type="button"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
                                                    </div>
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-success btn-block waves-effect waves-light">{{ __('Se connecter') }}</button>

                                        </form>

                                        <div class="row mt-4">
                                            <div class="col-12 text-center">
                                                <p class="text-muted mb-2"><a href="{{ route('forgot-password') }}"
                                                        class="text-muted font-weight-medium ml-1">Mot de passe oublié
                                                        ?</a></p>
                                                <p class="text-muted mb-0">Vous n'avez pas de compte? <a
                                                        href="{{ route('register') }}"
                                                        class="text-muted font-weight-medium ml-1"><b>{{ __('S\'inscrire') }}</b></a>
                                                </p>
                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div> <!-- end .padding-5 -->
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div> <!-- end .w-100 -->
                    </div> <!-- end .d-flex -->
                </div> <!-- end col-->
            </div> <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->


    @include('partials.doc_down')

    <script>
        $(document).ready(function() {
            $("#show_hide_password button").on('click', function(event) {
                event.preventDefault();
                if($('#password').attr("type") == "text"){
                    $('#password').attr('type', 'password');
                    $('#show_hide_password button i').addClass( "fa-eye-slash" );
                    $('#show_hide_password button i').removeClass( "fa-eye" );
                }else if($('#password').attr("type") == "password"){
                    $('#password').attr('type', 'text');
                    $('#show_hide_password button i').removeClass( "fa-eye-slash" );
                    $('#show_hide_password button i').addClass( "fa-eye" );
                }
            });
        });
    </script>

</body>

</html>
