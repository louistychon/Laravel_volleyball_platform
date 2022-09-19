@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <strong class="text-green-500">{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block">
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($errors->any())
    <div class="alert alert-warning alert-block">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
