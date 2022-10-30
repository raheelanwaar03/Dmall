@extends('User.layout.app')

@section('content')
    <section class="py-4">
        <div class="container">
            <h3 class="d-none">Dashboard</h3>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @include('User.layout.sidebar')
                        <div class="col-lg-8">
                            <div class="card shadow-none mb-0">

                                {{-- Write yor main content here --}}

                                <div class="card-body">
                                    <p>Hello <strong>{{ auth()->user()->username }}</strong></p>
                                    <p>Here is you Referal Link to Invite Your Friends and Earn Money!</p>

                                    <div class="row">
                                        <div class="col-lg-8 mb-4">
                                            <div class="card shadow bordered-primary mb-4">
                                                <div>
                                                    <input type="text" style="width: 80%;border:none"
                                                        value="{{ route('register', ['referal' => Auth::user()->username]) }}"
                                                        id="myInput">
                                                    <button onclick="myFunction()"
                                                        class="btn btn-secondary px-2">copy</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <a href="{{ route('welcome') }}" class="btn btn-dark btn-ecomm">Continue Shoping</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    </div>
@endsection
@section('pageName')
    Refer a Friend
@endsection

@section('footer')
    <script>
        function myFunction() {
            // Get the text field
            var copyText = document.getElementById("myInput");

            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);

            // Alert the copied text
            alert("Copied the Link: " + copyText.value);
        }
    </script>
@endsection
