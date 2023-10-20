<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecomm-Site</title>
    <link href="{{asset('css/login.css')}}" rel="stylesheet">
</head>
<body>
    


<div class="wrapper">
        <div class="card-switch">
            <label class="switch">
               <input type="checkbox" class="toggle">
               <span class="slider"></span>
               <span class="card-side"></span>
               <div class="flip-card__inner">
                  <div class="flip-card__front">
                     <div class="title">Log in</div>
                     <form class="flip-card__form" action="/authenticate" method="post">
                     @csrf 
                     @method('post')
                     @if($errors->any())
                           <ul>
                              {!!implode('',$errors->all('<li>:message</li>'))!!}
                           </ul>
                        @endif
                        <input class="flip-card__input" name="email" placeholder="Email" type="email">
                        <input class="flip-card__input" name="password" placeholder="Password" type="password">
                        <button class="flip-card__btn">Let`s go!</button>
                     </form>
                  </div>
                  <div class="flip-card__back">
                     <div class="title">Sign up</div>
                     <form class="flip-card__form" action="{{route('signin')}}" method="post">
                        @csrf
                        @method('post')
                        @if($errors->any())
                           <ul>
                              {!!implode('',$errors->all('<li>:message</li>'))!!}
                           </ul>
                        @endif
                        <input class="flip-card__input" placeholder="Name" type="name" name="name">
                        <input class="flip-card__input" placeholder="Phone Number" type="text" name="phn_num">
                        <input class="flip-card__input" name="email" placeholder="Email" type="email">
                        <input class="flip-card__input" name="password" placeholder="Password" type="password">
                        <input class="flip-card__input" name="password_confirmation" placeholder="Confirm Password" type="password">
                        <button class="flip-card__btn">Confirm!</button>
                     </form>
                  </div>
               </div>
            </label>
        </div>   
   </div>



</body>
</html>