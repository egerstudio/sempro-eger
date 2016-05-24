<ul class="nav navbar-nav">
    
    <!-- all videos -->
    <li><a href="{{ action('VideosController@index') }}">Show all videos</a></li>
    
    <!-- archive -->
    @if(isset($years))
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Video archive <span class="caret"></span></a>
        <ul class="dropdown-menu">
            @foreach ($years->distinctYears() as $year)
                <li>
                    <a href="{{ action('VideosController@archive',['year' => $year->year]) }}">
                        {{$year->year}}
                    </a>
                </li>
            @endforeach
        </ul>
    </li>
    @endif

    <!-- categories -->
    @if(isset($categories))
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
        <ul class="dropdown-menu">
            @foreach ($categories as $category)
				<li>
					<a href="{{ action('VideosController@category',['category' => $category->slug]) }}">
						{{$category->title}}
					</a>
				</li>
			@endforeach
        </ul>
    </li>
    @endif
</ul>


{{-- toolbar visible for admins --}}
		
<!-- archive and categories -->
<ul class="nav navbar-nav navbar-right">
    @if (Auth::user())
    <!-- videos -->
    <li>
        <a href="{{ action('BackendVideosController@create') }}">Add a video</a>
    </li>
    <!-- categories -->
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="{{ action('BackendCategoriesController@index') }}">Show categories</a></li>
            <li><a href="{{ action('BackendCategoriesController@create') }}">Add category</a></li>
        </ul>
    </li>

    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <i class="fa fa-btn fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/backend/profile') }}"><i class="fa fa-btn fa-cog"></i> Profile</a></li>
            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
        </ul>
    </li>
    @endif

    <!-- Authentication Links -->
    @if (Auth::guest())
        <li><a class="" href="{{ url('/login') }}"><i class="fa fa-btn fa-sign-in"></i> Login</a></li>
    @endif
</ul>
		