@extends('layouts.app')

@section('content')

    <section>
        <br><br>
        <div class="container">
            <div class="row g-5 justify-content-between">
                <!-- Admission form START -->
                <div class="col-md-8 mx-auto">
                    <!-- Title -->
                    <h2 class="mb-3">Edit/Update a form</h2>
                    <p>You can apply online by filling up below form or <a href="#">Download a pdf</a> and submit. Any
                        question related registration process, please contact our admission office at <a href="#">+27 11
                            789 4545</a> or <a href="#">example@email.com</a>.</p>
                    <p class="mb-1">Before you proceed with the form please read below topics:</p>
                    <ul class="ps-3">
                        <li>Application fee is R149</li>
                        <li>Fees are non-refundable</li>
                        <li>Field required with <span class="text-danger">*</span> are required to complete the admission
                            form</li>
                    </ul>
                    <!-- Form START -->
                    <form method="post" action="{{route('product.update', ['product' => $product])}}">
                        @csrf
                        @method('put')
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="mb-3">
                            <label for="Name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" value="{{$product->lastname}}">

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Contacts/Phone Number</label>
                            <input type="text" class="form-control" id="contact" name="contact" >

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{$product->email}}">

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Skills</label>
                            <input type="text" class="form-control" id="skills" name="skills" value="{{$product->skills}}">

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Weakness</label>
                            <input type="email" class="form-control" id="weakness" name="weakness" value="{{$product->weakness}}">

                        </div>




                        <button type="submit" class="btn btn-primary" value="Update">Submit</button>
                    </form>
                    <!-- Form END -->
                </div>
                <!-- Admission form END -->
            </div>
        </div>

    </section>
@endsection
