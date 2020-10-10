@php
$fieldOptions = $field->value;
$timesheet = [];
$daysOfWeek = [];
foreach ($formModel->getWeekDaysOptions() as $key => $day){
$daysOfWeek[] = ['name' => $day];
$timesheet[] = $fieldOptions[$key] ?? ['day' => $key, 'open' => '00:00', 'close' => '23:59', 'status' => 1];
}
@endphp
<div
    class="field-timesheet"
    data-control="timesheet"
    data-days='@json($daysOfWeek)'
    data-values='@json($timesheet)'
>
    <div class="table-responsive">
        <table class="table table-borderless">
            <thead></thead>
            <tbody
                class="timesheet-editor"
            ></tbody>
        </table>
    </div>
</div>
