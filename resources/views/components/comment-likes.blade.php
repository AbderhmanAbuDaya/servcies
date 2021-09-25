<div class="form-group">
    <label for="quantity" class="control-label">الكمية</label>
    <input type="string" name="order[quantity]" class="form-control" id="quantity" value="0" >
    <p>اقل كمية {{$min}}اكبر كمية {{$max}}</p>
    <div id="alert-qun" class="alert-danger"></div>

</div>
<div class="form-group">
    <label class="control-label" for="field-orderform-fields-username">اسم المستخدم لمالك التعليق</label>
    <input class="form-control" name="order[username]" value="" type="text" id="field-orderform-username">
</div>
