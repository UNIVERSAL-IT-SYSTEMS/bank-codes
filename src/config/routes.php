<?php
/*
  |--------------------------------------------------------------------------
  | Banks Codes Routes
  |--------------------------------------------------------------------------
  |
  | This route return a JSON response of country codes package.
  |
 */

Route::get('countries/{country_id}/banks/{id?}', function ($country_id, $id = null)
{
    $request = request();
    return BankStore::Response($request, $country_id, $id);
});
