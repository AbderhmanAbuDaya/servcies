@props(['categories'])
<div class="form-group">
    <label for="orderform-category" class="control-label">القسم</label>
    <select class="form-control" id="orderForm-category" name="OrderForm[category]">
        <option value=""></option>
        @if(!empty($categories))
        @foreach($categories as $category)
            <option value="{{$category}}"  onclick="changeForm('erwrer')" >{{$category}}</option>
        @endforeach
        @endif
    </select>
</div>

<div class="form-group">
    <label for="service" class="control-label">الخدمة</label>
    <select id="orderForm-service" class="form-control" id="service" name="order[service]">

    </select>
</div>

<div id="fields">
    <label for="formGroupExampleInput" class="form-label mb-2">الرابط</label>
    <input type="text" class="form-control" name="order[link]" id="formGroupExampleInput" placeholder="https://www.com">
</div>
