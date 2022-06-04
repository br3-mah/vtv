<x-app-layout>
<div class="card">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="container mx-auto">

                <div class="field">
                    <label class="label">Caption Title</label>
                    <div class="control">
                    <input id="caption_title" class="input" type="text" placeholder="Movie, Series, Sports or New Title">
                         <small class="error has-text-danger"></small> 
                    </div>
                </div>        
                
                <div class="field">
                    <label class="label">Sub Headling</label>
                    <div class="control">
                    <input id="sub_headline" class="input" type="text" placeholder="Headline or Short title">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Watch Cost</label>
                    <div class="control">
                    <input id="price" class="input" type="text" placeholder="Headline or Short title">
                    </div>
                </div>
            
                <div class="field">
                    <label class="label">Media Type</label>
                    <div class="control">
                    <div class="select">
                        <select id="media_type" name="media_type">
                        <option>--choose--</option>
                        <option value="movie">Movie</option>
                        <option value="tv_series">TV Series/Show</option>
                        <option value="sports">Sports</option>
                        <option value="music">Music</option>
                        <option value="doc">Documentary</option>
                        <option value="edu">Education</option>
                        <option value="news">News</option>
                        <option value="kids">Kids & Teens</option>
                        <option value="live">Live</option>
                        </select>
                    </div>
                    </div>
                </div>
            
                <div class="field">
                    <label class="label">Background Description</label>
                    <div class="control">
                    <textarea id="background_desc" class="textarea" placeholder="Brief story background about the media"></textarea>
                    </div>
                </div>

                <div class="file is-secondary has-name is-boxed">
                    <label class="file-label">
                    <input id="media_pic" type="file" name="cover_image">
                    </label>
                </div>

                <div class="card-body">
                    <div id="upload-container">
                        <button id="browseFile" class="button is-success">Browse File</button>
                    </div>
                    <div class="progress mt-3" style="height: 25px">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%; height: 100%">0%</div>
                    </div>
                </div>

                <hr>
                <div class="card-footer p-4" >
                    <video id="videoPreview" src="" controls style="width: 100%; height: auto"></video>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
