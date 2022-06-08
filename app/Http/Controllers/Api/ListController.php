<?php

namespace App\Http\Controllers\Api;
use App\Http\Requests\StorePostRequest;
use App\Models\Account;
use App\Http\Resources\ListResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ListController extends Controller
{
    //list all accounts
    public function index(){
        return response()->json(Account::all(), 200);
    }


    //get one acc
    public function info($id){
        $account = Account::find($id);
        if(is_null($account)) {
            return response()->json(['message' => 'Account Not Found'], 404);
        }
        return response()->json($account, 200);
    }


    //create new acc
    public function create(Request $request, Account $account){
        if (! Gate::allows('delete', $account)) {
            abort(403);
        }
        $account = Account::create($request->all());
        return response()->json($account);
    }



    //update info
    public function update(Request $request, $id, Account $account)
    {
        if (! Gate::allows('update', $account)) {
            abort(403);
        }
            $account = Account::find($id);
            if(is_null($account)) {
                return response()->json(['message' => 'Account Not Found'], 404);
            }
            $account->update($request->all());
            return response()->json($account);
    }



    //delete acc
    public function delete (Request $request, $id, Account $account)
    {
        if (! Gate::allows('delete', $account)) {
            abort(403);
        }
        $account = Account::find($id);
        if(is_null($account)) {
            return response()->json(['message' => 'Account Not Found'], 404);
        }
        $account->delete();
        return response()->json(['message' => 'Success']);

    }

    //login
    public function login (Request $request)
    {
       if (!Auth::attempt(['email' => $email, 'password' => $password])){
           return response ([
               'message'=> 'Invalid Credentials'
           ],Response::HTTP_UNAUTHORIZED);
       }
       $user = Auth::user();
       return $user;

    }
}

