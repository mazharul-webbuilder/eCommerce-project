$(document).ready(function(){
$.notify('{{ $message ?? '' }}','{{ $type ?? 'info' }}');

{{-- $.notify({
// oprions
icon: 'fas fa-{{ $icon ?? 'paw' }}',
title: "<strong>{{ trans('theme.' . $type) }}:</strong> ",
message: '{{ $message ?? '' }}'
},{
// settings
type: '{{ $type ?? 'info' }}',
delay: 150000,
placement: {
from: "top",
align: "right"
},
}); --}}
});
