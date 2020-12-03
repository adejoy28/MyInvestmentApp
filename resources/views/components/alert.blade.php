<div>
<!-- Make Sure this file only has aone html tag to avoid possible errors -->
@if(session()->has('message'))
    <div class="alert alert-success">{{ session()->get('message') }}</div>
@elseif(session()->has('error'))
    <div class="alert alert-danger">{{ session()->get('error') }}</div>
@endif


@if($errors->any())
    <div class="alert alert-danger">
        <!-- <ul> -->
            @foreach($errors->all() as $error)
                {{ $error }}<br>
            @endforeach        
        <!-- </ul> -->
    </div>
@endif
</div>