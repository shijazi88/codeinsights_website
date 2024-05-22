<div class="flex justify-center pt-8 sm:justify-start sm:pt-0 mr-2">
    <div class="sl-nav"> 
        <ul>
            <li class="lang_menu">
                <b>{{$current_locale}}</b>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
                <div class="triangle"></div>
                <ul>
                    @foreach($available_locales as $locale_name => $available_locale)
                        @if($available_locale !== $current_locale)
                            <li class=" text-center ">                                
                                <span class="active">
                                    <a class="ml-1 underline ml-2 mr-2" href="language/{{ $available_locale }}">
                                        <span>{{ $locale_name }}</span>
                                    </a>
                                </span>
                            </li>   
                        @endif
                    @endforeach                 
                </ul>
            </li>
        </ul>
    </div>
</div>