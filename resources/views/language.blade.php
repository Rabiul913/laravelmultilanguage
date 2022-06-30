
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
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
    </style>
</head>
<body>
 
    <div class="text-right m-3">
        <select class="form-select p-3 changeLang" name="language" style="width: 10%;">
            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
            <option value="bn" {{ session()->get('locale') == 'bn' ? 'selected' : '' }}>Bangla</option>
        </select>
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
    <script type="text/javascript">
  
        var url = "{{ route('changeLang') }}";
      
        $(".changeLang").change(function(){
            // alert($(this).val());
            window.location.href = url + "?lang="+ $(this).val();
        });
      
    </script>
</body>
</html