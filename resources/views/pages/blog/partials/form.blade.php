@csrf
<div class="mt-2">
    @include('partials.errors')
</div>
<div class="form-group col-xs-12">
    <label for="title">عنوان:</label>
    <input type="text" id="title" name="title" value="{{ old('title') ?: $post->title }}" class="form-control"/>
</div>

<div class="form-group col-xs-12">
    <label for="description">توضیحات </label>
    <textarea name="content" id="content" class="form-control" rows="3">{{ old('content') ?: $post->content }}</textarea>
</div>

<div class="form-group col-xs-12">
    <br>
    <p>حداکثر حجم مجاز برای آپلود هر فایل : ۱۰ مگابایت می باشد و امکان اپلود همزمان تا ۶ فایل وجود دارد</p>
    <p>پسوند های مجاز : jpeg,png,mp3,ogg</p>
    <div class="form-group">
        <input type="file" name="media[]" id="order-media-attachment-input" multiple>
    </div>
</div>
