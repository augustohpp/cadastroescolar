{{-- 
    <ul>
        @forelse ($audits as $audit)
        <li>
            @lang('article.'.$audit->event.'.metadata', $audit->getMetadata())

            @foreach ($audit->getModified() as $attribute => $modified)
            <ul>
                <li>@lang('article.'.$audit->event.'.modified.'.$attribute, $modified)</li>
            </ul>
            @endforeach
        </li>
        @empty
        <p>@lang('article.unavailable_audits')</p>
        @endforelse
    </ul> --}}


{{-- {{$a->created_at->format('d-m-Y')}} --}}

{{var_dump($audits->getMetadata(true))}}
<hr>
{{var_dump($audits->getModified(true))}}


