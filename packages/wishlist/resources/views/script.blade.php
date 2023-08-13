<script type="text/javascript">
$(".add-to-wishlist").off().on("click", function(e) {
e.preventDefault();

$.ajax({
url: $(this).data('link'),
type: 'get',
complete: function(xhr, textStatus) {
if (200 == xhr.status) {
@include('theme::layouts.notification', ['message' => trans('theme.item_added_to_wishlist'), 'type' => 'success', 'icon' => 'check-circle'])
} else if (401 == xhr.status) {
location.href = '{{ route('customer.login') }}';
} else if (404 == xhr.status) {
@include('theme::layouts.notification', ['message' => trans('theme.item_not_available'), 'type' => 'warning', 'icon' => 'info-circle'])
} else {
@include('theme::layouts.notification', ['message' => trans('theme.notify.failed'), 'type' => 'warning', 'icon' => 'times-circle'])
}
},
});
});
</script>