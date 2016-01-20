<?php

namespace Jnaxo\BankCodes;

use Illuminate\Http\Request;
use Jnaxo\CountryCodes\Store\ApiManager;
use Jnaxo\BankCodes\Store\BankAdapter;


class BankStore extends ApiManager
{

    public function Response (Request $request, $id, $country_id)
    {
        $uri = $request->path();
        $method = $request->method();

        if ($request->is('*/banks'))
        {
            $banks = BankAdapter::getByCountryId($country_id);
            return $this->apiOutput(function () use($banks)
                {
                  foreach ($banks as $i => $bank) {
                    $banks_data[$i] = [
                        'id' => $bank->id,
                        'name' => $bank->name,
                        'code' => $bank->code,
                        'city' => $bank->city
                    ]
                  }
                  return $banks_data;
                });
        }elseif ($request->is('*/banks/*'))
        {
            $bank = BankAdapter::getById($id)
            return $this->apiOutput(function () use ($bank)
               {
                    $bank_data = [
                       'id' => intval($bank->id),
                       'name' => $bank->name,
                       'code' => $bank->code,
                       'city' => $bank->city
                   ];

                   return $bank_data;
               });
        }else
        {
            dd('error');
        }
    }
}
