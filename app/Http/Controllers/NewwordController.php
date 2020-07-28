<?php

namespace App\Http\Controllers;

use App\NewWordModel;
use App\SenteceModel;
use Illuminate\Http\Request;

class NewwordController extends Controller
{
    public function index(){
        $newwords = NewWordModel::all();
        return view('toeic.newword.index',['newwords'=>$newwords]);
    }
    public function search(Request $request){
        $search = $request->get('search');
        if (strlen($search) > 0){
            $sen = SenteceModel::all();
            $new = NewWordModel::where('newword','like','%'.$search.'%')->paginate(3);
            return view('toeic.search',['new'=>$new,'sen'=>$sen]);
        }
        else{
            $sen = SenteceModel::all();
            $new = NewWordModel::orderBy('newword','asc')->paginate(3);
            return view('toeic.search',['new'=>$new,'sen'=>$sen]);
        }
    }
    public function showsearch($id){
        $nd = NewWordModel::find($id);
        return view('toeic.search',['nd'=>$nd]);
    }
    public function create(){
        return view('toeic.newword.create');
    }
    public function store(Request $request){
        $newword = new NewWordModel();
        $newword->newword = $request->newword;
        $newword->mean = $request->mean;
        $newword->type = $request->type;
        $newword->save();
        return redirect('toeicapp');
    }
    public function edit($id){
        $newword = NewWordModel::find($id);
        return view('toeic.newword.edit',['newword'=>$newword]);
    }
    public function update(Request $request, $id){
        $newwordModel = NewWordModel::find($id);
        $newwordModel->newword = $request->newword;
        $newwordModel->mean = $request->mean;
        $newwordModel->type = $request->type;
        $newwordModel->save();
        return redirect('toeicapp');
    }
    public function delete($id){
        $newword = NewWordModel::find($id);
        return view('toeic.newword.delete',['newword'=>$newword]);
    }
    public function destroy($id){
        $newwordModel = NewWordModel::find($id);
        $newwordModel->delete();
        return redirect('toeicapp');
    }
}
