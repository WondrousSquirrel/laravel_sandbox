@if(count($errors) > 0)
  @foreach($errors->all() as $error)
    <div class="alert" role="alert">
      {{ $error }}
    </div>
  @endforeach
@endif
