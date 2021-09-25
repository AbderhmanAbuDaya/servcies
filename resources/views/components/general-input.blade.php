@props(['categories','old'])
<div class="form-group">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <label for="orderform-category" class="control-label">القسم</label>
    <select class="form-control" id="orderForm-category" name="order[category]">
        <option value=""></option>
        @if(!empty($categories))
        @foreach($categories as $category)
            <option value="{{$category}}"   @if($old) @if($category==$old) selected @endif @endif >{{$category}}</option>
        @endforeach
        @endif
    </select>
    <div id="alert-category" class="alert-danger"></div>
</div>

<div class="form-group">
    <label for="service" class="control-label">الخدمة</label>
    <select id="orderForm-service" class="form-control @error('order') is-invalid @enderror" id="service" name="order[service]">

    </select>
    @error('order')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
    <div id="alert-serivce" class="alert-danger"></div>

</div>

<div id="group-link" >
    <label for="formGroupExampleInput" class="form-label mb-2">الرابط</label>
    <input type="text" class="form-control" name="order[link]" id="orderform-link" placeholder="https://www.com">
    <div id="alert-link" class="alert-danger"></div>

</div>
