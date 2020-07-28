<?php

namespace App\Http\Controllers;

use App\NewWordModel;
use App\SenteceModel;
use Illuminate\Http\Request;

class SentenceController extends Controller
{
    public function index(Request $request){
        //$newword = NewWordModel::where('id','=',$request->id)->get();
        $newword = NewWordModel::find($request->id);
        $sentences = SenteceModel::where('newword_id',$request->id)->get();
        return view('toeic.sentence.index',['sentences'=>$sentences,'newword'=>$newword]);
    }

    public function create($id){
        $newword = NewWordModel::where('id',$id)->first();
        return view('toeic.sentence.create',['newword'=>$newword]);
    }
    public function store(Request $request){
        $sentenceModel = new SenteceModel();
        $sentenceModel->sentence_example = $request->sentence_example;
        $sentenceModel->sentence_translate = $request->sentence_translate;
        $sentenceModel->newword_id = $request->id;
        $sentenceModel->save();
        return redirect('sentence/'.$request->id);
    }
    public function edit($id){
        $sentence = SenteceModel::find($id);
        return view('toeic.sentence.edit',['sentence'=>$sentence]);
    }
    public function update(Request $request, $id){
        $sentenceModel = SenteceModel::find($id);
        $sentenceModel->sentence_example = $request->sentence_example;
        $sentenceModel->sentence_translate = $request->sentence_translate;
        $sentenceModel->save();
        return redirect('sentence/'.$sentenceModel->newword_id);
    }
    public function delete($id){
        $sentence = SenteceModel::where('id',$id)->first();
        return view('toeic.sentence.delete',['sentence'=>$sentence]);
    }
    public function destroy($id){
        $sentenceModel = SenteceModel::find($id);
        $sentenceModel->delete();
        return redirect('sentence/'.$sentenceModel->newword_id);
    }
}
