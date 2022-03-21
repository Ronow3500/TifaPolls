@csrf
        <div class="row">
        <div class="col">
          <div class="form-group">
            <label id="first_name">First Name</label>
            <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" id="first_name" placeholder="Enter First Name" value="{{ old('first_name') }} @isset($user) {{ $user->first_name }} @endisset">
            @error('first_name')
              <span id="first_name-error" class="error invalid-feedback">
                {{ $message }}
              </span>
            @enderror
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label id="last_name">Last Name</label>
            <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="last_name" placeholder="Enter Last Name" value="{{ old('last_name') }} @isset($user) {{ $user->last_name }} @endisset">
            @error('last_name')
              <span id="last_name-error" class="error invalid-feedback">
                {{ $message }}
              </span>
            @enderror
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label id="email">Email</label>
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter Email" value="{{ old('email') }} @isset($user) {{ $user->email }} @endisset">
              @error('email')
              <span id="email-error" class="error invalid-feedback">
                {{ $message }}
              </span>
            @enderror
              <input type="hidden"  name="password" value="password">
            </div>
          </div>
          <div class="col">
            <div class="row">
              <div class="col">
                @foreach($roles as $role)
                  <div class="form-check">
                    <input type="checkbox" name="roles[]" value="{{ $role->id }}" class="form-check-input" id="{{ $role->name }}" @isset($user) @if(in_array($role->id, $user->roles->pluck('id')->toArray())) checked @endif @endisset ariadescribedby="error">
                    <label class="form-check-label" for="{{ $role->name }}">
                      {{ $role->name }}
                    </label>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>

        <button type="submit">Submit</button>