<ul class="flex space-x-2 rtl:space-x-reverse">
    @foreach ($items as $breadcrumb)
        @if (!$loop->last)
            <li>
                <a href="javascript:;" class="text-primary hover:underline">{{ $breadcrumb }}</a>
            </li>
        @else
            <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                <span>{{ $breadcrumb }}</span>
            </li>
        @endif
    @endforeach
</ul>
