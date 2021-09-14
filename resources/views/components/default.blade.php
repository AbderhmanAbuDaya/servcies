@props(['max','min'])
<div class="form-group">
    <label for="quantity" class="control-label">الكمية</label>
    <input type="string" name="order[quantity]" class="form-control" id="quantity" value="0" >
    <p>اقل كمية {{$min}}اكبر كمية {{$max}}</p>
</div>
<div class="form-group">
    <input class="" name="" value="1" type="checkbox" id="checkbox-interval-order">
    <label class="control-label" for="field-orderform-fields-interval">تجزئة الطلب ع دفعات</label>
</div>
<div id="div-interval-order" class="hidden">
    <div class="form-group " >
        <label class="control-label" for="field-orderform-fields-interval">(اختياري)يعمل</label>
        <input class="form-control" name="order[runs]" value="" type="text" id="field-orderform-fields-interval">
    </div>

    <div class="form-group ">
        <label class="control-label" for="field-orderform-fields-interval">الفاصل الزمني (بالدقائق) اختياري</label>
        <input class="form-control" name="order[interval]" value="" type="text" id="field-orderform-fields-interval">
    </div>

    <div class="form-group ">
        <label class="control-label" for="field-orderform-fields-interval">الكمية الاجمالية</label>
        <input class="form-control" name="order[quantity]" value="" type="text" id="field-orderform-totalQun-interval">
    </div>

</div>

