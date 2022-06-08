<?php

namespace App\Http\Controllers\Api;
use App\Http\Requests\StorePostRequest;
use App\Models\Account;
use App\Http\Resources\ListResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListController extends Controller
{
    //list all accounts
    public function index(){
        return response()->json(Account::all(), 200);
    }


    //get one acc
    public function info($id){
        $accounts = Account::find($id);
        if(is_null($accounts)) {
            return response()->json(['message' => 'Account Not Found'], 404);
        }
        return response()->json($accounts::find($id), 200);
    }


    //create new acc
    public function create(Request $request){
        $accounts = Account::create($request->all());
        return $request->all();
    }



    //update info
    public function update(Request $request, $id)
    {
            $accounts = Account::find($id);
            if(is_null($accounts)) {
                return response()->json(['message' => 'Account Not Found'], 404);
            }
            $accounts->update($request->all());
            return response($accounts, 200);
    }



    //delete acc
    public function delete (Request $request, $id)
    {
        $accounts = Account::find($id);
        if(is_null($accounts)) {
            return response()->json(['message' => 'Account Not Found'], 404);
        }
        $accounts->delete();
        return response()->json(null, 204);

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

