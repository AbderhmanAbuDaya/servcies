@props(['max','min'])
<div class="form-group">
    <label for="quantity" class="control-label">الكمية</label>
    <input type="number" name="order[quantity]" class="form-control" id="quantity" value="0" >
    <p>اقل كمية {{$min}}اكبر كمية {{$max}}</p>

    <div id="alert-qun" class="alert-danger"></div>

</div>

</div>

