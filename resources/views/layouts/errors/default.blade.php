@if( $errors->any() )
<h4 style="text-align: left;">Обнаружены ошибки</h4>
<ul class="alerts-list row-mg">
    @foreach($errors->all() as $error)
    <li class="alert alert-error">{{ $error }}</li>
    @endforeach
</ul>
@endif