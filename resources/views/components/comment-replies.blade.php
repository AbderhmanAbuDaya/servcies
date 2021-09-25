<div class="form-group">
    <label for="quantity" class="control-label">الكمية</label>
    <input type="number" name="order[quantity]" class="form-control" id="quantity" value="0" readonly >
    <p>اقل كمية {{$min}}اكبر كمية {{$max}}</p>
    <div id="alert-qun" class="alert-danger"></div>
</div>
<div class="form-group">
    <label for="comments" class="control-label">تعليقات (كل تعليق في سطر)</label>
    <textarea type="string" name="order[comments]" class="form-control" id="comments" >
    </textarea>
    <div id="alert-comments" class="alert-danger"></div>

</div>

<div class="form-group">
    <label class="control-label" for="field-orderform-fields-username">اسم المستخدم</label>
    <input class="form-control" name="order[username]" value="" type="text" id="field-orderform-username">
</div>
