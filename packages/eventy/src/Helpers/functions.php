<?php
if (!function_exists('get_eventy_featured_img_src')) {
    function get_eventy_featured_img_src($event, $size = 'medium')
    {
        if (is_int($event) && !($event instanceof \Incevio\Package\Eventy\Models\Event)) {
            $event = \Incevio\Package\Eventy\Models\Event::findorFail($event);
        }


        if ($event->image) {
            return get_storage_file_url($event->image->path, $size);
        }

        return asset('images/placeholders/no_img.png');
    }
}
