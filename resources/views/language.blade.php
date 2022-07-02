
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <style type="text/css">
        html,
        body {
          height: 100%;
          background-color: #f5f5f5;
        }
        .main-container {
          display: flex;
          align-items: center;
          padding-top: 40px;
          padding-bottom: 40px;
        }
        .form-signin {
          width: 100%;
          max-width: 330px;
          padding: 15px;
          margin: auto;
        }


.switch {
  position: relative;
  display: inline-block;
  margin: 0 5px;
}

.switch > span {
  position: absolute;
  top: 10px;
  pointer-events: none;
  font-family: 'Helvetica', Arial, sans-serif;
  font-weight: bold;
  font-size: 12px;
  text-transform: uppercase;
  text-shadow: 0 1px 0 rgba(0, 0, 0, .06);
  width: 50%;
  text-align: center;
}

input.check-toggle-round-flat:checked ~ .en {
  color: #2a9138;
}

input.check-toggle-round-flat:checked ~ .bn {
  color: #fff;
}

.switch > span.bn {
  left: 0;
  padding-left: 2px;
  color: #2a9138;
}

.switch > span.en {
  right: 0;
  padding-right: 4px;
  color: #fff;
}

.check-toggle {
  position: absolute;
  margin-left: -9999px;
  visibility: hidden;
}
.check-toggle + label {
  display: block;
  position: relative;
  cursor: pointer;
  outline: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

input.check-toggle-round-flat + label {
  padding: 2px;
  width: 97px;
  height: 35px;
  background-color: #2a9138;
  -webkit-border-radius: 60px;
  -moz-border-radius: 60px;
  -ms-border-radius: 60px;
  -o-border-radius: 60px;
  border-radius: 60px;
}
input.check-toggle-round-flat + label:before, input.check-toggle-round-flat + label:after {
  display: block;
  position: absolute;
  content: "";
}

input.check-toggle-round-flat + label:before {
  top: 2px;
  left: 2px;
  bottom: 2px;
  right: 2px;
  background-color: #2a9138;
  -webkit--moz-border-radius: 60px;
  -ms-border-radius: 60px;
  -o-border-radius: 60px;
  border-radius: 60px;
}
input.check-toggle-round-flat + label:after {
  top: 4px;
  left: 4px;
  bottom: 4px;
  width: 48px;
  background-color: #fff;
  -webkit-border-radius: 52px;
  -moz-border-radius: 52px;
  -ms-border-radius: 52px;
  -o-border-radius: 52px;
  border-radius: 52px;
  -webkit-transition: margin 0.2s;
  -moz-transition: margin 0.2s;
  -o-transition: margin 0.2s;
  transition: margin 0.2s;
}

input.check-toggle-round-flat:checked + label {
}

input.check-toggle-round-flat:checked + label:after {
  margin-left: 44px;
} 
    </style>
</head>
<body>
 
    {{-- <div class="text-right m-3">
        <select class="form-select p-3 changeLang" name="language" style="width: 10%;">
            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
            <option value="bn" {{ session()->get('locale') == 'bn' ? 'selected' : '' }}>Bangla</option>
        </select>
    </div> --}}

    <div class="text-right m-3 switch">
	    <input id="language-toggle" @if(session()->get('locale') == 'bn')  onclick="window.location='{{ route('changeLanguage','en') }}'" value="bn"@else checked onclick="window.location='{{ route('changeLanguage','bn') }}'" @endif class="check-toggle check-toggle-round-flat" type="checkbox">
	    <label for="language-toggle"></label>
	    <span class="bn">BN</span>
	    <span class="en">EN</span>
  	</div>


    <div class="main-container">
        <main class="form-signin">
            <form class="text-center">
                <h1 class="h3 mb-3 fw-normal">{{ __('messages.Sign in') }}</h1>
                <div class="form-floating">
                    <input type="email" class="form-control m-1" id="email" placeholder="name@example.com">
                    <label for="email">{{ __('messages.Email address') }}</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control m-1" id="password" placeholder="******">
                    <label for="password">{{ __('messages.Password') }}</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary m-1" type="submit">{{ __('messages.Sign in') }}</button>
            </form>
        </main>
    </div>
    {{-- <script type="text/javascript">
  
        var url = "{{ route('changeLang') }}";
        
      
        $("#changeLang").change(function(){
            
            alert($('.btn-toggle').val());
            window.location.href = url + "?lang="+ $(this).val();
        });
      
    </script> --}}
</body>
</html