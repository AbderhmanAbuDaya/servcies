
<div class="form-group">
    <label for="quantity" class="control-label">الكمية</label>
    <input type="number" name="order[quantity]" class="form-control" id="quantity" value="0"  readonly >
    <p>اقل كمية {{$min}}اكبر كمية {{$max}}</p>

    <div id="alert-qun" class="alert-danger"></div>

</div>
<div class="form-group">
    <label class="control-label" for="field-orderform-fields-username">اسماء المستخدم(كل اسم ف سطر)</label>
    <textarea class="form-control" name="order[usernames]"  id="comments"></textarea>
    <div id="alert-username" class="alert-danger"></div>

</div>
