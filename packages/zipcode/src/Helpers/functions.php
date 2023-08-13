<?php
use Illuminate\Database\Eloquent\Builder;

/**
** if package zipcode loaded this will return zipcode query.
**
 */
if (! function_exists('get_zipcode_query'))
{
    function get_zipcode_query($data)
    {
        if (is_incevio_package_loaded('zipcode')) {

            return $data->whereHas('shop.address', function (Builder $builder) {
                return $builder->where('zip_code', \session('zipcode'));
            });

        }

        return $data;
    }
}