<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.head')
    <title>Вход в админ панель</title>
</head>
<body>
    @include('includes.messages')
    <div class="container">
        <div class="row">
            <form class="col s12" action="{{ route('admin.login') }}" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }}
                      
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" name="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
            
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" name="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
            
                <button class="btn waves-effect waves-light" type="submit" name="action">Войти
                        <i class="material-icons right">send</i>
                </button>
            
            </form>
        </div>
    </div>
</body>
</html>