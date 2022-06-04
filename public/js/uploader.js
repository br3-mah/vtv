let browseFile = $('#browseFile');
let token = $('meta[name="csrf-token"]').attr('content');
$('.card-footer').hide();

let resumable = new Resumable({
    target: '/upload-large-files',
    query:{_token:token} ,// CSRF token
    fileType: ['mp4'],
    headers: {
        'Accept' : 'application/json',
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    testChunks: false,
    throttleProgressCallbacks: 1,
});

resumable.assignBrowse(browseFile[0]);

resumable.on('fileAdded', function (file) { // trigger when file picked

    showProgress();
    resumable.upload() // to actually start uploading.
});

resumable.on('fileProgress', function (file) { // trigger when file progress update
    updateProgress(Math.floor(file.progress() * 100));
});

resumable.on('fileSuccess', function (file, response) { // trigger when file upload complete
    alert('Uploaded Successfully.');
    response = JSON.parse(response);
    alert(response.path);

    // Information about the Media
    // var dataURL = canvas.toDataURL('image/jpeg', 1.0)
    // var blob = dataURItoBlob(dataURL)
    var formData = new FormData()
    formData.append('access_token', token)
    // formData.append('source', blob)
    formData.append('caption_title', $('#caption_title').val())
    formData.append('sub_headline', $('#sub_headline').val())
    formData.append('media_type', $('#media_type').val())
    formData.append('media_path', response.path)
    formData.append('background_desc', $('#background_desc').val())
    formData.append('cover_image', $('#media_pic')[0].files)

    // console.log(datx);
    // save the information and the path in the database
    $.ajax({
        type: "post",
        url: "/save-media-info",
        data: formData,
        // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: "json",
        success: function(response) {
            console.log(response);
        }
    });

    $('#videoPreview').attr('src', response.path);
    $('.card-footer').show();
});

resumable.on('fileError', function (file, response) { // trigger when there is any error
    alert('file uploading error.')
});


let progress = $('.progress');
function showProgress() {
    progress.find('.progress-bar').css('width', '0%');
    progress.find('.progress-bar').html('0%');
    progress.find('.progress-bar').removeClass('bg-success');
    progress.show();
}

function updateProgress(value) {
    progress.find('.progress-bar').css('width', `${value}%`)
    progress.find('.progress-bar').html(`${value}%`)
}

function hideProgress() {
    progress.hide();
}