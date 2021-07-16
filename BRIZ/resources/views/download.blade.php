@extends('base')

@section('nav')
<ul>
    <li></li>
        <li onclick="window.location.href='/';" >Главная</li>
    <li></li>
</ul>  
@endsection

@section('main_content')

<div id="el1" class="section-outor">
    <div class="section-inner">
        <div class="numbers">
<p style="margin-top: 120px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum odio veritatis id est officiis neque quas nobis consectetur itaque molestiae sequi, nam velit assumenda perferendis nemo, ut debitis asperiores eaque maxime delectus corporis! Repudiandae atque delectus dolor eligendi asperiores officia repellendus, inventore tempore, pariatur facilis quos! Natus blanditiis et atque!</p>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#home').hover(function(){
       window.location.href='/index.php';
    })
});
</script>

@endsection