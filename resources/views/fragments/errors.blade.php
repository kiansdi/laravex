
@if ($errors->any())
    <div class=""style="margin-top:78px;">

    </div>
  @foreach ($errors->all() as  $error)

    <div dir="rtl" class="alert alert-danger alert-dismissible fade show animated flash" role="alert" style="text-align:center;margin-top:5px">
      {{ $error }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

  @endforeach
@endif
