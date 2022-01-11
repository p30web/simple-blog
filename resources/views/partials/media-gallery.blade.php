@php
    $pdfs = $videos = $others = [];
@endphp

@if (count($media))
    <div id="links">
        @foreach ($media as $key_m => $file)
            @php
                    $type = $file->getTypeFromExtension();
            @endphp
            @if ($type == 'image')
                <a href="{{ $file->getUrl() }}" title="{{ $type }}" data-gallery>
                    <img style="width: 100px; height: 100px;" src="{{ in_array('thumb', $file->getMediaConversionNames()) ? $file->getUrl('thumb') : $file->getUrl() }}" alt="document">
                    @if ($with_remove_btn ?? null)
                        <a href="#" class="remove-media" data-media="{{ $file->id }}"><span
                                class="fa fa-remove text-danger"></span></a>
                    @endif
                </a>
            @elseif ($type == 'video')
                @php $videos [] = $file; @endphp
            @else
                @php $others [] = $file; @endphp
            @endif
        @endforeach
    </div>
    @foreach ($videos as $key_v => $video)
        <video width="320" height="240" controls>
            <source src="{{ $video->getUrl() }}" type="video/mp4">
            <source src="{{ $video->getUrl() }}" type="video/ogg">
            Your browser does not support the video tag.
        </video>
        {{ $video->file_name . "  " . $video->getHumanReadableSizeAttribute() }}
    @endforeach
    @foreach ($others as $key_o => $other_file)
        @if ($key_o >0) <br> @endif
        <bdi></bdi>{{ $other_file->getHumanReadableSizeAttribute() }}
        <bdi></bdi>
        <a target="_blank" href="{{ $other_file->getUrl() }}">{{ $other_file->file_name }}</a>
    @endforeach
@endif
