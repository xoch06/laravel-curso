 @if(count($errors))
  <div class="row">
        <div class="col s12">
          <div class="card  red darken-4">
            <div class="card-content white-text">
             
            @foreach($errors->all() as $error)
              {{ $error }} <br>
              @endforeach
            </div>
            </div>
        </div>
      </div>
@endif