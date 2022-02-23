<div>
    <div class="container content is-large has-text-white">
        <h1 class="has-text-warning">Music</h1>
        <!-- <p>I was having trouble finding an example of a Bulma based gallery that wrapped.  Here is what I came up with...</p> -->
    </div>
  
  <div class="mx-auto container columns is-multiline">
      
    @foreach ($data as $key => $media)
        @if($media != "You have exceeded the MONTHLY quota for Requests on your current plan, BASIC. Upgrade your plan at https://rapidapi.com/apimaker/api/billboard2")
        <div class="column is-one-quarter-desktop is-half-tablet">
            <div class="card">
                <div class="card-image">
                    <figure class="image is-3by2">
                        <img src="{{$media->image ?? 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACoCAMAAABt9SM9AAAAVFBMVEWAgID///92dnZ5eXng4OB1dXXs7Oz19fXKysp8fHzy8vJycnLW1taEhISdnZ2tra3Dw8Ozs7OUlJTk5OSNjY3AwMDR0dG4uLjZ2dmXl5egoKCoqKiDGztLAAAD+ElEQVR4nO2d7XKqMBRFDYiAiN9Sbd//PW8FIYcxM+mGtHM52etnZtgtq1HsOUlcrQghhBBCCCGEEEIIIYQQQgghhPw3pElH6hqcwSjPObg80sZ03Esxujaz2UkxF9cPWRzlbbi7Zri7dDfflTFHm2fdF0ueW+I+tkk/mOQhZF2GvMwObhL377EIEqesbQhZ62ESUVbksrJ+MAsiy74MK32yTH8fZRnClTG9/LJWKOtSVy31Joys9SvvKiaqGll/AWVRVs+2APC+gHXL2lUpQFVELavG8tKoZYF5mSeOsmQeZQF5lAXkURaQR1lAHmUBebHI2j7qlr0slKJ5Usy5jVt9ijw1supXN2FUokHzxKVZn3fVJ0sU//IQstaai3/usjKaJ2SpLis7uztoHmUBeZQF5EUnKwvznqW5yWqqflA8vWbI2laOQTWybq+iaGXXP8z6nHWq3sunamSZze5JMyqko3ny2kuXJ1u2emS5QPM8cZQliLusfMXyfJ1/3bLWVfLzTlhS+ZbB6Zb1rQvAuwpOu6ygUBZlUdYblAVAWQCUBTCSddq3nAKJyQ+PZ9zjQ6Osa1q2pNe3+57Eqs/b65OV23pWmB0WQ7comu4OtkzyIi6MpKwsa/DTl0lGKAtcJhlfw2JGdyeLTxY70k68T0M0T3hxdYu0yDJfWfcunX3ZsTk1+H323i1SI8vsbscno2onmievbdq4210M6ZHlAs3zxFGWzKMsII+ygDzKAvIoC8ijLCCPsoA8ygLyKAvIoywgLxpZxalltCkczZPXHru8RgypkbVPum5MIroxc2RdX3nZQZ+s4PWs+Lo7YF6EZWUxs8BlkquoZV2yqcskI5Rl8qnLJGORxWPsnPziWgfVT0P7OesRwpVdlSO7RWpkmduh5RjGlTEfXZ78j0CPrD+AsiiLst6gLADKAvDL2vA0yR6eJgnA0yQBuO0XgA0LAMoCGMlad4+0kT80T157f99JoEbWcMKH3OmE5olLP/s1peI/cy2y8l87i0ZhPYvr4H3w/CwAygKgLAC+ZwHIp6HtxgSZWbq/pKh+TYXRHmk0T1xavk7A1bhH2uSH6/nJIdDZyvlXG3eWn3HVyHKC5nniKEvmURaQR1lAHmUBeZT1c+IuK/M0SYv/NElsmeTdE6dbFk+TtLB9D0BZACNZ2+61FGT5bWvm/bWpRlbRnQyceBcs/JCPPk8sjlcjy9ndmY7t7igs/rm/w2I6qr/DgpsGfKTe7SiTuaibWaU9RLQYZkLaOO4d5mbz7Of6Y+r+PZZBcsw7CnEbZZPPRuat7v3gkifWN2mStYz+5Gk2G1desuh5RQghhBBCCCGEEEIIIYQQQggh2vgHt6BJ+tHFstgAAAAASUVORK5CYII='}}" alt="">
                    </figure>
                    <div class="card-content is-overlay is-clipped">
                        <span class="tag is-info">
                            {{ $media->artist}}
                        </span> 

                    </div>
                    <p>{{$media->rank}}</p>
                </div>
                <footer class="card-footer">
                        <span>{{$media->title}}</span>
                </footer>
            </div>
        </div>
        @else 
            <div>
                <p>No Results Found. Content Subscription Expired</p>
            </div>
        @endif
    @endforeach

  </div>
</div>
