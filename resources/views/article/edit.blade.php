<x-layout>
    <div class="container-fluid-p-5 bg-info text-center text-white">
            <div class="row justify-content-center"></div>
                <h1 class="display-1">
                   Modifica un articolo
                </h1>
                <div class="container my-5">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8">
                            @if ($errors->any())
    
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
    
                            @endif
                            <form action="{{ route('article.update' , compact('article')) }}" method="post" class="card p-5 shadow" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Titolo:</label>
                                        <input type="text" name="title" class="form-controll" id="title" value="{{ $article->title }}">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Sottotitolo:</label>
                                        <input type="text" name="subtitle" class="form-controll" id="subtitle" value="{{ $article->subtitle }}">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Tags</label>
                                        <input  name="tags" class="form-controll" id="tags" value="{{ $article->tags->implode('name' , ',') }}" >
                                        <span class="small fst-italic">Dividi ogni tag con una virgola</span>
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="tags" class="form-label">immagine:</label>
                                        <input type="file" name="image" class="form-controll" id="image" >
                                    </div>
    
                                    
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Categoria:</label>
                                        <select  name="image" id="category" class="form-control text-capitalize">
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}" @if($article->category && $category->id == $article->category->id) selected @endif >{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="body" class="form-label">Corpo del testo:</label>
                                        <textarea  name="body" class="form-controll" id="body" cols="30" rows="7" >{{ $article->body }}</textarea>
                                    </div>
                                    <div class="mt-2 d-flex justify-content-center">
                                        <button class="btn btn-info text-white ">Inserisci un articolo</button>
                                    </div>
    
                            </form>
    
                        </div>
                    </div>
                </div>
        </div>
    </x-layout>