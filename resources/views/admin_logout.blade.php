<div class="row">
    <div class="col-10"></div>
<div class="col-2 col-sm-2 col-md-2" style="margin-bottom:10px">

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-info">Logout</button>
      </form>
</div>
</div>