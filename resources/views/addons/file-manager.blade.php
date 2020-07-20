@push('scripts')
    
        
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<script>
var route_prefix = "/filemanager";
</script>


<script>
{!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/stand-alone-button.js')) !!}
</script>

<script>
$('#lfm').filemanager('image', {prefix: route_prefix});
// $('#lfm').filemanager('file', {prefix: route_prefix});
</script>

<script>
var lfm = function(id, type, options) {
let button = document.getElementById(id);

button.addEventListener('click', function () {
var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
var target_input = document.getElementById(button.getAttribute('data-input'));
var target_preview = document.getElementById(button.getAttribute('data-preview'));

window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=1200,height=800');
window.SetUrl = function (items) {
var file_path = items.map(function (item) {
  return item.url;
}).join(',');

// set the value of the desired input to image url
target_input.value = file_path;
target_input.dispatchEvent(new Event('change'));

// clear previous preview
target_preview.innerHtml = '';

// set or change the preview image src

// heightni auto qilganman agar surat kottayib ketsa razmer beriladi.
items.forEach(function (item) {
  let img = document.createElement('img')
  img.setAttribute('style', 'height: auto')
  img.setAttribute('src', item.thumb_url)
  target_preview.appendChild(img);
});

// trigger change event
target_preview.dispatchEvent(new Event('change'));
};
});
};

lfm('lfm2', 'file', {prefix: route_prefix});
</script>

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
<style>
.popover {
top: auto;
left: auto;
}
</style>
<script>
$(document).ready(function(){

// Define function to open filemanager window
var lfm = function(options, cb) {
var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';
window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
window.SetUrl = cb;
};

// Define LFM summernote button
var LFMButton = function(context) {
var ui = $.summernote.ui;
var button = ui.button({
contents: '<i class="note-icon-picture"></i> ',
tooltip: 'Insert image with filemanager',
click: function() {

  lfm({type: 'image', prefix: '/filemanager'}, function(lfmItems, path) {
    lfmItems.forEach(function (lfmItem) {
      context.invoke('insertImage', lfmItem.url);
    });
  });

}
});
return button.render();
};

// Initialize summernote with LFM button in the popover button group
// Please note that you can add this button to any other button group you'd like
$('#summernote-editor').summernote({
toolbar: [
['popovers', ['lfm']],
],
buttons: {
lfm: LFMButton
}
})
});
</script>
@endpush