@extends('layouts.app')

@section('content')

    <section>
        <br><br>
        <div class="container">
            <div class="row g-5 justify-content-between">
                <!-- Admission form START -->
                <div class="col-md-8 mx-auto">
                    <!-- Title -->
                    <h2 class="mb-3">Registration Form</h2>
                    <p>You can register online by filling up below form or <a href="#">Download a pdf</a> and submit. Any
                        question related registration process, please contact our admission office at <a href="#">+27 11
                            789 4545</a> or <a href="#">adanian@email.com</a>.</p>
                    <p class="mb-1">Before you proceed with the form please read below topics:</p>
                    <ul class="ps-3">
                        <li>Application fee is R149 </li>
                        <li>Fees are non-refundable</li>
                        <li>Field required with <span class="text-danger">*</span> are required to complete the registration
                            form</li>
                    </ul>
                    <!-- Form START -->
                    <form method="post" action="{{ route('product.store') }}">
                        @csrf
                        @method('post')
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="mb-3">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" >

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Contacts/Phone Number</label>
                            <input type="text" class="form-control" id="contact" name="contact">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Skills</label>
                            <input type="text" class="form-control" id="skills" name="skills">

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Weakness</label>
                            <input type="text" name="weaknesses" class="form-control" id="weaknesses">

                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <!-- Form END -->
                </div>
                <!-- Admission form END -->
            </div>
        </div>

    </section>

{{--
    <h1>Create a Product</h1>
    <div>

    </div>
    <form method="post" action="{{ route('product.store') }}">

        <div>
            <label>Name:</label>
            <input type="text" name="name" placeholder="Name" />
        </div>
        <div>
            <label>Last Name:</label>
            <input type="text" name="lastname" placeholder="Last Name" />
        </div>
        <div>
            <label>Contact:</label>
            <input type="text" name="contact" placeholder="Contact" />
        </div>
        <div>
            <label>Email:</label>
            <input type="text" name="email" placeholder="Enter your email" />
        </div>
        <div>
            <div>
                <label>Skills:</label>
                <input type="text" name="skills" placeholder="Skill" />
            </div>
            <div>
                <label>Weaknesses:</label>
                <input type="text" name="weaknesses" placeholder="Weaknesses" />
            </div>
            <div>
                <input type="submit" value="Save a New Product" />
            </div>

    </form> --}}

@endsection
