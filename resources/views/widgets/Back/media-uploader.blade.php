<!-- @if($isPopped)
<div class="modal is-active">
    <div class="modal-background"></div>
    <div class="modal-card">

      <header class="has-background-black modal-card-head">
        <span class="file-icon">
            <i class="fas fa-photo-video"></i>
        </span>
        <p class="has-white modal-card-title">Media Uploads</p>
        <button wire:click.defer="toggleModal" class="delete" aria-label="close"></button>
      </header>

      <section class="modal-card-body">
            <div class="field">
                <label class="label">Caption Title</label>
                <div class="control">
                  <input class="input" id="caption_title" type="text" placeholder="Movie, Series, Sports or New Title">
                    @error('caption_title') <small class="error has-text-danger">{{ $message }}</small> @enderror
                </div>
            </div>        
            
            <div class="field">
                <label class="label">Sub Headling</label>
                <div class="control">
                  <input id="sub_headline" class="input" type="text" placeholder="Headline or Short title">
                  @error('sub_headline') <small class="error has-text-danger">{{ $message }}</small> @enderror
                </div>
            </div>
          
            <div class="field">
                <label class="label">Media Type</label>
                <div class="control">
                  <div class="select">
                      <select id="media_type">
                          <option>--choose--</option>
                          <option>Movies</option>
                          <option>TV Show</option>
                          <option>TV Series</option>
                          <option>Sports</option>
                          <option>News</option>
                          <option>Kids & Teens</option>
                      </select>
                  </div>
                  @error('media_type') <small class="error has-text-danger">{{ $message }}</small> @enderror
                </div>
            </div>
          
            <div class="field">
                <label class="label">Background Description</label>
                <div class="control">
                  <textarea id="background_desc" class="textarea" placeholder="Brief story background about the media"></textarea>
                  @error('background_desc') <small class="error has-text-danger">{{ $message }}</small> @enderror
                </div>
            </div>

            <div class="file is-secondary has-name is-boxed">
                <label class="file-label">
                  <input class="file-input" wire:model="media_file" type="file" name="resume">
                  <span class="file-cta">
                    <span class="file-icon">
                      <i class="fas fa-photo-video"></i>
                    </span>
                    <span class="file-label">
                      Upload Media file…
                    </span>
                  </span>
                  <span class="file-name">
                    Screen Shot 2017-07-29 at 15.54.25.png
                  </span>
                </label>
                @error('media_file') <small class="error has-text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="file is-secondary has-name is-boxed">
                <label class="file-label">
                  <input class="file-input" wire:model="cover_image" type="file" name="resume">
                  <span class="file-cta">
                    <span class="file-icon">
                      <i class="fas fa-photo-video"></i>
                    </span>
                    <span class="file-label">
                      Cover Image
                    </span>
                  </span>
                  <span class="file-name">
                    Screen Shot 2017-07-29 at 15.54.25.png
                  </span>
                </label>
                @error('cover_image') <small class="error has-text-danger">{{ $message }}</small> @enderror
            </div>
      </section>

      <footer class="modal-card-foot">
        <button wire:click="uploadMedia" class="button is-success">Save changes</button>
        <button class="button">Cancel</button>
      </footer>
    </div>
</div>
@endif -->