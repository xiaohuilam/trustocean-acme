<?php
namespace App\Http\Controllers;

use App\Http\Responses\AccountNewResponse;
use App\Http\Requests\AccountNewRequest;

class AccountController extends Controller
{
    public function new(AccountNewRequest $request)
    {
        // @TODO: 存储到 account 模型
        return new AccountNewResponse(['id' => 1, 'emails' => 'xiaohui.lam@e.hexdata.cn']);
    }
}
