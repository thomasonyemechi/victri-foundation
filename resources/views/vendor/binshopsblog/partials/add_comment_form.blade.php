<div class='add_comment_area shadow-lg p-2 rounded ' style="" >
    <h5 class='text-left'>Add a comment</h5>
    <form method='post'
        action='{{ route('binshopsblog.comments.add_new_comment', [app('request')->get('locale'), $post->slug]) }}'>
        @csrf



            <div class='row mt-3'>

                <div class='col'>
                    <div class="form-group ">
                        <label id="author_name_label" for="author_name">Your Name </label>
                        <input type='text' class="form-control" name='author_name' id="author_name"
                            placeholder="Your name" required value="{{ old('author_name') }}">
                    </div>
                </div>

                <div class='col'>
                    <div class="form-group">
                        <label id="author_email_label" for="author_email">Your Email
                            <small>(won't be displayed publicly)</small>
                        </label>
                        <input type='email' class="form-control" name='author_email' id="author_email"
                            placeholder="Your Email" required value="{{ old('author_email') }}">
                    </div>
                </div>


            </div>
 






        <div class="form-group mt-2">

            <label id="comment_label" for="comment">Your Comment </label>
            <textarea class="form-control" name='comment' required id="comment" rows="2"
                placeholder="Write your comment here" rows="7">{{ old('comment') }}</textarea>


        </div>














   

        <div class="form-group ">
            <input type='submit' class="form-control mt-3 input-sm btn btn-success " value='Post Comment'>
        </div>

    </form>
</div>
