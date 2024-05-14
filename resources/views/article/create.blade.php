<x-layout>
<div class="container-fluid-p-5 bg-info text-center text-white">
        <div class="row justify-content-center"></div>
            <h1 class="display-1">
                The Aulab Post
            </h1>
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        @if (error->any())

                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($error->all() as $error)
                                        <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                        @endif
                        <form action="" method="post" class="card p-5 shadow" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="title" class="form-label">Titolo:</label>
                                    <input type="text" name="title" class="form-controll" id="title" v>
                                </div>
                        </form>

                    </div>
                </div>
            </div>
    </div>
<x/layout>