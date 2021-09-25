
<div class="form-group">
    <label class="control-label" for="field-orderform-fields-username">اسم المستخدم</label>
    <input class="form-control" name="order[username]" value="" type="text" id="field-orderform-fields-username">
    <div id="alert-username" class="alert-danger"></div>
</div>

<div class="form-group">
    <label class="control-label" for="field-orderform-fields-username">عدد المنشورات</label>
    <input class="form-control" name="order[posts]" value="" type="number" id="field-orderform-posts">
</div>

<div class="form-group">
    <label class="control-label" for="field-orderform-fields-username">اقل كمية</label>
    <input class="form-control" name="order[min]" value="" type="number" id="field-orderform-min">
</div>

<div class="form-group">
    <label class="control-label" for="field-orderform-fields-username"> اقصى كمية</label>
    <input class="form-control" name="order[max]" value="" type="number" id="field-orderform-max">
    <p>اقل كمية {{$min}}اكبر كمية {{$max}}</p>

</div>
<div id="alert-qun" class="alert-danger"></div>

<div class="row">
    <div class="col-md-6">
        <label class="control-label" for="field-orderform-fields-delay">التأخير</label>
        <select class="form-control" name="order[delay]" id="field-orderform-fields-delay">

            <option value="0">بدون تأخير</option>

            <option value="300">5 دقيقة</option>

            <option value="600">10 دقيقة</option>

            <option value="900">15 دقيقة</option>

            <option value="1800">30 دقيقة</option>

            <option value="3600">60 دقيقة</option>

            <option value="5400">90 دقيقة</option>

            <option value="7200">120 دقيقة</option>

            <option value="9000">150 دقيقة</option>

            <option value="10800">180 دقيقة</option>

            <option value="12600">210 دقيقة</option>

            <option value="14400">240 دقيقة</option>

            <option value="16200">270 دقيقة</option>

            <option value="18000">300 دقيقة</option>

            <option value="21600">360 دقيقة</option>

            <option value="25200">420 دقيقة</option>

            <option value="28800">480 دقيقة</option>

            <option value="32400">540 دقيقة</option>

            <option value="36000">600 دقيقة</option>

        </select>
    </div>
    <div class="col-md-6 mb-2">
        <label for="field-orderform-fields-expiry">الإنتهاء</label>
        <div class="input-group">
            <input class="form-control datetime" autocomplete="off" name="order[expiry]" value="" type="date" id="field-orderform-fields-expiry">
            <span class="input-group-btn">
                    <button class="btn btn-default btn-big-secondary clear-datetime" type="button" data-rel="#field-orderform-fields-expiry"><span class="fa far fa-trash-alt"></span></button>
                </span>
        </div>
    </div>
</div>
